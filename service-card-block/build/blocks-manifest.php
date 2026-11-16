<?php
// This file is generated. Do not modify it manually.
return array(
	'service-card-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/service-card-block',
		'version' => '0.1.0',
		'title' => 'Service Card Block',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'serviceTitle' => array(
				'type' => 'string',
				'default' => 'Web development'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'we build modren and responsive website for your business.'
			),
			'icon' => array(
				'type' => 'string',
				'default' => '💻'
			),
			'buttonText' => array(
				'type' => 'string',
				'default' => 'Learn More'
			),
			'buttonUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'cardBackground' => array(
				'type' => 'string',
				'default' => '#ffffff'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'service-card-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
