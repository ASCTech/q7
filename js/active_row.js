(function ($) {
  Drupal.behaviors.scollLetter = {
    attach: $(function() {
              $('.views-table a.active').closest('tr').addClass('active_row');
            })
  };
})(jQuery);
