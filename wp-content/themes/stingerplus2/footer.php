</div><!-- /contentw -->
<footer>
<div id="footer">
<div id="footer-in">
<?php get_template_part( 'st-footer-link' ); //フッターリンク ?>

<?php if ( is_active_sidebar( 11 ) ) { //フッターウィジェットがある場合 ?>
	<div class="footer-wbox clearfix">

		<div class="footer-r">
			<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 11 ) ) : else : //フッターウィジェット ?>
			<?php endif; ?>
		</div>
		<div class="footer-l">
			<?php get_template_part( 'st-footer-content' ); //フッターのメインコンテンツ ?>
		</div>
	</div>
<?php }else{ ?>
	<?php get_template_part( 'st-footer-content' ); //フッターのメインコンテンツ ?>
<?php } ?>
</div>
</div>
</footer>
</div>
<!-- /#wrapperin -->
</div>
<!-- /#wrapper -->
</div><!-- /#st-ami -->
<?php if( (!st_is_mobile()) && (trim($GLOBALS['stdata110']) !== '') && (trim($GLOBALS['stdata111']) !== '') ): //動画用ID ?>
	</div>
<?php endif; ?>
<?php if ( st_is_mobile() && is_active_sidebar( 18 ) ) { ?>
	<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 18 ) ) : else : //スマホ用フッター固定広告ウィジェット ?>
	<?php endif; ?>
<?php } ?>
<?php wp_footer(); ?>
</body></html>
