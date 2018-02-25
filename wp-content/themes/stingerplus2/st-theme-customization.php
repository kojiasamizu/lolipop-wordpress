<?php
if ( !function_exists( 'st_is_customizer_enabled' ) ) {
	function st_is_customizer_enabled() {
		return ( get_option( 'st-data1', '' ) === 'yes' );
	}
}

if ( !function_exists( 'st_get_preset_name' ) ) {
	function st_get_preset_name() {
		return get_option( 'st-data68', '' );
	}
}

if ( !function_exists( 'st_should_output_style_element' ) ) {
	function st_should_output_style_element() {
		return ( get_option( 'st-data90', '' ) === 'yes' );
	}
}

if ( !function_exists( 'st_get_kantan_setting' ) ) {
	function st_get_kantan_setting() {
		return get_theme_mod( 'st_theme_setting', '' );
	}
}

if ( !function_exists( 'st_get_previous_kantan_setting' ) ) {
	function st_get_previous_kantan_setting() {
		return get_theme_mod( '_st_current_theme_setting', st_get_kantan_setting() );
	}
}

if ( !function_exists( 'st_get_preset_colors' ) ) {
	function st_get_preset_colors( $preset_name = null ) {
		switch ( true ) {
			// 赤 (エレガント)
			case ( $preset_name === 'red' ):
				$basecolor   = '#a61919';  //一番濃い色
				$maincolor   = '#c81e1e';  //少し薄い色
				$subcolor    = '#fce9e9';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// 青 (ビジネス)
			case ( $preset_name === 'blue' ):
				$basecolor   = '#039BE5';  //一番濃い色
				$maincolor   = '#13b0fc';  //少し薄い色
				$subcolor    = '#fbfeff';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// 緑 (ナチュラル)
			case ( $preset_name === 'green' ):
				$basecolor   = '#7CB342';  //一番濃い色
				$maincolor   = '#8fc25a';  //少し薄い色
				$subcolor    = '#f0f7e9';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// オレンジ (元気)
			case ( $preset_name === 'orange' ):
				$basecolor   = '#febe31';  //一番濃い色
				$maincolor   = '#fed271';  //少し薄い色
				$subcolor    = '#fffde7';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// ピンク (可愛い)
			case ( $preset_name === 'pink' ):
				$basecolor   = '#ff6893';  //一番濃い色
				$maincolor   = '#ff9bb7';  //少し薄い色
				$subcolor    = '#fff1f5';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// グレー (ダーク)
			case ( $preset_name === 'glay' ):
				$basecolor   = '#212121';  //一番濃い色
				$maincolor   = '#424242';  //少し薄い色
				$subcolor    = '#FAFAFA';  //とても薄い色
				$accentcolor = $basecolor; //アクセント
				$textcolor   = '#ffffff';     //テキスト

				break;

			// デフォルト
			default:
				$basecolor   = ''; //一番濃い色
				$maincolor   = ''; //少し薄い色
				$subcolor    = ''; //とても薄い色
				$accentcolor = ''; //アクセント
				$textcolor   = ''; //テキスト

				break;
		}

		return array(
			'basecolor'   => $basecolor,
			'maincolor'   => $maincolor,
			'subcolor'    => $subcolor,
			'accentcolor' => $accentcolor,
			'textcolor'   => $textcolor,
		);
	}
}

if ( !function_exists( 'st_get_kantan_colors' ) ) {
	function st_get_kantan_colors() {
		return array(
			'keycolor'  => get_theme_mod( 'st_key_patterncolor', '' ),
			'maincolor' => get_theme_mod( 'st_main_patterncolor', '' ),
			'subcolor'  => get_theme_mod( 'st_sub_patterncolor', '' ),
			'textcolor' => get_theme_mod( 'st_text_patterncolor', '' ),
		);
	}
}

if ( !function_exists( 'st_get_plain_theme_mod_defaults' ) ) {
	function st_get_plain_theme_mod_defaults() {
		return array(
			'st_header_footer_logo' => '', //ヘッダーロゴをフッターにも
			'st_area'               => '', //記事エリアを広げる

			'st_top_bordercolor' => '',    //サイト上部にボーダー
			'st_line100'         => '',    //サイト上部ボーダーを100%に
			'st_line_height'     => '5px', //サイト上部ボーダーの高さ

			'st_headbox_bgcolor_t'   => '',    //ヘッダーの背景色上部
			'st_headbox_bgcolor'     => '',    //ヘッダーの背景色下部
			'st_wrapper_bgcolor'     => '',    //Wrapperの背景色
			'st_header100'           => '',    //ヘッダーの背景画像の幅100%
			'st_header_image_side'   => '50%', //ヘッダーの背景画像の横位置
			'st_header_image_top'    => '50%', //ヘッダーの背景画像の縦位置
			'st_header_image_repeat' => '',    //ヘッダーの背景画像の繰り返し

			'st_headerunder_bgcolor'      => '',    //ヘッダー以下の背景色
			'st_headerunder_image_side'   => '50%', //ヘッダー以下の背景画像の横位置
			'st_headerunder_image_top'    => '50%', //ヘッダー以下の背景画像の縦位置
			'st_headerunder_image_repeat' => '',    //ヘッダー以下の背景画像の繰り返し

			'st_menu_logocolor' => '#1a1a1a', //サイトタイトル及びディスクリプション色

			'st_menu_maincolor'        => '#ffffff', //コンテンツ背景色
			'st_menu_main_bordercolor' => '',        //コンテンツボーダー色
			'st_main_opacity'          => '',        //メインコンテンツ背景の透過

			'st_footer_bg_text_color' => '',       //フッターテキスト色
			'st_footer_bg_color_t'    => '',       //フッター背景色上部
			'st_footer_bg_color'      => '',       //フッター背景色下部
			'st_footer100'            => '',       //フッター背景幅100%
			'st_footer_image_side'    => 'center', //フッターの背景画像の横位置
			'st_footer_image_top'     => 'center', //フッターの背景画像の縦位置
			'st_footer_image_repeat'  => '',       //フッターの背景画像の繰り返し

			//一括カラー
			'st_main_textcolor'      => '', //記事の文字色
			'st_side_textcolor'      => '', //サイドバーの文字色
			'st_link_textcolor'      => '', //記事のリンク色
			'st_link_hovertextcolor' => '', //記事のリンクマウスオーバー色
			'st_link_hoveropacity'   => '', //記事のリンクマウスオーバー時の透明度

			//ヘッダー
			'st_headerwidget_bgcolor'   => '',        //ヘッダーウィジェットの背景色
			'st_headerwidget_textcolor' => '#000000', //ヘッダーウィジェットのテキスト色
			'st_header_tel_color'       => '#000000', //ヘッダーの電話番号とリンク色

			//Webフォント
			'entrytitle_webfont'    => '', //記事タイトルにWebフォントを使用
			'menu_webfont'          => '', //各メニューにWebフォントを使用
			'poprankno_webfont'     => '', //任意記事ナンバーにWebフォントを使用
			'tel_webfont'           => '', //電話番号にWebフォントを使用
			'form_webfont'          => '', //問合せウィジェットボタンにWebフォントを使用
			'sns_webfont'           => '', //SNSボタンにWebフォントを使用
			'sidebar_title_webfont' => '', //サイドバー見出しにWebフォントを使用

			//投稿及び固定記事
			'st_kuzu_color' => '#dbdbdb', //投稿日時・ぱんくず・タグ

			//記事タイトル
			'st_entrytitle_text'              => '#000000', //記事タイトルのテキスト色
			'st_entrytitle_bgcolor_t'         => '',        //記事タイトルの背景色（上部）
			'st_entrytitle_bgcolor'           => '',        //記事タイトルの背景色
			'st_entrytitleborder_color'       => '',        //記事タイトルのボーダー色
			'st_entrytitleborder_tb'          => '',        //記事タイトルのボーダー上下のみ
			'st_entrytitle_bgimg_side'        => 'center',  //記事タイトルの背景画像の横位置
			'st_entrytitle_bgimg_top'         => 'center',  //記事タイトルの背景画像の縦位置
			'st_entrytitle_bgimg_repeat'      => '',        //記事タイトルの背景画像の繰り返し
			'st_entrytitle_bgimg_leftpadding' => 10,        //記事タイトルの背景画像の左の余白
			'st_entrytitle_bgimg_tupadding'   => 5,         //記事タイトルの背景画像の上下の余白
			'st_entrytitle_pc_fontsize'       => '',        //記事タイトルのフォントサイズ

			//h2タグ
			'st_menu_color'           => '#1a1a1a', //h2のテキスト色
			'st_h2_pc_fontsize'       => '',        //h2の文字サイズ
			'st_menu_bgcolor'         => '',        //h2の背景色
			'st_menu_bgcolor_t'       => '',        //h2の背景色上部
			'st_h2border_color'       => '',        //h2のボーダー色
			'st_h2_border_tb'         => '',        //h2のボーダー上下のみ
			'st_h2_design'            => '',        //h2デザインの変更
			'st_h2_bgimg_side'        => 'center',  //h2の背景画像の横位置
			'st_h2_bgimg_top'         => 'center',  //h2の背景画像の縦位置
			'st_h2_bgimg_repeat'      => '',        //h2の背景画像の繰り返し
			'st_h2_bgimg_leftpadding' => 20,        //h2の背景画像の左の余白
			'st_h2_bgimg_tupadding'   => 10,        //h2の背景画像の上下の余白

			//h3タグ
			'st_menu_h3bgcolor'       => '',        //h3の背景色
			'st_menu_h3textcolor'     => '#000000', //h3のテキスト色
			'st_menu_h3bordercolor'   => '',        //h3のボーダー色
			'st_solid_design'         => '',        //h3デザインのドット線をボーダーに変更
			'st_solid_top'            => '',        //h3デザインのボーダーを上に追加
			'st_h3_design'            => '',        //h3デザインの変更
			'st_h3hukidasi_design'    => '',        //h3デザインをふきだしに変更
			'st_h3_bgimg_side'        => 'center',  //h3の背景画像の横位置
			'st_h3_bgimg_top'         => 'center',  //h3の背景画像の縦位置
			'st_h3_bgimg_repeat'      => '',        //h3の背景画像の繰り返し
			'st_h3_bgimg_leftpadding' => 15,        //h3の背景画像の左の余白
			'st_h3_bgimg_tupadding'   => 10,        //h3の背景画像の上下の余白

			//h4タグ
			'st_menu_h4_textcolor'    => '#000000', //h4の文字色
			'st_menu_h4bordercolor'   => '',        //h4のボーダー色
			'st_menu_h4bgcolor'       => '',        //h4の背景色
			'st_h4_design'            => '',        //h4デザインの変更
			'st_h4_top_border'        => '',        //h4の上ボーダー
			'st_h4_bottom_border'     => '',        //h4の下ボーダー
			'st_h4_bgimg_side'        => 'center',  //h4の背景画像の横位置
			'st_h4_bgimg_top'         => 'center',  //h4の背景画像の縦位置
			'st_h4_bgimg_repeat'      => '',        //h4の背景画像の繰り返し
			'st_h4_bgimg_leftpadding' => 20,        //h4の背景画像の左の余白
			'st_h4_bgimg_tupadding'   => 10,        //h4の背景画像の上下の余白
			'st_h4hukidasi_design'    => '',        //h4デザインをふきだしに変更

			//h5タグ
			'st_menu_h5_textcolor'    => '#000000', //h5の文字色
			'st_menu_h5bordercolor'   => '',        //h5のボーダー色
			'st_menu_h5bgcolor'       => '',        //h5の背景色
			'st_h5_design'            => '',        //h5デザインの変更
			'st_h5_top_border'        => '',        //h5の上ボーダー
			'st_h5_bottom_border'     => '',        //h5の下ボーダー
			'st_h5_bgimg_side'        => 'center',  //h5の背景画像の横位置
			'st_h5_bgimg_top'         => 'center',  //h5の背景画像の縦位置
			'st_h5_bgimg_repeat'      => '',        //h5の背景画像の繰り返し
			'st_h5_bgimg_leftpadding' => 20,        //h5の背景画像の左の余白
			'st_h5_bgimg_tupadding'   => 10,        //h5の背景画像の上下の余白
			'st_h5hukidasi_design'    => '',        //h5デザインをふきだしに変更

			'st_blockquote_color' => '#f3f3f3', //引用部分の背景色

			'st_separator_color'   => '#f3f3f3', //NEW ENTRYのテキスト色
			'st_separator_bgcolor' => '#1a1a1a', //NEW ENTRYの背景色

			'st_catbg_color'   => '#f3f3f3', //カテゴリの背景色
			'st_cattext_color' => '#000000', //カテゴリのテキスト色

			//お知らせ
			'st_news_datecolor'            => '#727272', //お知らせ日付のテキスト色
			'st_news_text_color'           => '#000000', //お知らせのテキストと下線色
			'st_menu_newsbarcolor_t'       => '',        //お知らせの背景色上
			'st_menu_newsbarcolor'         => '',        //お知らせの背景色下
			'st_menu_newsbar_border_color' => '',        //お知らせのボーダー色
			'st_menu_newsbartextcolor'     => '#000000', //お知らせのテキスト色
			'st_menu_newsbgcolor'          => '',        //お知らせの全体背景色

			//メニュー
			'st_menu_navbar_topunder_color' => '',        //メニューの上下ボーダー色
			'st_menu_navbar_side_color'     => '',        //メニューの左右ボーダー色
			'st_menu_navbar_right_color'    => '',        //メニューの右ボーダー色
			'st_menu_navbarcolor'           => '',        //メニューの背景色下
			'st_menu_navbarcolor_t'         => '',        //メニューの背景色上
			'st_menu_navbartextcolor'       => '#000000', //PCメニューテキスト色
			'st_menu_bold'                  => '',        //第一階層メニューを太字にする
			'st_menu100'                    => '',        //PCメニュー100%
			'st_menu_padding'               => '',        //PCメニューの上下に隙間

			'st_no_header_design' => '', //ヘッダーメニューのカラーを引き継がない

			'st_headermenu_bgimg_side'   => 'center', //ヘッダーメニューの背景画像の横位置
			'st_headermenu_bgimg_top'    => 'center', //ヘッダーメニューの背景画像の縦位置
			'st_headermenu_bgimg_repeat' => '',       //ヘッダーメニューの背景画像の繰り返し

			'st_sidemenu_bgimg_side'        => 'center', //サイドメニュー第一階層の背景画像の横位置
			'st_sidemenu_bgimg_top'         => 'center', //サイドメニュー第一階層の背景画像の縦位置
			'st_sidemenu_bgimg_repeat'      => '',       //サイドメニュー第一階層の背景画像の繰り返し
			'st_sidemenu_bgimg_leftpadding' => 15,       //サイドメニュー第一階層の背景画像の左の余白
			'st_sidemenu_bgimg_tupadding'   => 8,        //サイドメニュー第一階層の背景画像の上下の余白

			'st_sidebg_bgimg_side'   => 'center', //サイドメニューの背景画像の横位置
			'st_sidebg_bgimg_top'    => 'center', //サイドメニューの背景画像の縦位置
			'st_sidebg_bgimg_repeat' => '',       //サイドメニューの背景画像の繰り返し

			'st_headerimg100'             => '',    //ヘッダー画像100%
			'st_header_bgcolor'           => '',    //ヘッダー画像の背景色
			'st_topgabg_image_side'       => '50%', //ヘッダー画像の背景画像の横位置
			'st_topgabg_image_top'        => '50%', //ヘッダー画像の背景画像の縦位置
			'st_topgabg_image_repeat'     => '',    //ヘッダー画像の背景画像の繰り返し
			'st_topgabg_image_flex'       => '',    //ヘッダー画像の背景画像のレスポンシブ化
			'st_topgabg_image_sumahoonly' => '',    //ヘッダー画像の背景画像をスマホとタブレットのみに
			'st_header_sc'                => '',    //スライドショー画像の横並び
			'st_slide_btn'                => '',    //スライドショー矢印非表示

			'st_menu_navbar_undercolor' => '', //PCドロップダウン下層メニュー背景

			//サイドメニュー
			'st_menu_icon'            => '', //メニュー第一階層のWebアイコン
			'st_undermenu_icon'       => '', //メニュー第二階層のWebアイコン
			'st_menu_icon_color'      => '', //メニュー第一階層のWebアイコンカラー
			'st_undermenu_icon_color' => '', //メニュー第二階層のWebアイコンカラー

			'st_menu_pagelist_childtextcolor'         => '#000000', //サイドメニュー下層のテキスト色
			'st_menu_pagelist_bgcolor'                => '',        //サイドメニュー下層の背景色
			'st_menu_pagelist_childtext_border_color' => '',        //サイドメニュー下層の下線色

			'st_menu_h4sidetextcolor' => '#000000', //サイドバー見出し
			'st_tagcloud_color'       => '#1a1a1a', //タグクラウド色
			'st_rss_color'            => '#87BF31', //RSSボタン

			'st_sns_btn'     => '', //SNSボタン背景
			'st_sns_btntext' => '', //SNSボタンテキスト

			'st_formbtn_textcolor'   => '#ffffff', //ウィジェット問合せフォームのテキスト色
			'st_formbtn_bordercolor' => '',        //ウィジェット問合せフォームのボーダー色
			'st_formbtn_bgcolor_t'   => '',        //ウィジェット問合せフォームの背景色上部
			'st_formbtn_bgcolor'     => '#616161', //ウィジェット問合せフォームの背景色
			'st_formbtn_radius'      => '',        //ウィジェット問合せフォームの角を丸くする

			'st_formbtn2_textcolor'   => '#ffffff', //ウィジェットオリジナルボタンのテキスト色
			'st_formbtn2_bordercolor' => '',        //ウィジェットオリジナルボタンのボーダー色
			'st_formbtn2_bgcolor_t'   => '',        //ウィジェットオリジナルボタンの背景色
			'st_formbtn2_bgcolor'     => '#616161', //ウィジェットオリジナルボタンの背景色
			'st_formbtn2_radius'      => '',        //ウィジェットオリジナルボタンの角を丸くする

			'st_contactform7btn_textcolor' => '#000000', //コンタクトフォーム7の送信ボタンテキスト色
			'st_contactform7btn_bgcolor'   => '#f3f3f3', //コンタクトフォーム7の送信ボタンの背景色

			//任意記事
			'st_menu_osusumemidasitextcolor' => '#ffffff', //任意記事の見出しテキスト色
			'st_menu_osusumemidasicolor'     => '#FEB20A', //任意記事の見出し背景色
			'st_menu_osusumemidasinocolor'   => '#ffffff', //任意記事のナンバー色
			'st_menu_osusumemidasinobgcolor' => '#FEB20A', //任意記事のナンバー背景色
			'st_menu_popbox_color'           => '#f3f3f3', //任意記事の背景色
			'st_menu_popbox_textcolor'       => '',        //任意記事のテキスト色
			'st_nohidden'                    => '',        //任意記事のナンバー削除

			//フリーボックスウィジェット
			'st_freebox_tittle_textcolor' => '#ffffff', //フリーボックスウィジェットの見出しテキスト色
			'st_freebox_tittle_color'     => '#FEB20A', //フリーボックスウィジェットの見出背景色
			'st_freebox_color'            => '#f3f3f3', //フリーボックスウィジェットの背景色
			'st_freebox_textcolor'        => '',        //フリーボックスウィジェットのテキスト色

			//スマートフォンサイズ
			'st_menu_sumartmenutextcolor' => '#000000', //スマホメニュー
			'st_menu_sumart_bg_color'     => '#000000', //スマホメニュー背景色
			'st_menu_sumartbar_bg_color'  => '',        //スマホメニューバー背景色
			'st_menu_sumartcolor'         => '#616161', //スマホwebアイコン
			'st_sticky_menu'              => '',        //スマホメニューfix
			'st_pagetop_up'               => '',        //TOPに戻るボタンの位置

			'st_menu_sumart_st_bg_color'  => '', //追加スマホメニュー背景色
			'st_menu_sumart_st_color'     => '', //追加スマホwebアイコン色
			'st_menu_sumart_st2_bg_color' => '', //追加スマホメニュー背景色2
			'st_menu_sumart_st2_color'    => '', //追加スマホwebアイコン色2
			'st_menu_sumart_footermenu_text_color'    => '#000000', //スマホフッターメニューテキスト色
			'st_menu_sumart_footermenu_bg_color'    => '', //スマホフッターメニュー背景色

			//Webアイコン
			'st_webicon_question'    => '', //はてな
			'st_webicon_check'       => '', //チェック
			'st_webicon_exclamation' => '', //エクステンション
			'st_webicon_memo'        => '', //メモ
			'st_webicon_user'        => '', //人物

			//TOC
			'st_toc_textcolor'   => '', //文字色
			'st_toc_bordercolor' => '', //ボーダー色
			'st_toc_bgcolor'     => '', //背景色

			//マル数字のカラー
			'st_maruno_textcolor'   => '', //ナンバー色
			'st_maruno_nobgcolor'   => '', //ナンバー背景色
			'st_maruno_bordercolor' => '', //囲いボーダー色
			'st_maruno_bgcolor'     => '', //囲い背景色

			//マルチェックのカラー
			'st_maruck_textcolor'   => '', //ナンバー色
			'st_maruck_nobgcolor'   => '', //ナンバー背景色
			'st_maruck_bordercolor' => '', //囲いボーダー色
			'st_maruck_bgcolor'     => '', //囲い背景色

			//テーブルのカラー
			'st_table_bordercolor'  => '', //表のボーダー色
			'st_table_cell_bgcolor' => '', //偶数行のセルの色
			'st_table_td_bgcolor'   => '', //縦一列目の背景色
			'st_table_td_textcolor' => '', //縦一列目の文字色
			'st_table_td_bold'      => '', //縦一列目の太字
			'st_table_tr_bgcolor'   => '', //横一列目の背景色
			'st_table_tr_textcolor' => '', //横一列目の文字色
			'st_table_tr_bold'      => '', //横一列目の太字

			//会話ふきだし
			'st_kaiwa_bgcolor'  => '', //会話統一ふきだし背景色
			'st_kaiwa2_bgcolor'  => '', //会話2ふきだし背景色
			'st_kaiwa3_bgcolor'  => '', //会話3ふきだし背景色
			'st_kaiwa4_bgcolor'  => '', //会話4ふきだし背景色
			'st_kaiwa5_bgcolor'  => '', //会話5ふきだし背景色
			'st_kaiwa6_bgcolor'  => '', //会話6ふきだし背景色
			'st_kaiwa7_bgcolor'  => '', //会話7ふきだし背景色
			'st_kaiwa8_bgcolor'  => '', //会話8ふきだし背景色
		);
	}
}

