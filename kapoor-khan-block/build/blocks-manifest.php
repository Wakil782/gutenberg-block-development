<?php
// This file is generated. Do not modify it manually.
return array(
	'child' => array(
		'apiVersion' => 3,
		'name' => 'amar/child-block',
		'title' => 'Child Block',
		'icon' => 'plus',
		'category' => 'layout',
		'parent' => array(
			'amar/parent-block'
		),
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => 'Child er text ekhane likho'
			),
			'bgColor' => array(
				'type' => 'string',
				'default' => '#f0f0f0'
			)
		),
		'editorScript' => 'file:index.js',
		'render' => 'file:render.php'
	),
	'parent' => array(
		'apiVersion' => 3,
		'name' => 'amar/parent-block',
		'title' => 'Parent Block',
		'category' => 'layout',
		'icon' => 'grid-view',
		'description' => 'Parent block with child blocks inside',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'editorScript' => 'file:index.js',
		'render' => 'file:render.php',
		'supports' => array(
			'html' => false,
			'innerBlocks' => true
		)
	)
);
