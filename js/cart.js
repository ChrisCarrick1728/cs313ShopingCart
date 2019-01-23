$('document').ready(function() {
  console.log("Cart Ready");

  $('.addToCartButton').click(function() {
    console.log(this.id + " added to cart");
    // ajax call to set session variable
    var res = $.post("php/addtoCart.php", { "item" : this.id });
    res.done(function() {
      updateDOM(res.responseText);
    })
  })

  function updateDOM(data) {
    console.log(data);
    if (data != '') {
      var cart = $.parseJSON(data);

      // Update number of Items in cart
      console.log();
      $('#numCartItems').html("(" + cart[0]['numItems'] + ") items");
    }
  }
})
