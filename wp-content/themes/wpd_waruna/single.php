<?php
// array with parameters
$args = array(
	'post_parent' => $post->ID,
	'post_type' => 'attachment',
	'orderby' => 'menu_order', // you can also sort images by date or be name
	'order' => 'ASC',
	'numberposts' => 5, // number of images (slides)
	'post_mime_type' => 'image'
);
if ( $images = get_children( $args ) ) {
	// if there are no images in post, don't display anything
	echo '<ul id="slider">';
	foreach( $images as $image ) {
		echo '<li>' . wp_get_attachment_image( $image->ID, 'my_slider' ) . '</li>';
	}
	echo '</ul>'; 
}

?>