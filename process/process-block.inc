<?php

function q7_alpha_process_block(&$vars) {
  $block = $vars['block'];
  if ($block->module == 'views') {
    list($name, $display_id) = explode('-', $vars['block']->delta);
    if ($view = views_get_view($name)) {
      if ($view->access('page_1')) {
        $vars['block']->subject = l($block->subject, $view->get_url());
      }
    }
  }
}

?>
