<div class="kanren">
	<?php
	if ( trim( $GLOBALS["stdata93"] ) !== '' ) {
		$newentrypost_no = $GLOBALS["stdata93"];
	} else {
		$newentrypost_no = 5;
	}
	$args = array(
		'posts_per_page' => $newentrypost_no,
	);
	$st_query = new WP_Query( $args );
	?>
	<?php if ( $st_query->have_posts() ): ?>
		<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
			
		<div class="no-thumbitiran">
			<?php get_template_part( 'st-single-category' ); //カテゴリー ?>
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<div class="blog_info <?php st_hidden_class(); ?>">
					<p><i class="fa fa-clock-o"></i>
						<?php the_time( 'Y/m/d' ); ?>
						&nbsp;<span class="pcone">
							<i class="fa fa-folder-open-o" aria-hidden="true"></i>-<?php the_category( ', ' ) ?><br/>
							<?php the_tags( '<i class="fa fa-tags"></i>&nbsp;', ', ' ); ?>
          </span></p>
				</div>

				<?php if( !st_is_mobile() && trim( $GLOBALS['stdata202'] ) === '' )://モバイル以外の場合のみ表示 ?>
					<div class="smanone">
						<?php the_excerpt(); //抜粋文 ?>
					</div>
				<?php endif; ?>

		</div>

		<?php endwhile; ?>
	<?php else: ?>
		<p>新しい記事はありません</p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>