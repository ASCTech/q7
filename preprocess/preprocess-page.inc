<?php

function q7_alpha_preprocess_page(&$variables) {
  if ($variables['node']->type == 'asc_people') {
    $variables['title'] = $variables['node']->field_asc_first_name['und'][0]['value'] . " " . $variables['node']->title;
  }
}

