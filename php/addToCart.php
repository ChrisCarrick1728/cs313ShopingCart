<?php
session_start();
$itemsFilename = "../items/items.txt";
if (!isset($_SESSION['items'])) {
  $_SESSION['items'] = file_get_contents($itemsFilename);
}

$filename = "../items/cart.txt";
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();

  //$_SESSION['cart'] = file_get_contents($filename);
}

$items = (array)json_decode($_SESSION['items'], TRUE);
$cart = (array)json_decode($_SESSION['cart'], TRUE);
//echo $_SESSION['cart'];
$cartItems = $cart[0][cartItems];
//echo $cartItems[4][id];
$itemInCart = false;

foreach ($cartItems as $item) {
  if ($item[id] == $_POST['item']){
    $itemInCart = true;
    //echo "Item in cart! ";
  }
}

if ($itemInCart) {
  foreach ($cartItems as $key => $item) {
    if ($_POST['item'] == $item[id]){

      // Add one to quantity
      $cart[0][cartItems][$key][quantity] += 1;

      // Add Total num itemsContainer
      $cart[0][numItems] += 1;

      // Add total price
      $cart[0][cartTotal] += $item[price];
    }
  }
} else {
  foreach ($items as $key => $value) {
    if ($value[id] == $_POST['item']) {
      $newObj = array("id"=> $value[id],
                 "name" => $value[name] ,
                 "quantity" => "1",
                 "price" => $value[price]);

      // Add new item to cart
      array_push($cart[0][cartItems], $newObj);

      // Add Total num itemsContainer
      $cart[0][numItems] += 1;

      // Add total price
      $cart[0][cartTotal] += $value[price];
    }
  }
}
$_SESSION['numItems'] = $cart[0][numItems];



$_SESSION['cart'] = json_encode($cart);

echo $_SESSION['cart'];

?>
