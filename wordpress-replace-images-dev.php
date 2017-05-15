<?php


class VpDevImages {

	private $romote_domine = "https://heroine.ru";

	function __construct() {
		add_filter( "wp_get_attachment_image_src", [ $this, 'attachment_src' ], 10, 2 );
		add_filter( 'wp_calculate_image_srcset', [ $this, 'attachment_image_src' ], 10, 5 );
	}

	public function attachment_src( $image, $attachment_id ) {
		return $this->prepare( $image, $attachment_id );
	}

	function attachment_image_src( $sources, $size_array, $image_src, $image_meta, $attachment_id ) {
		$sources_new = [];

		foreach ( $sources as $key => $val ) {
			$sources_new[ $key ] = $this->prepare( $val, $attachment_id );
		}

		return $sources_new;
	}


	function prepare( $array, $attachment_id ) {


		if ( array_key_exists( 'url', $array ) ) {
			$array['url'] = $this->replace( $array['url'], $attachment_id );
		} else {
			$array[0] = $this->replace( $array[0], $attachment_id );
		}

		return $array;
	}

	function replace( $url, $attachment_id ) {
		$upload_dir_info = wp_get_upload_dir();
		$tail            = str_replace( $upload_dir_info['baseurl'], "", $url );
		$file_link       = $upload_dir_info ["basedir"] . $tail;

		if ( file_exists( $file_link ) ) {
			return $url;
		}

		return str_replace( get_home_url(), $this->romote_domine, $url );
	}

}


add_action( "plugins_loaded", function () {
	new VpDevImages();
} );