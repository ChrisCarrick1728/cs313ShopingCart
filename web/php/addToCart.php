<?php
session_start();
$itemsFilename = "../items/items.json";
if (!isset($_SESSION['items'])) {
  $_SESSION['items'] = file_get_contents($itemsFilename);
}

$filename = "../items/cart.json";
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = file_get_contents($filename);
}

$pItem = substr($_POST['item'], 4);
$items = (array)json_decode($_SESSION['items'], TRUE);
$cart = (array)json_decode($_SESSION['cart'], TRUE);
$cartItems = $cart[0][cartItems];
$itemInCart = false;
$returnItem;

foreach ($cartItems as $item) {
  if ($item[id] == $pItem){
    $itemInCart = true;
  }
}

if ($itemInCart) {
  foreach ($cartItems as $key => $item) {
    if ($pItem == $item[id]){

      // Add one to quantity
      $cart[0][cartItems][$key][quantity] += 1;

      // Add Total num itemsContainer
      $cart[0][numItems] += 1;

      // Add total price
      $cart[0][cartTotal] += $item[price];

      $returnItem = $cart[0][cartItems][$key];
    }
  }
} else {
  foreach ($items as $key => $value) {
    if ($value[id] == $pItem) {
      $newObj = array("id"=> $value[id],
                 "name" => $value[name] ,
                 "quantity" => "1",
                 "imgURL" => $value[imgURL],
                 "price" => $value[price]);

      // Add new item to cart
      array_push($cart[0][cartItems], $newObj);

      // Add Total num itemsContainer
      $cart[0][numItems] += 1;

      // Add total price
      $cart[0][cartTotal] += $value[price];
      $returnItem = $newObj;
    }
  }
}
$_SESSION['numItems'] = $cart[0][numItems];



$_SESSION['cart'] = json_encode($cart);
echo json_encode($returnItem);

?>
