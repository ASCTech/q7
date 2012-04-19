<?php

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function omega_form_system_theme_settings_alter(&$form, &$form_state) {
  $theme = alpha_get_theme();

  $form['theme_settings']['asc_brand'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include ASC Branding'),
    '#default_value' => theme_get_setting('asc_brand'),
    );
  
}
