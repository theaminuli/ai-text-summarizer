<?php
// This file is generated. Do not modify it manually.
return array(
	'ai-summarize-button' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/ai-summarize-button',
		'version' => '0.1.0',
		'title' => 'AI Summarize Buttons',
		'category' => 'design',
		'allowedBlocks' => array(
			'core/button'
		),
		'icon' => 'button',
		'description' => 'Add AI-powered summarize buttons with customizable styles.',
		'keywords' => array(
			'ai',
			'summarize',
			'button',
			'summary',
			'link'
		),
		'textdomain' => 'ai-summarize-button',
		'supports' => array(
			'anchor' => true,
			'align' => array(
				'wide',
				'full'
			),
			'html' => false,
			'__experimentalExposeControlsToChildren' => true,
			'color' => array(
				'gradients' => true,
				'text' => false,
				'__experimentalDefaultControls' => array(
					'background' => true
				)
			),
			'spacing' => array(
				'blockGap' => array(
					'horizontal',
					'vertical'
				),
				'padding' => true,
				'margin' => array(
					'top',
					'bottom'
				),
				'__experimentalDefaultControls' => array(
					'blockGap' => true
				)
			),
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'__experimentalBorder' => array(
				'color' => true,
				'radius' => true,
				'style' => true,
				'width' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true,
					'style' => true,
					'width' => true
				)
			),
			'layout' => array(
				'allowSwitching' => false,
				'allowInheriting' => false,
				'default' => array(
					'type' => 'flex'
				)
			),
			'interactivity' => array(
				'clientNavigation' => true
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
