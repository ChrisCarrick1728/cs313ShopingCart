$('document').ready(function() {
  $('#checkout').click(function(event) {
    event.preventDefault();
    var error = false;
    $(':input').each(function(index, element) {
      if ($(this).is('.required')) {
        var name = $(this).attr("name");
        if ($(this).val() == "") {
          $('#' + name).addClass('error');
          error = true;
        } else {
          console.log('removeError' + this)
          $('#' + name).removeClass();
        }
      }
    })
    if (!error) {
      $('form').submit();
    }
  })

  $('#returnToCartButton').click(function() {
    document.location.href = "viewCart.php"
  })

  $('#clearButton').click(function() {
    $(':input').each(function() {
      var name = $(this).attr("name");
      $('#' + name).removeClass();
    })
  })

})
