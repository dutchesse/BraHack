<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'BRA ISSUES Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'dutchbrain@gmail.com',
		'to' => 'dutchbrain@gmail.com'
	),
	'fields' => array(
		'custom_U1873' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'custom_U1888' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Age',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Age\' is required.'
			)
		),
		'custom_U1881' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Bra size',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Bra size\' is required.'
			)
		),
		'custom_U1877' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'City\' is required.'
			)
		),
		'custom_U1900' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U1892' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Zip code',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Zip code\' is required.'
			)
		),
		'custom_U1869' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Country\' is required.'
			)
		),
		'custom_U1896' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Issue & Solution you would like to see',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Issue & Solution you would like to see\' is required.'
			)
		)
	)
);

process_form($form);
?>