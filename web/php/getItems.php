<?php
$filename = "./items/items.json";
$contents = file_get_contents($filename);
$items = (array)json_decode($contents, true);
$cart = (array)json_decode($_SESSION['cart'], true);
?>
