<?php
/**
 * カスタマイザー用CSS (CSS)
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
?>

/*グループ1
------------------------------------------------------------*/

<?php if($st_table_bordercolor): ?>
/*テーブルのボーダー*/
	.post table {
		border-top-color: <?php echo $st_table_bordercolor; ?>;
		border-right-color: <?php echo $st_table_bordercolor; ?>;
	}

	table tr td {
		border-bottom-color: <?php echo $st_table_bordercolor; ?>;
		border-left-color: <?php echo $st_table_bordercolor; ?>;
	}
<?php endif; ?>

<?php if($st_table_cell_bgcolor): ?>
/*偶数行のセル*/
.post table tr:nth-child(even) {
	background-color: <?php echo $st_table_cell_bgcolor; ?>;
}
<?php endif; ?>

/*縦一行目のセル*/
table tr td:first-child {
	<?php if($st_table_td_bgcolor): ?>
		background-color: <?php echo $st_table_td_bgcolor; ?>;
	<?php endif; ?>
	<?php if($st_table_td_textcolor): ?>
		color: <?php echo $st_table_td_textcolor; ?>;
	<?php endif; ?>
	<?php if($st_table_td_bold): ?>
		font-weight:bold;
	<?php endif; ?>
}

/*横一行目のセル*/
table tr:first-child {
	<?php if($st_table_tr_bgcolor): ?>
		background-color: <?php echo $st_table_tr_bgcolor; ?>;
	<?php endif; ?>
	<?php if($st_table_tr_textcolor): ?>
		color: <?php echo $st_table_tr_textcolor; ?>;
	<?php endif; ?>
	<?php if($st_table_tr_bold): ?>
		font-weight:bold;
	<?php endif; ?>
}



/*TOC+*/
#toc_container {
	<?php if($st_toc_bgcolor){ ?>
		background: <?php echo $st_toc_bgcolor; ?>;
	<?php } ?>

	<?php if($st_toc_bordercolor){ ?>
		border-left-color: <?php echo $st_toc_bordercolor; ?>;
	<?php } ?>
}

<?php if($st_toc_textcolor){ ?>
	#toc_container ul a,
	.post .toc_title {
		color: <?php echo $st_toc_textcolor; ?>;
	}
<?php } ?>

<?php if($st_toc_bordercolor){ ?>
	#toc_container ul a {
		border-bottom-color: <?php echo $st_toc_bordercolor; ?>;
	}
	#toc_container .toc_list > li > a {
		border-bottom-color: <?php echo $st_toc_bordercolor; ?>;
	}
	.toc_number {
		color: <?php echo $st_toc_bordercolor; ?>;
	}
<?php } ?>

/*マル数字olタグ*/
<?php if($st_maruno_bordercolor){ ?>
	.post .maruno { 
		border:2px solid <?php echo $st_maruno_bordercolor; ?>;
		padding:20px 20px 10px;
	}
<?php } ?>

<?php if($st_maruno_bgcolor){ ?>
	.post .maruno { 
		background-color:<?php echo $st_maruno_bgcolor; ?>;
		padding:20px 20px 10px;
	}
<?php } ?>

.post .maruno ol li:before {
	<?php if($st_maruno_nobgcolor){ ?>
		background: <?php echo $st_maruno_nobgcolor; ?>;
	<?php } ?>
	<?php if($st_maruno_textcolor){ ?>
		color:<?php echo $st_maruno_textcolor; ?>;
	<?php } ?>
}

/*チェックulタグ*/
<?php if($st_maruck_bordercolor){ ?>
	.post .maruck { 
		border:2px solid <?php echo $st_maruck_bordercolor; ?>;
		padding:20px 20px 10px;
	}
<?php } ?>

<?php if($st_maruck_bgcolor){ ?>
	.post .maruck { 
		background-color:<?php echo $st_maruck_bgcolor; ?>;
		padding:20px 20px 10px;
	}
<?php } ?>

.post .maruck ul li:before {
	<?php if($st_maruck_nobgcolor){ ?>
		background: <?php echo $st_maruck_nobgcolor; ?>;
	<?php } ?>
	<?php if($st_maruck_textcolor){ ?>
		color:<?php echo $st_maruck_textcolor; ?>;
	<?php } ?>
}

/*Webアイコン*/
<?php if ( $st_webicon_question ): ?>
	.post .fa-question-circle {
		color: <?php echo $st_webicon_question; ?>;
	}
<?php endif; ?>

<?php if ( $st_webicon_check ): ?>
	.post .fa-check-circle {
		color: <?php echo $st_webicon_check; ?>;
	}
<?php endif; ?>

<?php if ( $st_webicon_exclamation ): ?>
	.post .fa-exclamation-triangle {
		color: <?php echo $st_webicon_exclamation; ?>;
}
<?php endif; ?>

<?php if ( $st_webicon_memo ): ?>
	.post .fa-pencil-square-o {
		color: <?php echo $st_webicon_memo; ?>;
	}
<?php endif; ?>

<?php if ( $st_webicon_user ): ?>
	.post .fa-user {
		color: <?php echo $st_webicon_user; ?>;
	}
<?php endif; ?>

/*スライドショー矢印非表示*/
<?php if ( $st_slide_btn ): ?>
	.slick-next, .slick-prev {
		display: none !important;
	}
<?php endif; ?>

/*サイト上部のボーダー色*/
<?php if ( $st_top_bordercolor ): //サイト上部にボーダーを入れる ?>
	<?php if ( $st_line100 ): //width100%の時 ?>

	<?php elseif ( $st_wrapper_bgcolor ): //サイト背景に色がある時 ?>
		#wrapper-in {
			border-top: <?php echo $st_line_height; ?> solid <?php echo $st_top_bordercolor; ?>;
		}
	<?php else: //サイト部のみの時 ?>
		#headbox {
			border-top: <?php echo $st_line_height; ?> solid <?php echo $st_top_bordercolor; ?>;
		}
	<?php endif; ?>
<?php endif; ?>

/*ヘッダーの背景色*/
		#headbox {
			<?php if ( ( trim( $st_headbox_bgcolor ) !== '' ) && ( trim( $st_headbox_bgcolor_t ) !== '' ) ): ?>
				/*Other Browser*/
				background: <?php echo $st_headbox_bgcolor; ?>;
				/* Android4.1 - 4.3 */
				background: url("<?php echo $st_header_image; ?>"), -webkit-linear-gradient(top,  <?php echo $st_headbox_bgcolor_t; ?> 0%,<?php echo $st_headbox_bgcolor; ?> 100%);
        
				/* IE10+, FF16+, Chrome26+ */
				background: url("<?php echo $st_header_image; ?>"), linear-gradient(to bottom,  <?php echo $st_headbox_bgcolor_t; ?> 0%,<?php echo $st_headbox_bgcolor; ?> 100%);
            
				<?php elseif ( ( trim( $st_headbox_bgcolor ) !== '' ) && ( trim( $st_headbox_bgcolor_t ) === '' ) ): //下部には色がある場合 ?>
					background-image: url("<?php echo $st_header_image; ?>");		
					background-color: <?php echo $st_headbox_bgcolor; ?>;
				<?php else: ?>
				background-color: transparent;
				<?php if( $st_header_image ): //背景画像がある場合 ?>
					background: url("<?php echo $st_header_image; ?>");
				<?php else: ?>			
					background: none;
				<?php endif; ?>
				<?php endif; ?>
		}

		<?php if( $st_header_image ){ //背景画像がある場合 ?>
			#headbox {
				background-position: <?php echo $st_header_image_side; ?> <?php echo $st_header_image_top; ?>;
				<?php if ( $st_header_image_repeat ): ?>
					background-repeat: no-repeat;
				<?php endif; ?>
				}
		<?php } ?>

