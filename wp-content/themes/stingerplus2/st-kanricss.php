<?php
header('Content-Type: text/css; charset=utf-8');
include_once(dirname( __FILE__ ) . '/../../../wp-load.php');
?>
@charset "UTF-8";

<?php if ( isset($GLOBALS['stdata88']) && $GLOBALS['stdata88'] === 'yes' ) { // 記事内の画像にcaptionがある場合に枠線を付ける ?>
	main .wp-caption img {
		border:solid 1px #ccc;
	}
<?php } ?>

<?php if( !wp_is_mobile() && (trim($GLOBALS['stdata115']) !== '') ){ //「トップ背景にアミ点を追加」にチェックがある場合 ?>
	<?php if (trim($GLOBALS['stdata116']) !== ''){ //「下層ページでもYouTubeを流す」にもチェックがある場合: 全ページでアミ点を表示 ?>
	#st-ami {
<?php }else{ //トップページのみアミ点を表示 ?>
	body.front-page #st-ami {
<?php } ?>
		background-image: url(images/amiten.png);
	}
<?php } ?>

<?php if( (trim($GLOBALS['stdata80']) !== '') || ( !st_is_mobile() && (trim($GLOBALS['stdata16']) !== '')) ): //スマホメニューを表示しない場合のヘッダーパディングの調整 ?>
	#headbox {
		padding: 10px!important;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata98']) === ''){ //游ゴシックの選択 ?>
.post h2,
.post h2 span,
.post h3,
.post h3 span,
.entry-title,
.post .entry-title {
	font-family: Helvetica , "游ゴシック" , "Yu Gothic" , sans-serif;
}
<?php } ?>

<?php if ( isset($GLOBALS['stdata201']) && $GLOBALS['stdata201'] === 'yes' ) { ?>
	/*サイドバーカテゴリ（階層未対応）*/
	#side li.cat-item::after {
		content: " \f105";
		font-family: FontAwesome;
		position: absolute;
		right: 10px;
	}

	#side li.cat-item {
		position: relative;
		vertical-align: middle;
		width:100%;
		padding: 10px;
		box-sizing:border-box;
		border-bottom:1px dotted #ccc;
	}

	#side li.cat-item a {
		color:#1a1a1a;
		text-decoration:none;
	}

	#side li.cat-item a:hover {
		color:#ccc;
	}
<?php } ?>

<?php if(trim($GLOBALS['stdata96']) !== ''){ ?>
	/*TOC+*/
	#toc_container {
		background: #f3f3f3;
		border-left: 1px solid #ccc;
		box-sizing: border-box;
		margin-bottom: 20px;
		padding: 10px 20px 10px 0px;
	}

	#toc_container .toc_title {
		padding: 5px 10px 5px 20px;
		margin:0;
		font-size:80%;
	}

	.post #toc_container ul,
	.post #toc_container ol {
		list-style: none;
		margin-bottom: 0;
		padding:0 0 0 10px;
	}

	.toc_number {
		font-weight:bold;
		margin-right:5px;
		color:#ccc;
	}

	#toc_container ul a {
		display: block;
		text-decoration: none;
		color: #000;
		padding-left:5px;
		border-bottom: 1px dotted #ccc;
	}

	#toc_container ul li li a {
		font-size:90%;
	}

	#toc_container ul a:hover {
		opacity:0.5;
	}

	#toc_container .toc_list > li > a {
		border-bottom: 1px solid #ccc;
		margin-bottom:10px;
	}

	#toc_container li {
		font-weight:bold;
		margin-bottom: 5px;
		padding: 5px 0 5px 5px;
	}

	#toc_container li li li {
		font-weight:normal;
	}
<?php } ?>

<?php if ( st_is_mobile() && is_active_sidebar( 18 ) ): ?>
	/*フッターに固定広告がある場合にページトップボタンの位置を上にする*/
	#page-top {
		bottom: 80px;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata81']) === '' && trim($GLOBALS['stdata82']) === ''){ ?>
	/*アコーディオンメニュー追加ボタン2*/
	#s-navi dt.trigger .op-st2 {
		max-width:80%;
	}
<?php }elseif(trim($GLOBALS['stdata83']) === '' && trim($GLOBALS['stdata84']) === ''){ ?>
	/*アコーディオンメニュー追加ボタン1*/
	#s-navi dt.trigger .op-st {
		max-width:80%;
	}
<?php } ?>



