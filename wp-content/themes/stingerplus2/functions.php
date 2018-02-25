<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if (locate_template('/st-kanri.php') !== '') {
require_once locate_template('/st-kanri.php');
}

if (locate_template('/st-theme-customization.php') !== '') {
	require_once locate_template('/st-theme-customization.php');
}

if (locate_template('/st-widgets.php') !== '') {
require_once locate_template('/st-widgets.php');
}

if (locate_template('/st-title.php') !== '') {
require_once locate_template('/st-title.php');
}

if (locate_template('/st-category.php') !== '') {
require_once locate_template('/st-category.php');
}

if (locate_template('/st-toc.php') !== '') {
	require_once locate_template('/st-toc.php');
}

if ( !function_exists( 'st_after_setup_theme' ) ) {
	function st_after_setup_theme() {
		add_theme_support( 'title-tag' );
	}
}
add_action( 'after_setup_theme', 'st_after_setup_theme' );

if ( !function_exists( 'st_enqueue_scripts' ) ) {
	function st_enqueue_scripts() {

		wp_deregister_script( 'jquery' );

		wp_enqueue_script(
			'jquery',
			'//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			array(),
			'1.11.3',
			false
		);

		if ( isset($GLOBALS['stdata64']) && $GLOBALS['stdata64'] === 'yes' ) {
			wp_enqueue_script(
				'smoothscroll',
				get_template_directory_uri() . '/js/smoothscroll.js',
				array('jquery')
			);
		}

		wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array( 'jquery' ), false, true );

		if ( !st_is_mobile() && trim( $GLOBALS['stdata87'] ) === '' ) {
			wp_enqueue_script(
				'scroll',
				get_template_directory_uri() . '/js/scroll.js',
				array( 'jquery' ),
				false,
				true
			);
		}

	}
}
add_action( 'wp_enqueue_scripts', 'st_enqueue_scripts' );

if ( !function_exists( '_st_get_google_font' ) ) {
	function _st_get_google_font() {
		$style = null;

		if ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'josefin' ) {
			$style = 'https://fonts.googleapis.com/css?family=Josefin+Sans';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'ptsans' ) {
			$style = 'https://fonts.googleapis.com/css?family=PT+Sans+Caption';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'meddon' ) {
			$style = 'https://fonts.googleapis.com/css?family=Meddon';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'julius' ) {
			$style = 'https://fonts.googleapis.com/css?family=Julius+Sans+One';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'lobster' ) {
			$style = 'https://fonts.googleapis.com/css?family=Lobster';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'pacifico' ) {
			$style = 'https://fonts.googleapis.com/css?family=Pacifico';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'bilbo' ) {
			$style = 'https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'fredericka' ) {
			$style = 'https://fonts.googleapis.com/css?family=Fredericka+the+Great';
		} elseif ( isset( $GLOBALS['stdata49'] ) && $GLOBALS['stdata49'] === 'montserrat' ) {
			$style = 'https://fonts.googleapis.com/css?family=Montserrat:700';
		}

		return $style;
	}
}

if ( !function_exists( 'st_enqueue_styles' ) ) {
	function st_enqueue_styles() {
		wp_register_style(
			'normalize',
			get_template_directory_uri() . '/css/normalize.css',
			array(),
			'1.5.9',
			'all'
		);

		wp_register_style(
			'font-awesome',
			get_template_directory_uri() . '/css/fontawesome/css/font-awesome.min.css',
			array('normalize'),
			'4.7.0',
			'all'
		);

		wp_register_style(
			'style',
			get_stylesheet_uri(),
			array('normalize', 'font-awesome'),
			false,
			'all'
		);

		wp_register_style(
			'fonts-googleapis-montserrat',
			'https://fonts.googleapis.com/css?family=Montserrat:400',
			array(),
			false,
			'all'
		);

		wp_enqueue_style( 'fonts-googleapis-montserrat' );

		if ( ( $custom_font = _st_get_google_font() ) !== null ) {
			wp_register_style(
				'fonts-googleapis-custom',
				$custom_font,
				array(),
				false,
				'all'
			);

			wp_enqueue_style( 'fonts-googleapis-custom' );
		}

		wp_enqueue_style( 'style' );
	}
}
add_action( 'wp_enqueue_scripts', 'st_enqueue_styles' );

if (!function_exists('st_auto_post_slug')) {
	function st_auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
		if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
			$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
		}

		return $slug;
	}

	if ( isset($GLOBALS['stdata4']) && $GLOBALS['stdata4'] === 'yes' ) {
		add_filter( 'wp_unique_post_slug', 'st_auto_post_slug', 10, 4 );
	}
}

$custom_bgcolor_defaults = array(
	'default-color' => '#f2f2f2',
);
add_theme_support( 'custom-background', $custom_bgcolor_defaults );

if(trim($GLOBALS['stdata62']) !== ''){
	$heightpx = $GLOBALS['stdata62'];
}else{
	$heightpx = 500;
}
if(trim($GLOBALS['stdata70']) !== ''){
	$headerwidthpx = $GLOBALS['stdata70'];
}else{
	$headerwidthpx = 2200;
}
$custom_header = array(
	'random-default' => false,
	'width' => $headerwidthpx,
	'height' => $heightpx,
	'flex-height' => true,
	'flex-width' => false,
	'default-text-color' => '',
	'header-text' => false,
	'uploads' => true,
	'default-image' => get_stylesheet_directory_uri() . '/images/af.png',
);
add_theme_support( 'custom-header', $custom_header );

if (!function_exists('st_custom_excerpt_length')) {
    function st_custom_excerpt_length($length) {
	if(trim($GLOBALS['stdata73']) !== ''){
		$excerptcount = $GLOBALS['stdata73'];
	}else{
		$excerptcount = 100;
	}
	    return $excerptcount;
    }
}
add_filter( 'excerpt_length', 'st_custom_excerpt_length', 999 );

