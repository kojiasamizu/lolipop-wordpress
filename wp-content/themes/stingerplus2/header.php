<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9405374189467338",
			enable_page_level_ads: true
		  });
		</script>
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
		<meta name="format-detection" content="telephone=no" >
		
		<?php if ( is_home() && !is_paged() ): ?>
			<meta name="robots" content="index,follow">
		<?php elseif ( is_search() or is_404() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( !is_category() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_paged() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( trim($GLOBALS["stdata9"]) !== '' &&  ($GLOBALS["stdata9"]) == $post->ID ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_category() && trim($GLOBALS["stdata15"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
		<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
		<?php get_template_part( 'analyticstracking' ); //アナリティクスコード ?>
		<?php get_template_part( 'st-ogp' ); //OGP設定 ?>
		<?php get_template_part( 'st-richjs' ); //効果追加 ?>
		<?php get_template_part( 'a-header-code' ); //ヘッダーに挿入するコード ?>
		
		<?php get_template_part('twitter-card');?>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111999074-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-111999074-1');
		</script>
	</head>
	<body <?php body_class(); ?> >
	<?php if( (!st_is_mobile()) && (trim($GLOBALS['stdata110']) !== '') && (trim($GLOBALS['stdata111']) !== '') ): //動画用ID ?>
		<div id="st-player">
	<?php endif; ?>
			<div id="st-ami">
				<div id="wrapper" class="<?php st_wrap_class(); ?>">
				<div id="wrapper-in">
					<header id="<?php st_head_class(); ?>">
						<div id="headbox-bg">
							<div class="clearfix" id="headbox">
								<?php get_template_part( 'st-accordion-menu' ); //アコーディオンメニュー ?>
									<div id="header-l">
										<?php get_template_part( 'st-header-logo' ); //サイト名とディスクリプション ?>
									</div><!-- /#header-l -->
								<div id="header-r" class="smanone">
									<?php if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) {
										get_template_part( 'st-footer-link' ); //フッターリンク 
									} ?>
									<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
								</div><!-- /#header-r -->
							</div><!-- /#headbox-bg -->
						</div><!-- /#headbox clearfix -->
					<?php get_template_part( 'st-header-image' ); //カスタムヘッダー画像 ?>

					</header>
					<div id="content-w">