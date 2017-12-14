$('.quizz').on('click', function(e) {
  e.preventDefault();
  setTimeout(function () {
    $('html, body').animate({
        scrollTop: $("#quiz").offset().top
    }, 2000);
  }, 100);
});

$('.ending').on('click', function(e) {
  e.preventDefault();
  setTimeout(function () {
    $('html, body').animate({
        scrollTop: $("#ending").offset().top
    }, 2000);
  }, 100);
});
