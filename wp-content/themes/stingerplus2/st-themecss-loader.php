<?php
header_remove( 'Last-Modified' );
header( 'Content-Type: text/css; charset=utf-8' );
header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' );
header( 'Cache-Control: no-cache, must-revalidate, max-age=0' );
header( 'Pragma: no-cache' );

include_once( dirname( __FILE__ ) . '/../../../wp-load.php' );

require( dirname( __FILE__ ) . '/st-themecss-variables.php' );

include( dirname( __FILE__ ) . '/st-themecss.php' );