if ( !function_exists( 'st_get_preset_theme_mod_overrides' ) ) {
	function st_get_preset_theme_mod_overrides( $preset_name ) {
		extract( st_get_preset_colors( $preset_name ), EXTR_OVERWRITE );

		return array(

			'st_header_footer_logo' => '', //ヘッダーロゴをフッターにも
			'st_area'               => '', //記事エリアを広げる

			'st_top_bordercolor' => '',    //サイト上部にボーダー
			'st_line100'         => '',    //サイト上部ボーダーを100%に
			'st_line_height'     => '5px', //サイト上部ボーダーの高さ

			'st_headbox_bgcolor_t'   => '',    //ヘッダーの背景色上部
			'st_headbox_bgcolor'     => '',    //ヘッダーの背景色下部
			'st_wrapper_bgcolor'     => '',    //Wrapperの背景色
			'st_header100'           => '',    //ヘッダーの背景画像の幅100%
			'st_header_image_side'   => '50%', //ヘッダーの背景画像の横位置
			'st_header_image_top'    => '50%', //ヘッダーの背景画像の縦位置
			'st_header_image_repeat' => '',    //ヘッダーの背景画像の繰り返し

			'st_headerunder_bgcolor'      => '',    //ヘッダー以下の背景色
			'st_headerunder_image_side'   => '50%', //ヘッダー以下の背景画像の横位置
			'st_headerunder_image_top'    => '50%', //ヘッダー以下の背景画像の縦位置
			'st_headerunder_image_repeat' => '',    //ヘッダー以下の背景画像の繰り返し

			'st_menu_logocolor' => '#1a1a1a', //サイトタイトル及びディスクリプション色

			'st_menu_maincolor'        => '#ffffff', //コンテンツ背景色
			'st_menu_main_bordercolor' => '',        //コンテンツボーダー色
			'st_main_opacity'          => '',        //メインコンテンツ背景の透過

			'st_footer_bg_text_color' => '',       //フッターテキスト色
			'st_footer_bg_color_t'    => '',       //フッター背景色上部
			'st_footer_bg_color'      => '',       //フッター背景色下部
			'st_footer100'            => '',       //フッター背景幅100%
			'st_footer_image_side'    => 'center', //フッターの背景画像の横位置
			'st_footer_image_top'     => 'center', //フッターの背景画像の縦位置
			'st_footer_image_repeat'  => '',       //フッターの背景画像の繰り返し

			//一括カラー
			'st_main_textcolor'      => '', //記事の文字色
			'st_side_textcolor'      => '', //サイドバーの文字色
			'st_link_textcolor'      => '', //記事のリンク色
			'st_link_hovertextcolor' => '', //記事のリンクマウスオーバー色
			'st_link_hoveropacity'   => '', //記事のリンクマウスオーバー時の透明度

			//ヘッダー
			'st_headerwidget_bgcolor'   => $subcolor, //ヘッダーウィジェットの背景色
			'st_headerwidget_textcolor' => '#000000', //ヘッダーウィジェットのテキスト色
			'st_header_tel_color'       => '#000000', //ヘッダーの電話番号とリンク色

			//Webフォント
			'entrytitle_webfont'    => '', //記事タイトルにWebフォントを使用
			'menu_webfont'          => '', //各メニューにWebフォントを使用
			'poprankno_webfont'     => '', //任意記事ナンバーにWebフォントを使用
			'tel_webfont'           => '', //電話番号にWebフォントを使用
			'form_webfont'          => '', //問合せウィジェットボタンにWebフォントを使用
			'sns_webfont'           => '', //SNSボタンにWebフォントを使用
			'sidebar_title_webfont' => '', //サイドバー見出しにWebフォントを使用

			//投稿及び固定記事
			'st_kuzu_color' => '#dbdbdb', //投稿日時・ぱんくず・タグ

			//記事タイトル
			'st_entrytitle_text'              => '#000000', //記事タイトルのテキスト色
			'st_entrytitle_bgcolor_t'         => '',        //記事タイトルの背景色（上部）
			'st_entrytitle_bgcolor'           => '',        //記事タイトルの背景色
			'st_entrytitleborder_color'       => '',        //記事タイトルのボーダー色
			'st_entrytitleborder_tb'          => '',        //記事タイトルのボーダー上下のみ
			'st_entrytitle_bgimg_side'        => 'center',  //記事タイトルの背景画像の横位置
			'st_entrytitle_bgimg_top'         => 'center',  //記事タイトルの背景画像の縦位置
			'st_entrytitle_bgimg_repeat'      => '',        //記事タイトルの背景画像の繰り返し
			'st_entrytitle_bgimg_leftpadding' => 10,        //記事タイトルの背景画像の左の余白
			'st_entrytitle_bgimg_tupadding'   => 5,         //記事タイトルの背景画像の上下の余白
			'st_entrytitle_pc_fontsize'       => '',        //記事タイトルのフォントサイズ

			//h2タグ
			'st_menu_color'           => $basecolor, //h2のテキスト色
			'st_h2_pc_fontsize'       => '',         //h2の文字サイズ
			'st_menu_bgcolor'         => $subcolor,  //h2の背景色
			'st_menu_bgcolor_t'       => $subcolor,  //h2の背景色上部
			'st_h2border_color'       => $basecolor, //h2のボーダー色
			'st_h2_border_tb'         => $basecolor, //h2のボーダー上下のみ
			'st_h2_design'            => '',         //h2デザインの変更
			'st_h2_bgimg_side'        => 'center',   //h2の背景画像の横位置
			'st_h2_bgimg_top'         => 'center',   //h2の背景画像の縦位置
			'st_h2_bgimg_repeat'      => '',         //h2の背景画像の繰り返し
			'st_h2_bgimg_leftpadding' => 20,         //h2の背景画像の左の余白
			'st_h2_bgimg_tupadding'   => 10,         //h2の背景画像の上下の余白

			//h3タグ
			'st_menu_h3bgcolor'       => '',         //h3の背景色
			'st_menu_h3textcolor'     => $basecolor, //h3のテキスト色
			'st_menu_h3bordercolor'   => '',         //h3のボーダー色
			'st_solid_design'         => '',         //h3デザインのドット線をボーダーに変更
			'st_solid_top'            => '',         //h3デザインのボーダーを上に追加
			'st_h3_design'            => '',         //h3デザインの変更
			'st_h3hukidasi_design'    => '',         //h3デザインをふきだしに変更
			'st_h3_bgimg_side'        => 'center',   //h3の背景画像の横位置
			'st_h3_bgimg_top'         => 'center',   //h3の背景画像の縦位置
			'st_h3_bgimg_repeat'      => '',         //h3の背景画像の繰り返し
			'st_h3_bgimg_leftpadding' => 15,         //h3の背景画像の左の余白
			'st_h3_bgimg_tupadding'   => 10,         //h3の背景画像の上下の余白

			//h4タグ
			'st_menu_h4_textcolor'    => $basecolor, //h4の文字色
			'st_menu_h4bordercolor'   => '',         //h4のボーダー色
			'st_menu_h4bgcolor'       => $subcolor,  //h4の背景色
			'st_h4_design'            => '',         //h4デザインの変更
			'st_h4_top_border'        => '',         //h4の上ボーダー
			'st_h4_bottom_border'     => '',         //h4の下ボーダー
			'st_h4_bgimg_side'        => 'center',   //h4の背景画像の横位置
			'st_h4_bgimg_top'         => 'center',   //h4の背景画像の縦位置
			'st_h4_bgimg_repeat'      => '',         //h4の背景画像の繰り返し
			'st_h4_bgimg_leftpadding' => 20,         //h4の背景画像の左の余白
			'st_h4_bgimg_tupadding'   => 10,         //h4の背景画像の上下の余白
			'st_h4hukidasi_design'    => '',        //h4デザインをふきだしに変更

			//h5タグ
			'st_menu_h5_textcolor'    => $basecolor, //h5の文字色
			'st_menu_h5bordercolor'   => '',         //h5のボーダー色
			'st_menu_h5bgcolor'       => '',  //h5の背景色
			'st_h5_design'            => '',         //h5デザインの変更
			'st_h5_top_border'        => '',         //h5の上ボーダー
			'st_h5_bottom_border'     => '',         //h5の下ボーダー
			'st_h5_bgimg_side'        => 'center',   //h5の背景画像の横位置
			'st_h5_bgimg_top'         => 'center',   //h5の背景画像の縦位置
			'st_h5_bgimg_repeat'      => '',         //h5の背景画像の繰り返し
			'st_h5_bgimg_leftpadding' => '',         //h5の背景画像の左の余白
			'st_h5_bgimg_tupadding'   => 10,         //h5の背景画像の上下の余白
			'st_h5hukidasi_design'    => '',        //h5デザインをふきだしに変更

			'st_blockquote_color' => '#f3f3f3', //引用部分の背景色

			'st_separator_color'   => $textcolor, //NEW ENTRYのテキスト色
			'st_separator_bgcolor' => $basecolor, //NEW ENTRYの背景色

			'st_catbg_color'   => $subcolor, //カテゴリの背景色
			'st_cattext_color' => '#000000', //カテゴリのテキスト色

			//お知らせ
			'st_news_datecolor'            => $maincolor, //お知らせ日付のテキスト色
			'st_news_text_color'           => '#000000',  //お知らせのテキストと下線色
			'st_menu_newsbarcolor_t'       => $maincolor, //お知らせの背景色上
			'st_menu_newsbarcolor'         => $basecolor, //お知らせの背景色下
			'st_menu_newsbar_border_color' => $maincolor, //お知らせのボーダー色
			'st_menu_newsbartextcolor'     => $textcolor, //お知らせのテキスト色
			'st_menu_newsbgcolor'          => '',         //お知らせの全体背景色

			//メニュー
			'st_menu_navbar_topunder_color' => $basecolor, //メニューの上下ボーダー色
			'st_menu_navbar_side_color'     => $basecolor, //メニューの左右ボーダー色
			'st_menu_navbar_right_color'    => $maincolor, //メニューの右ボーダー色
			'st_menu_navbarcolor'           => $basecolor, //メニューの背景色下
			'st_menu_navbarcolor_t'         => $maincolor, //メニューの背景色上
			'st_menu_navbartextcolor'       => $textcolor, //PCメニューテキスト色
			'st_menu_bold'                  => '',         //第一階層メニューを太字にする
			'st_menu100'                    => '',         //PCメニュー100%
			'st_menu_padding'               => '',         //PCメニューの上下に隙間

			'st_no_header_design' => '', //ヘッダーメニューのカラーを引き継がない

			'st_headermenu_bgimg_side'   => 'center', //ヘッダーメニューの背景画像の横位置
			'st_headermenu_bgimg_top'    => 'center', //ヘッダーメニューの背景画像の縦位置
			'st_headermenu_bgimg_repeat' => '',       //ヘッダーメニューの背景画像の繰り返し

			'st_sidemenu_bgimg_side'        => 'center', //サイドメニュー第一階層の背景画像の横位置
			'st_sidemenu_bgimg_top'         => 'center', //サイドメニュー第一階層の背景画像の縦位置
			'st_sidemenu_bgimg_repeat'      => '',       //サイドメニュー第一階層の背景画像の繰り返し
			'st_sidemenu_bgimg_leftpadding' => 15,       //サイドメニュー第一階層の背景画像の左の余白
			'st_sidemenu_bgimg_tupadding'   => 8,        //サイドメニュー第一階層の背景画像の上下の余白

			'st_sidebg_bgimg_side'   => 'center', //サイドメニューの背景画像の横位置
			'st_sidebg_bgimg_top'    => 'center', //サイドメニューの背景画像の縦位置
			'st_sidebg_bgimg_repeat' => '',       //サイドメニューの背景画像の繰り返し

			'st_headerimg100'             => '',    //ヘッダー画像100%
			'st_header_bgcolor'           => '',    //ヘッダー画像の背景色
			'st_topgabg_image_side'       => '50%', //ヘッダー画像の背景画像の横位置
			'st_topgabg_image_top'        => '50%', //ヘッダー画像の背景画像の縦位置
			'st_topgabg_image_repeat'     => '',    //ヘッダー画像の背景画像の繰り返し
			'st_topgabg_image_flex'       => '',    //ヘッダー画像の背景画像のレスポンシブ化
			'st_topgabg_image_sumahoonly' => '',    //ヘッダー画像の背景画像をスマホとタブレットのみに
			'st_header_sc'                => '',    //スライドショー画像の横並び
			'st_slide_btn'                => '',    //スライドショー矢印非表示

			'st_menu_navbar_undercolor' => $maincolor, //PCドロップダウン下層メニュー背景

			//サイドメニュー
			'st_menu_icon'              => '', //メニュー第一階層のWebアイコン
			'st_undermenu_icon'         => '', //メニュー第二階層のWebアイコン
			'st_menu_icon_color'        => '', //メニュー第一階層のWebアイコンカラー
			'st_undermenu_icon_color'   => '', //メニュー第二階層のWebアイコンカラー

			'st_menu_pagelist_childtextcolor'         => $basecolor, //サイドメニュー下層のテキスト色
			'st_menu_pagelist_bgcolor'                => $subcolor,  //サイドメニュー下層の背景色
			'st_menu_pagelist_childtext_border_color' => $maincolor, //サイドメニュー下層の下線色

			'st_menu_h4sidetextcolor' => $basecolor, //サイドバー見出し
			'st_tagcloud_color'       => $basecolor, //タグクラウド色
			'st_rss_color'            => $basecolor, //RSSボタン

			'st_sns_btn'     => '', //SNSボタン背景
			'st_sns_btntext' => '', //SNSボタンテキスト

			'st_formbtn_textcolor'   => $textcolor, //ウィジェット問合せフォームのテキスト色
			'st_formbtn_bordercolor' => '',         //ウィジェット問合せフォームのボーダー色
			'st_formbtn_bgcolor_t'   => '',         //ウィジェット問合せフォームの背景色上部
			'st_formbtn_bgcolor'     => $basecolor, //ウィジェット問合せフォームの背景色
			'st_formbtn_radius'      => '',         //ウィジェット問合せフォームの角を丸くする

			'st_formbtn2_textcolor'   => $textcolor, //ウィジェッオリジナルボタンのテキスト色
			'st_formbtn2_bordercolor' => '',         //ウィジェットオリジナルボタンのボーダー色
			'st_formbtn2_bgcolor_t'   => '',         //ウィジェッオリジナルボタンの背景色
			'st_formbtn2_bgcolor'     => $basecolor, //ウィジェッオリジナルボタンの背景色
			'st_formbtn2_radius'      => '',         //ウィジェッオリジナルボタンの角を丸くする

			'st_contactform7btn_textcolor' => $textcolor, //コンタクトフォーム7の送信ボタンテキスト色
			'st_contactform7btn_bgcolor'   => $basecolor, //コンタクトフォーム7の送信ボタンの背景色

			//任意記事
			'st_menu_osusumemidasitextcolor' => $textcolor,   //任意記事の見出しテキスト色
			'st_menu_osusumemidasicolor'     => $accentcolor, //任意記事の見出し背景色
			'st_menu_osusumemidasinocolor'   => $textcolor,   //任意記事のナンバー色
			'st_menu_osusumemidasinobgcolor' => $accentcolor, //任意記事のナンバー背景色
			'st_menu_popbox_color'           => $subcolor,    //任意記事の背景色
			'st_menu_popbox_textcolor'       => '',           //任意記事のテキスト色
			'st_nohidden'                    => '',           //任意記事のナンバー削除

			//フリーボックスウィジェット
			'st_freebox_tittle_textcolor' => $textcolor,   //フリーボックスウィジェットの見出しテキスト色
			'st_freebox_tittle_color'     => $accentcolor, //フリーボックスウィジェットの見出背景色
			'st_freebox_color'            => $subcolor,    //フリーボックスウィジェットの背景色
			'st_freebox_textcolor'        => '',           //フリーボックスウィジェットのテキスト色

			//スマートフォンサイズ
			'st_menu_sumartmenutextcolor' => '#000000',  //スマホメニュー文字色
			'st_menu_sumart_bg_color'     => $basecolor, //スマホメニュー背景色
			'st_menu_sumartbar_bg_color'  => '',         //スマホメニューバー背景色
			'st_menu_sumartcolor'         => $maincolor, //スマホwebアイコン
			'st_sticky_menu'              => '',         //スマホメニューfix
			'st_pagetop_up'               => '',         //TOPに戻るボタンの位置

			'st_menu_sumart_st_bg_color'  => $basecolor, //追加スマホメニュー背景色
			'st_menu_sumart_st_color'     => $maincolor, //追加スマホwebアイコン色
			'st_menu_sumart_st2_bg_color' => $basecolor, //追加スマホメニュー背景色2
			'st_menu_sumart_st2_color'    => $maincolor, //追加スマホwebアイコン色2
			'st_menu_sumart_footermenu_text_color'    => '', //スマホフッターメニューテキスト色
			'st_menu_sumart_footermenu_bg_color'    => '', //スマホフッターメニュー背景色

			//Webアイコン
			'st_webicon_question'    => '', //はてな
			'st_webicon_check'       => '', //チェック
			'st_webicon_exclamation' => '', //エクステンション
			'st_webicon_memo'        => '', //メモ
			'st_webicon_user'        => '', //人物

			//TOC
			'st_toc_textcolor'   => '', //文字色
			'st_toc_bordercolor' => '', //ボーダー色
			'st_toc_bgcolor'     => '', //背景色

			//マル数字のカラー
			'st_maruno_textcolor'   => '', //ナンバー色
			'st_maruno_nobgcolor'   => '', //ナンバー背景色
			'st_maruno_bordercolor' => '', //囲いボーダー色
			'st_maruno_bgcolor'     => '', //囲い背景色

			//マルチェックのカラー
			'st_maruck_textcolor'   => '', //ナンバー色
			'st_maruck_nobgcolor'   => '', //ナンバー背景色
			'st_maruck_bordercolor' => '', //囲いボーダー色
			'st_maruck_bgcolor'     => '', //囲い背景色

			//テーブルのカラー
			'st_table_bordercolor'  => '', //表のボーダー色
			'st_table_cell_bgcolor' => '', //偶数行のセルの色
			'st_table_td_bgcolor'   => '', //縦一列目の背景色
			'st_table_td_textcolor' => '', //縦一列目の文字色
			'st_table_td_bold'      => '', //縦一列目の太字
			'st_table_tr_bgcolor'   => '', //横一列目の背景色
			'st_table_tr_textcolor' => '', //横一列目の文字色
			'st_table_tr_bold'      => '', //横一列目の太字

			//会話ふきだし
			'st_kaiwa_bgcolor'  => '', //会話統一ふきだし背景色
			'st_kaiwa2_bgcolor'  => '', //会話2ふきだし背景色
			'st_kaiwa3_bgcolor'  => '', //会話3ふきだし背景色
			'st_kaiwa4_bgcolor'  => '', //会話4ふきだし背景色
			'st_kaiwa5_bgcolor'  => '', //会話5ふきだし背景色
			'st_kaiwa6_bgcolor'  => '', //会話6ふきだし背景色
			'st_kaiwa7_bgcolor'  => '', //会話7ふきだし背景色
			'st_kaiwa8_bgcolor'  => '', //会話8ふきだし背景色
		);
	}
}