/*サイトの背景色*/
<?php if ( $st_wrapper_bgcolor ): ?>
	#wrapper-in {
		background: <?php echo $st_wrapper_bgcolor; ?>;
		margin: 0 auto;
		max-width: <?php if(trim($GLOBALS['stdata128']) !== ''){ //全体のwidth 
					$st_pc_width = $GLOBALS['stdata128'];
				}else{
					$st_pc_width = 1060;
				}
				echo $st_pc_width; 
				?>px;
	}
<?php endif; ?>

/*ヘッダー下からの背景色*/
#content-w {
       <?php if( $st_headerunder_image ){ //背景画像がある場合 ?>
        background: url("<?php echo $st_headerunder_image; ?>");
		background-position: <?php echo $st_headerunder_image_side; ?> <?php echo $st_headerunder_image_top; ?>;
		<?php if ( $st_headerunder_image_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	<?php } ?>
            
	<?php if ( $st_headerunder_bgcolor ): ?>
		background-color: <?php echo $st_headerunder_bgcolor; ?>;
	<?php endif; ?>
}

/*メインコンテンツのテキスト色*/
.post > * {
	color: <?php echo $st_main_textcolor; ?>;
}

input, textarea {
	color: #000;
}

/*メインコンテンツのリンク色*/

a, 
.no-thumbitiran h3 a, 
.no-thumbitiran h5 a {
	color: <?php echo $st_link_textcolor; ?>;
}
<?php if ( $st_link_hovertextcolor ): ?>
	a:hover {
		color: <?php echo $st_link_hovertextcolor; ?>!important;
	}
<?php endif; ?>
<?php if ( $st_link_hoveropacity ): ?>
	a:hover {
		opacity:0.7!important;
	}
<?php endif; ?>
/*サイドのテキスト色*/
#side aside > *,
#side li.cat-item a,
#side aside .kanren .clearfix dd h5 a,
#side aside .kanren .clearfix dd p {
	color: <?php echo $st_side_textcolor; ?>;
}

/*メインコンテンツの背景色*/
main {
	background: <?php echo $menu_maincolor; ?>;
}

/*メイン背景色の透過*/

<?php if ( isset( $st_main_opacity ) && ( $st_main_opacity === '80' ) ): ?>
	main {
		background-color: rgba(255, 255, 255, 0.2) !important;
	}

<?php elseif ( isset( $st_main_opacity ) && ( $st_main_opacity === '50' ) ): ?>
	main {
		background-color: rgba(255, 255, 255, 0.5) !important;
	}

<?php elseif ( isset( $st_main_opacity ) && ( $st_main_opacity === '20' ) ): ?>
	main {
		background-color: rgba(255, 255, 255, 0.8) !important;
	}
<?php endif; ?>
<?php if ( $st_main_opacity ): ?>
	<?php if(st_is_mobile()): //スマホでは透過しない ?>
		main {
			background-color: rgba(255, 255, 255, 1) !important;
		}
	<?php endif; ?>
<?php endif; ?>

/*ブログタイトル*/

header .sitename a {
	color: <?php echo $menu_logocolor; ?>;
}

/* メニュー */
nav li a {
	color: <?php echo $menu_logocolor; ?>;
}

/*ページトップ*/
#page-top a {
	background: <?php echo $menu_sumart_bg_color; ?>;
}

<?php if($st_pagetop_up): ?>
#page-top {
	bottom: 80px;
}
<?php endif; ?>

/*キャプション */

header h1 {
	color: <?php echo $menu_logocolor; ?>;
}

header .descr {
	color: <?php echo $menu_logocolor; ?>;
}

/* アコーディオン */
#s-navi dt.trigger .op {
	background: <?php echo $menu_sumart_bg_color; ?>;
	color: <?php echo $menu_sumartcolor; ?>;
}

/*アコーディオンメニュー内背景色*/
#s-navi dd.acordion_tree {
	<?php if ( $menu_sumartbar_bg_color ): ?>
		background: <?php echo $menu_sumartbar_bg_color; ?>;
	<?php elseif ( $menu_sumart_bg_color ): ?>
		background: <?php echo $menu_sumart_bg_color; ?>;
	<?php endif; ?>
}

/*追加ボタン1*/
#s-navi dt.trigger .op-st {
	<?php if ( $menu_sumart_st_bg_color ): ?>
		background: <?php echo $menu_sumart_st_bg_color; ?>;
	<?php elseif ( $menu_sumart_bg_color ): ?>
		background: <?php echo $menu_sumart_bg_color; ?>;
	<?php endif; ?>
	<?php if ( $menu_sumart_st_color ): ?>
		color: <?php echo $menu_sumart_st_color; ?>;
	<?php elseif ( $menu_sumartcolor ): ?>
		color: <?php echo $menu_sumartcolor; ?>;
	<?php endif; ?>
}

/*追加ボタン2*/
#s-navi dt.trigger .op-st2 {
	<?php if ( $menu_sumart_st2_bg_color ): ?>
		background: <?php echo $menu_sumart_st2_bg_color; ?>;
	<?php elseif ( $menu_sumart_bg_color ): ?>
		background: <?php echo $menu_sumart_bg_color; ?>;
	<?php endif; ?>
	<?php if ( $menu_sumart_st2_color ): ?>
		color: <?php echo $menu_sumart_st2_color; ?>;
	<?php elseif ( $menu_sumartcolor ): ?>
		color: <?php echo $menu_sumartcolor; ?>;
	<?php endif; ?>
}

.acordion_tree li a {
	color: <?php echo $menu_logocolor; ?>;
}

<?php if ( $st_sticky_menu ): ?>
	#s-navi dl.acordion {
		position: fixed;
		z-index: 9999;
		top: 0;
		left: 0;
		transition: .3s;
	}

	#s-navi dd.acordion_tree {
		max-height: 100vh;
		overflow: auto;
		transition: max-height .3s;
		<?php if ( $menu_sumartbar_bg_color ): ?>
			background: <?php echo $menu_sumartbar_bg_color; ?>;
		<?php else: ?>
			background: <?php echo $menu_sumart_bg_color; ?>;
		<?php endif; ?>
	}

	#headbox {
		padding: 40px 10px 10px;
		margin: 0 auto;
	}

<?php endif; ?>

/*スマホフッターメニュー*/
#st-footermenubox a {
<?php if ( $st_menu_sumart_footermenu_text_color ): ?>
	color: <?php echo $st_menu_sumart_footermenu_text_color; ?>; 
<?php else: ?>
	color: #000; 
<?php endif; ?>
}

<?php if ( $st_menu_sumart_footermenu_bg_color ): ?>
	#st-footermenubox {
  		background: <?php echo $st_menu_sumart_footermenu_bg_color; ?>;  
	}
<?php endif; ?>

/* サイド見出し */
aside h4 {
	color: <?php echo $menu_logocolor; ?>;
}

/* スマホメニュー文字 */
.acordion_tree ul.menu li a, 
.acordion_tree ul.menu li {
	color: <?php echo $menu_sumartmenutextcolor; ?>;
}

.acordion_tree ul.menu li {
	border-bottom-color: <?php echo $menu_sumartmenutextcolor; ?>;
}