if ( !function_exists( 'st_custom_excerpt_more' ) ) {
	function st_custom_excerpt_more( $more ) {
		return ' ... ';
	}
}
add_filter( 'excerpt_more', 'st_custom_excerpt_more' );

if ( !function_exists( 'st_wrap_h3' ) ) {
	function st_wrap_h3( $the_content ) {
			$the_content = preg_replace(
				'!(<h3(?:\s+[^>]*)?>)(.+?)(</h3>)!is',
				'$1<i class="fa fa-check-circle"></i><span>$2</span>$3',
				$the_content
			);

		return $the_content;
	}

	if ( isset($GLOBALS['stdata3']) && $GLOBALS['stdata3'] === 'yes' ) {
		add_filter( 'the_content', 'st_wrap_h3' );
	}
}

if ( !function_exists( 'st_is_mobile' ) ) {
	function st_is_mobile() {
		$useragents = array(
			'iPhone', // iPhone
			'iPod', // iPod touch
			'Android.*Mobile', // 1.5+ Android *** Only mobile
			'Windows.*Phone', // *** Windows Phone
			'dream', // Pre 1.5 Android
			'CUPCAKE', // 1.5+ Android
			'blackberry9500', // Storm
			'blackberry9530', // Storm
			'blackberry9520', // Storm v2
			'blackberry9550', // Storm v2
			'blackberry9800', // Torch
			'webOS', // Palm Pre Experimental
			'incognito', // Other iPhone browser
			'webmate' // Other iPhone browser

		);
		$pattern = '/' . implode( '|', $useragents ) . '/i';

		return preg_match( $pattern, $_SERVER['HTTP_USER_AGENT'] );
	}
}


if ( !function_exists( 'st_trim_excerpt' ) ) {
	function st_trim_excerpt( $text = '' ) {
		if ( $text !== '' ) {
			return $text;
		}

		$text = get_the_content( '' );
		$text = apply_filters( 'the_content', $text );
		$text = str_replace( ']]>', ']]&gt;', $text );

		$excerpt_length = apply_filters( 'excerpt_length', 55 );

		$excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
		$text         = wp_trim_words( $text, $excerpt_length, $excerpt_more );

		return $text;
	}
}
add_filter( 'get_the_excerpt', 'st_trim_excerpt' );

add_theme_support( 'post-thumbnails' );

add_image_size( 'st_thumb100', 100, 100, true );
add_image_size( 'st_thumb150', 150, 150, true );
add_image_size( 'st_thumb300', 300, 300, true );
add_image_size( 'st_thumb400', 400, 400, true );

add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
	   array(
		  'primary-menu' => __( 'ヘッダー用メニュー', 'default' ),
		  'secondary-menu' => __( 'フッター用メニュー', 'default' ),
		  'sidepage-menu' => __( 'サイド用メニュー', 'default' ),
		  'smartphone-menu' => __( 'スマートフォン用メニュー', 'default' ),
		  'smartphone-middlemenu' => __( 'スマートフォン用ミドルメニュー （ST-PRO）', 'default' ),
		  'smartphone-footermenu' => __( 'スマートフォンフッター用メニュー （ST-PRO）', 'default' )
	   )
    );
}

add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'automatic-feed-links' );
add_editor_style( 'editor-style.css' );

if ( isset( $GLOBALS['stdata128'] ) && trim( $GLOBALS['stdata128'] ) !== '' ) { //全体のwidth 
	$st_pcsite_width = (int) $GLOBALS['stdata128'];
	$st_content_width = $st_pcsite_width - 140;
}else{
	$st_content_width = 920;
}

if ( !isset( $content_width ) ) {
	$content_width = $st_content_width;
}

