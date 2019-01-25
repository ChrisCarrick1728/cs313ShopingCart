<?php
$filename = "./items/items.json";
$contents = file_get_contents($filename);
$items = (array)json_decode($contents, true);
?>
