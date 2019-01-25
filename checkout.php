<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/checkout.css">
    <script src="https://unpkg.com/jquery" charset="utf-8"></script>
    <script src="js/checkout.js" charset="utf-8"></script>
    <title>Checkout</title>
  </head>
  <body>
    <?php include "components/header.php" ?>
    <div class="returnToCartNav">
      <button type="button" name="returnToCart" id="returnToCartButton">Return to Cart</button>
    </div>
    <div class="checkoutFormContainer">
      <div class="checkoutForm">
        <form class="form" action="orderConfirmation.php" target="_self" method="post">
          <table>
            <tr>
              <td><p id="firstName">First Name:</p></td>
              <td><input type="text" name="firstName" value="" class="name required"></td>
            </tr>
            <tr>
              <td><p id="lastName">Last Name:</p></td>
              <td><input type="text" name="lastName" value="" class="name required"></td>
            </tr>
            <tr>
              <td><p id="address1">Address 1:</p></td>
              <td><input type="text" name="address1" value="" class="address required"></td>
            </tr>
            <tr>
              <td><p id="address2">Address 2:</p></td>
              <td><input type="text" name="address2" value="" class="address"></td>
            </tr>
            <tr>
              <td><p  id="city">City:</p></td>
              <td><input type="text" name="city" value="" class="city required"></td>
            </tr>
            <tr>
              <td><p id="state">State:</p></td>
              <td><input type="text" name="state" value="" class="state required" maxlength="2"></td>
            </tr>
            <tr>
              <td><p id="zip">Zip Code:</p></td>
              <td><input type="text" name="zip" value="" class="zip required" maxlength="5"></td>
            </tr>
          </table>
          <button type="reset" name="clear" id="clearButton">Clear</button>
          <button type="submit" name="button" id="checkout">Checkout</button>
        </form>
      </div>
    </div>
  </body>
</html>
