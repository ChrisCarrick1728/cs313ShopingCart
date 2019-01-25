<?php
session_start();
include 'php/validateForm.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/orderConfirmation.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="js/orderConfirmation.js" charset="utf-8"></script>
    <title>Order Confirmation</title>
  </head>
  <body>
    <?php include "components/header.php" ?>
    <?php include './php/getCartItems.php' ?>
    <div class="confirmationContainer">
      <div class="thankYouMessage">
        <h2>Thanks! Your order will be on it's way soon.</h2>
      </div>
      <div class="confirmationHeader">
        <h3>Ship To</h3>
        <p><?php echo "{$firstName} {$lastName}" ?></p>
        <p><?php echo "{$address1}" ?></p>
        <?php if ($address2 != "") {?><p><?php echo "{$address2}" ?></p><?php } ?>
        <p><?php echo "{$city}, {$state} {$zip}" ?></p>
      </div>
      <div class="confirmationItems">
        <table>
          <tr>
            <th>Name</th>
            <th>Quanity</th>
            <th>Price</th>
          </tr>
          <?php
          if ( isset($cart) ) {
            foreach ( $cart[0][cartItems] as $key => $value ) {
              if ($key != 0) {
                include 'components/confirmationItem.php';
              }
            }
          }
          ?>
          <tr>
            <td colspan="2" class="total">Total </td>
            <td class="totalValue">$ <?php echo money_format('%.2n', $cart[0][cartTotal]); ?></td>
          </tr>
        </table>
      </div>
    </div>
    <?php include "php/clearCart.php" ?>
    <script>$('#numCartItems').html(0);</script>
  </body>
</html>
