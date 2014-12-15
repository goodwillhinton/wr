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
	function decatur_preprocess_field(&$variables, $hook) {
	  if ($variables['element']['#field_name'] == 'NAME_OF_COLLECTION') {
	    $variables['theme_hook_suggestions'][] = 'field__custom_suggestion';
	  }
	}
	function decatur_css_alter(&$css) {
	    foreach ($css as $key => $value) {
	        if (preg_match('/^ie::(\S*)/', $key)) {
	            unset($css[$key]); 
	        } else {
	            $css[$key]['browsers']['IE'] = TRUE;
	        }
	    } 
	} 
	
}
