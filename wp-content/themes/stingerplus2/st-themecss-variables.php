<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$st_header_image      = '';
$st_headerunder_image = '';
$st_footer_image      = '';

$st_entrytitle_bgimg = '';
$st_h2_bgimg         = '';
$st_h3_bgimg         = '';
$st_h4_bgimg         = '';
$st_h5_bgimg         = '';

//メニュー
$st_headermenu_bgimg = '';
$st_sidemenu_bgimg   = '';
$st_sidebg_bgimg     = '';
$st_topgabg_image    = '';

$st_theme_kantan_setting = st_get_kantan_setting();
$_defaults               = st_get_theme_mod_defaults( $st_theme_kantan_setting );
$_overrides              = array();
$_maps                   = st_get_var_theme_mod_maps();

switch ( true ) {
	case ( $st_theme_kantan_setting === 'zentai' ):
		$_overrides = st_get_zentai_theme_mod_overrides();

		break;

	case ( $st_theme_kantan_setting === 'menuonly' ):
		$_overrides = st_get_menuonly_theme_mod_overrides();

		break;

	case ( $st_theme_kantan_setting === 'defaultcolor' ):

	case ( $st_theme_kantan_setting === '' ):
		if ( is_customize_preview() ) {
			$_overrides = st_create_default_theme_mod_diff($_defaults);
		}

		break;

	default:

		break;
}

extract( st_create_theme_mod_var_array( $_defaults, $_maps, $_overrides ), EXTR_OVERWRITE );
