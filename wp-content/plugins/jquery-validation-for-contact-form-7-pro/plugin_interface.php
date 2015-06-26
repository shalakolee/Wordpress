<?php
// create custom plugin settings menu
add_action('admin_menu', 'jvcf7p_create_menu');

function jvcf7p_create_menu() {
	add_options_page('Jquery Validation For Contact Form 7 Pro', 'Jquery Validation For Contact Form 7 Pro', 'administrator', __FILE__, 'jvcf7p_settings_page');
	add_action('admin_init', 'register_jvcf7p_settings');
}

function register_jvcf7p_settings() {
	register_setting('jvcf7p-settings-group', 'jvcf7p_show_label_error');
	register_setting('jvcf7p-settings-group', 'jvcf7p_highlight_error_field');
	register_setting('jvcf7p-settings-group', 'jvcf7p_invalid_field_design');
	
	//For validation error message. 
	
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_required');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_email');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_url');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_date');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_dateISO');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_number');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_digits');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_creditcard');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_phoneUS');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_equalTo');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_extension');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_require_from_group');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_maxlength');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_minlength');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_rangelength');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_range');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_max');
	register_setting('jvcf7p-settings-group', 'jvcf7p_msg_min');
	
	
} 

function jvcf7p_settings_page() {	
	global $optionValues;
	$jvcf7p_show_label_error 						= $optionValues['jvcf7p_show_label_error'];
	$jvcf7p_highlight_error_field 					= $optionValues['jvcf7p_highlight_error_field'];
	
	include('includes/jvcf7p_header.php');
	jvcf7p_license_page();
	include('includes/jvcf7p_settings.php');
	include('includes/jvcf7p_instructions.php');
	include('includes/jvcf7p_footer.php');	
}