/*グループ2
------------------------------------------------------------*/
/*Webフォント*/
<?php if ( trim( $entrytitle_webfont ) !== '' ): //タイトル見出し ?>
	.kanren h3 a, .post .kanren h3 a,
	.rankh3-in, 
	.rankh4, .post .rankh4, #side .rankh4,
	.entry-title, 
	.post .entry-title, 
	.kanren .clearfix dd h5 a, 
	h5.poprank-noh5 a, 
	.no-thumbitiran h5 a {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $sns_webfont ) !== '' ): //SNSボタン ?>
	.snstext {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $sidebar_title_webfont ) !== '' ): //NEW ENTRYと関連記事 サイドバー見出し ?>
	.n-entry, 
	h4 .point-in,
	.cat-itiran p.point,
	aside h4 {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $menu_webfont ) !== '' ): //各メニュー ?>
	nav.smanone a, /*PCグローバルメニュー*/
	nav.st5 a, /*PCグローバルメニュー*/
	#st-menuwide div.menu a, /*PCグローバルメニュー未設定時*/
	#st-menuwide nav.menu a, /*PCグローバルメニュー未設定時*/
	#side aside .st-pagelists ul li a, /*サイドバーの固定メニュー*/
	.acordion_tree ul.menu li a /*アコーディオンメニュー*/
	{
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $poprankno_webfont ) !== '' ): //任意記事のナンバー ?>
	.p-entry, 
	.p-entry-f, 
	.poprank-no2, 
	.poprank-no {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $tel_webfont ) !== '' ): //電話番号 ?>
	.head-telno a {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

<?php if ( trim( $form_webfont ) !== '' ): //問合せウィジェットボタン ?>
	.st-formbtn,.originalbtn-bold {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>

/* 投稿日時・ぱんくず・タグ */
#breadcrumb, #breadcrumb div a, div#breadcrumb a, .blogbox p, .tagst, #breadcrumb ol li a, #breadcrumb ol li {
	color: <?php echo $st_kuzu_color; ?>;
}

/* 記事タイトル */
<?php if ( trim( $entrytitle_webfont ) !== '' ): //Webフォント使用 ?>
	.entry-title, .post .entry-title {
		font-family: Josefin Sans, Julius Sans One, 'Meddon', Lobster, Pacifico, Fredericka the Great, Bilbo Swash Caps, PT Sans Caption, Montserrat, "メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif !important;
	}
<?php endif; ?>


	.entry-title, .post .entry-title {
		color: <?php echo $st_entrytitle_text; ?>;
		<?php if ( ( trim( $st_entrytitle_bgcolor ) !== '' ) && ( trim( $st_entrytitle_bgcolor_t ) !== '' ) ): ?>
			/*Other Browser*/
			background: <?php echo $st_entrytitle_bgcolor; ?>;
			/* Android4.1 - 4.3 */
			background: url("<?php echo $st_entrytitle_bgimg; ?>"), -webkit-linear-gradient(top,  <?php echo $st_entrytitle_bgcolor_t; ?> 0%,<?php echo $st_entrytitle_bgcolor; ?> 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: url("<?php echo $st_entrytitle_bgimg; ?>"), linear-gradient(to bottom,  <?php echo $st_entrytitle_bgcolor_t; ?> 0%,<?php echo $st_entrytitle_bgcolor; ?> 100%);
			padding: 5px 15px;
			font-size:24px;
			line-height:34px;
			margin-bottom:20px;
		<?php elseif ( ( trim( $st_entrytitle_bgcolor ) !== '' ) && ( trim( $st_entrytitle_bgcolor_t ) === '' ) ): //下部には色がある場合 ?>
			background-image: url("<?php echo $st_entrytitle_bgimg; ?>");		
			background-color: <?php echo $st_entrytitle_bgcolor; ?>;
            padding: 5px 15px;
			font-size:24px;
			line-height:34px;
		<?php else: ?>
			background-color: transparent;
			<?php if( $st_entrytitle_bgimg ): //背景画像がある場合 ?>
				background: url("<?php echo $st_entrytitle_bgimg; ?>");
                padding: 5px 15px;
				font-size:24px;
				line-height:34px;
			<?php else: ?>			
				background: none;
			<?php endif; ?>
		<?php endif; ?>
	}

<?php if( $st_entrytitle_bgimg ){ //背景画像がある場合 ?>
	.entry-title, .post .entry-title {
		background-position: <?php echo $st_entrytitle_bgimg_side; ?> <?php echo $st_entrytitle_bgimg_top; ?>;
		<?php if ( $st_entrytitle_bgimg_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	}
<?php } ?>

<?php if($st_entrytitle_bgimg_leftpadding){ //左の余白 ?>
	.entry-title, .post .entry-title {
		padding-left:<?php echo $st_entrytitle_bgimg_leftpadding; ?>px;
	}
<?php } ?>

<?php if($st_entrytitle_bgimg_tupadding){ //上下の余白 ?>
	.entry-title, .post .entry-title {
		padding-top:<?php echo $st_entrytitle_bgimg_tupadding; ?>px;
		padding-bottom:<?php echo $st_entrytitle_bgimg_tupadding; ?>px;
	}
<?php } ?>




<?php if ( $st_entrytitleborder_color ): //ボーダーがある場合 ?>
.entry-title, .post .entry-title {
	<?php if ( $st_entrytitleborder_tb ): //ボーダーがある場合 ?>
		border-top: solid 2px <?php echo $st_entrytitleborder_color; ?>;
		border-bottom: solid 1px <?php echo $st_entrytitleborder_color; ?>;
	<?php else: ?>
		border: solid 1px <?php echo $st_entrytitleborder_color; ?>;
	<?php endif; ?>

	padding: 5px 15px;
	font-size:24px;
	line-height:34px;
	margin-bottom:20px;
}
<?php endif; ?>

<?php if($st_entrytitle_bgimg_leftpadding){ //左の余白 ?>
	.entry-title, .post .entry-title {
		padding-left:<?php echo  $st_entrytitle_bgimg_leftpadding; ?>px!important;
	}
<?php } ?>

<?php if($st_entrytitle_bgimg_tupadding){ //上下の余白 ?>
	.entry-title, .post .entry-title {
		padding-top:<?php echo $st_entrytitle_bgimg_tupadding; ?>px!important;
		padding-bottom:<?php echo $st_entrytitle_bgimg_tupadding; ?>px!important;
	}
<?php } ?>

/* h2 */

<?php if ( trim( $st_h2_design ) !== '' ): //吹き出しデザイン ?>
	h2 {
		background: <?php echo $menu_bgcolor; ?>;
		color: <?php echo $menu_color; ?>;
		position: relative;
		border: none;
		margin-bottom:30px;
	}

	h2:after {
		border-top: 10px solid <?php echo $menu_bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
	}

	h2:before {
		border-top: 10px solid <?php echo $menu_bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
	}

<?php if( $st_h2_bgimg ){ //背景画像がある場合 ?>
	h2 {
		background-image: url("<?php echo $st_h2_bgimg; ?>");
		background-position: <?php echo $st_h2_bgimg_side; ?> <?php echo $st_h2_bgimg_top; ?>;
		<?php if ( $st_h2_bgimg_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	}
<?php } ?>

<?php else: //吹き出しじゃないデザイン ?>

	h2 {
		color: <?php echo $menu_color; ?>;
		<?php if ( ( trim( $menu_bgcolor ) !== '' ) && ( trim( $menu_bgcolor_t ) !== '' ) ): ?>
			/*Other Browser*/
			background: <?php echo $menu_bgcolor; ?>;
			/* Android4.1 - 4.3 */
			background: url("<?php echo $st_h2_bgimg; ?>"), -webkit-linear-gradient(top,  <?php echo $menu_bgcolor_t; ?> 0%,<?php echo $menu_bgcolor; ?> 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: url("<?php echo $st_h2_bgimg; ?>"), linear-gradient(to bottom,  <?php echo $menu_bgcolor_t; ?> 0%,<?php echo $menu_bgcolor; ?> 100%);
		<?php elseif ( ( trim( $menu_bgcolor ) !== '' ) && ( trim( $menu_bgcolor_t ) === '' ) ): //下部には色がある場合 ?>
			background-image: url("<?php echo $st_h2_bgimg; ?>");		
			background-color: <?php echo $menu_bgcolor; ?>;
		<?php else: ?>
			background-color: transparent;
			<?php if( $st_h2_bgimg ): //背景画像がある場合 ?>
				background: url("<?php echo $st_h2_bgimg; ?>");
			<?php else: ?>			
				background: none;
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( $st_h2border_color ): //ボーダーがあるかどうか ?>
			<?php if ( $st_h2_border_tb ): ?>
				border-top: 2px solid <?php echo $st_h2border_color; ?>;
				border-bottom: 1px solid <?php echo $st_h2border_color; ?>;
			<?php else: ?>
				border: 1px solid <?php echo $st_h2border_color; ?>;
			<?php endif; ?>
		<?php else: ?>
			border: none;
		<?php endif; ?>
	}

	<?php if( $st_h2_bgimg ){ //背景画像がある場合 ?>
		h2 {
			background-position: <?php echo $st_h2_bgimg_side; ?> <?php echo $st_h2_bgimg_top; ?>;
			<?php if ( $st_h2_bgimg_repeat ): ?>
				background-repeat: no-repeat;
			<?php endif; ?>
		}
	<?php } ?>

<?php endif; ?>

<?php if($st_h2_bgimg_leftpadding){ //左の余白 ?>
	h2 {
		padding-left:<?php echo $st_h2_bgimg_leftpadding; ?>px!important;
	}
<?php } ?>

<?php if($st_h2_bgimg_tupadding){ //上下の余白 ?>
	h2 {
		padding-top:<?php echo $st_h2_bgimg_tupadding; ?>px!important;
		padding-bottom:<?php echo $st_h2_bgimg_tupadding; ?>px!important;
	}
<?php } ?>

/*h3小見出し*/

<?php if( $st_h3hukidasi_design ){ //ふきだしに変更 ?>
	.post h3:not(.rankh3):not(#reply-title){
		background: <?php echo $menu_h3bgcolor; ?>;
		color: <?php echo $menu_h3textcolor; ?>;
		position: relative;
		border: none;
		margin-bottom:30px;
	}

	.post h3:not(.rankh3):not(#reply-title):after {
		border-top: 10px solid <?php echo $menu_h3bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
	}

	.post h3:not(.rankh3):not(#reply-title):before {
		border-top: 10px solid <?php echo $menu_h3bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
	}

<?php }elseif( $st_h3_design ){ //下線を左ボーダーに変更 ?>

	.post h3:not(.rankh3):not(#reply-title) {
		color: <?php echo $menu_h3textcolor; ?>;
		padding: 5px 10px 5px 15px;
		border-left: 5px solid <?php echo $st_menu_h3bordercolor; ?>;
		border-bottom: none;

		<?php if ( $menu_h3bgcolor ): ?>
			background-color: <?php echo $menu_h3bgcolor; ?>;
		<?php else: ?>
			background-color: transparent;
		<?php endif; ?>
	}

<?php }else{ //デフォルト ?>

	.post h3:not(.rankh3):not(#reply-title) {
		color: <?php echo $menu_h3textcolor; ?>;
		border-bottom-color: <?php echo $st_menu_h3bordercolor; ?>;
	
		<?php if ( $st_solid_design ){ ?>
			border-bottom-style: solid;
		<?php } ?>

		<?php if ( $st_solid_top ){ ?>
			border-top: solid 1px <?php echo $st_menu_h3bordercolor; ?>;
		<?php } ?>

		<?php if ( $menu_h3bgcolor ): ?>
			background-color: <?php echo $menu_h3bgcolor; ?>;
		<?php else: ?>
			background-color: transparent;
		<?php endif; ?>
	}
<?php } ?>

<?php if( $st_h3_bgimg ){ //背景画像がある場合 ?>
	.post h3:not(.rankh3):not(#reply-title) {
		background-image: url("<?php echo $st_h3_bgimg; ?>");
		background-position: <?php echo $st_h3_bgimg_side; ?> <?php echo $st_h3_bgimg_top; ?>;
		<?php if ( $st_h3_bgimg_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	}
<?php } ?>

<?php if($st_h3_bgimg_leftpadding){ //左の余白 ?>
	.post h3:not(.rankh3):not(#reply-title) {
		padding-left:<?php echo $st_h3_bgimg_leftpadding; ?>px!important;
	}
<?php } ?>

<?php if($st_h3_bgimg_tupadding){ //上下の余白 ?>
	.post h3:not(.rankh3):not(#reply-title) {
		padding-top:<?php echo $st_h3_bgimg_tupadding; ?>px!important;
		padding-bottom:<?php echo $st_h3_bgimg_tupadding; ?>px!important;
	}
<?php } ?>

/*h4*/
<?php if( $st_h4hukidasi_design ): //ふきだしに変更 ?>
	.post h4:not(.rankh4):not(#reply-title):not(.point){
		background: <?php echo $menu_h4bgcolor; ?>;
		color: <?php echo $st_menu_h4_textcolor; ?>;
		position: relative;
		border: none;
		margin-bottom:30px;
	}

	.post h4:not(.rankh4):not(#reply-title):not(.point):after {
		border-top: 10px solid <?php echo $menu_h4bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
	}

	.post h4:not(.rankh4):not(#reply-title):not(.point):before {
		border-top: 10px solid <?php echo $menu_h4bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
	}
<?php else: ?>
    .post h4:not(.rankh4):not(.point) {
        <?php if($st_h4_design){ ?>
            border-left: 5px solid <?php echo $st_menu_h4bordercolor; ?>;
        <?php } ?>
        color: <?php echo $st_menu_h4_textcolor; ?>;
        <?php if ( $menu_h4bgcolor ): ?>
            background-color: <?php echo $menu_h4bgcolor; ?>;
        <?php else: ?>
            background-color: transparent;
        <?php endif; ?>
    
        <?php if($st_h4_top_border){ //上のボーダー ?>
            border-top : solid 1px <?php echo $st_menu_h4bordercolor; ?>;
        <?php } ?>
    
        <?php if($st_h4_bottom_border){ //下のボーダー ?>
            border-bottom : solid 1px <?php echo $st_menu_h4bordercolor; ?>;
        <?php } ?>
    
        <?php if($st_h4_bgimg_leftpadding){ //左の余白 ?>
            padding-left:<?php echo $st_h4_bgimg_leftpadding; ?>px;
        <?php } ?>
    
        <?php if($st_h4_bgimg_tupadding){ //上下の余白 ?>
            padding-top:<?php echo $st_h4_bgimg_tupadding; ?>px;
            padding-bottom:<?php echo $st_h4_bgimg_tupadding; ?>px;
        <?php } ?>
    
        <?php if( $st_h4_bgimg ){ //背景画像がある場合 ?>
            background-image: url("<?php echo $st_h4_bgimg; ?>");
            background-position: <?php echo $st_h4_bgimg_side; ?> <?php echo $st_h4_bgimg_top; ?>;
            <?php if ( $st_h4_bgimg_repeat ): ?>
                background-repeat: no-repeat;
            <?php endif; ?>
        <?php } ?>
    }
<?php endif; ?>
/* サイド見出し */
aside h4, #side aside h4 {
	color: <?php echo $menu_h4sidetextcolor; ?>;
}

/*h5*/
<?php if( $st_h5hukidasi_design ): //ふきだしに変更 ?>
	.post h5:not(.rankh5):not(#reply-title):not(.st-cardbox-t):not(.kanren-t){
		background: <?php echo $menu_h5bgcolor; ?>;
		color: <?php echo $st_menu_h5_textcolor; ?>;
		position: relative;
		border: none;
		margin-bottom:30px;
		padding:10px 10px 10px 15px;
	}

	.post h5:not(.rankh5):not(#reply-title):not(.st-cardbox-t):not(.kanren-t):after {
		border-top: 10px solid <?php echo $menu_h5bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
		border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
	}

	.post h5:not(.rankh5):not(#reply-title):not(.st-cardbox-t):not(.kanren-t):before {
		border-top: 10px solid <?php echo $menu_h5bgcolor; ?>;
		content: '';
		position: absolute;
		border-right: 10px solid transparent;
		border-left: 10px solid transparent;
		bottom: -10px;
		left: 30px;
	}
<?php else: ?>
    .post h5:not(.rankh5):not(.point):not(.st-cardbox-t):not(.popular-t):not(.kanren-t) {
		<?php if($st_h5_design){ ?>
			border-left: 5px solid <?php echo $st_menu_h5bordercolor; ?>;
		<?php } ?>
		color: <?php echo $st_menu_h5_textcolor; ?>;
		<?php if ( $menu_h5bgcolor ): ?>
			background-color: <?php echo $menu_h5bgcolor; ?>;
		<?php else: ?>
			background-color: transparent;
		<?php endif; ?>
	
		<?php if($st_h5_top_border){ //上のボーダー ?>
			border-top : solid 1px <?php echo $st_menu_h5bordercolor; ?>;
		<?php } ?>
	
		<?php if($st_h5_bottom_border){ //下のボーダー ?>
			border-bottom : solid 1px <?php echo $st_menu_h5bordercolor; ?>;
		<?php } ?>
	
		<?php if($st_h5_bgimg_leftpadding){ //左の余白 ?>
			padding-left:<?php echo $st_h5_bgimg_leftpadding; ?>px!important;
		<?php } ?>
	
		<?php if($st_h5_bgimg_tupadding){ //上下の余白 ?>
			padding-top:<?php echo $st_h5_bgimg_tupadding; ?>px!important;
			padding-bottom:<?php echo $st_h5_bgimg_tupadding; ?>px!important;
		<?php } ?>
	
		<?php if( $st_h5_bgimg ){ //背景画像がある場合 ?>
			background-image: url("<?php echo $st_h5_bgimg; ?>");
			background-position: <?php echo $st_h5_bgimg_side; ?> <?php echo $st_h5_bgimg_top; ?>;
			<?php if ( $st_h5_bgimg_repeat ): ?>
				background-repeat: no-repeat;
			<?php endif; ?>
		<?php } ?>
	}
<?php endif; ?>

/* タグクラウド */
.tagcloud a {
	border-color: <?php echo $st_tagcloud_color; ?>;
	color: <?php echo $st_tagcloud_color; ?>;
}

/* NEW ENTRY & 関連記事 */
.post h4:not(.rankh4).point, 
.cat-itiran p.point,
.n-entry-t {
	border-bottom-color: <?php echo $menu_separator_bgcolor; ?>;
}

.post h4:not(.rankh4) .point-in, 
.cat-itiran p.point .point-in,
.n-entry {
	background-color: <?php echo $menu_separator_bgcolor; ?>;
	color: <?php echo $menu_separator_color; ?>;
}

/* カテゴリ */
.catname {
	background: <?php echo $st_catbg_color; ?>;
	color:<?php echo $st_cattext_color; ?>;
}

.post .st-catgroup a {
	color: <?php echo $st_cattext_color; ?>;
}

/*グループ4
------------------------------------------------------------*/
/* RSSボタン */
.rssbox a {
	background-color: <?php echo $menu_rsscolor; ?>;
}

/* SNSボタン */
<?php if ( $st_sns_btn ): ?>
	.sns li a {
		background: <?php echo $st_sns_btn; ?> !important;
		box-shadow: none!important;
	}

	.sns a:hover {
		opacity: 0.6;
		box-shadow: none!important;
	}
<?php endif; ?>

<?php if ( $st_sns_btntext ): ?>
	.snstext, .snscount, .sns li a {
		color: <?php echo $st_sns_btntext; ?>;
	}

	.sns .fa, .sns .fa-hatena {
		border-right-color: <?php echo $st_sns_btntext; ?> !important;
		color: <?php echo $st_sns_btntext; ?>;
	}
<?php endif; ?>

.inyoumodoki, .post blockquote {
	background-color: <?php echo $st_blockquote_color; ?>;
	border-left-color: <?php echo $st_blockquote_color; ?>;
}

/*フリーボックスウィジェット
------------------------------------------------------------*/
/* ボックス */
.freebox {
	border-top-color: <?php echo $freebox_tittle_color; ?>;
	background: <?php echo $freebox_color; ?>;
}

/* 見出し */
.p-entry-f {
	background: <?php echo $freebox_tittle_color; ?>;
	color: <?php echo $freebox_tittle_textcolor; ?>;
}

/* エリア内テキスト */
<?php if ( $freebox_textcolor ): ?>
	.freebox > * {
		color: <?php echo $freebox_textcolor; ?>;
	}
<?php endif; ?>

/*お知らせ
------------------------------------------------------------*/
/*お知らせバーの背景色*/
#topnews-box div.rss-bar {
	<?php if ( $menu_newsbarbordercolor ): //ボーダーに色が設定されいる場合 ?>
		border-color: <?php echo $menu_newsbarbordercolor; ?>;
	<?php else: ?>
		border: none;
	<?php endif; ?>
}

#topnews-box div.rss-bar {
	color: <?php echo $menu_newsbartextcolor; ?>;

	/*Other Browser*/
	background: <?php echo $menu_newsbarcolor; ?>;
	/*For Old WebKit*/
	background: -webkit-linear-gradient( <?php echo $menu_newsbarcolor_t; ?> 0%, <?php echo $menu_newsbarcolor; ?> 100% );
	/*For Modern Browser*/
	background: linear-gradient( <?php echo $menu_newsbarcolor_t; ?> 0%, <?php echo $menu_newsbarcolor; ?> 100% );
}

/*お知らせ日付の文字色*/
#topnews-box dt {
	color: <?php echo $menu_news_datecolor; ?>;
}

#topnews-box div dl dd a {
	color: <?php echo $menu_news_text_color; ?>;
}

#topnews-box dd {
	border-bottom-color: <?php echo $menu_news_text_color; ?>;
}

