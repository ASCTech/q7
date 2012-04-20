<?php

/**
 * PART 1. Basic Color module settings
 */

$info = array();

// Define the possible replaceable items and their labels.
$info['fields'] = array(
  'quickSites_header_left_color' => t('Header Leftr'),
  'quicksites_header_right_color' => t('Header Right'),
  'quicksites_front_header_left_color' => t('Front Header Left'),
  'quicksites_front_header_right_color' => t('Front Header Right'),
  'quicksites_features_color' => t('Feature'),
  'quicksites_footer_center_color' => t('Footer Center'),
  'quicksites_footer_outside_color' => t('Footer Outside'),
);

// Color schemes for the site.
$info['schemes'] = array(
  'default' => array(
    'title' => t('Our site default colors'),
    'colors' => array(
      'quicksites_header_left_color' => '#ffffff',
      'quicksites_header_right_color' => '#ff7f00',
      'quicksites_front_header_right_color' => '#777777',
      'quicksites_front_header_right_color' => '#333333',
      'quicksites_features_color' => '#666666',
      'quicksites_footer_center_color' => '#eeeeee',
      'quicksites_footer_outside_color' => '#000000',
    ),
  ),
  'firebrick' => array(
    'title' => t('Firebrick Color Scheme'),
    'colors' => array(
      'quicksites_header_left_color' => '#ffffff',
      'quicksites_header_right_color' => '#ff7f00',
      'quicksites_front_header_right_color' => '#777777',
      'quicksites_front_header_right_color' => '#333333',
      'quicksites_features_color' => '#666666',
      'quicksites_footer_center_color' => '#eeeeee',
      'quicksites_footer_outside_color' => '#000000',
    ),
  ),

);

// Define the CSS file(s) that we want the Color module to use as a base.
$info['css'] = array(
  'styles/colors.css',

);

$info['preview_css'] = '';
$info['gradients'] = array();

?>
