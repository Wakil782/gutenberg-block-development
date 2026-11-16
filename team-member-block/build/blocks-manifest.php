<?php
// This file is generated. Do not modify it manually.
return array(
	'team-member-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/team-member-block',
		'version' => '0.1.0',
		'title' => 'Team Member Block',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'name' => array(
				'type' => 'string',
				'default' => 'wakil'
			),
			'designation' => array(
				'type' => 'string',
				'default' => 'web devloper'
			),
			'description' => array(
				'type' => 'string',
				'default' => 'passoinate developer createing modern websites.'
			),
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageId' => array(
				'type' => 'number'
			),
			'facebookUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'linkedinUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'twitterUrl' => array(
				'type' => 'string',
				'default' => ''
			),
			'buttonText' => array(
				'type' => 'string',
				'default' => 'View profile'
			),
			'buttonUrl' => array(
				'type' => 'string',
				'default' => '#'
			),
			'showSocial' => array(
				'type' => 'boolean',
				'default' => true
			),
			'cardBackground' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'nameColor' => array(
				'type' => 'string',
				'default' => '#111827'
			),
			'designationColor' => array(
				'type' => 'string',
				'default' => '#64748b'
			),
			'buttonColor' => array(
				'type' => 'string',
				'default' => '#0073aa'
			),
			'buttonTextColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'imageSize' => array(
				'type' => 'number',
				'default' => 150
			)
		),
		'textdomain' => 'team-member-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
