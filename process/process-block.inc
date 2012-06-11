<?php

function q7_alpha_process_block(&$vars) {
  $block = $vars['block'];
  if ($block->module == 'views') {
    $view = views_get_view($block->delta);
    if ($view->page && $view->url) {
      $vars['block']->subject = l(t($block->subject), $view->url, array());
    }
  }
}

?>