if ( !function_exists( 'st_custom_editor_settings' ) ) {
	function st_custom_editor_settings( $initArray ) {
		$initArray['body_id'] = 'primary';
		$initArray['body_class'] = 'post';

		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'st_custom_editor_settings' );

if ( isset($GLOBALS['stdata2']) && $GLOBALS['stdata2'] === '' ) {
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
}

if ( !function_exists( 'st_custom_content_more_link' ) ) {
	function st_custom_content_more_link( $output ) {
		$output = preg_replace( '/#more-[\d]+/i', '', $output );

		return $output;
	}
}
add_filter( 'the_content_more_link', 'st_custom_content_more_link' );

if ( !function_exists( 'no_self_ping' ) ) {
	function no_self_ping( &$links ) {
		$home = home_url();
		foreach ( $links as $l => $link )
			if ( 0 === strpos( $link, $home ) )
				unset($links[$l]);
	}
add_action( 'pre_ping', 'no_self_ping' );
}

if ( !function_exists( 'st_wrap_iframe_in_div' ) ) {
	function st_wrap_iframe_in_div( $the_content ) {
		//YouTube
		$the_content =
		    preg_replace( '/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is',
			   '<div
		class="youtube-container">${0}</div>',
			   $the_content );

		return $the_content;
	}
}

if ( !function_exists( 'st_singular_wrap_iframe_in_div' ) ) {
	function st_singular_wrap_iframe_in_div( $the_content ) {
		if ( is_singular() ) {
			$the_content = st_wrap_iframe_in_div( $the_content );
		}

		return $the_content;
	}
}
add_filter('the_content','st_singular_wrap_iframe_in_div');

if ( !function_exists( 'st_register_sidebars' ) ) {
	function st_register_sidebars() {

		register_sidebar( array(
				  'id' => 'sidebar-10',
				  'name' => 'サイドバートップ',
			'description' => 'サイドバーの一番上に表示されるコンテンツエリアです。',
				  'before_widget' => '<div class="ad">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );


		register_sidebar( array(
			'id' => 'sidebar-1',
			'name' => 'サイドバーウイジェット',
			'description' => 'サイドバーに表示されるコンテンツです',
			'before_widget' => '<div class="ad">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="menu_underh2">',
			'after_title' => '</h4>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-2',
			'name' => 'スクロール広告用',
			'description' => 'サイドバーの下でコンテンツに追尾するボックスエリアです。「テキスト」をここにドロップして内容を入力して下さい。アドセンスは禁止です。※PC以外では非表示部分',
			'before_widget' => '<div class="ad">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="menu_underh2" style="text-align:left;">',
			'after_title' => '</h4>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-3',
			'name' => '広告・Googleアドセンス用336px',
			'description' => 'Googleアドセンス336pxに適したボックスで記事下に2つ連続で表示されます。「テキスト」をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-4',
			'name' => '広告・Googleアドセンスのスマホ用300px',
			'description' => 'Googleアドセンス300pxに適したボックスで記事下に1つサイドバーの上に１つショートコードを利用した時のアドセンス時にも挿入されます。「テキスト」をここにドロップしてコードを入力して下さい。タイトルは反映されません。',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-23',
			'name' => 'PCのみ投稿記事上に表示',
			'description' => 'PC閲覧時のみ投稿記事上（AMPを除く）に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="pc-kizi-top-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-20',
			'name' => '広告・スマホ用上部のみ （ST-PRO）',
			'description' => 'スマホ閲覧時にヘッダー下に表示される「レスポンシブ リンク」専用エリア。「テキスト」をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="adsbygoogle">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
				  'id' => 'sidebar-9',
				  'name' => '広告・スマホ用記事下のみ （ST-PRO）',
			'description' => 'スマホのみ記事下に表示されるボックスエリアです。',
				  'before_widget' => '<div class="headbox">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
			'id' => 'sidebar-16',
			'name' => '投稿記事の上に一括表示',
			'description' => '投稿記事の上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-5',
			'name' => '投稿記事の下に一括表示',
			'description' => '投稿記事の下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-17',
			'name' => '固定記事の上に一括表示',
			'description' => '固定記事の上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-6',
			'name' => '固定記事の下に一括表示',
			'description' => '固定記事の下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
				  'id' => 'sidebar-8',
				  'name' => 'ヘッダー用ウイジェット',
			'description' => 'ヘッダーとフッターに表示されるウィジェットです※タイトルは反映されません',
				  'before_widget' => '<div class="headbox">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-14',
				  'name' => 'ヘッダー画像エリアウイジェット',
			'description' => 'ヘッダー画像の代わりに挿入するウィジェットです。プラグイン「MetaSlider」など※タイトルは反映されません',
				  'before_widget' => '<div class="top-content">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-11',
				  'name' => 'フッター右用ウイジェット',
			'description' => 'フッターの右側に表示されるウィジェットです。ここを使用するとPCで見た時にフッターのロゴ等が左寄りになり2カラムになります。※タイトルは反映されません',
				  'before_widget' => '<div class="footer-rbox">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-12',
				  'name' => 'トップページ上部ウイジェット',
			'description' => 'トップページの上部に表示されるウィジェットです。「お知らせ」や「告知」スペースなどに※タイトルは反映されません',
				  'before_widget' => '<div class="top-wbox-t">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-13',
				  'name' => 'トップページ下部ウイジェット',
			'description' => 'トップページの下部に表示されるウィジェットです。トップのみに表示したいリンクや広告などに※タイトルは反映されません',
				  'before_widget' => '<div class="top-wbox-u">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-15',
				  'name' => 'オリジナルのショートコード作成ウィジェット （ST-PRO）',
			'description' => 'ショートコードoriginalscの挿入することで表示できるウィジェットです※タイトルは反映されません',
				  'before_widget' => '<div style="padding:10px 0;">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
				  'id' => 'sidebar-18',
				  'name' => 'スマートフォンのフッターに固定するウィジェット',
			'description' => 'スマートフォン表示時にフッターに固定する広告用ウィジェットエリアです※タイトルは反映されません',
				  'before_widget' => '<div id="footer-ad">',
				  'after_widget' => '</div>',
				  'before_title' => '<p class="st-widgets-title">',
				  'after_title' => '</p>',
			   ) );

		register_sidebar( array(
			'id' => 'sidebar-19',
			'name' => 'AMPサイドバーウイジェット （ST-PRO）',
			'description' => 'AMP専用サイドバーに表示されるコンテンツです※一部未対応タグがございます',
			'before_widget' => '<div class="ad">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="menu_underh2">',
			'after_title' => '</h4>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-21',
			'name' => 'カテゴリの上に一括表示 （ST-PRO）',
			'description' => 'カテゴリページの上に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-22',
			'name' => 'カテゴリの下に一括表示 （ST-PRO）',
			'description' => 'カテゴリページの下に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="kizi-under-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-24',
			'name' => '404ページ',
			'description' => '記事が見つからない時に表示される404ページに挿入するウィジェットです',
			'before_widget' => '<div class="st-w-404">',
			'after_widget' => '</div>',
			'before_title' => '<h5">',
			'after_title' => '</h5>',
		) );

		register_sidebar( array(
			'id' => 'sidebar-25',
			'name' => 'アコーディオンメニュー内に表示 （ST-PRO）',
			'description' => 'アコーディオンメニュー上部に一括表示されます。「テキスト」等をここにドロップしてコードを入力して下さい。※タイトルは反映されません',
			'before_widget' => '<div class="pc-kizi-top-box">',
			'after_widget' => '</div>',
			'before_title' => '<p class="st-widgets-title">',
			'after_title' => '</p>',
		) );

	}
}
//sidebar-23まで
add_action( 'widgets_init', 'st_register_sidebars' );

if ( !function_exists( 'st_get_mtime' ) ) {
	function st_get_mtime( $format ) {
		$mtime = (int) get_the_modified_time( 'Ymd' );
		$ptime = (int) get_the_time( 'Ymd' );

		if ( $ptime > $mtime ) {
			return get_the_time( $format );
		} elseif ( $ptime === $mtime ) {
			return null;
		} else {
			return get_the_modified_time( $format );
		}
	}
}

if ( !function_exists( 'st_rss_feed_copyright' ) ) {
	function st_rss_feed_copyright( $content ) {
		$content = $content . '<p>Copyright &copy; ' . esc_html( date( 'Y' ) ) .
				 ' <a href="' . esc_url( home_url() ) . '">' .
				 apply_filters( 'bloginfo', get_bloginfo( 'name' ), 'name' ) .
				 '</a> All Rights Reserved.</p>';

		return $content;
	}
}
add_filter( 'the_excerpt_rss', 'st_rss_feed_copyright' );
add_filter( 'the_content_feed', 'st_rss_feed_copyright' );

if ( !function_exists( 'st_showads' ) ) {
	function st_showads() {
		ob_start();

		get_template_part( 'st-ad' );

		$ads = ob_get_clean();

		return $ads;
	}

	add_shortcode( 'adsense', 'st_showads' );
}

if ( !function_exists( 'st_stchildlink' ) ) {
	function st_stchildlink() {
		global $post;
		$args = array(
			'post_parent' => $post->ID,
			'post_type' => 'page',
		'orderby' => 'menu_order',
		'order'   => 'ASC',
		);

		$subpages = new WP_query( $args );

		if ( $subpages->have_posts() ) {
			$output = '<aside class="pagelist-box"><div class="st-childlink">';

			while ( $subpages->have_posts() ) {
				$subpages->the_post();
				$output .= '<p class="kopage-t"><a href="' . esc_url( apply_filters( 'the_permalink', get_permalink() ) ) . '">' .get_the_title() .'</a></p>' .
						 apply_filters( 'the_excerpt', get_the_excerpt() );
			}

			$output .= '</div></aside>';
		} else {
			$output = '';
		}

		wp_reset_postdata();

		return $output;
	}

	add_shortcode( 'stchildlink', 'st_stchildlink' );
}

if ( !function_exists( 'st_shortcode_tp' ) ) {
	function st_shortcode_tp( $atts, $content = '' ) {
		return get_stylesheet_directory_uri() . '/' . ltrim($content, '/\\');
	}

	add_shortcode( 'tp', 'st_shortcode_tp' );
}

if ( !function_exists( 'st_wrap_class' ) ) {
	function st_wrap_class() {
		$column1 = '';
		$stdata11 = get_option( 'st-data11' );

		if ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'yes' ) || ( is_home() && $stdata11 === 'yes' ) || ( $column1 === 'yes' && !is_home() ) ) {
			$wrapclass = 'colum1';
		} elseif ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'lp' ) || ( is_home() && $stdata11 === 'lp' ) || ( $column1 === 'lp' && !is_home() ) ) {
			$wrapclass = 'colum1 lp';
		} else {
			$wrapclass = '';
		}

		echo esc_attr( $wrapclass );
	}
}