#topnews-box {
	<?php if($st_menu_newsbgcolor){ ?>
		background-color: <?php echo $st_menu_newsbgcolor ; ?>;
	<?php }else{ ?>
		background-color:transparent!important;
	<?php } ?>
}

/*追加カラー
------------------------------------------------------------*/
/*フッター*/
footer > *,
footer a,
#footer .copyr,  
#footer .copyr a, 
#footer .copy,  
#footer .copy a {
	<?php if ( $st_footer_bg_text_color ): ?>
		color: <?php echo $st_footer_bg_text_color; ?> !important;
	<?php endif; ?>
}

footer .footermenust li {
	border-right-color: <?php echo $st_footer_bg_text_color; ?> !important;
}

/*フッター背景色*/
	#footer {
		<?php if ( ( trim( $st_footer_bg_color ) !== '' ) && ( trim( $st_footer_bg_color_t ) !== '' ) ): ?>
			/*Other Browser*/
			background: <?php echo $st_footer_bg_color; ?>;
			/* Android4.1 - 4.3 */
			background: url("<?php echo $st_footer_image; ?>"), -webkit-linear-gradient(top,  <?php echo $st_footer_bg_color_t; ?> 0%,<?php echo $st_footer_bg_color; ?> 100%);
        
			/* IE10+, FF16+, Chrome26+ */
			background: url("<?php echo $st_footer_image; ?>"), linear-gradient(to bottom,  <?php echo $st_footer_bg_color_t; ?> 0%,<?php echo $st_footer_bg_color; ?> 100%);
            
			<?php elseif ( ( trim( $st_footer_bg_color ) !== '' ) && ( trim( $st_footer_bg_color_t ) === '' ) ): //下部には色がある場合 ?>
				background-image: url("<?php echo $st_footer_image; ?>");		
				background-color: <?php echo $st_footer_bg_color; ?>;
			<?php else: ?>
			background-color: transparent;
			<?php if( $st_footer_image ): //背景画像がある場合 ?>
				background: url("<?php echo $st_footer_image; ?>");
			<?php else: ?>			
				background: none;
			<?php endif; ?>
			<?php endif; ?>
            
           	<?php if ( !$st_wrapper_bgcolor ): ?>
				max-width: <?php if(trim($GLOBALS['stdata128']) !== ''){ //全体のwidth 
							$st_pc_width = ( $GLOBALS['stdata128']) - 30;
						}else{
							$st_pc_width = 1030;
						}
						echo $st_pc_width; 
						?>px; /*padding 15pxあり*/
		<?php endif; ?>
	}

	<?php if( $st_footer_image ){ //背景画像がある場合 ?>
		#footer {
			background-position: <?php echo $st_footer_image_side; ?> <?php echo $st_footer_image_top; ?>;
			<?php if ( $st_footer_image_repeat ): ?>
				background-repeat: no-repeat;
			<?php endif; ?>
			}
	<?php } ?>

