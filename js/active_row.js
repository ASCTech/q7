(function ($) {
  Drupal.behaviors.scollLetter = {
    attach: $(function() {
              $('.view-content a.active').closest('.views-row').addClass('active-row');
            })
  };
})(jQuery);