if ( !function_exists( 'st_hidden_class' ) ) {
	function st_hidden_class() {
		if ( (is_single() && isset($GLOBALS['stdata24']) && $GLOBALS['stdata24'] === 'yes') || //投稿ページ
		(is_page() && isset($GLOBALS['stdata104']) && $GLOBALS['stdata104'] === 'yes') ||  //固定ページ
		( ( isset($GLOBALS['stdata24']) && $GLOBALS['stdata24'] === 'yes') && ( isset($GLOBALS['stdata104']) && $GLOBALS['stdata104'] === 'yes') )){ //両方にチェック
		$hiedeclass = 'st-hide';
		}else{
		$hiedeclass = '';
		}
	echo esc_attr( $hiedeclass );
	}
}


if ( !function_exists( 'st_head_class' ) ) {
	function st_head_class() {
		if ( isset($GLOBALS['stdata52']) && $GLOBALS['stdata52'] === 'yes' ) {
		$headwide = 'st-headwide';
		}else{
		$headwide = '';
		}
	echo esc_attr( $headwide );
	}
}

if ( !function_exists( 'st_marugazou_class' ) ) {
	function st_marugazou_class() {
		if ( isset($GLOBALS['stdata48']) && $GLOBALS['stdata48'] === 'yes' ) {
			$kadomaru = 'kadomaru';
		}else{
			$kadomaru = '';
		}

	echo esc_attr( $kadomaru );
	}
}

if ( !function_exists( 'st_text_copyck' ) ) {
	function st_text_copyck() {
		global $wp_query;
		if( is_single() or is_page() && !is_front_page() ){
			$postID = $wp_query->post->ID;
			$textcopyck1 = get_post_meta( $postID, 'textcopyck', true );
		}else{
		$textcopyck1 = '';
		}

	if ( isset( $textcopyck1 ) && $textcopyck1 === 'yes' ){
		$st_textcopyck = '';
	} else {
		if ( isset($GLOBALS['stdata19']) && $GLOBALS['stdata19'] === 'yes' ) {
			$st_textcopyck = 'oncontextmenu="return false" onMouseDown="return false;" style="-moz-user-select: none; -khtml-user-select: none; user-select: none;-webkit-touch-callout:none; -webkit-user-select:none;"';
		} else {
			$st_textcopyck = '';
		}
	}
		echo $st_textcopyck ;
	}
}

if (!function_exists('st_icon_head')) {
	function st_icon_head() {
		if ( trim( $GLOBALS["stdata26"] ) !== '' ) {
		$fabiconurl = esc_url( $GLOBALS["stdata26"] );
		echo '<link rel="shortcut icon" href="'.$fabiconurl.'" >'."\n";
		}
		if ( trim( $GLOBALS["stdata27"] ) !== '' ) {
		$appletouchiconurl = esc_url( $GLOBALS["stdata27"] );
		echo '<link rel="apple-touch-icon-precomposed" href="'.$appletouchiconurl.'" />'."\n";
		}

	}
    
}
add_action('wp_head', 'st_icon_head');

