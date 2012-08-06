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
}

function q7_preprocess_html(&$variables) {
  drupal_add_css('https://fonts.googleapis.com/css?family=Oxygen', array('type' => 'external'));
}

function q7_date_all_day_label() {
/** This overrides a theme found in the date module so that "All Day" will not display on the calendar.
To return to normal function replace the line with return t('(All day)'); or any other text that you would rather display
for an all day event. Might be better to override the whole them function rather than the label but this is an easy fix **/
  return t('');
}
