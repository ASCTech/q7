<?php

function q7_alpha_preprocess_html(&$variables) {
  drupal_add_css('https://fonts.googleapis.com/css?family=Lato:300', array('type' => 'external'));
  drupal_add_css('https://fonts.googleapis.com/css?family=Cardo', array('type' => 'external'));
  $node = menu_get_object();
  dsm($node);
  if ($node->type = 'landing_page_alpha') {
    drupal_add_css('
      h1.title {background-color: ' . $node->field__title_bg_color['und'][0]['rgb'] . '}
      .landing-page-head-menu {background-color: ' . $node->field_sub_navbar_color['und'][0]['rgb'] . '}
      .field-name-field-sub-links a {background-color: ' . $node->field_sub_links_bg_color['und'][0]['rgb'] . '}',
      array('type' => 'inline'));
  }
}