if (!function_exists('st_metadescription_head')) {
	function st_metadescription_head() {
		if ( trim( $GLOBALS["stdata34"] ) !== '' && ( is_front_page()) ) {
		$stdescription_top = esc_attr( $GLOBALS["stdata34"] );
		echo '<meta name="description" content="' . $stdescription_top .'">'. "\n";
		}

	}
}
add_action('wp_head', 'st_metadescription_head');

if (!function_exists('st_metakeywords_head')) {
	function st_metakeywords_head() {
		if ( trim( $GLOBALS["stdata46"] ) !== '' && ( is_front_page()) ) {
		$stmetakeywords_top = esc_attr( $GLOBALS["stdata46"] );
		echo '<meta name="keywords" content="' . $stmetakeywords_top .'">'. "\n";
		}

	}
}
add_action('wp_head', 'st_metakeywords_head');

if (!function_exists('st_satikoadds_head')) {
	function st_satikoadds_head() {
		if ( trim( $GLOBALS["stdata14"] ) !== '' ) {
		$satiko = stripslashes( $GLOBALS["stdata14"] );
		echo '<meta name="google-site-verification" content="'.$satiko.'"/>'."\n";
		}
	}
}
add_action('wp_head', 'st_satikoadds_head');


if (!function_exists('st_tiny_mce_before_init')) {
	function st_tiny_mce_before_init( $init_array ) {
	$init_array['block_formats'] = '段落=p;見出し2=h2;見出し3=h3;見出し4=h4;見出し5=h5;見出し6=h6';
	$init_array['fontsize_formats'] = '70% 80% 90% 120% 130% 150% 200% 250% 300%';
	$style_formats = array (
		array( 'title' => '太字', 'inline' => 'span', 'classes' => 'huto' ),
		array( 'title' => '太字（赤）', 'inline' => 'span', 'classes' => 'hutoaka' ),
		array( 'title' => '大文字', 'inline' => 'span', 'classes' => 'oomozi' ),
		array( 'title' => '小文字', 'inline' => 'span', 'classes' => 'komozi' ),
		array( 'title' => 'ドット線', 'inline' => 'span', 'classes' => 'dotline' ),
		array( 'title' => '黄マーカー', 'inline' => 'span', 'classes' => 'ymarker' ),
		array( 'title' => '赤マーカー', 'inline' => 'span', 'classes' => 'rmarker' ),
		array( 'title' => '参考', 'inline' => 'span', 'classes' => 'sankou' ),
		array( 'title' => '必須', 'inline' => 'span', 'classes' => 'st-hisu' ),
		array( 'title' => '写真に枠線', 'inline' => 'span', 'classes' => 'photoline' ),
		array( 'title' => '記事タイトルデザイン', 'block' => 'p', 'classes' => 'entry-title' ),
		array( 'title' => 'code', 'inline' => 'code' ),
		array( 'title' => '吹き出し', 'block' => 'p', 'classes' => 'h2fuu' ),
		array( 'title' => 'はてな', 'block' => 'p', 'classes' => 'hatenamark' ),
		array( 'title' => '注意', 'block' => 'p', 'classes' => 'attentionmark' ),
		array( 'title' => '人物マーク', 'block' => 'p', 'classes' => 'usermark' ),
		array( 'title' => 'チェックマーク', 'block' => 'p', 'classes' => 'checkmark' ),
		array( 'title' => 'メモマーク', 'block' => 'p', 'classes' => 'memomark' ),
		array( 'title' => '回り込み解除', 'block' => 'div', 'classes' => 'clearfix' , 'wrapper' => true ),
		array( 'title' => 'センター寄せ', 'block' => 'div', 'classes' => 'center' , 'wrapper' => true ),
		array( 'title' => '下に余白', 'block' => 'div', 'classes' => 'under-space' , 'wrapper' => true ),
		array( 'title' => '黄色ボックス', 'block' => 'div', 'classes' => 'yellowbox' , 'wrapper' => true ),
		array( 'title' => '薄赤ボックス', 'block' => 'div', 'classes' => 'redbox' , 'wrapper' => true ),
		array( 'title' => 'グレーボックス', 'block' => 'div', 'classes' => 'graybox' , 'wrapper' => true ),
		array( 'title' => '引用風ボックス', 'block' => 'div', 'classes' => 'inyoumodoki' , 'wrapper' => true ),
		);
	$init_array['style_formats'] = json_encode( $style_formats );
	$init['style_formats_merge'] = false;
	return $init_array;
	}
}
add_filter( 'tiny_mce_before_init', 'st_tiny_mce_before_init' );

if ( !function_exists( '_st_insert_tiny_mce_button' ) ) {
	function _st_insert_tiny_mce_button( $button, $buttons, $position = 1 ) {
		$button_count = count( $buttons );

		if ( $button_count === 0 || $button_count < $position ) {
			$buttons[] = $button;

			return $buttons;
		}

		if ( $position === 1 ) {
			array_unshift( $buttons, $button );

			return $buttons;
		}

		$index   = $position - 1;
		$before  = array_slice( $buttons, 0, $index, true );
		$after   = array_slice( $buttons, $index, true );
		$buttons = array_merge( $before, array( $button ), $after );

		return $buttons;
	}
}

if ( !function_exists( 'st_tiny_mce_style_select' ) ) {
	function st_tiny_mce_style_select( $buttons ) {
		$position = 2;

		$button = 'styleselect';

		unset( $buttons[$button] );

		return _st_insert_tiny_mce_button( $button, $buttons, $position );
	}
}

