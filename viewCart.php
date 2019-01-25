<?php
session_start();
include "php/setupCart.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/viewCart.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="js/cart.js" charset="utf-8"></script>
    <title>Your Cart</title>
  </head>
  <body>
    <?php include 'components/header.php' ?>
    <?php include './php/getCartItems.php' ?>
    <div class="cartContainer">
      <?php
        if ( isset($cart) ) {
          foreach ( $cart[0][cartItems] as $key => $value ) {
            if ($key != 0) {
              include 'components/cartItem.php';
            }
          }
        }
      ?>
    </div>
    <div class="cartCheckoutContainer">
      <div class="cartCheckoutTotal">
        <h2>Total:     $ <span id="cartTotal"><?php echo money_format('%.2n', $cart[0][cartTotal]); ?></span></h2>
      </div>
      <div class="checkoutButton">
        <button type="button" name="button" id="checkoutButton">Proceed to Checkout</button>
      </div>
    </div>
    <div class="emptyCart">
      <h2>Nothing to see here :( Your cart is empty.</h2>
    </div>
  </body>
</html>
