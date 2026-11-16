<?php
// This file is generated. Do not modify it manually.
return array(
	'latest-post-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/latest-post-block',
		'version' => '0.1.0',
		'title' => 'Latest Post Block',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'postToShow' => array(
				'type' => 'number',
				'default' => 5
			),
			'displayDate' => array(
				'type' => 'boolean',
				'default' => true
			),
			'displayExcerpt' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'latest-post-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