/*任意の人気記事
------------------------------------------------------------*/

.post .p-entry, #side .p-entry, .home-post .p-entry {
	background: <?php echo $menu_osusumemidasicolor; ?>;
	color: <?php echo $menu_osusumemidasitextcolor; ?>;
}

.pop-box, .nowhits .pop-box, .nowhits-eye .pop-box {
	border-top-color: <?php echo $menu_osusumemidasicolor; ?>;
	background: <?php echo $menu_popbox_color; ?>;
}

.kanren.pop-box .clearfix dd h5 a, 
.kanren.pop-box .clearfix dd p,
.kanren.pop-box .clearfix dd p a, 
.kanren.pop-box .clearfix dd p span, 
.kanren.pop-box .clearfix dd > *,
.kanren.pop-box h5 a, 
.kanren.pop-box div p,
.kanren.pop-box div p a, 
.kanren.pop-box div p span, 
.kanren.pop-box div > *
{
	color: <?php echo $menu_popbox_textcolor; ?>!important;
}

<?php if ( $st_nohidden ): ?>
	.poprank-no2, .poprank-no {
		display: none;
	}

<?php else: ?>
	.poprank-no2 {
		background: <?php echo $menu_osusumemidasinobgcolor; ?>;
		color: <?php echo $menu_osusumemidasinocolor; ?> !important;
	}

	.poprank-no {
		background: <?php echo $menu_osusumemidasinobgcolor; ?>;
		color: <?php echo $menu_osusumemidasinocolor; ?>;
	}
