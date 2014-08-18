<?php

function q7_alpha_preprocess_html(&$variables) {
  if (empty($_SERVER['HTTPS'])) {
    $osu_webfont_url = 'http://www.osu.edu/assets/fonts/webfonts.css';
  }
  else {
    $osu_webfont_url = 'https://www.osu.edu/assets/fonts/webfonts.css';
  }
  drupal_add_css($osu_webfont_url, array('type' => 'external'));

  $node = menu_get_object();
  if (isset($node->type) && $node->type == 'landing_page_alpha') {
    $is_landing_page = true;
    drupal_add_css('
      h1.title {background-color: ' . $node->field__title_bg_color['und'][0]['rgb'] . '}
      .landing-page-head-menu {background-color: ' . $node->field_sub_navbar_color['und'][0]['rgb'] . '}
      .field-name-field-sub-links a {background-color: ' . $node->field_sub_links_bg_color['und'][0]['rgb'] . '}',
      array('type' => 'inline'));
  }
}

