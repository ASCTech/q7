Drupal.behaviors.myModuleBehavior = function (context) {
  $("a.letter-select").click(function(){
    var letter = $(this).html();
    $("a.letter-select").css('color', '#000000');
    $(this).css('color', '#bb0000');
    var firstItem = $("a." + letter).filter(':first');
    var top = firstItem.offset().top;
    $("body,html").animate({scrollTop: top - 75}, 400);
  });

  $("#backtotop").click(function(){
    var top = $('body').top;
    $("body,html").animate({scrollTop: top}, 400);
  });

};
