<?php
session_start();

$cart = (array)json_decode($_SESSION['cart'], true);

echo money_format('%.2n', $cart[0][cartTotal]);
?>
