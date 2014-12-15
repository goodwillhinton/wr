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
function decatur_preprocess_html(&$variables) {
  drupal_add_js(drupal_get_path('theme', 'decatur') . '/js/effects.js', array( 
    'scope' => 'header', 
    'weight' => '15' 
  ));

/**
 * Implements theme_field__field_name().
 */
function decatur_field__field_project_shots($vars) {
  // Get the current value of video, if it exists.
  if ($field_video = field_get_items('node', $vars['element']['#object'], 'field_video')) {
    $video = $field_video[0]['value'];
  }
  // If cta_text isn't set for this node, set a default. You may not need this.
  else {
    $video = '';
  }

  // Print the button differently depending on whether or not cta_text is available.
  // This could mean you actually return different markup here, or you could alter the variables available to you in the tpl (I would just return the markup here if it's simpler).
  switch ($video) {
    case 'foo':
      return "<li>{$vars['element']['#items'][0]['value']}</li>";
      break;

    case 'bar':
    default:
      return "<li'>{$vars['element']['#items'][0]['value']}</li>";
      break;
  } 
}

}