if (!function_exists( 'st_get_menuonly_theme_mod_overrides' )) {
	function st_get_menuonly_theme_mod_overrides() {

		extract( st_get_kantan_colors(), EXTR_OVERWRITE );

		return array(
			'st_menu_navbar_topunder_color' => $keycolor,  //メニューの上下ボーダー色
			'st_menu_navbar_side_color'     => $keycolor,  //メニューの左右ボーダー色
			'st_menu_navbar_right_color'    => $maincolor, //メニューの右ボーダー色
			'st_menu_navbarcolor'           => $keycolor,  //メニューの背景色下
			'st_menu_navbarcolor_t'         => $maincolor, //メニューの背景色上

			'st_menu_navbartextcolor' => $textcolor, //PCメニューテキスト色

			//サイドメニュー
			'st_menu_pagelist_childtextcolor'         => $keycolor,  //サイドメニュー下層のテキスト色
			'st_menu_pagelist_bgcolor'                => $subcolor,  //サイドメニュー下層の背景色
			'st_menu_pagelist_childtext_border_color' => $maincolor, //サイドメニュー下層の下線色
		);
	}
}

if (!function_exists( 'st_get_zentai_theme_mod_overrides' )) {
	function st_get_zentai_theme_mod_overrides() {
		extract( st_get_kantan_colors(), EXTR_OVERWRITE );

		$menuonly_overrides = st_get_menuonly_theme_mod_overrides();
		$zentai_overrides   = array(

			//h2タグ
			'st_menu_color'        => $textcolor, //h2のテキスト色
			'st_menu_bgcolor'      => $maincolor, //h2の背景色
			'st_h2border_color'    => $keycolor,  //h2のボーダー色

			//h3タグ
			'st_menu_h3textcolor'  => $keycolor, //h3のテキスト色

			//h4タグ
			'st_menu_h4_textcolor' => $keycolor, //h4の文字色

			//h5タグ
			'st_menu_h5_textcolor' => $keycolor, //h5の文字色

			'st_separator_color'   => $textcolor, //NEW ENTRYのテキスト色
			'st_separator_bgcolor' => $keycolor,  //NEW ENTRYの背景色

			'st_catbg_color'                 => $subcolor, //カテゴリの背景色

			//お知らせ
			'st_menu_newsbarcolor_t'         => $maincolor, //お知らせの背景色上
			'st_menu_newsbarcolor'           => $keycolor,  //お知らせの背景色下
			'st_menu_newsbar_border_color'   => $keycolor,  //お知らせのボーダー色
			'st_menu_newsbartextcolor'       => $textcolor, //お知らせのテキスト色

			//サイドメニュー
			'st_menu_h4sidetextcolor'        => $keycolor, //サイドバー見出し
			'st_tagcloud_color'              => $keycolor, //タグクラウド色

			//任意記事
			'st_menu_osusumemidasitextcolor' => $textcolor, //任意記事の見出しテキスト色
			'st_menu_osusumemidasicolor'     => $keycolor,  //任意記事の見出し背景色
			'st_menu_osusumemidasinocolor'   => $textcolor, //任意記事のナンバー色
			'st_menu_osusumemidasinobgcolor' => $keycolor,  //任意記事のナンバー背景色
			'st_menu_popbox_color'           => $subcolor,  //任意記事の背景色

			//スマートフォンサイズ
			'st_menu_sumartmenutextcolor'    => $textcolor, //スマホメニュー文字色
			'st_menu_sumart_bg_color'        => $keycolor,  //スマホメニュー背景色
			'st_menu_sumartcolor'            => $subcolor,  //スマホwebアイコン
		);

		return array_merge($menuonly_overrides, $zentai_overrides);
	}
}

if ( !function_exists( 'st_create_default_theme_mod_diff' ) ) {
	function st_create_default_theme_mod_diff( $theme_mod_defaults ) {
		$theme_mod_diff    = array();
		$previous_defaults = st_get_theme_mod_defaults( st_get_previous_kantan_setting() );

		foreach ($theme_mod_defaults as $theme_mod_name => $theme_mod_value) {
			if (!array_key_exists($theme_mod_name, $previous_defaults)) {
				$theme_mod_diff[$theme_mod_name] = $theme_mod_value;

				continue;
			}

			$current_theme_mod = get_theme_mod($theme_mod_name, $previous_defaults[$theme_mod_name]);

			if ($current_theme_mod === $previous_defaults[$theme_mod_name]) {
				$theme_mod_diff[$theme_mod_name] = $theme_mod_value;

				continue;
			}
		}

		return $theme_mod_diff;
	}
}

