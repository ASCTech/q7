jQuery(function() {
    jQuery("a.letter-select").click(function(){
    var letter = $(this).html();
    jQuery("a.letter-select").css('color', '#000000');
    jQuery(this).css('color', '#bb0000');
    var firstItem = $("a." + letter).filter(':first');
    var top = firstItem.offset().top;
    jQuery("body,html").animate({scrollTop: top - 75}, 400);
  });

  $("#backtotop").click(function(){
    var top = $('body').top;
    jQuery("body,html").animate({scrollTop: top}, 400);
  });

};