add_filter( 'mce_buttons_2', 'st_tiny_mce_style_select' );

if (!function_exists('st_add_orignal_quicktags')) {

	function st_add_orignal_quicktags() {
		if ( wp_script_is( 'quicktags' ) ) { ?>
			<script type="text/javascript">
				<?php if ( trim($GLOBALS['stdata198']) === '' ): ?>
					QTags.addButton('ed_p', 'P', '<p>', '</p>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata188']) === '' ): ?>
					QTags.addButton('ed_huto', '太字', '<span class="huto">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata189']) === '' ): ?>
					QTags.addButton('ed_hutoaka', '太字（赤）', '<span class="hutoaka">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata190']) === '' ): ?>
					QTags.addButton('ed_oomozi', '大文字', '<span class="oomozi">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata191']) === '' ): ?>
					QTags.addButton('ed_komozi', '小文字', '<span class="komozi">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata192']) === '' ): ?>
					QTags.addButton('ed_dotline', 'ドット線', '<span class="dotline">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata193']) === '' ): ?>
					QTags.addButton('ed_ymarker', '黄マーカー', '<span class="ymarker">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata194']) === '' ): ?>
					QTags.addButton('ed_rmarker', '赤マーカー', '<span class="rmarker">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata195']) === '' ): ?>
					QTags.addButton('ed_sankou', '参考', '<span class="sankou">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata196']) === '' ): ?>
					QTags.addButton('ed_hisu', '必須', '<span class="st-hisu">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata197']) === '' ): ?>
					QTags.addButton('ed_photoline', '写真に枠線', '<span class="photoline">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata156']) === '' ): ?>
					QTags.addButton('ed_entry', '記事タイトルデザイン', '<p class="entry-title">', '</p>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata199']) === '' ): ?>
					QTags.addButton('ed_code', 'code', '<code>', '</code>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata157']) === '' ): ?>
					QTags.addButton('ed_ads', 'アドセンス', '[adsense]', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata158']) === '' ): ?>
					QTags.addButton('ed_sc', 'オリジナルSC ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata159']) === '' ): ?>
					QTags.addButton('ed_freebox', 'フリーボックス', '<div style="padding:10px 0;"><div class="freebox"><p class="p-free"><span class="p-entry-f">タイトル（全角15文字）</span></p><div class="free-inbox">ここに本文を記述</div></div></div>', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata160']) === '' ): ?>
					QTags.addButton('ed_toc', '目次（TOC+）', '[toc]', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata161']) === '' ): ?>
					QTags.addButton('ed_star', 'スター', '[star5]', '');
				<?php endif; ?>

				QTags.addButton('ed_blogcard', 'ブログカード風 ', '', '');
				QTags.addButton('ed_youtube', 'YouTubeID ', '', '');

				<?php if ( trim($GLOBALS['stdata162']) === '' ): ?>
					QTags.addButton('ed_stchildlink', '固定ページ子ページリンク', '[stchildlink]', '');
				<?php endif; ?>

				QTags.addButton('ed_btnlink_l', '公式ボタン ', '', '');
				QTags.addButton('ed_btnlink_r', '詳細ボタン ', '', '');

				<?php if ( trim($GLOBALS['stdata163']) === '' ): ?>
					QTags.addButton('ed_clearfix', '回り込み解除', '<div class="clearfix">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata164']) === '' ): ?>
					QTags.addButton('ed_center', 'センター寄せ', '<div class="center">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata165']) === '' ): ?>
					QTags.addButton('ed_bottom', '下に余白', '<div style="padding-bottom:10px">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata166']) === '' ): ?>
					QTags.addButton('ed_yellowbox', '黄色ボックス', '<div class="yellowbox">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata167']) === '' ): ?>
					QTags.addButton('ed_redbox', '薄赤ボックス', '<div class="redbox">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata168']) === '' ): ?>
					QTags.addButton('ed_graybox', 'グレーボックス', '<div class="graybox">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata169']) === '' ): ?>
					QTags.addButton('ed_stcardstyle', 'カードスタイル ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata170']) === '' ): ?>
					QTags.addButton('ed_stcardstyleb', 'カードスタイルB ','', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata171']) === '' ): ?>
					QTags.addButton('ed_inyoumodoki', '引用風', '<div class="inyoumodoki">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata172']) === '' ): ?>
					QTags.addButton('ed_maruno', 'olタグを囲む数字ボックス', '<div class="maruno">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata173']) === '' ): ?>
					QTags.addButton('ed_maruck', 'ulタグを囲むチェックボックス', '<div class="maruck">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata174']) === '' ): ?>
					QTags.addButton('ed_kintou', 'ulタグを囲む均等横並び', '<div class="kintou">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata176']) === '' ): ?>
					QTags.addButton('ed_resetwidth', 'width100%リセット', '<span class="resetwidth">', '</span>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata175']) === '' ): ?>
					QTags.addButton('ed_scroll_box', 'table横スクロール要素', '<div class="scroll-box">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata200']) === '' ): ?>
					QTags.addButton('ed_notab', '装飾なしテーブル', '<div class="notab">', '</div>');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata177']) === '' ): ?>
					QTags.addButton('ed_smanone', 'スマホに表示しないボックス ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata178']) === '' ): ?>
					QTags.addButton('ed_pcnone', 'PCに表示しないボックス ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata179']) === '' ): ?>
					QTags.addButton('ed_responbox', 'PCとTab左右40:60%', '<div class="clearfix responbox"><div class="lbox"><p>左側のコンテンツ40%</p></div><div class="rbox"><p>右側のコンテンツ60%</p></div></div>', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata180']) === '' ): ?>
					QTags.addButton('ed_responbox50', 'PCとTab左右50%', '<div class="clearfix responbox50"><div class="lbox"><p>左側のコンテンツ50%</p></div><div class="rbox"><p>右側のコンテンツ50%</p></div></div>', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata181']) === '' ): ?>
					QTags.addButton('ed_responbox50s', '全サイズ左右50% ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata182']) === '' ): ?>
					QTags.addButton('ed_responbox30s', '全サイズ左右30:70% ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata183']) === '' ): ?>
					QTags.addButton('ed_responboxfree', '全サイズ左右free% ', '', '');
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata186']) === '' ): ?>
					QTags.addButton( 'ed_ive', 'イベント', "onclick=\"ga('send', 'event', 'linkclick', 'click', 'hoge');\"", '' );
				<?php endif; ?>

				<?php if ( trim($GLOBALS['stdata187']) === '' ): ?>
					QTags.addButton( 'ed_nofollow', 'nofollow', " rel=\"nofollow\"", '' );
				<?php endif; ?>

			</script>
			<?php
		}
	}
}