<?php endif; ?>

/*ウィジェット問合せボタン*/

.st-formbtn {
	<?php if( $st_formbtn_radius ): ?>
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
	<?php endif; ?>

	<?php if ( $st_formbtn_bordercolor ): ?>
		border: solid 1px <?php echo $st_formbtn_bordercolor; ?>;
	<?php endif; ?>

	<?php if ( (trim($st_formbtn_bgcolor_t) !== '') && (trim($st_formbtn_bgcolor) !== '') ): ?>
		/*For Old WebKit*/
		background: -webkit-linear-gradient( <?php echo $st_formbtn_bgcolor_t; ?> 0%, <?php echo $st_formbtn_bgcolor; ?> 100% );
		/*For Modern Browser*/
		background: linear-gradient( <?php echo $st_formbtn_bgcolor_t; ?> 0%, <?php echo $st_formbtn_bgcolor; ?> 100% );
	<?php elseif ( (trim($st_formbtn_bgcolor_t) === '') && (trim($st_formbtn_bgcolor) !== '') ): ?>
		/*Other Browser*/
		background: <?php echo $st_formbtn_bgcolor; ?>;
	<?php else: ?>
		background-color: transparent!important;
	<?php endif; ?>
}

.st-formbtn .st-originalbtn-r {
	border-left-color: <?php echo $st_formbtn_textcolor ?>;
}

a.st-formbtnlink {
	color: <?php echo $st_formbtn_textcolor ?>;
}

/*ウィジェットオリジナルボタン*/

.st-originalbtn {
	<?php if( $st_formbtn2_radius ): ?>
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
	<?php endif; ?>

	<?php if ( $st_formbtn2_bordercolor ): ?>
		border: 1px solid <?php echo $st_formbtn2_bordercolor; ?>;
	<?php endif; ?>

	<?php if ( (trim($st_formbtn2_bgcolor_t) !== '') && (trim($st_formbtn2_bgcolor) !== '') ): ?>
		/*For Old WebKit*/
		background: -webkit-linear-gradient( <?php echo $st_formbtn2_bgcolor_t; ?> 0%, <?php echo $st_formbtn2_bgcolor; ?> 100% );
		/*For Modern Browser*/
		background: linear-gradient( <?php echo $st_formbtn2_bgcolor_t; ?> 0%, <?php echo $st_formbtn2_bgcolor; ?> 100% );
	<?php elseif ( (trim($st_formbtn2_bgcolor_t) === '') && (trim($st_formbtn2_bgcolor) !== '') ): ?>
		/*Other Browser*/
		background: <?php echo $st_formbtn2_bgcolor; ?>;
	<?php else: ?>
		background-color: transparent!important;
	<?php endif; ?>
}

.st-originalbtn .st-originalbtn-r {
	border-left-color: <?php echo $st_formbtn2_textcolor ?>;
}

a.st-originallink {
	color: <?php echo $st_formbtn2_textcolor ?>;
}

/*ミドルメニュー（ヘッダーメニュー連動）
------------------------------------------------------------*/
.st-middle-menu {
	<?php if ( $menu_navbartextcolor ): ?>
		color: <?php echo $menu_navbartextcolor; ?>;
	<?php endif; ?>
	<?php if ( $menu_navbarcolor ): ?>
		/*Other Browser*/
		background: <?php echo $menu_navbarcolor; ?>;
	<?php endif; ?>
	<?php if ( $menu_navbar_right_color ): ?>
		border-top-color: <?php echo $menu_navbar_right_color; ?>;
		border-left-color: <?php echo $menu_navbar_right_color; ?>;
	<?php endif; ?>
}

.st-middle-menu .menu li a{
	<?php if ( $menu_navbartextcolor ): ?>
		color: <?php echo $menu_navbartextcolor; ?>;
	<?php endif; ?>
	<?php if ( $menu_navbar_right_color ): ?>
		border-bottom-color: <?php echo $menu_navbar_right_color; ?>;
		border-right-color: <?php echo $menu_navbar_right_color; ?>;
	<?php endif; ?>
	<?php if($st_menu_bold ): //第一階層を太字にする ?>
			font-weight:bold;
	<?php endif; ?>
}

/*固定ページサイドメニュー
------------------------------------------------------------*/
/*背景色*/
#sidebg {
	background: <?php echo $menu_pagelist_bgcolor; ?>;

	<?php if( $st_sidebg_bgimg ){ //背景画像がある場合 ?>
		background-image: url("<?php echo $st_sidebg_bgimg; ?>");
		background-position: <?php echo $st_sidebg_bgimg_side; ?> <?php echo $st_sidebg_bgimg_top; ?>;
		<?php if ( $st_sidebg_bgimg_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	<?php } ?>
}

<?php if ( $st_no_header_design  ): //ヘッダーのカラーデザインを引き継ぐか引き継がないか ?>
	<?php if( $st_sidemenu_bgimg ): //背景画像がある場合 ?>
		background: url("<?php echo $st_sidemenu_bgimg; ?>");
	<?php endif; ?>		
