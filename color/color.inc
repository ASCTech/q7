<?php

/**
 * PART 1. Basic Color module settings
 */

$info = array();

// Define the possible replaceable items and their labels.
$info['fields'] = array(
  'quickSites_header_color' => t('Header'),
  'quickSites_features_color' => t('Feature'),
  'quickSites_footer_center_color' => t('Footer Center'),
  'quickSites_footer_outside_color' => t('Footer Outside'),
);

// Color schemes for the site.
$info['schemes'] = array(
  'default' => array(
    'title' => t('Our site default colors'),
    'colors' => array(
      'quickSites_header_color' => '#ffffff',
      'quickSites_features_color' => '#6a6a6a',
      'quickSites_footer_center_color' => '#eeeeee',
      'quickSites_footer_outside_color' => '#000000',
    ),
  ),
  'firebrick' => array(
    'title' => t('Firebrick Color Scheme'),
    'colors' => array(
      'quickSites_header_color' => '#5c1d26',
      'quickSites_features_color' => '#5c1d26',
      'quickSites_footer_center_color' => '#5c1d26',
      'quickSites_footer_outside_color' => '#371117',
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