if ( !function_exists( 'st_get_var_theme_mod_maps' ) ) {
	function st_get_var_theme_mod_maps() {
		return array(
			'st_header_footer_logo' => 'st_header_footer_logo', //ヘッダーロゴをフッターにも
			'st_area'               => 'st_area',               //記事エリアを広げる

			'st_top_bordercolor' => 'st_top_bordercolor', //サイト上部にボーダー
			'st_line100'         => 'st_line100',         //サイト上部ボーダーを100%に
			'st_line_height'     => 'st_line_height',     //サイト上部ボーダーの高さ

			'st_headbox_bgcolor_t'   => 'st_headbox_bgcolor_t',   //ヘッダーの背景色上部
			'st_headbox_bgcolor'     => 'st_headbox_bgcolor',     //ヘッダーの背景色下部
			'st_wrapper_bgcolor'     => 'st_wrapper_bgcolor',     //Wrapperの背景色
			'st_header100'           => 'st_header100',           //ヘッダーの背景画像の幅100%
			'st_header_image_side'   => 'st_header_image_side',   //ヘッダーの背景画像の横位置
			'st_header_image_top'    => 'st_header_image_top',    //ヘッダーの背景画像の縦位置
			'st_header_image_repeat' => 'st_header_image_repeat', //ヘッダーの背景画像の繰り返し

			'st_headerunder_bgcolor'      => 'st_headerunder_bgcolor',      //ヘッダー以下の背景色
			'st_headerunder_image_side'   => 'st_headerunder_image_side',   //ヘッダー以下の背景画像の横位置
			'st_headerunder_image_top'    => 'st_headerunder_image_top',    //ヘッダー以下の背景画像の縦位置
			'st_headerunder_image_repeat' => 'st_headerunder_image_repeat', //ヘッダー以下の背景画像の繰り返し

			'menu_logocolor' => 'st_menu_logocolor', //サイトタイトル及びディスクリプション色

			'menu_maincolor'        => 'st_menu_maincolor',        //コンテンツ背景色
			'menu_main_bordercolor' => 'st_menu_main_bordercolor', //コンテンツボーダー色
			'st_main_opacity'       => 'st_main_opacity',          //メインコンテンツ背景の透過

			'st_footer_bg_text_color' => 'st_footer_bg_text_color', //フッターテキスト色
			'st_footer_bg_color_t'    => 'st_footer_bg_color_t',    //フッター背景色上部
			'st_footer_bg_color'      => 'st_footer_bg_color',      //フッター背景色下部
			'st_footer100'            => 'st_footer100',            //フッター背景幅100%
			'st_footer_image_side'    => 'st_footer_image_side',    //フッターの背景画像の横位置
			'st_footer_image_top'     => 'st_footer_image_top',     //フッターの背景画像の縦位置
			'st_footer_image_repeat'  => 'st_footer_image_repeat',  //フッターの背景画像の繰り返し

			//一括カラー
			'st_main_textcolor'      => 'st_main_textcolor',      //記事の文字色
			'st_side_textcolor'      => 'st_side_textcolor',      //サイドバーの文字色
			'st_link_textcolor'      => 'st_link_textcolor',      //記事のリンク色
			'st_link_hovertextcolor' => 'st_link_hovertextcolor', //記事のリンクマウスオーバー色
			'st_link_hoveropacity'   => 'st_link_hoveropacity',   //記事のリンクマウスオーバー時の透明度

			//ヘッダー
			'menu_st_headerwidget_bgcolor'   => 'st_headerwidget_bgcolor',   //ヘッダーウィジェットの背景色
			'menu_st_headerwidget_textcolor' => 'st_headerwidget_textcolor', //ヘッダーウィジェットのテキスト色
			'menu_st_header_tel_color'       => 'st_header_tel_color',       //ヘッダーの電話番号とリンク色

			//Webフォント
			'entrytitle_webfont'    => 'entrytitle_webfont',    //記事タイトルにWebフォントを使用
			'menu_webfont'          => 'menu_webfont',          //各メニューにWebフォントを使用
			'poprankno_webfont'     => 'poprankno_webfont',     //任意記事ナンバーにWebフォントを使用
			'tel_webfont'           => 'tel_webfont',           //電話番号にWebフォントを使用
			'form_webfont'          => 'form_webfont',          //問合せウィジェットボタンにWebフォントを使用
			'sns_webfont'           => 'sns_webfont',           //SNSボタンにWebフォントを使用
			'sidebar_title_webfont' => 'sidebar_title_webfont', //サイドバー見出しにWebフォントを使用

			//投稿及び固定記事
			'st_kuzu_color' => 'st_kuzu_color', //投稿日時・ぱんくず・タグ

			//記事タイトル
			'st_entrytitle_text'              => 'st_entrytitle_text',              //記事タイトルのテキスト色
			'st_entrytitle_bgcolor_t'         => 'st_entrytitle_bgcolor_t',         //記事タイトルの背景色（上部）
			'st_entrytitle_bgcolor'           => 'st_entrytitle_bgcolor',           //記事タイトルの背景色
			'st_entrytitleborder_color'       => 'st_entrytitleborder_color',       //記事タイトルのボーダー色
			'st_entrytitleborder_tb'          => 'st_entrytitleborder_tb',          //記事タイトルのボーダー上下のみ
			'st_entrytitle_bgimg_side'        => 'st_entrytitle_bgimg_side',        //記事タイトルの背景画像の横位置
			'st_entrytitle_bgimg_top'         => 'st_entrytitle_bgimg_top',         //記事タイトルの背景画像の縦位置
			'st_entrytitle_bgimg_repeat'      => 'st_entrytitle_bgimg_repeat',      //記事タイトルの背景画像の繰り返し
			'st_entrytitle_bgimg_leftpadding' => 'st_entrytitle_bgimg_leftpadding', //記事タイトルの背景画像の左の余白
			'st_entrytitle_bgimg_tupadding'   => 'st_entrytitle_bgimg_tupadding',   //記事タイトルの背景画像の上下の余白
			'st_entrytitle_pc_fontsize'       => 'st_entrytitle_pc_fontsize',       //記事タイトルのフォントサイズ

			//h2タグ
			'menu_color'              => 'st_menu_color',           //h2のテキスト色
			'st_h2_pc_fontsize'       => 'st_h2_pc_fontsize',       //h2の文字サイズ
			'menu_bgcolor'            => 'st_menu_bgcolor',         //h2の背景色
			'menu_bgcolor_t'          => 'st_menu_bgcolor_t',       //h2の背景色上部
			'st_h2border_color'       => 'st_h2border_color',       //h2のボーダー色
			'st_h2_border_tb'         => 'st_h2_border_tb',         //h2のボーダー上下のみ
			'st_h2_design'            => 'st_h2_design',            //h2デザインの変更
			'st_h2_bgimg_side'        => 'st_h2_bgimg_side',        //h2の背景画像の横位置
			'st_h2_bgimg_top'         => 'st_h2_bgimg_top',         //h2の背景画像の縦位置
			'st_h2_bgimg_repeat'      => 'st_h2_bgimg_repeat',      //h2の背景画像の繰り返し
			'st_h2_bgimg_leftpadding' => 'st_h2_bgimg_leftpadding', //h2の背景画像の左の余白
			'st_h2_bgimg_tupadding'   => 'st_h2_bgimg_tupadding',   //h2の背景画像の上下の余白

			//h3タグ
			'menu_h3bgcolor'          => 'st_menu_h3bgcolor',       //h3の背景色
			'menu_h3textcolor'        => 'st_menu_h3textcolor',     //h3のテキスト色
			'st_menu_h3bordercolor'   => 'st_menu_h3bordercolor',   //h3のボーダー色
			'st_solid_design'         => 'st_solid_design',         //h3デザインのドット線をボーダーに変更
			'st_solid_top'            => 'st_solid_top',            //h3デザインのボーダーを上に追加
			'st_h3_design'            => 'st_h3_design',            //h3デザインの変更
			'st_h3hukidasi_design'    => 'st_h3hukidasi_design',    //h3デザインをふきだしに変更
			'st_h3_bgimg_side'        => 'st_h3_bgimg_side',        //h3の背景画像の横位置
			'st_h3_bgimg_top'         => 'st_h3_bgimg_top',         //h3の背景画像の縦位置
			'st_h3_bgimg_repeat'      => 'st_h3_bgimg_repeat',      //h3の背景画像の繰り返し
			'st_h3_bgimg_leftpadding' => 'st_h3_bgimg_leftpadding', //h3の背景画像の左の余白
			'st_h3_bgimg_tupadding'   => 'st_h3_bgimg_tupadding',   //h3の背景画像の上下の余白

			//h4タグ
			'st_menu_h4_textcolor'    => 'st_menu_h4_textcolor',    //h4の文字色
			'st_menu_h4bordercolor'   => 'st_menu_h4bordercolor',   //h4のボーダー色
			'menu_h4bgcolor'          => 'st_menu_h4bgcolor',       //h4の背景色
			'st_h4_design'            => 'st_h4_design',            //h4デザインの変更
			'st_h4_top_border'        => 'st_h4_top_border',        //h4の上ボーダー
			'st_h4_bottom_border'     => 'st_h4_bottom_border',     //h4の下ボーダー
			'st_h4_bgimg_side'        => 'st_h4_bgimg_side',        //h4の背景画像の横位置
			'st_h4_bgimg_top'         => 'st_h4_bgimg_top',         //h4の背景画像の縦位置
			'st_h4_bgimg_repeat'      => 'st_h4_bgimg_repeat',      //h4の背景画像の繰り返し
			'st_h4_bgimg_leftpadding' => 'st_h4_bgimg_leftpadding', //h4の背景画像の左の余白
			'st_h4_bgimg_tupadding'   => 'st_h4_bgimg_tupadding',   //h4の背景画像の上下の余白
			'st_h4hukidasi_design'    => 'st_h4hukidasi_design',        //h4デザインをふきだしに変更

			//h5タグ
			'st_menu_h5_textcolor'    => 'st_menu_h5_textcolor',    //h5の文字色
			'st_menu_h5bordercolor'   => 'st_menu_h5bordercolor',   //h5のボーダー色
			'menu_h5bgcolor'          => 'st_menu_h5bgcolor',       //h5の背景色
			'st_h5_design'            => 'st_h5_design',            //h5デザインの変更
			'st_h5_top_border'        => 'st_h5_top_border',        //h5の上ボーダー
			'st_h5_bottom_border'     => 'st_h5_bottom_border',     //h5の下ボーダー
			'st_h5_bgimg_side'        => 'st_h5_bgimg_side',        //h5の背景画像の横位置
			'st_h5_bgimg_top'         => 'st_h5_bgimg_top',         //h5の背景画像の縦位置
			'st_h5_bgimg_repeat'      => 'st_h5_bgimg_repeat',      //h5の背景画像の繰り返し
			'st_h5_bgimg_leftpadding' => 'st_h5_bgimg_leftpadding', //h5の背景画像の左の余白
			'st_h5_bgimg_tupadding'   => 'st_h5_bgimg_tupadding',   //h5の背景画像の上下の余白
			'st_h5hukidasi_design'    => 'st_h5hukidasi_design',        //h5デザインをふきだしに変更

			'st_blockquote_color' => 'st_blockquote_color', //引用部分の背景色

			'menu_separator_color'   => 'st_separator_color',   //NEW ENTRYのテキスト色
			'menu_separator_bgcolor' => 'st_separator_bgcolor', //NEW ENTRYの背景色

			'st_catbg_color'   => 'st_catbg_color',   //カテゴリの背景色
			'st_cattext_color' => 'st_cattext_color', //カテゴリのテキスト色

			//お知らせ
			'menu_news_datecolor'     => 'st_news_datecolor',            //お知らせ日付のテキスト色
			'menu_news_text_color'    => 'st_news_text_color',           //お知らせのテキストと下線色
			'menu_newsbarcolor_t'     => 'st_menu_newsbarcolor_t',       //お知らせの背景色上
			'menu_newsbarcolor'       => 'st_menu_newsbarcolor',         //お知らせの背景色下
			'menu_newsbarbordercolor' => 'st_menu_newsbar_border_color', //お知らせのボーダー色
			'menu_newsbartextcolor'   => 'st_menu_newsbartextcolor',     //お知らせのテキスト色
			'st_menu_newsbgcolor'     => 'st_menu_newsbgcolor',          //お知らせの全体背景色

			//メニュー
			'menu_navbar_topunder_color' => 'st_menu_navbar_topunder_color', //メニューの上下ボーダー色
			'menu_navbar_side_color'     => 'st_menu_navbar_side_color',     //メニューの左右ボーダー色
			'menu_navbar_right_color'    => 'st_menu_navbar_right_color',    //メニューの右ボーダー色
			'menu_navbarcolor'           => 'st_menu_navbarcolor',           //メニューの背景色下
			'menu_navbarcolor_t'         => 'st_menu_navbarcolor_t',         //メニューの背景色上
			'menu_navbartextcolor'       => 'st_menu_navbartextcolor',       //PCメニューテキスト色
			'st_menu_bold'               => 'st_menu_bold',                  //第一階層メニューを太字にする
			'st_menu100'                 => 'st_menu100',                    //PCメニュー100%
			'st_menu_padding'            => 'st_menu_padding',               //PCメニューの上下に隙間

			'st_no_header_design' => 'st_no_header_design', //ヘッダーメニューのカラーを引き継がない

			'st_headermenu_bgimg_side'   => 'st_headermenu_bgimg_side',   //ヘッダーメニューの背景画像の横位置
			'st_headermenu_bgimg_top'    => 'st_headermenu_bgimg_top',    //ヘッダーメニューの背景画像の縦位置
			'st_headermenu_bgimg_repeat' => 'st_headermenu_bgimg_repeat', //ヘッダーメニューの背景画像の繰り返し

			'st_sidemenu_bgimg_side'        => 'st_sidemenu_bgimg_side',        //サイドメニュー第一階層の背景画像の横位置
			'st_sidemenu_bgimg_top'         => 'st_sidemenu_bgimg_top',         //サイドメニュー第一階層の背景画像の縦位置
			'st_sidemenu_bgimg_repeat'      => 'st_sidemenu_bgimg_repeat',      //サイドメニュー第一階層の背景画像の繰り返し
			'st_sidemenu_bgimg_leftpadding' => 'st_sidemenu_bgimg_leftpadding', //サイドメニュー第一階層の背景画像の左の余白
			'st_sidemenu_bgimg_tupadding'   => 'st_sidemenu_bgimg_tupadding',   //サイドメニュー第一階層の背景画像の上下の余白

			'st_sidebg_bgimg_side'   => 'st_sidebg_bgimg_side',   //サイドメニューの背景画像の横位置
			'st_sidebg_bgimg_top'    => 'st_sidebg_bgimg_top',    //サイドメニューの背景画像の縦位置
			'st_sidebg_bgimg_repeat' => 'st_sidebg_bgimg_repeat', //サイドメニューの背景画像の繰り返し

			'st_headerimg100'             => 'st_headerimg100',             //ヘッダー画像100%
			'st_header_bgcolor'           => 'st_header_bgcolor',           //ヘッダー画像の背景色
			'st_topgabg_image_side'       => 'st_topgabg_image_side',       //ヘッダー画像の背景画像の横位置
			'st_topgabg_image_top'        => 'st_topgabg_image_top',        //ヘッダー画像の背景画像の縦位置
			'st_topgabg_image_repeat'     => 'st_topgabg_image_repeat',     //ヘッダー画像の背景画像の繰り返し
			'st_topgabg_image_flex'       => 'st_topgabg_image_flex',       //ヘッダー画像の背景画像のレスポンシブ化
			'st_topgabg_image_sumahoonly' => 'st_topgabg_image_sumahoonly', //ヘッダー画像の背景画像をスマホとタブレットのみに
			'st_header_sc'                => 'st_header_sc',                //スライドショー画像の横並び
			'st_slide_btn'                => 'st_slide_btn',                //スライドショー矢印非表示

			'menu_navbar_undercolor'  => 'st_menu_navbar_undercolor', //PCドロップダウン下層メニュー背景

			//サイドメニュー
			'st_menu_icon'            => 'st_menu_icon',            //メニュー第一階層のWebアイコン
			'st_undermenu_icon'       => 'st_undermenu_icon',       //メニュー第二階層のWebアイコン
			'st_menu_icon_color'      => 'st_menu_icon_color',      //メニュー第一階層のWebアイコンカラー
			'st_undermenu_icon_color' => 'st_undermenu_icon_color', //メニュー第二階層のWebアイコンカラー

			'menu_pagelist_childtextcolor'         => 'st_menu_pagelist_childtextcolor',         //サイドメニュー下層のテキスト色
			'menu_pagelist_bgcolor'                => 'st_menu_pagelist_bgcolor',                //サイドメニュー下層の背景色
			'menu_pagelist_childtext_border_color' => 'st_menu_pagelist_childtext_border_color', //サイドメニュー下層の下線色

			'menu_h4sidetextcolor' => 'st_menu_h4sidetextcolor', //サイドバー見出し
			'st_tagcloud_color'    => 'st_tagcloud_color',       //タグクラウド色
			'menu_rsscolor'        => 'st_rss_color',            //RSSボタン

			'st_sns_btn'     => 'st_sns_btn',     //SNSボタン背景
			'st_sns_btntext' => 'st_sns_btntext', //SNSボタンテキスト

			'st_formbtn_textcolor'   => 'st_formbtn_textcolor',   //ウィジェット問合せフォームのテキスト色
			'st_formbtn_bordercolor' => 'st_formbtn_bordercolor', //ウィジェット問合せフォームのボーダー色
			'st_formbtn_bgcolor_t'   => 'st_formbtn_bgcolor_t',   //ウィジェット問合せフォームの背景色上部
			'st_formbtn_bgcolor'     => 'st_formbtn_bgcolor',     //ウィジェット問合せフォームの背景色
			'st_formbtn_radius'      => 'st_formbtn_radius',      //ウィジェット問合せフォームの角を丸くする

			'st_formbtn2_textcolor'   => 'st_formbtn2_textcolor',   //ウィジェッオリジナルボタンのテキスト色
			'st_formbtn2_bordercolor' => 'st_formbtn2_bordercolor', //ウィジェットオリジナルボタンのボーダー色
			'st_formbtn2_bgcolor_t'   => 'st_formbtn2_bgcolor_t',   //ウィジェッオリジナルボタンの背景色
			'st_formbtn2_bgcolor'     => 'st_formbtn2_bgcolor',     //ウィジェッオリジナルボタンの背景色
			'st_formbtn2_radius'      => 'st_formbtn2_radius',      //ウィジェッオリジナルボタンの角を丸くする

			'st_contactform7btn_textcolor' => 'st_contactform7btn_textcolor', //コンタクトフォーム7の送信ボタンテキスト色
			'st_contactform7btn_bgcolor'   => 'st_contactform7btn_bgcolor',   //コンタクトフォーム7の送信ボタンの背景色

			//任意記事
			'menu_osusumemidasitextcolor' => 'st_menu_osusumemidasitextcolor', //任意記事の見出しテキスト色
			'menu_osusumemidasicolor'     => 'st_menu_osusumemidasicolor',     //任意記事の見出し背景色
			'menu_osusumemidasinocolor'   => 'st_menu_osusumemidasinocolor',   //任意記事のナンバー色
			'menu_osusumemidasinobgcolor' => 'st_menu_osusumemidasinobgcolor', //任意記事のナンバー背景色
			'menu_popbox_color'           => 'st_menu_popbox_color',           //任意記事の背景色
			'menu_popbox_textcolor'       => 'st_menu_popbox_textcolor',       //任意記事のテキスト色
			'st_nohidden'                 => 'st_nohidden',                    //任意記事のナンバー削除

			//フリーボックスウィジェット
			'freebox_tittle_textcolor' => 'st_freebox_tittle_textcolor', //フリーボックスウィジェットの見出しテキスト色
			'freebox_tittle_color'     => 'st_freebox_tittle_color',     //フリーボックスウィジェットの見出背景色
			'freebox_color'            => 'st_freebox_color',            //フリーボックスウィジェットの背景色
			'freebox_textcolor'        => 'st_freebox_textcolor',        //フリーボックスウィジェットのテキスト色

			//スマートフォンサイズ
			'menu_sumartmenutextcolor' => 'st_menu_sumartmenutextcolor', //スマホメニュー文字色
			'menu_sumart_bg_color'     => 'st_menu_sumart_bg_color',     //スマホメニュー背景色
			'menu_sumartbar_bg_color'  => 'st_menu_sumartbar_bg_color',  //スマホメニューバー背景色
			'menu_sumartcolor'         => 'st_menu_sumartcolor',         //スマホwebアイコン
			'st_sticky_menu'           => 'st_sticky_menu',              //スマホメニューfix
			'st_pagetop_up'            => 'st_pagetop_up',               //TOPに戻るボタンの位置

			'menu_sumart_st_bg_color'  => 'st_menu_sumart_st_bg_color',  //追加スマホメニュー背景色
			'menu_sumart_st_color'     => 'st_menu_sumart_st_color',     //追加スマホwebアイコン色
			'menu_sumart_st2_bg_color' => 'st_menu_sumart_st2_bg_color', //追加スマホメニュー背景色2
			'menu_sumart_st2_color'    => 'st_menu_sumart_st2_color',    //追加スマホwebアイコン色2
			'st_menu_sumart_footermenu_text_color'    => 'st_menu_sumart_footermenu_text_color', //スマホフッターメニューテキスト色
			'st_menu_sumart_footermenu_bg_color'    => 'st_menu_sumart_footermenu_bg_color', //スマホフッターメニュー背景色

			//Webアイコン
			'st_webicon_question'    => 'st_webicon_question',    //はてな
			'st_webicon_check'       => 'st_webicon_check',       //チェック
			'st_webicon_exclamation' => 'st_webicon_exclamation', //エクステンション
			'st_webicon_memo'        => 'st_webicon_memo',        //メモ
			'st_webicon_user'        => 'st_webicon_user',        //人物

			//TOC
			'st_toc_textcolor'   => 'st_toc_textcolor',   //文字色
			'st_toc_bordercolor' => 'st_toc_bordercolor', //ボーダー色
			'st_toc_bgcolor'     => 'st_toc_bgcolor',     //背景色

			//マル数字のカラー
			'st_maruno_textcolor'   => 'st_maruno_textcolor',   //ナンバー色
			'st_maruno_nobgcolor'   => 'st_maruno_nobgcolor',   //ナンバー背景色
			'st_maruno_bordercolor' => 'st_maruno_bordercolor', //囲いボーダー色
			'st_maruno_bgcolor'     => 'st_maruno_bgcolor',     //囲い背景色

			//マルチェックのカラー
			'st_maruck_textcolor'   => 'st_maruck_textcolor',   //ナンバー色
			'st_maruck_nobgcolor'   => 'st_maruck_nobgcolor',   //ナンバー背景色
			'st_maruck_bordercolor' => 'st_maruck_bordercolor', //囲いボーダー色
			'st_maruck_bgcolor'     => 'st_maruck_bgcolor',     //囲い背景色

			//テーブルのカラー
			'st_table_bordercolor'  => 'st_table_bordercolor',  //表のボーダー色
			'st_table_cell_bgcolor' => 'st_table_cell_bgcolor', //偶数行のセルの色
			'st_table_td_bgcolor'   => 'st_table_td_bgcolor',   //縦一列目の背景色
			'st_table_td_textcolor' => 'st_table_td_textcolor', //縦一列目の文字色
			'st_table_td_bold'      => 'st_table_td_bold',      //縦一列目の太字
			'st_table_tr_bgcolor'   => 'st_table_tr_bgcolor',   //横一列目の背景色
			'st_table_tr_textcolor' => 'st_table_tr_textcolor', //横一列目の文字色
			'st_table_tr_bold'      => 'st_table_tr_bold',      //横一列目の太字

			//会話ふきだし
			'st_kaiwa_bgcolor'  => 'st_kaiwa_bgcolor', //会話統一ふきだし背景色
			'st_kaiwa2_bgcolor'  => 'st_kaiwa2_bgcolor', //会話2ふきだし背景色
			'st_kaiwa3_bgcolor'  => 'st_kaiwa3_bgcolor', //会話3ふきだし背景色
			'st_kaiwa4_bgcolor'  => 'st_kaiwa4_bgcolor', //会話4ふきだし背景色
			'st_kaiwa5_bgcolor'  => 'st_kaiwa5_bgcolor', //会話5ふきだし背景色
			'st_kaiwa6_bgcolor'  => 'st_kaiwa6_bgcolor', //会話6ふきだし背景色
			'st_kaiwa7_bgcolor'  => 'st_kaiwa7_bgcolor', //会話7ふきだし背景色
			'st_kaiwa8_bgcolor'  => 'st_kaiwa8_bgcolor', //会話8ふきだし背景色
		);
	}
}

