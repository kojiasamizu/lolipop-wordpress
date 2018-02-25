<div class="kanren <?php st_marugazou_class(); //サムネイルを丸くする ?>">
	<?php
	if ( trim( $GLOBALS["stdata67"] ) !== '' ) {
		$newentrypost_no = $GLOBALS["stdata67"];
	} else {
		$newentrypost_no = 5;
	}

	if ( trim( $GLOBALS["stdata99"] ) !== '' ) {
		$category_ID = esc_attr( $GLOBALS["stdata99"] );
	} else {
		$category_ID = 0 ;
	}

	$args = array(
		'posts_per_page' => $newentrypost_no,
		'cat' => array($category_ID)
	);
	$st_query = new WP_Query( $args );
	?>
	<?php if ( $st_query->have_posts() ): ?>
		<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
			<dl class="clearfix">
				<dt><a href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
							<?php the_post_thumbnail( 'thumbnail' ); ?>
						<?php else: // サムネイルを持っていないときの処理 ?>
							<?php if( trim($GLOBALS['stdata97']) !== '' ){ ?>
								<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" width="100" height="100" />
							<?php }else{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
							<?php } ?>
						<?php endif; ?>
					</a></dt>
				<dd>
					<?php get_template_part( 'st-single-category' ); //カテゴリー ?>
					<div class="blog_info <?php st_hidden_class(); ?>">
						<p><?php the_time( 'Y/m/d' ); ?></p>
					</div>
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					<?php if( !st_is_mobile() && trim( $GLOBALS['stdata202'] ) === '' )://モバイル以外の場合のみ表示 ?>
						<div class="smanone">
							<?php the_excerpt(); //抜粋文 ?>
						</div>
					<?php endif; ?>

				</dd>
			</dl>
		<?php endwhile; ?>
	<?php else: ?>
		<p>新しい記事はありません</p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>