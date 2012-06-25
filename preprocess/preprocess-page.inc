function q7_preprocess_file_entity(&$variables) {
  if ($variables['type'] == 'image') {
    // Alt Text
    $variables['content']['file']['#alt'] = $variables['field_file_image_alt_text']['und'][0]['safe_value'];

    // Title
    $variables['content']['file']['#title'] = $variables['field_file_image_title_text']['und'][0]['safe_value'];
  }
}