if ( !function_exists( 'st_create_theme_mod_var_array' ) ) {
	function st_create_theme_mod_var_array( $theme_mod_defaults, $maps, $theme_mod_overrides = array() ) {
		$vars = array();

		foreach ( $maps as $var_name => $theme_mod_name ) {
			$in_defaults  = array_key_exists( $theme_mod_name, $theme_mod_defaults );
			$in_overrides = array_key_exists( $theme_mod_name, $theme_mod_overrides );

			if ( !$in_defaults && !$in_overrides ) {
				continue;
			}

			// 強制的に上書き
			if ($in_overrides) {
				$vars[$var_name] = $theme_mod_overrides[$theme_mod_name];

				continue;
			}

			$vars[$var_name] = get_theme_mod( $theme_mod_name, $theme_mod_defaults[$theme_mod_name] );
		}

		return $vars;
	}
}

if ( !function_exists( 'st_get_theme_mod_defaults' ) ) {
	function st_get_theme_mod_defaults($kantan_setting = null) {
		$kantan_setting = ( $kantan_setting !== null ) ? $kantan_setting : st_get_kantan_setting();
		$defaults       = st_get_plain_theme_mod_defaults(); //デフォルト(カラー未設定)

		if ( !st_is_customizer_enabled() ) { //オリジナルカスタマイザーを使用しない
			return $defaults;
		}

		$preset_overrides = st_get_preset_theme_mod_overrides( st_get_preset_name() );
		$defaults         = array_merge( $defaults, $preset_overrides);

		switch (true) {
			case ($kantan_setting === 'defaultcolor'):
				//初期値を上書き
				$defaults = array_merge($defaults, st_get_zentai_theme_mod_overrides());

				break;

			default:
				break;
		}

		return $defaults;
	}
}

