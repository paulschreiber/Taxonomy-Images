<?php
/**
 * Tests for various filters.
 */


exit;



/*
 * Append the term images to content + excerpt.
 */
function mytheme_append_the_term_images( $content ) {
	return $content . apply_filters( 'taxonomy_images_list_the_terms', '', array(
		'image_size' => 'detail',
		) );
}
add_filter( 'the_content', 'mytheme_append_the_term_images' );
add_filter( 'the_excerpt', 'mytheme_append_the_term_images' );



/*
 * Queried Term Image.
 *
 * Return html markup representing the image associated with the
 * currently queried term. In the event that no associated image
 * exists, the filter should return an empty object.
 *
 * In the event that the Taxonomy Images plugin is not installed
 * apply_filters() will return it's second parameter.
 */


/* Default */
$img = apply_filters( 'taxonomy_images_queried_term_image', 'PLEASE INSTALL PLUGIN' );
print '<h2>taxonomy_images_queried_term_image</h2>';
print '<pre>' . htmlentities( $img ) . '</pre>';


/* Inside a yellow box */
$img = apply_filters( 'taxonomy_images_queried_term_image', 'PLEASE INSTALL PLUGIN', array(
	'before' => '<div style="padding:20px;background-color:yellow;">',
	'after'  => '</div>',
	) );
print '<h2>taxonomy_images_queried_term_image - custom wrapper element.</h2>';
print '<pre>' . htmlentities( $img ) . '</pre>';


/* Medium Size */
$img = apply_filters( 'taxonomy_images_queried_term_image', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'medium',
	) );
print '<h2>taxonomy_images_queried_term_image - medium image size</h2>';
print '<pre>' . htmlentities( $img ) . '</pre>';


/* Unrecognized size */
$img = apply_filters( 'taxonomy_images_queried_term_image', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'this-is-probably-not-a-real-image-size',
	) );
print '<h2>taxonomy_images_queried_term_image - unknown image size</h2>';
print '<pre>' . htmlentities( $img ) . '</pre>';


/* Custom attributes. */
$img = apply_filters( 'taxonomy_images_queried_term_image', 'PLEASE INSTALL PLUGIN', array(
	'attr' => array(
		'alt'   => 'Custom alternative text',
		'class' => 'my-class-list bunnies turtles',
		'src'   => 'this-is-where-the-image-lives.png',
		'title' => 'Custom Title',
		),
	) );
print '<h2>taxonomy_images_queried_term_image - custom attributes</h2>';
print '<pre>' . htmlentities( $img ) . '</pre>';



/*
 * Queried Term Image ID.
 *
 * Return the id of the image associated with the currently
 * queried term. In the event that no associated image exists,
 * the filter should return zero.
 *
 * In the event that the Taxonomy Images plugin is not installed
 * apply_filters() will return it's second parameter.
 */
$img = apply_filters( 'taxonomy_images_queried_term_image_id', 'PLEASE INSTALL PLUGIN' );

print '<h2>taxonomy_images_queried_term_image_id</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';




/*
 * Queried Term Image Object.
 *
 * Return an object representing the image associated with the
 * currently queried term. In the event that no associated image
 * exists, the filter should return an empty object.
 *
 * In the event that the Taxonomy Images plugin is not installed
 * apply_filters() will return it's second parameter.
 */
$img = apply_filters( 'taxonomy_images_queried_term_image_object', 'PLEASE INSTALL PLUGIN' );

print '<h2>taxonomy_images_queried_term_image_object</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';




/*
 * Queried Term Image URL.
 *
 * Return a url to the image associated with the current queried
 * term. In the event that no associated image exists, the filter
 * should return an empty string.
 *
 * In the event that the Taxonomy Images plugin is not installed
 * apply_filters() will return it's second parameter.
 */


/* Default */
$img = apply_filters( 'taxonomy_images_queried_term_image_url', 'PLEASE INSTALL PLUGIN' );
print '<h2>taxonomy_images_queried_term_image_url - Default</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';


/* Medium Size */
$img = apply_filters( 'taxonomy_images_queried_term_image_url', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'medium'
	) );
print '<h2>taxonomy_images_queried_term_image_url - Medium</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';


/* Unregistered Size */
$img = apply_filters( 'taxonomy_images_queried_term_image_url', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'this-is-not-real-size-probably-I-hope'
	) );
print '<h2>taxonomy_images_queried_term_image_url - Unregistered</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';




/*
 * Queried Term Image Data.
 *
 * Return an array of data about the image associated with the current
 * queried term. In the event that no associated image exists, the filter
 * should return an empty string.
 *
 * In the event that the Taxonomy Images plugin is not installed
 * apply_filters() will return it's second parameter.
 */


/* Default */
$img = apply_filters( 'taxonomy_images_queried_term_image_data', 'PLEASE INSTALL PLUGIN' );
print '<h2>taxonomy_images_queried_term_image_data - Default</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';


/* Medium Size */
$img = apply_filters( 'taxonomy_images_queried_term_image_data', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'medium'
	) );
print '<h2>taxonomy_images_queried_term_image_data - Medium</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';


/* Unregistered Size */
$img = apply_filters( 'taxonomy_images_queried_term_image_data', 'PLEASE INSTALL PLUGIN', array(
	'image_size' => 'this-is-not-real-size-probably-I-hope'
	) );
print '<h2>taxonomy_images_queried_term_image_data - Unregistered</h2>';
print '<pre>'; var_dump( $img ); print '</pre>';
