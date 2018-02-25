<!-- フッターのメインコンテンツ -->
	<h3 class="footerlogo">
	<!-- ロゴ又はブログ名 -->
	<?php if ( !is_home() || !is_front_page() ) { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php } ?>

			<?php if  ( get_option( 'st_logo_image' ) && (st_headerfooter_logo()) ): //ヘッダーロゴ画像があり併用する時 ?>
				<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
			<?php else: //ロゴ画像が無い時 ?>
				<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
			<?php endif; ?>

	<?php if ( !is_home() || !is_front_page() ) { ?>
		</a>
	<?php } ?>
	</h3>

	<p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
	</p>
		<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>