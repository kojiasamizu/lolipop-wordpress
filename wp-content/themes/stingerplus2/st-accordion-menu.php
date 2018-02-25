<?php
if(st_is_mobile() || trim($GLOBALS['stdata16']) === ''){ //PCで切り替え表示にチェックがある場合は表示しない
	if ( trim( $GLOBALS["stdata80"] ) === '' ) {
	?>
		<nav id="s-navi" class="pcnone">
			<dl class="acordion">
				<dt class="trigger">
					<p><span class="op"><i class="fa fa-bars"></i></span></p>

				</dt>

				<dd class="acordion_tree">


					<?php
					if ( has_nav_menu( 'smartphone-menu' ) ) : 
						$defaults = array(
							'theme_location' => 'smartphone-menu',
						);
					else : 
						$defaults = array(
							'theme_location' => 'primary-menu',
						);
					endif;?>
					<?php wp_nav_menu( $defaults ); ?>
					<div class="clear"></div>

				</dd>
			</dl>
		</nav>
	<?php
	}
}

