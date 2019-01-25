<?php
session_start();
?>
<link rel="stylesheet" href="/css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/nav.js" charset="utf-8"></script>
<header>
  <div class="hamburgerButtonContainer">
    <div id="hamburgerButtonId" class="hamburgerButton">

    </div>
  </div>
  <div class="headerContainerLeft nav">
    <a href="index.php">Home</a>
    <a href="browse.php">Shop</a>
  </div>
  <div class="headerContainerCenter">
    <img src="../img/SVG/black_logo.svg" alt="" width="300px">
  </div>
  <div class="headerContainerRight nav">
    <a href="viewCart.php">Cart – (<span id="numCartItems"><?php if (isset($_SESSION['numItems'])) { echo $_SESSION['numItems']; } else { ?>0<?php } ?></span>) items</a>
  </div>
</header>
