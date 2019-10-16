<?php
function blockquote_function( $atts, $content = null ) {
	return '<blockquote>' . $content . '</blockquote>';
}
add_shortcode( 'citat', 'blockquote_function' );