<?php 

// Theme Settings

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Populate Dropdown

add_filter('frm_setup_new_fields_vars', 'populate_dropdown', 20, 2);
function populate_dropdown($values, $field){
  if($field->id == 30){

    $options = get_field('add_options_form_select_field','options');
    $options = array_map(function($v){

        return $v['option'];

    },$options);

    $values['options'] = $options; 
  }
  return $values;
}