if ( trim($GLOBALS['stdata137']) === '' ) {
	add_action('admin_print_footer_scripts', 'st_add_orignal_quicktags');
}

if ( !function_exists( 'st_editor_option_content_retriever' ) ) {
	function st_editor_option_content_retriever( $name ) {
		return stripslashes( get_option( $name, '' ) );
	}
}

if ( !function_exists( 'st_get_the_editor_content' ) ) {
	function st_get_the_editor_content( $name, $content_retriever = null ) {
		$content_retriever = is_callable( $content_retriever ) ? $content_retriever : 'st_editor_option_content_retriever';

		return call_user_func( $content_retriever, $name );
	}
}

if ( !function_exists( 'st_the_editor_content' ) ) {
	function st_the_editor_content( $name, $content_retriever = null ) {
		$content = st_get_the_editor_content( $name, $content_retriever );

		add_filter( 'the_content', 'st_wrap_iframe_in_div' );

		$content = apply_filters( 'the_content', $content );

		remove_filter( 'the_content', 'st_wrap_iframe_in_div' );

		$content = apply_filters( 'st_the_editor_content', $content );
		$content = str_replace( ']] > ', ']]&gt;', $content );

		echo $content;
	}
}

if ( isset($GLOBALS['stdata45']) && $GLOBALS['stdata45'] === 'yes' ) {
	add_filter('widget_text', 'do_shortcode' );
}


if (!function_exists('st_admin_css')) {
	function st_admin_css($hook_suffix) {
		echo  $str = <<< EOS
		<style type="text/css"><!--
		.fa{margin-right:5px};
		--></style>
EOS;
	}
}
add_action('admin_enqueue_scripts', 'st_admin_css');

function wp_custom_admin_css() {
	echo "\n" . '<link href="' .get_template_directory_uri(). '/css/fontawesome/css/font-awesome.min.css' . '" rel="stylesheet" type="text/css" />' . "\n";
}
add_action('admin_head', 'wp_custom_admin_css', 100);

function st_admin_script(){
	wp_enqueue_script( 'st-admin-script', get_template_directory_uri() . '/st-admin-script.js', array( 'jquery' ) );
}
add_action( 'admin_enqueue_scripts', 'st_admin_script' );

if ( isset($GLOBALS['stdata47']) && $GLOBALS['stdata47'] === 'yes' ) {
	add_filter( 'auto_update_core', '__return_false' );
}

if ( !function_exists( 'st_body_class' ) ) {
	function st_body_class( $classes ) {
		if ( st_is_mobile() ) {
			$classes[] = 'mobile';
		}

		$test_queries = array(
			'front-page' => is_front_page(),
		);

		foreach ( $test_queries as $class => $is_true ) {
			$classes[] = $is_true ? $class : ('not-' . $class);
		}

		return array_unique( $classes );
	}
}
add_filter( 'body_class', 'st_body_class' );

if ( !function_exists( 'st_author' ) ) {
	function st_author() {
		if ( (trim($GLOBALS['stdata17']) !== '' ) && ($GLOBALS['stdata17'] === 'yes') ) {
		echo '<p class="author">執筆者:<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">' . get_the_author() . '</span>' . '</a></p>';
		}else{
		echo '<p class="author" style="display:none;"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="' . get_the_author() . '" class="vcard author">'. '<span class="fn">author</span>' . '</a></p>';
		}
	}
}

if ( isset($GLOBALS['stdata58']) && $GLOBALS['stdata58'] === 'yes' ) {
	remove_action('do_feed_rdf', 'do_feed_rdf');
	remove_action('do_feed_rss', 'do_feed_rss');
	remove_action('do_feed_rss2', 'do_feed_rss2');
	remove_action('do_feed_atom', 'do_feed_atom');
}

