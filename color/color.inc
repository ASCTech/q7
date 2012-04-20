<?php

/**
 * PART 1. Basic Color module settings
 */

$info = array();

// Define the possible replaceable items and their labels.
$info['fields'] = array(
  'qs_header_color' => t('Header'),
  'qs_features_color' => t('Feature'),
  'qs_footer_center_color' => t('Footer Center'),
  'qs_footer_outside_color' => t('Footer Outside'),
);

// Color schemes for the site.
$info['schemes'] = array(
  'default' => array(
    'title' => t('Our site default colors'),
    'colors' => array(
      'qs_header_color' => '#ffffff',
      'qs_features_color' => '#6a6a6a',
      'qs_footer_center_color' => '#8e8e8e',
      'qs_footer_outside_color' => '#6b6b6b',
    ),
  ),
  'firebrick' => array(
    'title' => t('Firebrick Color Scheme'),
    'colors' => array(
      'qs_header_color' => '#5c1d26',
      'qs_features_color' => '#5c1d26',
      'qs_footer_center_color' => '#5c1d26',
      'qs_footer_outside_color' => '#371117',
    ),
  ),

);

// Define the CSS file(s) that we want the Color module to use as a base.
$info['css'] = array(
  'css/colors.css',

);

$info['preview_css'] = '';
$info['gradients'] = array();

?>