function st_customize_register( $wp_customize ) {
	$kantan_setting = st_get_previous_kantan_setting();
	$defaults       = st_get_theme_mod_defaults( $kantan_setting );
	$preset_colors  = st_get_preset_colors( st_get_preset_name() );

	extract( $preset_colors, EXTR_OVERWRITE );

	$wp_customize->add_section( 'st_logo_image',
		array(
			'title'    => 'ロゴ画像',
			'priority' => 10,
		) );

	$wp_customize->add_setting( 'st_logo_image',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'logo_Image',
		array(
			'label'    => 'ロゴ画像',
			'section'  => 'st_logo_image',
			'settings' => 'st_logo_image',
		)
	) );

	$wp_customize->add_setting( 'st_footer_logo',
		array(
			'default'           => '',
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'footer_logo',
		array(
			'label'       => '',
			'section'     => 'st_logo_image',
			'description' => 'フッターロゴ画像',
			'settings'    => 'st_footer_logo',
		)
	) );

	$wp_customize->add_setting( 'st_header_footer_logo',
		array(
			'default'           => $defaults['st_header_footer_logo'],
			'sanitize_callback' => 'sanitize_checkbox',
		) );
	$wp_customize->add_control( 'st_header_footer_logo',
		array(
			'section'     => 'st_logo_image',
			'settings'    => 'st_header_footer_logo',
			'label'       => 'ヘッダーロゴ画像を使用する',
			'description' => '',
			'type'        => 'checkbox',
		) );

	if ( st_is_customizer_enabled() ) {

		/*スライドショー*/
		$wp_customize->add_setting( 'st_header_sc',
			array(
				'default'           => $defaults['st_header_sc'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_sc',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_header_sc',
				'label'       => 'スライドショー横スクロール時に横並びに表示する',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*矢印アイコン*/
		$wp_customize->add_setting( 'st_slide_btn',
			array(
				'default'           => $defaults['st_slide_btn'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_slide_btn',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_slide_btn',
				'label'       => 'スライドショー時の矢印アイコンを非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ヘッダー画像100%*/
		$wp_customize->add_setting( 'st_headerimg100',
			array(
				'default'           => $defaults['st_headerimg100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerimg100',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_headerimg100',
				'label'       => 'ヘッダー画像の横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//ヘッダーエリア背景色

		$wp_customize->add_setting( 'st_header_bgcolor',
			array(
				'default'              => $defaults['st_header_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_bgcolor', array(
			'label'       => __( 'ヘッダー画像エリア', 'default' ),
			'description' => 'ヘッダー画像エリアの背景色',
			'section'     => 'header_image',

			'settings' => 'st_header_bgcolor',
		) ) );

		//ヘッダー画像エリア背景画像

		$wp_customize->add_setting( 'st_topgabg_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'topga_Image',
			array(
				'label'       => '',
				'section'     => 'header_image',
				'description' => 'ヘッダー画像の後ろに配置する背景画像です（ヘッダー画像にpngなど透過性のある素材を利用すると重ねることが出来ます） ',
				'settings'    => 'st_topgabg_image',
			)
		) );

		$wp_customize->add_setting( 'st_topgabg_image_side',
			array(
				'default'           => $defaults['st_topgabg_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_topgabg_image_side',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '左', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_topgabg_image_top',
			array(
				'default'           => $defaults['st_topgabg_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_topgabg_image_top',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '上', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_topgabg_image_repeat',
			array(
				'default'           => $defaults['st_topgabg_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_repeat',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_topgabg_image_flex',
			array(
				'default'           => $defaults['st_topgabg_image_flex'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_flex',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_flex',
				'label'       => '背景画像を幅100%のレスポンシブにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_topgabg_image_sumahoonly',
			array(
				'default'           => $defaults['st_topgabg_image_sumahoonly'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_topgabg_image_sumahoonly',
			array(
				'section'     => 'header_image',
				'settings'    => 'st_topgabg_image_sumahoonly',
				'label'       => '背景画像をスマホ・タブレットのみにする',
				'description' => '',
				'type'        => 'checkbox',
			) );
	}
	/*-------------------------------------------------------
		基本エリア設定
		-------------------------------------------------------*/

	$wp_customize->add_section( 'colors',
		array(
			'title'       => __( '基本エリア設定', 'default' ),
			'description' => '[!] 細かく修正するには<b>テーマ管理画面にて「オリジナルテーマカスタマイザーを使用する」をオン</b>にする必要があります。',
			'priority'    => 81,
		) );

	if ( st_is_customizer_enabled() ) {

		//wrapperサイト全体背景

		$wp_customize->add_setting( 'st_wrapper_bgcolor',
			array(
				'default'              => $defaults['st_wrapper_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_wrapper_bgcolor', array(
			'label'       => __( 'サイト背景色', 'default' ),
			'description' => 'サイト全体を包括する背景色です※色を設定すると幅のMAX値は1100pxになります',
			'section'     => 'colors',

			'settings' => 'st_wrapper_bgcolor',
		) ) );

		//サイト上部にラインを入れる

		$wp_customize->add_setting( 'st_top_bordercolor',
			array(
				'default'              => $defaults['st_top_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_top_bordercolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'サイト上部にライン',
			'section'     => 'colors',
			'settings'    => 'st_top_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_line_height',
			array(
				'default'           => $defaults['st_line_height'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_line_height',
			array(
				'section'     => 'colors',
				'settings'    => 'st_line_height',
				'label'       => '',
				'description' => 'ラインの高さ（px）',
				'type'        => 'radio',
				'choices'     => array(
					'1px' => __( '1px', 'default' ),
					'5px' => __( '5px', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_line100',
			array(
				'default'           => $defaults['st_line100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_line100',
			array(
				'section'     => 'colors',
				'settings'    => 'st_line100',
				'label'       => 'ラインの横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//ヘッダーエリア

		$wp_customize->add_setting( 'st_headbox_bgcolor',
			array(
				'default'              => $defaults['st_headbox_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headbox_bgcolor', array(
			'label'       => __( 'ヘッダーエリア', 'default' ),
			'description' => '背景色',
			'section'     => 'colors',

			'settings' => 'st_headbox_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headbox_bgcolor_t',
			array(
				'default'              => $defaults['st_headbox_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headbox_bgcolor_t', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'colors',

			'settings' => 'st_headbox_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_header100',
			array(
				'default'           => $defaults['st_header100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header100',
			array(
				'section'     => 'colors',
				'settings'    => 'st_header100',
				'label'       => 'ヘッダー背景の横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//ヘッダー背景画像

		$wp_customize->add_setting( 'st_header_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'header_Image',
			array(
				'label'       => '',
				'section'     => 'colors',
				'description' => 'ヘッダー画像',
				'settings'    => 'st_header_image',
			)
		) );

		$wp_customize->add_setting( 'st_header_image_side',
			array(
				'default'           => $defaults['st_header_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_image_side',
			array(
				'section'     => 'colors',
				'settings'    => 'st_header_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '左', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_image_top',
			array(
				'default'           => $defaults['st_header_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_header_image_top',
			array(
				'section'     => 'colors',
				'settings'    => 'st_header_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '上', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_header_image_repeat',
			array(
				'default'           => $defaults['st_header_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_header_image_repeat',
			array(
				'section'     => 'colors',
				'settings'    => 'st_header_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//タイトル色

		$wp_customize->add_setting( 'st_menu_logocolor',
			array(
				'default'              => $defaults['st_menu_logocolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_logocolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'サイトタイトルとキャッチフレーズの文字色',
			'section'     => 'colors',
			'settings'    => 'st_menu_logocolor',
		) ) );


		/*ヘッダーウィジェットの背景色*/

		$wp_customize->add_setting( 'st_headerwidget_bgcolor',
			array(
				'default'              => $defaults['st_headerwidget_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'colors',
			'description' => 'ヘッダーウィジェット背景色',
			'settings'    => 'st_headerwidget_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headerwidget_textcolor',
			array(
				'default'              => $defaults['st_headerwidget_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_textcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'colors',
			'description' => 'ヘッダーウィジェット文字色',
			'settings'    => 'st_headerwidget_textcolor',
		) ) );

		/*電話番号とヘッダーリンク*/

		$wp_customize->add_setting( 'st_header_tel_color',
			array(
				'default'              => $defaults['st_header_tel_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_tel_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'colors',
			'description' => '電話番号とヘッダーリンク',
			'settings'    => 'st_header_tel_color',
		) ) );


		//ヘッダー以下の背景色

		$wp_customize->add_setting( 'st_headerunder_bgcolor',
			array(
				'default'              => $defaults['st_headerunder_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerunder_bgcolor', array(
			'label'       => __( 'ヘッダー以下の背景色', 'default' ),
			'description' => 'YouTube動画をヘッダー画像部のみに表示したい場合など',
			'section'     => 'colors',

			'settings' => 'st_headerunder_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headerunder_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'headerunder_Image',
			array(
				'label'       => '',
				'section'     => 'colors',
				'description' => 'ヘッダー以下の背景画像 ',
				'settings'    => 'st_headerunder_image',
			)
		) );

		$wp_customize->add_setting( 'st_headerunder_image_side',
			array(
				'default'           => $defaults['st_headerunder_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerunder_image_side',
			array(
				'section'     => 'colors',
				'settings'    => 'st_headerunder_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '左', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerunder_image_top',
			array(
				'default'           => $defaults['st_headerunder_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headerunder_image_top',
			array(
				'section'     => 'colors',
				'settings'    => 'st_headerunder_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'0%'   => __( '上', 'default' ),
					'50%'  => __( '真ん中', 'default' ),
					'100%' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_headerunder_image_repeat',
			array(
				'default'           => $defaults['st_headerunder_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headerunder_image_repeat',
			array(
				'section'     => 'colors',
				'settings'    => 'st_headerunder_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//記事背景

		$wp_customize->add_setting( 'st_menu_maincolor',
			array(
				'default'              => $defaults['st_menu_maincolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_maincolor', array(
			'label'       => __( '記事エリア背景色', 'default' ),
			'description' => 'メインコンテンツのエリアです',
			'section'     => 'colors',

			'settings' => 'st_menu_maincolor',
		) ) );

		//記事背景の透過

		$wp_customize->add_setting( 'st_main_opacity',
			array(
				'default'           => $defaults['st_main_opacity'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_main_opacity',
			array(
				'section'     => 'colors',
				'settings'    => 'st_main_opacity',
				'label'       => '',
				'description' => '背景色透過※PC閲覧時（白色になります）',
				'type'        => 'select',
				'choices'     => array(
					''   => __( '透過しない', 'default' ),
					'20' => __( '20%', 'default' ),
					'50' => __( '50%', 'default' ),
					'80' => __( '80%', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_main_bordercolor',
			array(
				'default'              => $defaults['st_menu_main_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_main_bordercolor', array(
			'label'       => __( '', 'default' ),
			'description' => '周りのボーダー',
			'section'     => 'colors',
			'settings'    => 'st_menu_main_bordercolor',
		) ) );

		/*記事エリアの幅*/
		$wp_customize->add_setting( 'st_area',
			array(
				'default'           => $defaults['st_area'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_area',
			array(
				'section'     => 'colors',
				'settings'    => 'st_area',
				'label'       => 'PC時の記事エリアの幅を広げる（640→700px）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*フッターエリア*/

		$wp_customize->add_setting( 'st_footer_bg_text_color',
			array(
				'default'              => $defaults['st_footer_bg_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_text_color', array(
			'label'       => __( 'フッターエリア', 'default' ),
			'section'     => 'colors',
			'description' => 'フッター文字色',
			'settings'    => 'st_footer_bg_text_color',
		) ) );

		$wp_customize->add_setting( 'st_footer_bg_color',
			array(
				'default'              => $defaults['st_footer_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'colors',
			'description' => '背景色',
			'settings'    => 'st_footer_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_footer_bg_color_t',
			array(
				'default'              => $defaults['st_footer_bg_color_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_color_t', array(
			'label'       => __( '', 'default' ),
			'section'     => 'colors',
			'description' => '背景色（グラデーション上部）',
			'settings'    => 'st_footer_bg_color_t',
		) ) );

		$wp_customize->add_setting( 'st_footer100',
			array(
				'default'           => $defaults['st_footer100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer100',
			array(
				'section'     => 'colors',
				'settings'    => 'st_footer100',
				'label'       => 'フッターの背景色を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_footer_image',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'footer_Image',
			array(
				'label'       => '',
				'section'     => 'colors',
				'description' => 'フッター画像',
				'settings'    => 'st_footer_image',
			)
		) );

		$wp_customize->add_setting( 'st_footer_image_side',
			array(
				'default'           => $defaults['st_footer_image_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_footer_image_side',
			array(
				'section'     => 'colors',
				'settings'    => 'st_footer_image_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_footer_image_top',
			array(
				'default'           => $defaults['st_footer_image_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_footer_image_top',
			array(
				'section'     => 'colors',
				'settings'    => 'st_footer_image_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_footer_image_repeat',
			array(
				'default'           => $defaults['st_footer_image_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_footer_image_repeat',
			array(
				'section'     => 'colors',
				'settings'    => 'st_footer_image_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*-------------------------------------------------------
		メニュー
		-------------------------------------------------------*/

		$wp_customize->add_section( 'stmenus',
			array(
				'title'       => __( '[+] メニューのカラー設定', 'default' ),
				'description' => 'ヘッダーメニューとサイドバーメニューのカラーは連動しています',
				'priority'    => 100,
			) );

		$wp_customize->add_setting( 'st_menu_navbarcolor',
			array(
				'default'              => $defaults['st_menu_navbarcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor', array(
			'label'       => __( 'ヘッダーメニュー', 'default' ),
			'section'     => 'stmenus',
			'description' => '背景色*',
			'settings'    => 'st_menu_navbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbarcolor_t',
			array(
				'default'              => $defaults['st_menu_navbarcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor_t', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stmenus',
			'description' => '背景色（グラデーション上部）*',
			'settings'    => 'st_menu_navbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_topunder_color',
			array(
				'default'              => $defaults['st_menu_navbar_topunder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_navbar_topunder_color',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'stmenus',
				'description' => 'ボーダー上下色*',
				'settings'    => 'st_menu_navbar_topunder_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_navbar_side_color',
			array(
				'default'              => $defaults['st_menu_navbar_side_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_side_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stmenus',
			'description' => 'ボーダー左右色*',
			'settings'    => 'st_menu_navbar_side_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_right_color',
			array(
				'default'              => $defaults['st_menu_navbar_right_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_right_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stmenus',
			'description' => 'ボーダー右色*',
			'settings'    => 'st_menu_navbar_right_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbartextcolor',
			array(
				'default'              => $defaults['st_menu_navbartextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbartextcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '文字色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_navbartextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_bold',
			array(
				'default'           => $defaults['st_menu_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu_bold',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_menu_bold',
				'label'       => '第一階層メニューを太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_menu100',
			array(
				'default'           => $defaults['st_menu100'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_menu100',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_menu100',
				'label'       => 'メニューの横幅を100%にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//メニューのパディング

		$wp_customize->add_setting( 'st_menu_padding',
			array(
				'default'           => $defaults['st_menu_padding'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_padding',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_menu_padding',
				'label'       => '',
				'description' => 'メニューの上下に隙間を作る',
				'type'        => 'select',
				'choices'     => array(
					''         => __( '設定しない', 'default' ),
					'top10'    => __( '上に10pxの隙間', 'default' ),
					'bottom10' => __( '下に10pxの隙間', 'default' ),
				),
			) );

		//ドロップダウンメニュー背景

		$wp_customize->add_setting( 'st_menu_navbar_undercolor',
			array(
				'default'              => $defaults['st_menu_navbar_undercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_undercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stmenus',
			'description' => '下層ドロップダウンメニュー背景色*',
			'settings'    => 'st_menu_navbar_undercolor',
		) ) );

		//背景画像

		$wp_customize->add_setting( 'st_headermenu_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'headermenu_Image',
			array(
				'label'       => '',
				'section'     => 'stmenus',
				'description' => '背景画像',
				'settings'    => 'st_headermenu_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_side',
			array(
				'default'           => $defaults['st_headermenu_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_side',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_headermenu_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_top',
			array(
				'default'           => $defaults['st_headermenu_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_top',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_headermenu_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_headermenu_bgimg_repeat',
			array(
				'default'           => $defaults['st_headermenu_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_headermenu_bgimg_repeat',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_headermenu_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//固定ページサイドメニュー

		//Webアイコン

		$wp_customize->add_setting( 'st_menu_icon',
			array(
				'default'           => $defaults['st_menu_icon'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_menu_icon',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_menu_icon',
				'label'       => 'サイド固定ページメニュー',
				'description' => '第一階層Webアイコン',
				'type'        => 'select',
				'choices'     => array(
					''     => __( '設定しない', 'default' ),
					'f054' => __( '矢印1', 'default' ),
					'f105' => __( '矢印2', 'default' ),
					'f138' => __( '矢印3', 'default' ),
					'f0a9' => __( '矢印4', 'default' ),
					'f0da' => __( '矢印5', 'default' ),
					'f152' => __( '矢印6', 'default' ),
					'f18e' => __( '矢印7', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_menu_icon_color',
			array(
				'default'              => $defaults['st_menu_icon_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_icon_color', array(
			'label'       => __( '', 'default' ),
			'description' => 'アイコン色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_icon_color',
		) ) );

		$wp_customize->add_setting( 'st_undermenu_icon',
			array(
				'default'           => $defaults['st_undermenu_icon'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_undermenu_icon',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_undermenu_icon',
				'label'       => '',
				'description' => '第二階層以下Webアイコン',
				'type'        => 'select',
				'choices'     => array(
					''     => __( '設定しない', 'default' ),
					'f054' => __( '矢印1', 'default' ),
					'f105' => __( '矢印2', 'default' ),
					'f138' => __( '矢印3', 'default' ),
					'f0a9' => __( '矢印4', 'default' ),
					'f0da' => __( '矢印5', 'default' ),
					'f152' => __( '矢印6', 'default' ),
					'f18e' => __( '矢印7', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_undermenu_icon_color',
			array(
				'default'              => $defaults['st_undermenu_icon_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_undermenu_icon_color', array(
			'label'       => __( '', 'default' ),
			'description' => 'アイコン色',
			'section'     => 'stmenus',
			'settings'    => 'st_undermenu_icon_color',
		) ) );

		//背景画像

		$wp_customize->add_setting( 'st_sidemenu_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'sidemenu_Image',
			array(
				'label'       => '',
				'section'     => 'stmenus',
				'description' => '第一階層背景画像',
				'settings'    => 'st_sidemenu_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_side',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_side',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidemenu_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_top',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_top',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidemenu_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_repeat',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_repeat',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidemenu_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_sidemenu_bgimg_leftpadding_c',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidemenu_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_sidemenu_bgimg_tupadding',
			array(
				'default'           => $defaults['st_sidemenu_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_sidemenu_tupadding_c',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidemenu_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_no_header_design',
			array(
				'default'           => $defaults['st_no_header_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_no_header_design',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_no_header_design',
				'label'       => 'ヘッダーメニューのカラーを引き継がない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//第二階層以下

		$wp_customize->add_setting( 'st_menu_pagelist_childtextcolor',
			array(
				'default'              => $defaults['st_menu_pagelist_childtextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_pagelist_childtextcolor',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'stmenus',
				'description' => '第二階層の文字色*',
				'settings'    => 'st_menu_pagelist_childtextcolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_childtext_border_color',
			array(
				'default'              => $defaults['st_menu_pagelist_childtext_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_pagelist_childtext_border_color',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'stmenus',
				'description' => '第二階層の下線色*',
				'settings'    => 'st_menu_pagelist_childtext_border_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_bgcolor',
			array(
				'default'              => $defaults['st_menu_pagelist_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_pagelist_bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_pagelist_bgcolor',
		) ) );

		//背景画像

		$wp_customize->add_setting( 'st_sidebg_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'sidebg_Image',
			array(
				'label'       => '',
				'section'     => 'stmenus',
				'description' => 'サイドメニュー全体の背景画像',
				'settings'    => 'st_sidebg_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_side',
			array(
				'default'           => $defaults['st_sidebg_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_side',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidebg_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_top',
			array(
				'default'           => $defaults['st_sidebg_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_top',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidebg_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_sidebg_bgimg_repeat',
			array(
				'default'           => $defaults['st_sidebg_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sidebg_bgimg_repeat',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sidebg_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//スマホ基本色

		$wp_customize->add_setting( 'st_menu_sumart_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_bg_color', array(
			'label'       => __( 'スマートフォン', 'default' ),
			'description' => 'アコーディオンメニューボタンとトップに戻るボタン背景色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_bg_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumartcolor',
			array(
				'default'              => $defaults['st_menu_sumartcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartcolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'アコーディオンメニューアイコン色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumartcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumartbar_bg_color',
			array(
				'default'              => $defaults['st_menu_sumartbar_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartbar_bg_color', array(
			'label'       => __( '', 'default' ),
			'description' => 'アコーディオンメニュー内背景色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumartbar_bg_color',
		) ) );

		//スマホメニュー文字色

		$wp_customize->add_setting( 'st_menu_sumartmenutextcolor',
			array(
				'default'              => $defaults['st_menu_sumartmenutextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartmenutextcolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'アコーディオンメニュー内のリンク色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumartmenutextcolor',
		) ) );

		/*アコーディオンメニューのfix*/
		$wp_customize->add_setting( 'st_sticky_menu',
			array(
				'default'           => $defaults['st_sticky_menu'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_sticky_menu',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_sticky_menu',
				'label'       => '表示パターンB（スクロール追尾）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*ページトップボタンの位置*/
		$wp_customize->add_setting( 'st_pagetop_up',
			array(
				'default'           => $defaults['st_pagetop_up'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_pagetop_up',
			array(
				'section'     => 'stmenus',
				'settings'    => 'st_pagetop_up',
				'label'       => 'TOPに戻るボタンの配置を上にする（モバイルアンカー広告使用時用）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*追加メニュー1*/
		$wp_customize->add_setting( 'st_menu_sumart_st_color',
			array(
				'default'              => $defaults['st_menu_sumart_st_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st_color', array(
			'label'       => __( 'スマホ追加メニュー', 'default' ),
			'description' => 'メニューアイコン色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_st_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_st_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_st_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st_bg_color', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_st_bg_color',
		) ) );
		/*追加メニュー2*/
		$wp_customize->add_setting( 'st_menu_sumart_st2_color',
			array(
				'default'              => $defaults['st_menu_sumart_st2_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st2_color', array(
			'label'       => __( 'スマホ追加メニュー2', 'default' ),
			'description' => 'メニューアイコン色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_st2_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_st2_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_st2_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_st2_bg_color', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色*',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_st2_bg_color',
		) ) );

		/*スマホフッターメニュー*/
		$wp_customize->add_setting( 'st_menu_sumart_footermenu_text_color',
			array(
				'default'              => $defaults['st_menu_sumart_footermenu_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_footermenu_text_color', array(
			'label'       => __( 'スマホフッターメニュー', 'default' ),
			'description' => '文字色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_footermenu_text_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_footermenu_bg_color',
			array(
				'default'              => $defaults['st_menu_sumart_footermenu_bg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_footermenu_bg_color', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色',
			'section'     => 'stmenus',
			'settings'    => 'st_menu_sumart_footermenu_bg_color',
		) ) );

		/*-------------------------------------------------------
		各見出し
		-------------------------------------------------------*/

		$wp_customize->add_section( 'tagcolors',
			array(
				'title'       => __( '[+] 各テキストとhタグ（見出し）', 'default' ),
				'description' => 'GoogleWebフォントの適応',
				'priority'    => 101,
			) );

		/*Webフォントの使用
		-------------------------------------------------------*/
		/*タイトル見出し*/
		$wp_customize->add_setting( 'entrytitle_webfont',
			array(
				'default'           => $defaults['entrytitle_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'entrytitle_webfont_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'entrytitle_webfont',
				'label'       => '記事タイトル&ランキング見出し',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*サイドバー見出し*/
		$wp_customize->add_setting( 'sidebar_title_webfont',
			array(
				'default'           => $defaults['sidebar_title_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'sidebar_title_webfont',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'sidebar_title_webfont',
				'label'       => 'NEW ENTRYと関連記事 サイドバー見出し',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*各メニュー*/
		$wp_customize->add_setting( 'menu_webfont',
			array(
				'default'           => $defaults['menu_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'menu_webfont_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'menu_webfont',
				'label'       => 'メニュー（PCグローバル・サイド固定メニュー・スマートフォン）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*任意記事ナンバー*/
		$wp_customize->add_setting( 'poprankno_webfont',
			array(
				'default'           => $defaults['poprankno_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'poprankno_webfont_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'poprankno_webfont',
				'label'       => 'フリーボックスと任意記事の見出し&ナンバー',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*電話番号*/
		$wp_customize->add_setting( 'tel_webfont',
			array(
				'default'           => $defaults['tel_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'tel_webfont_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'tel_webfont',
				'label'       => '電話番号',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*問合せウィジェットボタン*/
		$wp_customize->add_setting( 'form_webfont',
			array(
				'default'           => $defaults['form_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'form_webfont_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'form_webfont',
				'label'       => 'ウィジェットボタン',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*SNSボタン*/
		$wp_customize->add_setting( 'sns_webfont',
			array(
				'default'           => $defaults['sns_webfont'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'sns_webfont',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'sns_webfont',
				'label'       => 'SNSボタン',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*記事タイトル*/

		$wp_customize->add_setting( 'st_entrytitle_pc_fontsize',
			array(
				'default'           => $defaults['st_entrytitle_pc_fontsize'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_entrytitle_pc_fontsize_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_pc_fontsize',
				'label'       => __( '記事タイトル', 'default' ),
				'description' => 'PC閲覧時のフォントサイズ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_entrytitle_text',
			array(
				'default'              => $defaults['st_entrytitle_text'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_text', array(
			'label'       => __( '', 'default' ),
			'description' => '文字色',
			'section'     => 'tagcolors',
			'settings'    => 'st_entrytitle_text',
		) ) );

		$wp_customize->add_setting( 'st_entrytitle_bgcolor',
			array(
				'default'              => $defaults['st_entrytitle_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色',
			'section'     => 'tagcolors',
			'settings'    => 'st_entrytitle_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_entrytitle_bgcolor_t',
			array(
				'default'              => $defaults['st_entrytitle_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitle_bgcolor_t', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'tagcolors',
			'settings'    => 'st_entrytitle_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_entrytitleborder_color',
			array(
				'default'              => $defaults['st_entrytitleborder_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_entrytitleborder_color', array(
			'label'       => __( '', 'default' ),
			'description' => 'ボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_entrytitleborder_color',
		) ) );

		$wp_customize->add_setting( 'st_entrytitleborder_tb',
			array(
				'default'           => $defaults['st_entrytitleborder_tb'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitleborder_tb',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitleborder_tb',
				'label'       => 'ボーダーを上下のみにする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//背景画像

		$wp_customize->add_setting( 'st_entrytitle_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'title_Image',
			array(
				'label'       => '',
				'section'     => 'tagcolors',
				'description' => '背景画像',
				'settings'    => 'st_entrytitle_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_side',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_side',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_top',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_top',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_repeat',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_repeat',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_leftpadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_entrytitle_bgimg_tupadding',
			array(
				'default'           => $defaults['st_entrytitle_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_entrytitle_bgimg_tupadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_entrytitle_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		/*h2タグ*/

		$wp_customize->add_setting( 'st_menu_color',
			array(
				'default'              => $defaults['st_menu_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_color', array(
			'label'       => __( 'H2タグ', 'default' ),
			'description' => '文字色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_color',
		) ) );

		$wp_customize->add_setting( 'st_h2_pc_fontsize',
			array(
				'default'           => $defaults['st_h2_pc_fontsize'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h2_pc_fontsize_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_pc_fontsize',
				'label'       => __( '', 'default' ),
				'description' => 'PC閲覧時のフォントサイズ（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_menu_bgcolor',
			array(
				'default'              => $defaults['st_menu_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_bgcolor_t',
			array(
				'default'              => $defaults['st_menu_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_bgcolor_t', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色（グラデーション上部）',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_h2_design',
			array(
				'default'           => $defaults['st_h2_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_design_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_design',
				'label'       => '吹き出しデザインに変更（※要背景色）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2border_color',
			array(
				'default'              => $defaults['st_h2border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2border_color', array(
			'label'       => __( '', 'default' ),
			'description' => 'ボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_h2border_color',
		) ) );

		$wp_customize->add_setting( 'st_h2_border_tb',
			array(
				'default'           => $defaults['st_h2_border_tb'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_border_tb',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_border_tb',
				'label'       => ' ボーダーを上下のみにする ',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//背景画像

		$wp_customize->add_setting( 'st_h2_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h2_Image',
			array(
				'label'       => '',
				'section'     => 'tagcolors',
				'description' => '背景画像',
				'settings'    => 'st_h2_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h2_bgimg_side',
			array(
				'default'           => $defaults['st_h2_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_side',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_top',
			array(
				'default'           => $defaults['st_h2_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_top',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_repeat',
			array(
				'default'           => $defaults['st_h2_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h2_bgimg_repeat',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h2_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h2_bgimg_leftpadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h2_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h2_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h2_tupadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h2_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		/*h3タグ*/

		$wp_customize->add_setting( 'st_menu_h3textcolor',
			array(
				'default'              => $defaults['st_menu_h3textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h3textcolor', array(
			'label'       => __( 'H3タグ', 'default' ),
			'description' => '文字色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h3textcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h3bordercolor',
			array(
				'default'              => $defaults['st_menu_h3bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h3bordercolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'ボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h3bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h3bgcolor',
			array(
				'default'              => $defaults['st_menu_h3bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h3bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h3bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_solid_design',
			array(
				'default'           => $defaults['st_solid_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_solid_design_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_solid_design',
				'label'       => '下線を線（solid）に変える',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_solid_top',
			array(
				'default'           => $defaults['st_solid_top'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_solid_top_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_solid_top',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_design',
			array(
				'default'           => $defaults['st_h3_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_design_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_design',
				'label'       => '下線を左ボーダーに変える',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3hukidasi_design',
			array(
				'default'           => $defaults['st_h3hukidasi_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3hukidasi_design',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3hukidasi_design',
				'label'       => '吹き出しデザインに変える（※要 背景色指定）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//背景画像

		$wp_customize->add_setting( 'st_h3_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h3_Image',
			array(
				'label'       => '',
				'section'     => 'tagcolors',
				'description' => '背景画像',
				'settings'    => 'st_h3_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h3_bgimg_side',
			array(
				'default'           => $defaults['st_h3_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_side',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_top',
			array(
				'default'           => $defaults['st_h3_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_top',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_repeat',
			array(
				'default'           => $defaults['st_h3_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h3_bgimg_repeat',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h3_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h3_bgimg_leftpadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h3_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h3_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h3_tupadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h3_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		/*h4タグ*/

		$wp_customize->add_setting( 'st_menu_h4_textcolor',
			array(
				'default'              => $defaults['st_menu_h4_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4_textcolor', array(
			'label'       => __( 'H4タグ', 'default' ),
			'description' => '文字色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h4_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h4bordercolor',
			array(
				'default'              => $defaults['st_menu_h4bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4bordercolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'ボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h4bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h4bgcolor',
			array(
				'default'              => $defaults['st_menu_h4bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h4bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h4_design',
			array(
				'default'           => $defaults['st_h4_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_design_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_design',
				'label'       => '左ボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_top_border',
			array(
				'default'           => $defaults['st_h4_top_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_top_border_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_top_border',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_bottom_border',
			array(
				'default'           => $defaults['st_h4_bottom_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_bottom_border_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bottom_border',
				'label'       => '下にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//背景画像

		$wp_customize->add_setting( 'st_h4_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h4_Image',
			array(
				'label'       => '',
				'section'     => 'tagcolors',
				'description' => '背景画像',
				'settings'    => 'st_h4_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h4_bgimg_side',
			array(
				'default'           => $defaults['st_h4_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_side',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_top',
			array(
				'default'           => $defaults['st_h4_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_top',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_repeat',
			array(
				'default'           => $defaults['st_h4_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4_bgimg_repeat',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h4_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_bgimg_leftpadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h4_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h4_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h4_tupadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );


		$wp_customize->add_setting( 'st_h4hukidasi_design',
			array(
				'default'           => $defaults['st_h4hukidasi_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h4hukidasi_design',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h4hukidasi_design',
				'label'       => '吹き出しデザインに変える（※要 背景色指定）',
				'description' => '',
				'type'        => 'checkbox',
			) );

/*h5タグ*/

		$wp_customize->add_setting( 'st_menu_h5_textcolor',
			array(
				'default'              => $defaults['st_menu_h5_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h5_textcolor', array(
			'label'       => __( 'H5タグ', 'default' ),
			'description' => '文字色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h5_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h5bordercolor',
			array(
				'default'              => $defaults['st_menu_h5bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h5bordercolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'ボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h5bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h5bgcolor',
			array(
				'default'              => $defaults['st_menu_h5bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h5bgcolor', array(
			'label'       => __( '', 'default' ),
			'description' => '背景色',
			'section'     => 'tagcolors',
			'settings'    => 'st_menu_h5bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h5_design',
			array(
				'default'           => $defaults['st_h5_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_design_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_design',
				'label'       => '左ボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_top_border',
			array(
				'default'           => $defaults['st_h5_top_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_top_border_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_top_border',
				'label'       => '上にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_bottom_border',
			array(
				'default'           => $defaults['st_h5_bottom_border'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_bottom_border_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bottom_border',
				'label'       => '下にボーダーを付ける',
				'description' => '',
				'type'        => 'checkbox',
			) );

		//背景画像

		$wp_customize->add_setting( 'st_h5_bgimg',
			array(
				'default'           => '',
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) );

		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'h5_Image',
			array(
				'label'       => '',
				'section'     => 'tagcolors',
				'description' => '背景画像',
				'settings'    => 'st_h5_bgimg',
			)
		) );

		$wp_customize->add_setting( 'st_h5_bgimg_side',
			array(
				'default'           => $defaults['st_h5_bgimg_side'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_side',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bgimg_side',
				'label'       => '',
				'description' => '背景画像の横位置',
				'type'        => 'radio',
				'choices'     => array(
					'left'   => __( '左', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'right'  => __( '右', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_top',
			array(
				'default'           => $defaults['st_h5_bgimg_top'],
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_top',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bgimg_top',
				'label'       => '',
				'description' => '背景画像の縦位置',
				'type'        => 'radio',
				'choices'     => array(
					'top'    => __( '上', 'default' ),
					'center' => __( '真ん中', 'default' ),
					'bottom' => __( '下', 'default' ),
				),
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_repeat',
			array(
				'default'           => $defaults['st_h5_bgimg_repeat'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5_bgimg_repeat',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bgimg_repeat',
				'label'       => '背景画像を繰り返さない',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_leftpadding',
			array(
				'default'           => $defaults['st_h5_bgimg_leftpadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h5_bgimg_leftpadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bgimg_leftpadding',
				'label'       => '',
				'description' => '左の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h5_bgimg_tupadding',
			array(
				'default'           => $defaults['st_h5_bgimg_tupadding'],
				'sanitize_callback' => 'sanitize_int',

			) );
		$wp_customize->add_control( 'st_h5_tupadding_c',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5_bgimg_tupadding',
				'label'       => '',
				'description' => '上下の余白（px）',
				'type'        => 'option',
			) );

		$wp_customize->add_setting( 'st_h5hukidasi_design',
			array(
				'default'           => $defaults['st_h5hukidasi_design'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_h5hukidasi_design',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_h5hukidasi_design',
				'label'       => '吹き出しデザインに変える（※要 背景色指定）',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*サイドバー見出し色*/

		$wp_customize->add_setting( 'st_menu_h4sidetextcolor',
			array(
				'default'              => $defaults['st_menu_h4sidetextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4sidetextcolor', array(
			'label'    => __( 'サイドバー見出し色*', 'default' ),
			'section'  => 'tagcolors',
			'settings' => 'st_menu_h4sidetextcolor',
		) ) );


		/*カテゴリ*/

		$wp_customize->add_setting( 'st_catbg_color',
			array(
				'default'              => $defaults['st_catbg_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_catbg_color', array(
			'label'       => __( '記事タイトル上のカテゴリ', 'default' ),
			'description' => '背景色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_catbg_color',
		) ) );

		$wp_customize->add_setting( 'st_cattext_color',
			array(
				'default'              => $defaults['st_cattext_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_cattext_color', array(
			'label'       => __( '', 'default' ),
			'description' => '文字色',
			'section'     => 'tagcolors',
			'settings'    => 'st_cattext_color',
		) ) );

		/*投稿日時・ぱんくず・タグ*/

		$wp_customize->add_setting( 'st_kuzu_color',
			array(
				'default'              => $defaults['st_kuzu_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kuzu_color', array(
			'label'       => __( '投稿日時・ぱんくず・タグ', 'default' ),
			'description' => 'テキスト色',
			'section'     => 'tagcolors',
			'settings'    => 'st_kuzu_color',
		) ) );

		/*引用*/

		$wp_customize->add_setting( 'st_blockquote_color',
			array(
				'default'              => $defaults['st_blockquote_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blockquote_color', array(
			'label'    => __( '引用部分の背景色', 'default' ),
			'section'  => 'tagcolors',
			'settings' => 'st_blockquote_color',
		) ) );

		/*NEW及び関連記事*/

		$wp_customize->add_setting( 'st_separator_bgcolor',
			array(
				'default'              => $defaults['st_separator_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_bgcolor', array(
			'label'       => __( 'NEW ENTRY & 関連記事', 'default' ),
			'description' => '背景色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_separator_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_separator_color',
			array(
				'default'              => $defaults['st_separator_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_color', array(
			'label'       => __( '', 'default' ),
			'description' => '文字色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_separator_color',
		) ) );

		/*タグクラウド*/

		$wp_customize->add_setting( 'st_tagcloud_color',
			array(
				'default'              => $defaults['st_tagcloud_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_tagcloud_color', array(
			'label'       => __( 'タグクラウド', 'default' ),
			'description' => '文字とボーダー色*',
			'section'     => 'tagcolors',
			'settings'    => 'st_tagcloud_color',
		) ) );

		/*記事内テキスト*/

		$wp_customize->add_setting( 'st_main_textcolor',
			array(
				'default'              => $defaults['st_main_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_main_textcolor', array(
			'label'       => __( '一括テキスト色強制変更', 'default' ),
			'description' => '記事内のテキストなど※一括変更は注して御利用下さい（白背景に白文字が適応されると読めなくなります）',
			'section'     => 'tagcolors',
			'settings'    => 'st_main_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_side_textcolor',
			array(
				'default'              => $defaults['st_side_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_side_textcolor', array(
			'label'       => __( '', 'default' ),
			'description' => 'サイドの文字色',
			'section'     => 'tagcolors',
			'settings'    => 'st_side_textcolor',
		) ) );

		/*記事内リンク色*/

		$wp_customize->add_setting( 'st_link_textcolor',
			array(
				'default'              => $defaults['st_link_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_textcolor', array(
			'label'       => __( '記事内リンク色', 'default' ),
			'description' => '',
			'section'     => 'tagcolors',
			'settings'    => 'st_link_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_link_hovertextcolor',
			array(
				'default'              => $defaults['st_link_hovertextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_hovertextcolor', array(
			'label'       => __( '全てのリンクテキスト', 'default' ),
			'description' => 'マウスオーバー色',
			'section'     => 'tagcolors',
			'settings'    => 'st_link_hovertextcolor',
		) ) );

		$wp_customize->add_setting( 'st_link_hoveropacity',
			array(
				'default'           => $defaults['st_link_hoveropacity'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_link_hoveropacity',
			array(
				'section'     => 'tagcolors',
				'settings'    => 'st_link_hoveropacity',
				'label'       => 'マウスオーバー時に透明度を下げる',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*-------------------------------------------------------
		オプションカラー
		-------------------------------------------------------*/

		$wp_customize->add_section( 'optioncolors',
			array(
				'title'       => __( '[+] オプションカラー', 'default' ),
				'description' => '管理画面で使用する事で表示されるアイテムのカラー調整',
				'priority'    => 102,
			) );

		/*記事内のWebアイコン*/

		$wp_customize->add_setting( 'st_webicon_question',
			array(
				'default'              => $defaults['st_webicon_question'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_question', array(
			'label'       => __( '記事内のWebアイコン', 'default' ),
			'description' => '[？] はてなマーク',
			'section'     => 'optioncolors',
			'settings'    => 'st_webicon_question',
		) ) );

		$wp_customize->add_setting( 'st_webicon_check',
			array(
				'default'              => $defaults['st_webicon_check'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_check', array(
			'label'       => __( '', 'default' ),
			'description' => '[v] チェックマーク',
			'section'     => 'optioncolors',
			'settings'    => 'st_webicon_check',
		) ) );

		$wp_customize->add_setting( 'st_webicon_exclamation',
			array(
				'default'              => $defaults['st_webicon_exclamation'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_exclamation', array(
			'label'       => __( '', 'default' ),
			'description' => '[！] エクステンションマーク',
			'section'     => 'optioncolors',
			'settings'    => 'st_webicon_exclamation',
		) ) );

		$wp_customize->add_setting( 'st_webicon_memo',
			array(
				'default'              => $defaults['st_webicon_memo'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_memo', array(
			'label'       => __( '', 'default' ),
			'description' => 'メモマーク',
			'section'     => 'optioncolors',
			'settings'    => 'st_webicon_memo',
		) ) );

		$wp_customize->add_setting( 'st_webicon_user',
			array(
				'default'              => $defaults['st_webicon_user'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_webicon_user', array(
			'label'       => __( '', 'default' ),
			'description' => '人物マーク',
			'section'     => 'optioncolors',
			'settings'    => 'st_webicon_user',
		) ) );

		/*マル数字のカラー*/

		$wp_customize->add_setting( 'st_maruno_textcolor',
			array(
				'default'              => $defaults['st_maruno_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_textcolor', array(
			'label'       => __( '数字リストのカラー', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ナンバー色',
			'settings'    => 'st_maruno_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_nobgcolor',
			array(
				'default'              => $defaults['st_maruno_nobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_nobgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ナンバー背景色',
			'settings'    => 'st_maruno_nobgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_bordercolor',
			array(
				'default'              => $defaults['st_maruno_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_bordercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '囲いボーダー色',
			'settings'    => 'st_maruno_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_maruno_bgcolor',
			array(
				'default'              => $defaults['st_maruno_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruno_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '囲い背景色',
			'settings'    => 'st_maruno_bgcolor',
		) ) );

		/*マルチェックのカラー*/

		$wp_customize->add_setting( 'st_maruck_textcolor',
			array(
				'default'              => $defaults['st_maruck_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_textcolor', array(
			'label'       => __( 'チェックリストのカラー', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'チェック色',
			'settings'    => 'st_maruck_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_nobgcolor',
			array(
				'default'              => $defaults['st_maruck_nobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_nobgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'チェック背景色',
			'settings'    => 'st_maruck_nobgcolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_bordercolor',
			array(
				'default'              => $defaults['st_maruck_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_bordercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '囲いボーダー色',
			'settings'    => 'st_maruck_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_maruck_bgcolor',
			array(
				'default'              => $defaults['st_maruck_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_maruck_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '囲い背景色',
			'settings'    => 'st_maruck_bgcolor',
		) ) );

		/*-------------------------
		テーブルカラー
		--------------------------*/

		/*テーブル全体*/

		$wp_customize->add_setting( 'st_table_bordercolor',
			array(
				'default'              => $defaults['st_table_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_bordercolor', array(
			'label'       => __( 'table（表）全体のカラー', 'default' ),
			'section'     => 'optioncolors',
			'description' => '表のボーダー色',
			'settings'    => 'st_table_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_table_cell_bgcolor',
			array(
				'default'              => $defaults['st_table_cell_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_cell_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '偶数行のセルの色',
			'settings'    => 'st_table_cell_bgcolor',
		) ) );

		/*縦一列目*/

		$wp_customize->add_setting( 'st_table_td_bgcolor',
			array(
				'default'              => $defaults['st_table_td_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_td_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '縦一列目の背景色',
			'settings'    => 'st_table_td_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_td_textcolor',
			array(
				'default'              => $defaults['st_table_td_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_td_textcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '縦一列目の文字色',
			'settings'    => 'st_table_td_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_td_bold',
			array(
				'default'           => $defaults['st_table_td_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_table_td_bold',
			array(
				'section'     => 'optioncolors',
				'settings'    => 'st_table_td_bold',
				'label'       => '縦一列目を太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*横一列目*/

		$wp_customize->add_setting( 'st_table_tr_bgcolor',
			array(
				'default'              => $defaults['st_table_tr_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_tr_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '横一列目（tr）の背景色',
			'settings'    => 'st_table_tr_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_tr_textcolor',
			array(
				'default'              => $defaults['st_table_tr_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_table_tr_textcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '横一列目（tr）の文字色',
			'settings'    => 'st_table_tr_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_table_tr_bold',
			array(
				'default'           => $defaults['st_table_tr_bold'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_table_tr_bold',
			array(
				'section'     => 'optioncolors',
				'settings'    => 'st_table_tr_bold',
				'label'       => '横一列目（tr）を太字にする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*RSS（購読する）ボタン*/

		$wp_customize->add_setting( 'st_rss_color',
			array(
				'default'              => $defaults['st_rss_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_rss_color', array(
			'label'    => __( 'RSS（購読する）ボタン*', 'default' ),
			'section'  => 'optioncolors',
			'settings' => 'st_rss_color',
		) ) );

		/*SNSボタン*/

		$wp_customize->add_setting( 'st_sns_btn',
			array(
				'default'              => $defaults['st_sns_btn'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btn', array(
			'label'       => __( 'SNSボタン※一括', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ボタン背景色',
			'settings'    => 'st_sns_btn',
		) ) );

		$wp_customize->add_setting( 'st_sns_btntext',
			array(
				'default'              => $defaults['st_sns_btntext'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btntext', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'アイコンと文字色',
			'settings'    => 'st_sns_btntext',
		) ) );

		//お知らせ

		$wp_customize->add_setting( 'st_menu_newsbarcolor_t',
			array(
				'default'              => $defaults['st_menu_newsbarcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor_t', array(
			'label'       => __( 'お知らせ', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し背景色上部（※上下共に設定）*',
			'settings'    => 'st_menu_newsbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbarcolor',
			array(
				'default'              => $defaults['st_menu_newsbarcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し背景色下部*',
			'settings'    => 'st_menu_newsbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbar_border_color',
			array(
				'default'              => $defaults['st_menu_newsbar_border_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_newsbar_border_color',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'optioncolors',
				'description' => '見出しボーダー色*',
				'settings'    => 'st_menu_newsbar_border_color',
			) ) );

		$wp_customize->add_setting( 'st_menu_newsbartextcolor',
			array(
				'default'              => $defaults['st_menu_newsbartextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbartextcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し文字色*',
			'settings'    => 'st_menu_newsbartextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbgcolor',
			array(
				'default'              => $defaults['st_menu_newsbgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '全体背景色',
			'settings'    => 'st_menu_newsbgcolor',
		) ) );

		/*日付の文字色*/

		$wp_customize->add_setting( 'st_news_datecolor',
			array(
				'default'              => $defaults['st_news_datecolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_datecolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '日付の文字色*',
			'settings'    => 'st_news_datecolor',
		) ) );

		/*文字と下線色*/

		$wp_customize->add_setting( 'st_news_text_color',
			array(
				'default'              => $defaults['st_news_text_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_text_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'お知らせ文字と下線色',
			'settings'    => 'st_news_text_color',
		) ) );

		/*任意お薦め記事*/

		$wp_customize->add_setting( 'st_menu_osusumemidasitextcolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasitextcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasitextcolor',
			array(
				'label'       => __( 'おすすめ記事', 'default' ),
				'section'     => 'optioncolors',
				'description' => '見出し文字色*',
				'settings'    => 'st_menu_osusumemidasitextcolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasicolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasicolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasicolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し背景色*',
			'settings'    => 'st_menu_osusumemidasicolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_color',
			array(
				'default'              => $defaults['st_menu_popbox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'コンテンツ背景色*',
			'settings'    => 'st_menu_popbox_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_textcolor',
			array(
				'default'              => $defaults['st_menu_popbox_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_textcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '文字色',
			'settings'    => 'st_menu_popbox_textcolor',
		) ) );

		/*任意お薦め記事No*/

		$wp_customize->add_setting( 'st_menu_osusumemidasinocolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasinocolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasinocolor',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'optioncolors',
				'description' => 'ナンバー色*',
				'settings'    => 'st_menu_osusumemidasinocolor',
			) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasinobgcolor',
			array(
				'default'              => $defaults['st_menu_osusumemidasinobgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_menu_osusumemidasinobgcolor',
			array(
				'label'       => __( '', 'default' ),
				'section'     => 'optioncolors',
				'description' => 'ナンバー背景色*',
				'settings'    => 'st_menu_osusumemidasinobgcolor',
			) ) );

		$wp_customize->add_setting( 'st_nohidden',
			array(
				'default'           => $defaults['st_nohidden'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_nohidden',
			array(
				'section'     => 'optioncolors',
				'settings'    => 'st_nohidden',
				'label'       => 'ナンバーを非表示',
				'description' => '',
				'type'        => 'checkbox',
			) );


		/*フリーボックスウィジェット*/

		$wp_customize->add_setting( 'st_freebox_tittle_textcolor',
			array(
				'default'              => $defaults['st_freebox_tittle_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_textcolor', array(
			'label'       => __( 'フリーボックスウィジェット', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し文字色*',
			'settings'    => 'st_freebox_tittle_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_freebox_tittle_color',
			array(
				'default'              => $defaults['st_freebox_tittle_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '見出し背景色*',
			'settings'    => 'st_freebox_tittle_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_color',
			array(
				'default'              => $defaults['st_freebox_color'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_color', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'コンテンツ背景色*',
			'settings'    => 'st_freebox_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_textcolor',
			array(
				'default'              => $defaults['st_freebox_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_textcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '文字色',
			'settings'    => 'st_freebox_textcolor',
		) ) );

		/*ウィジェット問合せフォームボタン*/

		$wp_customize->add_setting( 'st_formbtn_textcolor',
			array(
				'default'              => $defaults['st_formbtn_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_textcolor', array(
			'label'       => __( 'ウィジェット問合せフォームボタン', 'default' ),
			'section'     => 'optioncolors',
			'description' => '文字色*',
			'settings'    => 'st_formbtn_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_bordercolor',
			array(
				'default'              => $defaults['st_formbtn_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bordercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ボーダー色',
			'settings'    => 'st_formbtn_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_radius',
			array(
				'default'           => $defaults['st_formbtn_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_formbtn_radius',
			array(
				'section'     => 'optioncolors',
				'settings'    => 'st_formbtn_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		$wp_customize->add_setting( 'st_formbtn_bgcolor',
			array(
				'default'              => $defaults['st_formbtn_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色*',
			'settings'    => 'st_formbtn_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_bgcolor_t',
			array(
				'default'              => $defaults['st_formbtn_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bgcolor_t', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色上部*',
			'settings'    => 'st_formbtn_bgcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_textcolor',
			array(
				'default'              => $defaults['st_formbtn2_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_textcolor', array(
			'label'       => __( 'オリジナルウィジェットボタン', 'default' ),
			'section'     => 'optioncolors',
			'description' => '文字色*',
			'settings'    => 'st_formbtn2_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_bordercolor',
			array(
				'default'              => $defaults['st_formbtn2_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bordercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ボーダー色',
			'settings'    => 'st_formbtn2_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_radius',
			array(
				'default'           => $defaults['st_formbtn2_radius'],
				'sanitize_callback' => 'sanitize_checkbox',
			) );
		$wp_customize->add_control( 'st_formbtn2_radius',
			array(
				'section'     => 'optioncolors',
				'settings'    => 'st_formbtn2_radius',
				'label'       => '角を丸くする',
				'description' => '',
				'type'        => 'checkbox',
			) );

		/*オリジナルウィジェットボタン*/

		$wp_customize->add_setting( 'st_formbtn2_bgcolor',
			array(
				'default'              => $defaults['st_formbtn2_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色*',
			'settings'    => 'st_formbtn2_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_bgcolor_t',
			array(
				'default'              => $defaults['st_formbtn2_bgcolor_t'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bgcolor_t', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色上部*',
			'settings'    => 'st_formbtn2_bgcolor_t',
		) ) );

/*会話風ふきだしのカラー*/

		$wp_customize->add_setting( 'st_kaiwa_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa_bgcolor', array(
			'label'       => __( '会話風ふきだしのカラー', 'default' ),
			'section'     => 'optioncolors',
			'description' => '全体又は会話1の背景色',
			'settings'    => 'st_kaiwa_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa2_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa2_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa2_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話2の背景色',
			'settings'    => 'st_kaiwa2_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa3_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa3_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa3_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話3の背景色',
			'settings'    => 'st_kaiwa3_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa4_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa4_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa4_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話4の背景色',
			'settings'    => 'st_kaiwa4_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa5_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa5_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa5_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話5の背景色',
			'settings'    => 'st_kaiwa5_bgcolor',
		) ) );		$wp_customize->add_setting( 'st_kaiwa6_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa6_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa6_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話6の背景色',
			'settings'    => 'st_kaiwa6_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_kaiwa7_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa7_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa7_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話7の背景色',
			'settings'    => 'st_kaiwa7_bgcolor',
		) ) );
				$wp_customize->add_setting( 'st_kaiwa8_bgcolor',
			array(
				'default'              => $defaults['st_kaiwa8_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kaiwa8_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '会話8の背景色',
			'settings'    => 'st_kaiwa8_bgcolor',
		) ) );

		/*TOC+（目次）のカラー*/

		$wp_customize->add_setting( 'st_toc_textcolor',
			array(
				'default'              => $defaults['st_toc_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_textcolor', array(
			'label'       => __( 'TOC+（目次）のカラー', 'default' ),
			'section'     => 'optioncolors',
			'description' => '文字色',
			'settings'    => 'st_toc_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_bordercolor',
			array(
				'default'              => $defaults['st_toc_bordercolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_bordercolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => 'ボーダー色',
			'settings'    => 'st_toc_bordercolor',
		) ) );

		$wp_customize->add_setting( 'st_toc_bgcolor',
			array(
				'default'              => $defaults['st_toc_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_toc_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色',
			'settings'    => 'st_toc_bgcolor',
		) ) );

		/*コンタクトフォーム7送信ボタン*/

		$wp_customize->add_setting( 'st_contactform7btn_textcolor',
			array(
				'default'              => $defaults['st_contactform7btn_textcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
			'st_contactform7btn_textcolor',
			array(
				'label'       => __( 'コンタクトフォーム7送信ボタン', 'default' ),
				'section'     => 'optioncolors',
				'description' => '文字色',
				'settings'    => 'st_contactform7btn_textcolor',
			) ) );

		$wp_customize->add_setting( 'st_contactform7btn_bgcolor',
			array(
				'default'              => $defaults['st_contactform7btn_bgcolor'],
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_contactform7btn_bgcolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'optioncolors',
			'description' => '背景色',
			'settings'    => 'st_contactform7btn_bgcolor',
		) ) );

		/*-------------------------------------------------------
		簡単設定
		-------------------------------------------------------*/

		$wp_customize->add_section( 'stpattern',
			array(
				'title'       => __( '全体カラー設定 - 基本3色 -', 'default' ),
				'description' => '基本カラーを決めて全体の配色をします※初期値が反映されない時はブラウザを更新して下さい',
				'priority'    => 0,
			) );

		//カラー設定
		$wp_customize->add_setting( 'st_key_patterncolor',
			array(
				'default'              => $basecolor,
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_key_patterncolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stpattern',
			'description' => 'キーカラー（推奨：一番濃い色）',
			'settings'    => 'st_key_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_main_patterncolor',
			array(
				'default'              => $maincolor,
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_main_patterncolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stpattern',
			'description' => 'メインカラー（推奨：少し薄い色）',
			'settings'    => 'st_main_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_sub_patterncolor',
			array(
				'default'              => $subcolor,
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sub_patterncolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stpattern',
			'description' => 'サブカラー（推奨：とても薄い色）',
			'settings'    => 'st_sub_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_text_patterncolor',
			array(
				'default'              => $textcolor,
				'sanitize_callback'    => 'sanitize_hex_color',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_text_patterncolor', array(
			'label'       => __( '', 'default' ),
			'section'     => 'stpattern',
			'description' => 'テキスト（一部）',
			'settings'    => 'st_text_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_theme_setting',
			array(
				'default'           => '',
				'sanitize_callback' => 'st_sanitize_choices',
			) );
		$wp_customize->add_control( 'st_theme_setting',
			array(
				'section'     => 'stpattern',
				'settings'    => 'st_theme_setting',
				'label'       => '簡単設定を使用する',
				'description' => '(1)「全体的に反映」 *マークの付いた全ての項目に強制反映されます (2) 「メニューのみに反映」マークの付いたメニューの項目に強制反映されます(3) 「初期値として設定」*マークの付いたメニューのデフォルトカラーとして設定されます（保存後にブラウザを再読み込みして下さい）',
				'type'        => 'radio',
				'choices'     => array(
					'zentai'       => __( '(1)全体的に反映', 'default' ),
					'menuonly'     => __( '(2)メニューのみに反映', 'default' ),
					'defaultcolor' => __( '(3)初期値として設定', 'default' ),
					''             => __( 'リセット（管理画面で選択したカラーが初期値になります）', 'default' ),
				),
			) );
	}
}

add_action( 'customize_register', 'st_customize_register' );

add_action( 'customize_register', 'st_headerfooter_logo' );

if (!function_exists('_st_customize_save_after')) {
    function _st_customize_save_after() {
    	set_theme_mod('_st_current_theme_setting', st_get_kantan_setting());
    }
}
add_action('customize_save_after', '_st_customize_save_after');

function st_headerfooter_logo() {
	return get_theme_mod( 'st_header_footer_logo' );
}

if ( st_is_customizer_enabled() ) {    // カスタマイザーを使用
	function st_customize_css() {
		require( dirname( __FILE__ ) . '/st-themecss-variables.php' ); // カスタマイザー用CSS設定読み込み

		?>
		<style type="text/css">
			<?php include( dirname( __FILE__ ) . '/st-themecss.php' ); ?>
		</style>
		<?php
	}

	function st_enqueue_customize_css() {
		wp_enqueue_style(
			'st-themecss',
			get_template_directory_uri() . '/st-themecss-loader.php',
			array(),
			false,
			'all'
		);
	}

	function st_customize_js() {
		wp_enqueue_script( 'ac-fixmenu', get_template_directory_uri() . '/js/ac-fixmenu.js', array() );
	}

	add_action( 'wp_head', 'st_customize_css' );

}
