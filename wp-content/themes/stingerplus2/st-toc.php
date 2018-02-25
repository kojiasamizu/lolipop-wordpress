<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'toc' ) || ! isset( $GLOBALS['tic'] ) ) {
	return;
}

if ( ! function_exists( 'st_toc_do_shortcode' ) ) {
	function st_toc_do_shortcode( $content ) {
		global $shortcode_tags;

		if ( empty( $shortcode_tags ) || ! is_array( $shortcode_tags ) ) {
			return $content;
		}

		$tagnames     = array( 'toc', 'no_toc' );
		$tag_is_found = false;

		foreach ( $tagnames as $tagname ) {
			if ( strpos( $content, '[' . $tagname . ']' ) !== false ) {
				$tag_is_found = true;
			}
		}

		if ( ! $tag_is_found ) {
			return $content;
		}

		$content = do_shortcodes_in_html_tags( $content, false, $tagnames );

		$pattern = get_shortcode_regex( $tagnames );
		$content = preg_replace_callback( "/$pattern/", 'do_shortcode_tag', $content );

		return $content;
	}
}

if ( ! function_exists( 'st_toc_the_content' ) ) {
	function st_toc_the_content( $content ) {
		/** @var toc $tic */
		$tic = $GLOBALS['tic'];

		$content = st_toc_do_shortcode( $content );
		$content = $tic->the_content( $content );

		return $content;
	}
}

if ( ! function_exists( 'st_toc_init' ) ) {
	function st_toc_init() {
		/** @var toc $tic */
		$tic = $GLOBALS['tic'];

		remove_filter( 'the_content', array( $tic, 'the_content' ), 100 );
		add_filter( 'the_content', 'st_toc_the_content', 10 );
	}
}
add_action( 'init', 'st_toc_init' );
