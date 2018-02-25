<div class="kanren">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="no-thumbitiran">
			<?php get_template_part( 'st-single-category' ); //カテゴリー ?>
			<h3><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			</a></h3>

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

	<?php endwhile;
	else: ?>
		<p>記事がありません</p>
	<?php endif; ?>
</div>
