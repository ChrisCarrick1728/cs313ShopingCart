<div class="cartItemTile" id="<?php echo "tile_{$value[id]}"; ?>">
  <div class="cartImg">
    <img src="<?php echo "{$value[imgURL]}"; ?>" alt="">
  </div>
  <div class="cartItemName">
    <h2><?php echo $value[name] ?></h2>
    <p><?php echo "(<span id=\"quantity_{$value[id]}\">{$value[quantity]}</span>) at " . money_format('$%.2n' , $value[price]) . " each" ?></p>
    <input type="button" class="removeFromCartButton" name="button" value="-" id="<?php echo "remove_{$value[id]}"; ?>">
    <input type="button" class="addToCartButton" name="button" value="+" id="<?php echo "add_{$value[id]}"; ?>">
  </div>
  <div class="cartItemPrice">
    <p><?php echo "<span id=\"cost_{$value[id]}\">" . money_format('$%.2n' , ($value[quantity] * $value[price])) . "</span>"; ?></p>
  </div>
</div>