<?php else: ?>

	/*liタグの階層*/
	#side aside .st-pagelists ul li:not(.sub-menu) {
		<?php if ( $menu_navbar_topunder_color ): ?>
			border-top-color: <?php echo $menu_navbar_topunder_color; ?>;
		<?php else: ?>
			border-top: none;
		<?php endif; ?>

		<?php if ( $menu_navbar_side_color ): ?>
			border-left-color: <?php echo $menu_navbar_side_color; ?>;
			border-right-color: <?php echo $menu_navbar_side_color; ?>;
		<?php else: ?>
			border-left: none;
			border-right: none;
		<?php endif; ?>
	}

	#side aside .st-pagelists ul .sub-menu li {
		border: none;
	}

	#side aside .st-pagelists ul li:last-child {
		<?php if ( $menu_navbar_topunder_color ): ?>
			border-bottom: 1px solid <?php echo $menu_navbar_topunder_color; ?>;
		<?php else: ?>
			border-bottom: none;
		<?php endif; ?>
	}

	#side aside .st-pagelists ul .sub-menu li:first-child {
		<?php if ( $menu_navbar_topunder_color ): ?>
			border-top: 1px solid <?php echo $menu_navbar_topunder_color; ?>;
		<?php else: ?>
			border-top: none;
		<?php endif; ?>
	}

	#side aside .st-pagelists ul li li:last-child {
		border: none;
	}

	#side aside .st-pagelists ul .sub-menu .sub-menu li {
		border: none;
	}
	
	#side aside .st-pagelists ul li a {
		color: <?php echo $menu_navbartextcolor; ?>;
		<?php if ( ( trim( $menu_navbarcolor ) !== '' ) && ( trim( $menu_navbarcolor_t ) !== '' ) ): ?>
			/*Other Browser*/
			background: <?php echo $menu_navbarcolor; ?>;
			/* Android4.1 - 4.3 */
			background: url("<?php echo $st_sidemenu_bgimg; ?>"), -webkit-linear-gradient(top,  <?php echo $menu_navbarcolor_t; ?> 0%,<?php echo $menu_navbarcolor; ?> 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: url("<?php echo $st_sidemenu_bgimg; ?>"), linear-gradient(to bottom,  <?php echo $menu_navbarcolor_t; ?> 0%,<?php echo $menu_navbarcolor; ?> 100%);
	
		<?php elseif ( ( trim( $menu_navbarcolor ) !== '' ) && ( trim( $menu_navbarcolor_t ) === '' ) ): //下部には色がある場合 ?>
			background-image: url("<?php echo $st_sidemenu_bgimg; ?>");		
			background-color: <?php echo $menu_navbarcolor; ?>;
		<?php else: ?>
			background-color: transparent;
			<?php if( $st_sidemenu_bgimg ): //背景画像がある場合 ?>
				background: url("<?php echo $st_sidemenu_bgimg; ?>");
			<?php else: ?>			
				background: none;
			<?php endif; ?>
		<?php endif; ?>
	}

	<?php if($st_menu_bold ): //第一階層を太字にする ?>
		#side aside .st-pagelists ul li a {
			font-weight:bold;
		}
		#side aside .st-pagelists ul li li a {
			font-weight:normal;
		}
	<?php endif; ?>

	#side aside .st-pagelists .sub-menu a {
		<?php if($menu_pagelist_childtext_border_color){ ?>
			border-bottom-color: <?php echo $menu_pagelist_childtext_border_color; ?>;
		<?php }else{ ?>
			border: none;
		<?php } ?>
		color: <?php echo $menu_pagelist_childtextcolor; ?>;
	}

	#side aside .st-pagelists .sub-menu .sub-menu li:last-child {
		border-bottom: 1px solid <?php echo $menu_pagelist_childtext_border_color; ?>;
	}

	#side aside .st-pagelists .sub-menu li .sub-menu a,
	#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a {
		color: <?php echo $menu_pagelist_childtextcolor; ?>;
	}

<?php endif; //ヘッダーのカラーデザインを引き継ぐか引き継がないかここまで ?>

<?php if( $st_sidemenu_bgimg ){ //背景画像がある場合 ?>
	#side aside .st-pagelists ul li a {
		background-position: <?php echo $st_sidemenu_bgimg_side; ?> <?php echo $st_sidemenu_bgimg_top; ?>;
		<?php if ( $st_sidemenu_bgimg_repeat ): ?>
			background-repeat: no-repeat;
		<?php endif; ?>
	}
<?php } ?>

<?php if($st_sidemenu_bgimg_leftpadding){ //左の余白 ?>
	#side aside .st-pagelists ul li a {
		padding-left:<?php echo $st_sidemenu_bgimg_leftpadding; ?>px;
	}
<?php } ?>

<?php if($st_sidemenu_bgimg_tupadding){ //上下の余白 ?>
	#side aside .st-pagelists ul li a {
		padding-top:<?php echo $st_sidemenu_bgimg_tupadding; ?>px;
		padding-bottom:<?php echo $st_sidemenu_bgimg_tupadding; ?>px;
	}
<?php } ?>

/*Webアイコン*/
<?php if ( $st_menu_icon ): ?>
	#side aside .st-pagelists ul li a:before {
		content: "\<?php echo $st_menu_icon; ?>\00a0\00a0";
		font-family: FontAwesome;
		<?php if ( $st_menu_icon_color ): ?>
			color:<?php echo $st_menu_icon_color; ?>;
		<?php else: ?>
			color:<?php echo $menu_navbartextcolor; ?>;
		<?php endif; ?>

	}
	#side aside .st-pagelists li li a:before {
		content: none;
	}
<?php endif; ?>

<?php if ( $st_undermenu_icon ): ?>
	#side aside .st-pagelists li li a:before {
		content: "\<?php echo $st_undermenu_icon; ?>\00a0\00a0";
		font-family: FontAwesome;
		<?php if ( $st_undermenu_icon_color ): ?>
			color:<?php echo $st_undermenu_icon_color; ?>;
		<?php else: ?>
			color:<?php echo $menu_pagelist_childtextcolor; ?>;
		<?php endif; ?>
	}
<?php endif; ?>

/*コンタクトフォーム7送信ボタン*/
.wpcf7-submit {
	background: <?php echo $st_contactform7btn_bgcolor ?>;
	color: <?php echo $st_contactform7btn_textcolor ?>;
}

/* メイン画像背景色 */
<?php if ( $st_header_bgcolor ): ?>
	#st-headerbox {
		background-color: <?php echo $st_header_bgcolor; ?>;
	}
<?php endif; ?>

<?php if ( $st_topgabg_image ): ?>
	<?php if ( ($st_topgabg_image_sumahoonly) && (!st_is_mobile()) ): //スマホのみに表示がありPCの場合 ?>
	<?php else: ?>
		#st-headerbox {
			background-image: url("<?php echo $st_topgabg_image; ?>");

			<?php if ( $st_topgabg_image_flex ): ?>
				background-size: 100% auto;
			<?php endif; ?>
			background-position: <?php echo $st_topgabg_image_side; ?> <?php echo $st_topgabg_image_top; ?>;
			<?php if ( $st_topgabg_image_repeat ): ?>
				background-repeat: no-repeat;
			<?php endif; ?>
		}
	<?php endif; ?>
<?php endif; ?>

/*media Queries タブレットサイズ（959px以下）
----------------------------------------------------*/
@media only screen and (max-width: 959px) {

	/*-- ここまで --*/
}

/*media Queries タブレットサイズ以下
----------------------------------------------------*/
@media only screen and (min-width: 600px) {

}

/*media Queries タブレットサイズ（600px～959px）のみで適応したいCSS -タブレットのみ
---------------------------------------------------------------------------------------------------*/
@media only screen and (min-width: 600px) and (max-width: 959px) {

	<?php if ( $st_sticky_menu ){ ?>
		#headbox {
			padding: 60px 10px 10px;
			margin: 0 auto;
		}
	<?php } ?>

/*-- ここまで --*/
}


