<?php
session_start();

$cart = (array)json_decode($_SESSION['cart'], true);
$cartItems = $cart[0][cartItems];

$deleteKey = null;
$gone = false;

foreach ($cartItems as $key=>$value) {
  if ("remove_" . $value[id] == $_POST['item']) {
    $deleteKey = $key;
  }
}

$item = (string)substr($_POST['item'], 7);

if (($key = array_search($item, $cartItems[$deleteKey])) !== false) {
  $numItems = $cart[0][cartItems][$deleteKey][quantity];
  $cart[0][cartTotal] -= $cart[0][cartItems][$deleteKey][price];
  if ($numItems > 1) {
    $cart[0][cartItems][$deleteKey][quantity] -= 1;
  } else {
    unset($cart[0][cartItems][$deleteKey]);
    $gone = true;
  }

  $cart[0][numItems] -= 1;
  $_SESSION['numItems'] = $cart[0][numItems];

}

$_SESSION['cart'] = json_encode($cart);

if (!$gone) {
  echo json_encode($cart[0][cartItems][$deleteKey]);
} else {
  echo "removed";
}

?>
