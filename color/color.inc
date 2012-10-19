<?php

/**
 * PART 1. Basic Color module settings
 */

$info = array();

// Define the possible replaceable items and their labels.
$info['fields'] = array(
  'qs_header_color' => t('Header'),
  'qs_feature_color' => t('Feature'),
  'qs_quick_link_color' => t('Quick Links Bar Color'),
  'qs_footer_color' => t('Footer'),
  'qs_accent_color' => t('Blog/Accent'),
);

// Color schemes for the site.
$info['schemes'] = array(
  'default' => array(
    'title' => t('Our site default colors'),
    'colors' => array(
      'qs_header_color' => '#ffffff',
      'qs_feature_color' => '#6a6a6a',
      'qs_quick_link_color' => '#6a6a6a',
      'qs_footer_color' => '#8e8e8e',
      'qs_accent_color' => '#6b6b6b',
    ),
  ),
  'firebrick' => array(
    'title' => t('Firebrick Color Scheme'),
    'colors' => array(
      'qs_header_color' => '#ffffff',
      'qs_feature_color' => '#6a6a6a',
      'qs_quick_link_color' => '#6a6a6a',
      'qs_footer_color' => '#8e8e8e',
      'qs_accent_color' => '#6b6b6b',
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