/*media Queries タブレットサイズ（959px以下）
----------------------------------------------------*/
@media only screen and (max-width: 959px) {


}

/*media Queries タブレットサイズ（600px以上）
----------------------------------------------------*/
@media only screen and (min-width: 600px) {

<?php if(trim($GLOBALS['stdata91']) !== ''){ //サムネイルサイズを大きく ?>
	.kanren dt {
		float: left;
		width: 150px;
	}

	.kanren dt img {
		width: 150px;
	}

	.kanren dd {
		padding-left: 165px;
	}
<?php } ?>

<?php if(trim($GLOBALS['stdata96']) !== ''){ ?>
	/*TOC+*/
	#toc_container {

	}
<?php } ?>


	/*-- ここまで --*/
}

/*media Queries PCサイズ（960px以上）
----------------------------------------------------*/
@media only screen and (min-width: 960px) {

	/*--------------------------------
	全体のサイズ
	---------------------------------*/

	<?php 		
		$st_pc_width = 1060;
		$st_pc_header_width = 1040;
	?>

	#st-menuwide, /*メニュー*/
	nav.smanone,
	nav.st5,
	#st-menuwide div.menu,
	#st-menuwide nav.menu,
	#st-header, /*ヘッダー*/
	#content, /*コンテンツ*/
	#footer-in /*フッター*/
	 { 
		max-width:<?php echo $st_pc_width; ?>px;
	}

	#headbox
	 { 
		max-width:<?php echo $st_pc_header_width; ?>px;
	}

<?php if(trim($GLOBALS['stdata29']) !== ''){ ?>

	/*--------------------------------
	PCのレイアウト（左サイドバー）
	---------------------------------*/

	#contentInner {
		float: right;
		width: 100%;
		margin-left: -320px;
	}

	main {
		margin-right: 0px;
		margin-left: 320px;
		background-color: #fff;
		border-radius: 4px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		padding: 30px 50px 30px;
	}

	#side aside {
		float: left;
		width: 300px;
		padding: 0px;
	}

<?php }else{ ?>

	/*--------------------------------
	PCのレイアウト（右サイドバー）
	---------------------------------*/

	#contentInner {
		float: left;
		width: 100%;
		margin-right: -300px;
	}

	main {
		margin-right: 320px;
		margin-left: 0px;
		background-color: #fff;
		border-radius: 4px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		padding: 30px 50px 30px;
	}

	#side aside {
		float: right;
		width: 300px;
		padding: 0px;
	}


<?php } ?>

/**
 * サイト名とキャッチフレーズ有無の調整
 */

<?php if( (trim($GLOBALS['stdata101']) !== '') || ( !st_is_mobile() && (trim($GLOBALS['stdata18']) !== '')) ): //サイト名がなくヘッダーにフッターメニューを表示した場合のパディングの調整 ?>
	header .descr {
    		padding:0px;
		margin:0;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata101']) !== ''): //サイト名が非表示ならキャッチフレーズのパディングを少なめに ?>
	#headbox {
		padding: 5px 10px!important;
	}
<?php endif; ?>

<?php if( (!is_active_sidebar( 8 )) && (trim($GLOBALS['stdata42']) === '') ): //電話番号もヘッダーウィジェットも無い場合 ?>
	#header-r .footermenust {
		margin: 0;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata102']) !== '' ): //キャッチフレーズが非表示なら ?>
	header .sitename {
    		padding: 5px;
		margin: 0;
		<?php if( get_option( 'st_logo_image' )): //ロゴ画像があるなら ?>
			line-height:0;
			font-size:1px;
		<?php endif; ?>
	}
	#headbox {
		padding: 5px 10px!important;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata105']) !== ''): //ヘッダーをセンタリング ?>
	#st-headwide #headbox {
    		text-align: center;
	}
<?php endif; ?>

<?php if(trim($GLOBALS['stdata96']) !== ''){ ?>
	/*TOC+*/
	#toc_container {

	}
<?php } ?>

<?php if(trim($GLOBALS['stdata142']) !== ''){ ?>
	/*PCアドセンスを横並び*/
	.adbox:after {
		content: "";
		display: block;
		clear: both;
	}
	.adbox div {
		float:left;
		margin-right:20px;
		padding-top:0!important;
		padding-bottom:10px;
	}

	.adbox div:last-child {
		margin-right:0px;
	}
<?php } ?>

	/*-- ここまで --*/
}
