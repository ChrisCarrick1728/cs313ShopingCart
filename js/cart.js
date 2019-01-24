$('document').ready(function() {
  console.log("Cart Ready");

  $('.addToCartButton').click(function() {
    console.log(this.id + " added to cart");
    var id = this.id;
    // ajax call to set session variable
    var res = $.post("php/addtoCart.php", { "item" : this.id });
    res.done(function() {
      updateAfterAdd(res.responseText, id);
    })
  })

  function updateAfterAdd(data, id) {
    console.log(data);
    console.log("id: " + id);
    var str = id;
    var newId = str.replace("add", "");

    if (data != '') {
      var cart = $.parseJSON(data);
      console.log("add after update")
      // Update number of Items in cart
      var numItems = $('#numCartItems').html();
      $('#numCartItems').html(parseInt(numItems) + 1);
      updateCartTotal();
      $("#quantity" + newId).html(cart['quantity']);
      $("#cost" + newId).html("$" + (cart['quantity'] * cart['price']).toFixed(2));

    }
  }

  $('.removeFromCartButton').click(function() {
    console.log(this.id + " removed from cart");
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
      console.log(newId);
      var cart = $.parseJSON(data);
      $("#quantity" + newId).html(cart['quantity']);
      $("#cost" + newId).html("$" + (cart['quantity'] * cart['price']).toFixed(2));
    }
    updateCartTotal();
    $('#numCartItems').html($numInCart - 1);
  }

  function updateCartTotal() {
    var res = $.post("php/getCartTotal.php");
    res.done(function() {
      console.log(res.responseText);
      $('#cartTotal').html(res.responseText);
    })
  }
})
