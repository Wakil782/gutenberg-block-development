<?php
// This file is generated. Do not modify it manually.
return array(
	'wakil-testimonial-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/wakil-testimonial-block',
		'version' => '0.1.0',
		'title' => 'Wakil Testimonial Block',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'clientName' => array(
				'type' => 'string',
				'default' => 'Rahim Ahmed'
			),
			'designation' => array(
				'type' => 'string',
				'default' => 'Founder & CEO'
			),
			'company' => array(
				'type' => 'string',
				'default' => 'Creative Solutions'
			),
			'testimonial' => array(
				'type' => 'string',
				'default' => 'Working with this team was a great experience. They delivered excellent work and communicated clearly throughout the project.'
			),
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageId' => array(
				'type' => 'number',
				'default' => 0
			),
			'rating' => array(
				'type' => 'number',
				'default' => 5
			),
			'cardBackground' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#333333'
			),
			'accentColor' => array(
				'type' => 'string',
				'default' => '#e0a526'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'wakil-testimonial-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