/*media Queries PCサイズ
----------------------------------------------------*/
@media only screen and (min-width: 960px) {

	<?php if($st_entrytitle_pc_fontsize){ //PC閲覧時の記事タイトル ?>
	.entry-title, .post .entry-title {
		font-size:<?php echo $st_entrytitle_pc_fontsize; ?>px!important;
		line-height:1.5!important;
	}
	<?php } ?>


	<?php if($st_h2_pc_fontsize){ //PC閲覧時のh2タイトル ?>
	.post h2 {
		font-size:<?php echo $st_h2_pc_fontsize; ?>px!important;
		line-height:1.5!important;
	}
	<?php } ?>

	/*ヘッダーの背景色*/
	<?php if ( ( $st_header100 ) && ( $st_wrapper_bgcolor ) ): //背景幅100%の場合 ?>
	#headbox,
	#content-w {
		max-width: <?php if(trim($GLOBALS['stdata128']) !== ''){ //全体のwidth 
					$st_pc_width = ( $GLOBALS['stdata128'] ) + 40;
				}else{
					$st_pc_width = 1100;
				}
				echo $st_pc_width; 
				?>px;
		margin: 0 -20px !important;
	}
	<?php endif; ?>

	/*メインコンテンツのボーダー*/
	<?php if ( $menu_main_bordercolor ): ?>
	main {
		border: 1px solid <?php echo $menu_main_bordercolor; ?>;
	}
	<?php endif; ?>

	<?php if ( $st_sticky_menu ): ?>
	#headbox {
		padding: 10px;
	}
	<?php endif; ?>

	/* スライドショー横並び */
	<?php if ( $st_header_sc ): ?>
	.slick-list {
		overflow: visible !important;
	}
	<?php endif; ?>

	/*wrapperに背景がある場合*/
	<?php if ( $st_wrapper_bgcolor ): ?>
	#wrapper-in {
		padding: 0 20px;
	}

	#footer {
		margin: 0 -20px;
		max-width: <?php if(trim($GLOBALS['stdata128']) !== ''){ //全体のwidth 
					$st_pc_width = ( $GLOBALS['stdata128'] ) + 40;
				}else{
					$st_pc_width = 1100;
				}
				echo $st_pc_width; 
				?>px;
	}
	<?php endif; ?>

	/*メニュー*/
	#st-menuwide {
	<?php if ( $menu_navbar_topunder_color ): ?>
		border-top-color: <?php echo $menu_navbar_topunder_color; ?>;
		border-bottom-color: <?php echo $menu_navbar_topunder_color; ?>;
	<?php else: ?>
		border-top: none;
		border-bottom: none;
	<?php endif; ?>
	<?php if ( $menu_navbar_side_color ): ?>
		border-left-color: <?php echo $menu_navbar_side_color; ?>;
		border-right-color: <?php echo $menu_navbar_side_color; ?>;
	<?php else: ?>
		border-left: none;
		border-right: none;
	<?php endif; ?>

	<?php if ( ( trim( $menu_navbarcolor ) !== '' ) && ( trim( $menu_navbarcolor_t ) !== '' ) ): ?>
		/*Other Browser*/
		background: <?php echo $menu_navbarcolor; ?>;
		/* Android4.1 - 4.3 */
		background: url("<?php echo $st_headermenu_bgimg; ?>"), -webkit-linear-gradient(top,  <?php echo $menu_navbarcolor_t; ?> 0%,<?php echo $menu_navbarcolor; ?> 100%);

		/* IE10+, FF16+, Chrome26+ */
		background: url("<?php echo $st_headermenu_bgimg; ?>"), linear-gradient(to bottom,  <?php echo $menu_navbarcolor_t; ?> 0%,<?php echo $menu_navbarcolor; ?> 100%);
	<?php elseif ( ( trim( $menu_navbarcolor ) !== '' ) && ( trim( $menu_navbarcolor_t ) === '' ) ): //下部には色がある場合 ?>
		background-image: url("<?php echo $st_headermenu_bgimg; ?>");		
		background-color: <?php echo $menu_navbarcolor; ?>;
	<?php else: ?>
		background-color: transparent;
		<?php if( $st_headermenu_bgimg ): //背景画像がある場合 ?>
			background: url("<?php echo $st_headermenu_bgimg; ?>");
		<?php else: ?>			
			background: none;
		<?php endif; ?>
	<?php endif; ?>
	}

	<?php if( $st_headermenu_bgimg ){ //背景画像がある場合 ?>
		#st-menuwide {
			background-position: <?php echo $st_headermenu_bgimg_side; ?> <?php echo $st_headermenu_bgimg_top; ?>;
			<?php if ( $st_headermenu_bgimg_repeat ): ?>
				background-repeat: no-repeat;
			<?php endif; ?>
		}
	<?php } ?>


	header .smanone ul.menu li, 
	header nav.st5 ul.menu  li,
	header nav.st5 ul.menu  li,
	header #st-menuwide div.menu li,
	header #st-menuwide nav.menu li
	{
	<?php if ( $menu_navbar_right_color ): ?>
		border-right-color: <?php echo $menu_navbar_right_color; ?>;
	<?php else: ?>
		border-right: none;
	<?php endif; ?>
	}

	header .smanone ul.menu li, 
	header nav.st5 ul.menu  li,
	header #st-menuwide div.menu li,
	header #st-menuwide nav.menu li {
		border-right-color: <?php echo $menu_navbar_right_color; ?>;
	}

	header .smanone ul.menu li a, 
	header nav.st5 ul.menu  li a,
	header #st-menuwide div.menu li a,
	header #st-menuwide nav.menu li a {
		color: <?php echo $menu_navbartextcolor; ?>;
	}

	<?php if($st_menu_bold ): //第一階層を太字にする ?>
		header .smanone ul.menu li a, 
		header nav.st5 ul.menu  li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:bold;
		}
		header .smanone ul.menu li li a, 
		header nav.st5 ul.menu  li li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:normal;
		}
	<?php endif; ?>

	header .smanone ul.menu li li a {
		background: <?php echo $menu_navbar_undercolor; ?>;
		border-top-color: <?php echo $menu_navbarcolor; ?>;

	}

	/*メニューの上下のパディング*/
	<?php if ( isset( $st_menu_padding ) && ( $st_menu_padding === 'top10' ) ): ?>
		#st-menubox {
			padding-top: 10px;
		}
	<?php elseif ( isset( $st_menu_padding ) && ( $st_menu_padding === 'bottom10' ) ): ?>
		#st-menubox {
			padding-bottom: 10px;
		}
	<?php else: ?>
	<?php endif; ?>


	/*ヘッダーウィジェット*/
	header .headbox .textwidget {
		background: <?php echo $menu_st_headerwidget_bgcolor; ?>;
		color: <?php echo $menu_st_headerwidget_textcolor; ?>;
	}

	/*ヘッダーの電話番号とリンク色*/
	.head-telno a, #header-r .footermenust a {
		color: <?php echo $menu_st_header_tel_color; ?>;
	}

	#header-r .footermenust li {
		border-right-color: <?php echo $menu_st_header_tel_color; ?>;
	}

	/*トップ用おすすめタイトル*/
	.nowhits .pop-box {
		border-top-color: <?php echo $menu_osusumemidasicolor; ?>;
	}

	/*記事エリアを広げる*/
	<?php if ( $st_area ): ?>
		main {
			padding: 30px 20px;
		}

		.st-eyecatch {
			margin: -30px -20px 10px;
		}
	<?php endif; ?>

	/*記事タイトル*/
	.entry-title, .post .entry-title {
		color: <?php echo $st_entrytitle_text; ?>;
		<?php if ( $st_entrytitle_bgimg ): ?>
			padding: 5px 15px;
			font-size:20px;
			line-height:34px;
		<?php else: ?>
			<?php if ( ( trim( $st_entrytitle_bgcolor_t ) !== '' ) || ( trim( $st_entrytitle_bgcolor ) !== '' ) ): ?>
				padding: 5px 15px;
				font-size:20px;
				line-height:34px;
				margin-bottom:20px;
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( $st_entrytitleborder_color ): //ボーダーがある場合 ?>
			padding: 5px 15px;
			font-size:20px;
			line-height:34px;
			margin-bottom:20px;
		<?php endif; ?>
	}

/*-- ここまで --*/
}
