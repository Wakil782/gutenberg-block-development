<?php
// This file is generated. Do not modify it manually.
return array(
	'narinder' => array(
		'apiVersion' => 3,
		'name' => 'amar/narindar-block',
		'title' => 'Narinder Block',
		'category' => 'layout',
		'icon' => 'grid-view',
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => 'parent Block'
			),
			'color' => array(
				'type' => 'string',
				'default' => '#ff0000'
			)
		),
		'providesContext' => array(
			'amar/color' => 'color'
		),
		'description' => 'parent block new static block',
		'editorScript' => 'file:index.js',
		'render' => 'file:render.php',
		'supports' => array(
			'html' => false
		)
	),
	'surinder' => array(
		'apiVersion' => 3,
		'name' => 'amar/surinder-block',
		'title' => 'surinder Block',
		'category' => 'layout',
		'icon' => 'star-filled',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => 'child Block'
			)
		),
		'usesContext' => array(
			'amar/color'
		),
		'parent' => array(
			'amar/narindar-block'
		),
		'description' => 'child block new static block',
		'editorScript' => 'file:index.js',
		'render' => 'file:render.php'
	)
);
