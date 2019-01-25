$('document').ready(function() {

  checkIfCartIsEmpty();

  $('.addToCartButton').click(function() {
    var id = this.id;
    // ajax call to set session variable
    var res = $.post("php/addtoCart.php", { "item" : this.id });
    res.done(function() {
      updateAfterAdd(res.responseText, id);
    })
  })

  function updateAfterAdd(data, id) {
    var str = id;
    var newId = str.replace("add", "");

    if (data != '') {
      var cart = $.parseJSON(data);
      // Update number of Items in cart
      var numItems = $('#numCartItems').html();
      $('#numCartItems').html(parseInt(numItems) + 1);
      updateCartTotal();
      $("#quantity" + newId).html(cart['quantity']);
      $("#cost" + newId).html("$" + (cart['quantity'] * cart['price']).toFixed(2));

    }
  }

  $('.removeFromCartButton').click(function() {
    var id = this.id;
    var res = $.post("php/removeFromCart.php", { "item" : this.id });
    res.done(function() {
      updateAfterRemove(res.responseText, id);
    })
  })

  function updateAfterRemove(data, id) {
    var str = id;
    var newId = str.replace("remove", "");
    var $numInCart = $("#numCartItems").html();

    if (data == "removed") {
      $("#tile" + newId).remove();
    } else {
      var cart = $.parseJSON(data);
      $("#quantity" + newId).html(cart['quantity']);
      $("#cost" + newId).html("$" + (cart['quantity'] * cart['price']).toFixed(2));
    }
    updateCartTotal();
    checkIfCartIsEmpty();
    $('#numCartItems').html($numInCart - 1);
  }

  function updateCartTotal() {
    var res = $.post("php/getCartTotal.php");
    res.done(function() {
      $('#cartTotal').html(res.responseText);
    })
  }

  $('#checkoutButton').click(function() {
    document.location.href = "checkout.php";
  })

})

function checkIfCartIsEmpty() {
  var res = $.post("php/getNumItems.php");

  res.done(function() {
    if (res.responseText == '0') {
      $('.emptyCart').css('display', 'block');
      $('.cartCheckoutContainer').css('display', 'none');
      $('.cartContainer').css('display', 'none');
    } else {
      $('.emptyCart').css('display', 'none');
      $('.cartContainer').css('display', 'flex');
      $('.cartCheckoutContainer').css('display', 'block');
    }
  })
}
