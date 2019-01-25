<div class="itemTile">
  <div class="item">
    <h3><?php echo $k['name']; ?></h3>
    <div class="imgContainer">
      <img src="<?php echo $k['imgURL']; ?>" alt="">
      <div class="priceBackground">
        <!-- empty div for dark background -->
      </div>
      <p class="price">$ <?php echo $k['price']; ?></p>
      <p class="addToCart"></p>
      <input type="button" class="addToCartButton" name="button" value="+" id="<?php echo "add_{$k['id']}"; ?>">
    </div>
  </div>
</div>
