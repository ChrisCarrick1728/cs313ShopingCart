<?php
session_start();
include 'php/getItems.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/browse.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="js/cart.js" charset="utf-8"></script>
    <title>Buy Bread</title>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <div class="itemsContainer">
      <?php
        foreach ($items as $k) {
          include "components/browse.php";
        }
      ?>
    </div>
  </body>
</html>
