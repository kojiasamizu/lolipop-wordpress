<div class="kanren kanren-02 <?php st_marugazou_class(); //サムネイルを丸くする ?>">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<dl class="clearfix">
			<dt><a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php else: // サムネイルを持っていないときの処理 ?>
						<?php if(trim($GLOBALS['stdata97']) !== ''){ ?>
							<img src="<?php echo esc_url( ($GLOBALS['stdata97']) ); ?>" alt="no image" title="no image" width="100" height="100" />
						<?php }else{ ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
						<?php } ?>
					<?php endif; ?>
				</a></dt>
			<dd>
				<?php get_template_part( 'st-single-category' ); //カテゴリー ?>
				<i class="fa fa-clock-o"></i>
						<?php the_time( 'Y/m/d' ); ?><br/>
				<h3><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a></h3>

				<div class="blog_info <?php st_hidden_class(); ?>">
					<p>
						&nbsp;<span class="pcone">
							<i class="fa fa-folder-open-o" aria-hidden="true"></i>-<?php the_category( ' ' ) ?><br/>
							<!--<?php the_tags( '<i class="fa fa-tags"></i>&nbsp;', ', ' ); ?>-->
          </span></p>
				</div>

				<?php if( !st_is_mobile() && trim( $GLOBALS['stdata202'] ) === '' )://モバイル以外の場合のみ表示 ?>
					<div class="smanone">
						<!--<?php the_excerpt(); //抜粋文 ?>-->
					</div>
				<?php endif; ?>

			</dd>
		</dl>
	<?php endwhile;
	else: ?>
		<p>記事がありません</p>
	<?php endif; ?>
</div>
