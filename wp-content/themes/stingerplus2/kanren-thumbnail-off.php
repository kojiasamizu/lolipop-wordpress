<div class="kanren">
	<?php
	$categories = get_the_category( $post->ID );
	$category_ID = array();
	foreach ( $categories as $category ):
		array_push( $category_ID, $category->cat_ID );
	endforeach;
	$args = array(
		'post__not_in' => array( $post->ID ),
		'posts_per_page' => 5,
		'category__in' => $category_ID,
		'orderby' => 'rand',
	);
	$st_query = new WP_Query( $args ); ?>
	<?php
	if ( $st_query->have_posts() ): ?>
		<?php
		while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
			
		<div class="no-thumbitiran">
			<?php get_template_part( 'st-single-category' ); //カテゴリー ?>
			<h5 class="kanren-t"><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			</a></h5>

			<?php if( !st_is_mobile() && trim( $GLOBALS['stdata202'] ) === '' )://モバイル以外の場合のみ表示 ?>
				<div class="smanone">
					<?php the_excerpt(); //抜粋文 ?>
				</div>
			<?php endif; ?>

		</div>

		<?php endwhile; ?>
	<?php else: ?>
		<p>関連記事はありませんでした</p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>