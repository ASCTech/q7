<?php

/**
 *
 */

function q7_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['theme_settings']['q7_remove_asc_branding'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove ASC Branding.'),
    '#default_value' => theme_get_setting('q7_remove_asc_branding'),
  );
  $form['theme_settings']['sublogo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Background for Logo'),
    '#description' => t("May be displayed behind primary logo.")
  );
  $form['theme_settings']['sublogo']['use_sublogo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use a background for the logo.'),
    '#default_value' => theme_get_setting('use_sublogo'),
  );
  $form['theme_settings']['sublogo']['sublogo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path to logo background'),
    '#default_value' => theme_get_setting('sublogo_path'),
  );

  $form['theme_settings']['sublogo']['sublogo_upload'] = array(
    '#type' => 'file',
    '#title' => t('Upload logo background image'),
  );
  $form['#submit'][] = 'q7_settings_submit';
  $form['theme_settings']['sublogo']['sublogo_upload']['#element_validate'][] = 'q7_settings_submit';

  return $form;
}

/**
 * Capture theme settings submissions and update uploaded image
 */

function q7_settings_submit($form, &$form_state) {
  $settings = array();

  if ($file = file_save_upload('sublogo_upload')) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    if (file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['sublogo_path'] = $form_state['values']['sublogo_path'] = $destination;
    }
  }


}
