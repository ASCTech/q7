<?php

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function ascmath_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme = alpha_get_theme();

  global $theme_key;
  // drupal_add_css(drupal_get_path('theme', $theme_key).'/farbtastic/farbtastic.css', 'ascmath');
  // drupal_add_js(drupal_get_path('theme', $theme_key).'/farbtastic/farbtastic.js', 'ascmath');

  $form['#attached']['css'] = array(
    drupal_get_path('theme', $theme_key). '/farbtastic/farbtastic.css',
  );

  $form['#attached']['js'] = array(
    drupal_get_path('theme', $theme_key). '/farbtastic/farbtastic.js',
  )

  $form['theme_settings']['quickSites_asc_branding'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include ASC Branding'),
    '#default_value' => theme_get_setting('quickSites_asc_branding'),
    );

  $form['theme_settings']['quickSites_header_left_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Left Color'),
    '#default_value' => theme_get_setting('quickSites_header_left_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );
  
  $form['theme_settings']['quickSites_header_right_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Right Color'),
    '#default_value' => theme_get_setting('quickSites_header_right_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );

  $form['theme_settings']['quickSites_footer_outside_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Footer Outside Color'),
    '#default_value' => theme_get_setting('quickSites_footer_outside_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );

  $form['theme_settings']['quickSites_footer_center_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Footer Outside Color'),
    '#default_value' => theme_get_setting('quickSites_footer_center_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );
}
