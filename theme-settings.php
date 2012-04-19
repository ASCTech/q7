<?php

/**
 * Implementation of THEMEHOOK_settings().
 *
 * @param $saved_settings
 *   array An array of saved settings for this theme.
 * @return A form array.
 */
function ascmath_settings($saved_settings) {
  global $theme_key;
  drupal_add_css(drupal_get_path('theme', $theme_key).'/farbtastic/farbtastic.css', 'ascmath');
  drupal_add_js(drupal_get_path('theme', $theme_key).'/farbtastic/farbtastic.js', 'ascmath');
}

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function ascmath_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme = alpha_get_theme();

  $form['theme_settings']['quicksitesbrand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include ASC Branding'),
    '#default_value' => theme_get_setting('quicksitesbrand'),
    );

  $form['theme_settings'['quicksites_header_left_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Left Color'),
    '#default_value' => theme_get_setting('quicksites_header_left_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );
  
  $form['theme_settings']['quicksites_header_right_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Right Color'),
    '#default_value' => theme_get_setting('quicksites_header_right_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );

  $form['theme_settings']['quicksites_footer_outside_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Footer Outside Color'),
    '#default_value' => theme_get_setting('quicksites_footer_outside_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );

  $form['theme_settings']['quicksites_footer_center_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Footer Outside Color'),
    '#default_value' => theme_get_setting('quicksites_footer_center_color'),
    '#prefix' => '<div class="color-select">',
    '#suffix' => '</div>',
  );
}
