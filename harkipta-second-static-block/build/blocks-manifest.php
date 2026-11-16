<?php
// This file is generated. Do not modify it manually.
return array(
	'harkipta-second-static-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/harkipta-second-static-block',
		'version' => '0.1.0',
		'title' => 'Harkipta Second Static Block',
		'category' => 'widgets',
		'icon' => 'dashicons-lightbulb',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'attributes' => array(
			'buttonText' => array(
				'type' => 'string',
				'default' => 'visit website'
			),
			'link' => array(
				'type' => 'object',
				'default' => array(
					'url' => '',
					'opensInNewTab' => false
				)
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'harkipta-second-static-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
