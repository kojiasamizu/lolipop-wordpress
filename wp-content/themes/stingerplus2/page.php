<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main>
			<article>
				<div id="st-page" <?php post_class('post'); ?>>

			<?php get_template_part( 'st-eyecatch' ); //アイキャッチ画像を挿入 ?>

				<?php if( !is_front_page() ){ ?>
					<?php if( is_single() or is_page() ){ //一括挿入ウィジェットの表示確認
						$postID = $wp_query->post->ID;
						$ikkatuwidgetset = get_post_meta( $postID, 'ikkatuwidget_set', true );
					}else{
						$ikkatuwidgetset = '';
					} 
					?>
					<?php if (( is_active_sidebar( 17 ) ) && ( trim( $ikkatuwidgetset ) === '' )) { ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 17 ) ) : else : //固定ページ上一括ウィジェット ?>
						<?php endif; ?>
					<?php } ?>

					<!--ぱんくず -->
					<div id="breadcrumb">
					<ol itemscope itemtype="http://schema.org/BreadcrumbList">
						 <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo home_url(); ?>" itemprop="item"><span itemprop="name"><?php echo esc_html( $GLOBALS["stdata141"] ); ?></span></a> > <meta itemprop="position" content="1" /></li>
						<?php 
						$i = 2;
						foreach ( array_reverse( get_post_ancestors( $post->ID ) ) as $parid ) { ?>

							<li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo get_page_link( $parid ); ?>" title="<?php echo  get_the_title(); ?>" itemprop="item"> <span itemprop="name"><?php echo get_page( $parid )->post_title; ?></span></a> > <meta itemprop="position" content="<?php echo $i; ?>" /></li>
						<?php  $i++; } ?>
					</ol>
					</div>
					<!--/ ぱんくず -->

				<?php }else{ //フロントページの場合 ?>
					<div class="nowhits <?php st_noheader_class(); ?>"><?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?></div>
					<?php if ( is_active_sidebar( 12 ) ) { ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 12 ) ) : else : //トップ上部のウィジェット ?>
						<?php endif; ?>
					<?php } ?>

					<?php get_template_part( 'news-st' ); //お知らせ ?>
				<?php } ?>

					<!--ループ開始 -->
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>

						<?php if(!is_front_page()){ ?>
							<h1 class="entry-title"><?php the_title(); //タイトル ?></h1>
						<?php } ?>

					<div class="mainbox">

						<div id="nocopy" <?php st_text_copyck(); ?>><!-- コピー禁止エリアここから -->
							<div class="entry-content">
								<?php the_content(); //本文 ?>
							</div>
						</div><!-- コピー禁止エリアここまで -->

						<?php get_template_part( 'st-kai-page' ); //改ページ ?>
						<?php get_template_part( 'st-ad-on' ); //広告 ?>

						<?php if (( is_active_sidebar( 6 ) ) && ( trim( $ikkatuwidgetset ) === '' )) { ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 6 ) ) : else : //固定ページ一括ウィジェット ?>
							<?php endif; ?>
						<?php } ?>

					</div>
					
					<?php if( is_front_page() ):
						get_template_part( 'sns-top' ); //トップ用ソーシャルボタン読み込み 
					else:
						get_template_part( 'sns' ); //ページ用ソーシャルボタン読み込み 
					endif; ?>

					<?php //任意のエントリ
						if( ( !is_front_page() && is_page() ) && ( isset($GLOBALS['stdata41']) && $GLOBALS['stdata41'] === 'yes' ) ){ //固定記事の場合
							if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
								get_template_part( 'popular-thumbnail-off' ); 
							}else{
								get_template_part( 'popular-thumbnail-on' ); 
							}
						}elseif( ( is_home() || is_front_page() ) && ( isset($GLOBALS['stdata59']) && $GLOBALS['stdata59'] === 'yes' ) ){ //トップ記事の場合
							if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
								get_template_part( 'popular-thumbnail-off' ); 
							}else{
								get_template_part( 'popular-thumbnail-on' ); 
							}
						}
					?>

					<?php get_template_part( 'st-childlink' ); //子ページへのリンク ?>

				<div class="blogbox <?php st_hidden_class(); ?>">
					<p><span class="kdate">
						<?php if ( get_the_date() != get_the_modified_date() ) : //更新がある場合 ?>
							<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'yes' ) : ?>
								投稿日：<?php echo esc_html( get_the_date() ); ?>
							<?php endif; ?>
							更新日：<time class="updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time>
						<?php else: //更新がない場合 ?>
							投稿日：<time class="updated" datetime="<?php echo esc_attr( get_the_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						<?php endif; ?>
					</span></p>
				</div>

						<?php st_author(); //著者リンク ?>

				<?php endwhile; else: ?>
					<p>記事がありません</p>
				<?php endif; ?>
				<!--ループ終了 -->

				<?php
				//コメント
				if ( ( $GLOBALS["stdata6"] ) === '' ) { ?>
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
				<?php } ?>


				<?php if (is_front_page() && !is_home() && !is_paged() && $GLOBALS["stdata92"] !== ''){ ?>
					<?php get_template_part( 'newpost-page' ); //最近のエントリ ?>
				<?php } ?>

			</div>
			<!--/post-->

			<?php if ( is_front_page() && is_active_sidebar( 13 ) ) { ?>
				<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 13 ) ) : else : //トップ下部のウィジェット ?>
				<?php endif; ?>
			<?php } ?>

			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
