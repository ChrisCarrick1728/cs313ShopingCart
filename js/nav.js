$('document').ready(function() {
  $("#hamburgerButtonId").click(function() {
    if ($(".nav").css("display") == 'none') {
      $('.nav').css("display", "flex");
    } else {
      $('.nav').css("display", "none");
    }
  })
})

$(window).resize(function() {
  if ($(this).width() > 600) {
    $(".nav").css("display", "flex");
  } else {
    $(".nav").css("display", "none");
  }
})
