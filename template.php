<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Implements template_process_html().
 *
 * Override or insert variables into the page template for HTML output.
 */
function q7_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/*
 * Implements template_process_page().
 */
function q7_process_page(&$variables, $hook) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  //Hide Breadcrumbs on landing pages.
  if (isset($variables['node']) && ($variables['node']->type == 'landing_page_alpha')) {
    drupal_set_breadcrumb(array());
    $variables['breadcrumb'] = '';
  }

}

function q7_date_all_day_label() {
/** This overrides a theme found in the date module so that "All Day" will not display on the calendar.
To return to normal function replace the line with return t('(All day)'); or any other text that you would rather display
for an all day event. Might be better to override the whole them function rather than the label but this is an easy fix **/
  return t('');
}

function get_current_filters() {
  $url_array = explode('/', drupal_get_path_alias());
  $terms = array_pop($url_array);
  $filter = array_pop($url_array);
  if ($filter == 'filter') {
    return '/filter/' . $terms;
  }
}

function q7_date_nav_title($params) {
  $granularity = $params['granularity'];
  $view = $params['view'];
  $date_info = $view->date_info;
  $link = !empty($params['link']) ? $params['link'] : FALSE;
  $format = !empty($params['format']) ? $params['format'] : NULL;
  switch ($granularity) {
    case 'year':
      $title = $date_info->year;
      $date_arg = $date_info->year;
      break;
    case 'month':
      //MB Changed.
      $format = !empty($format) ? $format : 'F Y';
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month);
      break;
    case 'day':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'l, F j, Y' : 'l, F j');
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month) . '-' . date_pad($date_info->day);
      break;
    case 'week':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'F j, Y' : 'F j');
      $title = t('Week of @date', array('@date' => date_format_date($date_info->min_date, 'custom', $format)));
      $date_arg = $date_info->year . '-W' . date_pad($date_info->week);
      break;
  }
  if (!empty($date_info->mini) || $link) {
    // Month navigation titles are used as links in the mini view.
    $attributes = array('title' => t('View full page month'));
    $url = date_pager_url($view, $granularity, $date_arg, TRUE) . get_current_filters();
    return l($title, $url, array('attributes' => $attributes));
  }
  else {
    return $title;
  }
}

/* 
 * Implements image_field_override()
 *
 * Override theme_image_formatter to use our alt text and caption 
 * */
function q7_image_formatter($variables) {
  $item = $variables['item'];
  $item['alt'] = $item['field_file_image_alt_text']['und'][0]['safe_value'];
  $item['title'] = $item['field_file_image_title_text']['und'][0]['safe_value'];
  $image = array(
    'path' => $item['uri'],
    'alt' => $item['alt'],
  );

  if (isset($item['attributes'])) {
    $image['attributes'] = $item['attributes'];
  }

  if (isset($item['width']) && isset($item['height'])) {
    $image['width'] = $item['width'];
    $image['height'] = $item['height'];
  }

  // Do not output an empty 'title' attribute.
  if (drupal_strlen($item['title']) > 0) {
    $image['title'] = $item['title'];
  }

  if ($variables['image_style']) {
    $image['style_name'] = $variables['image_style'];
    $output = theme('image_style', $image);
  }
  else {
    $output = theme('image', $image);
  }

  if (!empty($variables['path']['path'])) {
    $path = $variables['path']['path'];
    $options = $variables['path']['options'];
    // When displaying an image inside a link, the html option must be TRUE.
    $options['html'] = TRUE;
    $output = l($output, $path, $options);
  }

  return $output;
}

