<?php

/**
 *
 */

function q7_form_system_theme_settings_alter(&$form, &$form_state) {
  dsm(theme_get_setting('sublogo'));

  $form['theme_settings']['sublogo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Logo'),
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
function q7_settings_submit(&$form, &$form_state) {
  // Check for a new uploaded file, and use that if available.
  if ($file = file_save_upload('sublogo_upload')) {
  dsm($form);

    $parts = pathinfo($file->filename);
    $filename = (! empty($key)) ? str_replace('/', '_', $key) .'_sublogo.'. $parts['extension'] : 'sublogo.'. $parts['extension'];

    // The image was saved using file_save_upload() and was added to the
    // files table as a temporary file. We'll make a copy and let the garbage
    // collector delete the original upload.
    if (file_copy($file, $filename)) {
      $_POST['use_sublogo'] = $form_state['values']['use_sublogo'] = TRUE;
      $_POST['sublogo_path'] = $form_state['values']['sublogo_path'] = $file->filepath;
    }
  }
  else {
    drupal_set_message('File could not be saved.', 'error');
  }
}