if ( isset($GLOBALS['stdata129']) && $GLOBALS['stdata129'] === 'yes' ) {
	if ( !function_exists( 'st_add_posts_columns' ) ) {
		function st_add_posts_columns($columns, $post_type) {
			if ( post_type_supports( $post_type, 'thumbnail' ) ) {
				$columns['thumbnail'] = 'サムネイル';
			}

			$columns['postid'] = 'ID';

			if ( post_type_supports( $post_type, 'editor' ) ) {
				$columns['count'] = '文字数';
			}

			echo '<style type="text/css">
			.fixed .column-thumbnail {width: 120px;}
			.fixed .column-postid {width: 5%;}
			.fixed .column-count {width: 5%;}
			</style>';

			return $columns;
		}
	}
	if ( !function_exists( 'st_add_posts_columns_row' ) ) {
		function st_add_posts_columns_row($column_name, $post_id) {
			if ( 'thumbnail' == $column_name ) {
				$thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
				echo ( $thumb ) ? $thumb : '−';
			} elseif ( 'postid' == $column_name ) {
				echo $post_id;
			} elseif ( 'count' == $column_name ) {
			$count = mb_strlen(strip_tags(get_post_field('post_content', $post_id)));
			echo $count;
			}
		}
	}
	add_filter( 'manage_posts_columns', 'st_add_posts_columns', 10, 2 );
	add_action( 'manage_posts_custom_column', 'st_add_posts_columns_row', 10, 2 );

	if ( isset( $GLOBALS['st_affiliate_manager'], $GLOBALS['st_affiliate_manager']['affiliate_tag_post.post_type'] )) {
		add_action( 'manage_' . $GLOBALS['st_affiliate_manager']['affiliate_tag_post.post_type']->getName() . '_posts_custom_column', 'st_add_posts_columns_row', 10, 2 );
	}

	if ( isset( $GLOBALS['st_ab_test'], $GLOBALS['st_ab_test']['group_post_type'] ) ) {
		add_action( 'manage_' . $GLOBALS['st_ab_test']['group_post_type']->get_name() . '_posts_custom_column', 'st_add_posts_columns_row', 10, 2 );
	}

	if ( isset( $GLOBALS['st_kaiwa'], $GLOBALS['st_kaiwa']['speech_bubble_post_type'] ) ) {
		add_action( 'manage_' . $GLOBALS['st_kaiwa']['speech_bubble_post_type']->get_name() . '_posts_custom_column', 'st_add_posts_columns_row', 10, 2 );
	}
}

if ( isset($GLOBALS['stdata61']) && $GLOBALS['stdata61'] === 'yes' ) {
	if ( ! function_exists( 'st_mytheme_init' ) ) {
		function st_mytheme_init() {
			global $wp_rewrite;
			$wp_rewrite->use_trailing_slashes = false;
			$wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
		flush_rewrite_rules( false );
		}
	}
	add_action( 'init', 'st_mytheme_init' );
}

add_action('admin_print_styles','st_admin_print_styles');
function st_admin_print_styles(){
	echo '<link href="'.get_template_directory_uri().'/admin.css" type="text/css" rel="stylesheet" madia="all" />'. PHP_EOL;
}

function sanitize_checkbox($input){
	if($input==true){
		return true;
	}else{
		return false;
	}
}

function st_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
	   return $input;
    } else {
	   return $setting->default;
    }
}

function sanitize_int($input){
	return intval($input);
}

if ( ! function_exists( 'st_canonical' ) ) {
	function st_canonical() {
		$page_id_on_top    = (int) get_option( 'st-data9' );
		$queried_object_id = get_queried_object_id();
		$is_page_on_top    = ( $page_id_on_top !== 0 && $queried_object_id === $page_id_on_top );

		if ( $is_page_on_top ) {
			echo '<link rel="canonical" href="' . esc_url( home_url() ) . '" />' . "\n";

			return;
		}

		rel_canonical();
	}
}
remove_action( 'wp_head', 'rel_canonical' );
add_action( 'wp_head', 'st_canonical' );

if ( !function_exists( 'st_noheader_class' ) ) {
	function st_noheader_class(){
		if( !has_header_image() || ( st_is_mobile() && trim($GLOBALS['stdata71']) !== '' ) || ( has_header_image() && ( trim($GLOBALS["stdata76"]) === 'yes' ||  trim($GLOBALS["stdata88"]) === 'yes' ) ) ){
			echo 'noheader';
		}else{
			echo 'onheader';
		}
	}
}
	
if ( !function_exists( 'load_stylesheet2' ) ) {
	function register_stylesheet2() {
		wp_register_style( 'single2', get_template_directory_uri() . '/st-kanricss.php', array(), null, 'all' );
	}

	function load_stylesheet2() {
		register_stylesheet2();
		wp_enqueue_style( 'single2' );
	}
}
	add_action( 'wp_enqueue_scripts', 'load_stylesheet2' );

// ランキングオリジナルCSS読み込み
function register_stylesheet() {
	wp_register_style( 'single', get_template_directory_uri() . '/st-tagcss.php', array(), null, 'all' );
}

function load_stylesheet() {
	register_stylesheet();
	wp_enqueue_style( 'single' );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheet' );


//star5
if ( !function_exists( 'st_star5_func' ) ) {
	function st_star5_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star5', 'st_star5_func');

//star4.5
if ( !function_exists( 'st_star45_func' ) ) {
	function st_star45_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-half-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star45', 'st_star45_func');

//star4
if ( !function_exists( 'st_star4_func' ) ) {
	function st_star4_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star4', 'st_star4_func');

//star3.5
if ( !function_exists( 'st_star35_func' ) ) {
	function st_star35_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star35', 'st_star35_func');

//star3
if ( !function_exists( 'st_star3_func' ) ) {
	function st_star3_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star3', 'st_star3_func');

//star2
if ( !function_exists( 'st_star2_func' ) ) {
	function st_star2_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star2', 'st_star2_func');

//star1
if ( !function_exists( 'st_star1_func' ) ) {
	function st_star1_func( $arg, $content = null ) {
		return '<span class="y-star"><i class="fa fa-star" aria-hidden="true"></i></span><span class="w-star"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star1', 'st_star1_func');

//star0
if ( !function_exists( 'st_star0_func' ) ) {
	function st_star0_func( $arg, $content = null ) {
		return '<span class="w-star"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>';
	};
}
add_shortcode('star0', 'st_star0_func');

function after_editor() {//エディタ項目下部
    echo '<p>※<span class="pro-only"><a href="//on-store.net/" target="_blank" rel="nofollow">PRO</a></span>マークの付いた機能及びグレーアウトしたクイックボタンは機能は<a href="//on-store.net/" target="_blank" rel="nofollow">PRO版</a>限定となります</p>';
}
add_action( 'edit_form_after_editor', 'after_editor' );