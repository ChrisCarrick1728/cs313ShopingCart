<?php
$filename = "items/items.txt";
$contents = file_get_contents($filename);
$items = (array)json_decode($contents, true);


?>
