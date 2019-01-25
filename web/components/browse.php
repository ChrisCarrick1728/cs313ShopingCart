<div class="itemTile">
  <div class="item">
    <h3><?php echo $value['name']; ?></h3>
    <div class="imgContainer">
      <img src="<?php echo $value['imgURL']; ?>" alt="">
      <div class="priceBackground">
        <!-- empty div for dark background -->
      </div>
      <p class="price">$ <?php echo $value['price']; ?></p>
      <p class="itemQuantity">(<span id=<?php echo "q_{$value['id']}"; ?>><?php echo (($cart[0][cartItems][$key + 1][quantity] != "") ? $cart[0][cartItems][$key + 1][quantity] : 0); ?></span>) in cart</p>
      <p class="addToCart"></p>
      <input type="button" class="addToCartButton" name="button" value="+" id="<?php echo "add_{$value['id']}"; ?>">
    </div>
  </div>
</div>
