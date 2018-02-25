<?php //固定ページ用の広告読み込み
global $wp_query;
if( is_single() or is_page() && !is_front_page() ){
	$postID = $wp_query->post->ID;
	$koukoku_set = get_post_meta( $postID, 'koukoku_set', true );
	if ( isset( $koukoku_set ) && $koukoku_set === 'yes' ){ //広告非表示の場合 ?>

	<?php }else{ ?>

		<?php //広告読み込み
		if( is_single() || ( is_page() && ( trim($GLOBALS['stdata100']) !== '') ) ){ ?>
			<div class="adbox">
				<?php get_template_part( 'ad' ); //アドセンス読み込み ?>
				<?php if ( st_is_mobile() ) { //スマホの場合 ?>
				<?php } else { //PCの場合 ?>
					<div style="padding-top:10px;">
						<?php get_template_part( 'ad' ); //アドセンス読み込み ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>

        
	<?php } ?>

<?php }else{ //投稿と固定ページ以外 ?>

		<?php //広告読み込み
		if( is_single() || ( is_page() && ( trim($GLOBALS['stdata100']) !== '') ) ){ ?>
			<div class="adbox">
				<?php get_template_part( 'ad' ); //アドセンス読み込み ?>
				<?php if ( st_is_mobile() ) { //スマホの場合 ?>
				<?php } else { //PCの場合 ?>
					<div style="padding-top:10px;">
						<?php get_template_part( 'ad' ); //アドセンス読み込み ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>

<?php }