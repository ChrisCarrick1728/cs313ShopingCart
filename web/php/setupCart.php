<?php
session_start();
$filename = "./items/cart.json";
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = file_get_contents($filename);
  $_SESSION['numItems'] = '0';
}
?>
