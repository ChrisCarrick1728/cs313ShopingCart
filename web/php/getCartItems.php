<?php
if (isset($_SESSION['cart'])) {
  $cart = (array)json_decode($_SESSION['cart'], true);
}
?>
