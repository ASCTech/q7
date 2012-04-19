<?php

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function ascmath_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme = alpha_get_theme();

  $form['theme_settings']['asc_brand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include ASC Branding'),
    '#default_value' => theme_get_setting('asc_brand'),
    );

  $form['theme_settings']['asc_header_left_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Left Color'),
    '#default_value' => theme_get_setting('asc_header_left_color'),
  );
  
  $form['theme_settings']['asc_header_right_color'] = array(
    '#type' => 'textfield',
    '#size' => 7,
    '#maxlength' => 7,
    '#title' => t('Header Right Color'),
    '#default_value' => theme_get_setting('asc_header_right_color'),
  );
}
