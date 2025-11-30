/**
 * External dependencies
 */
import clsx from 'clsx';

/**
 * WordPress dependencies
 */
import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @param {Object} props            Component props
 * @param {Object} props.attributes Block attributes
 * @param {string} props.className  Block className
 *
 * @return {Element} Element to render.
 */
export default function save( { attributes, className } ) {
	const { fontSize, style } = attributes;

	const blockProps = useBlockProps.save( {
		className: clsx( className, {
			'has-custom-font-size': fontSize || style?.typography?.fontSize,
		} ),
	} );

	const innerBlocksProps = useInnerBlocksProps.save( blockProps );

	return <div { ...innerBlocksProps } />;
}
