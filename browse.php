<?php session_start(); ?>
<?php include 'php/getItems.php' ?>
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
      <?php foreach ($items as $k) { ?>
      <div class="itemTile">
        <div class="item">
          <h3><?php echo $k['name']; ?></h3>
          <div class="imgContainer">
            <img src="img/items/item1.jpg" alt="">
            <div class="priceBackground">

            </div>
            <p class="price">$ <?php echo $k['price']; ?></p>
            <p class="addToCart">Add to Cart</p>
            <input type="button" class="addToCartButton" name="button" value="+" id="<?php echo $k['id']; ?>">
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
