<?php
if ( trim( $GLOBALS["stdata78"] ) !== '' && $GLOBALS["stdata78"] === 'allopacity' ) { ?>
	<script>
	jQuery(function(){
		jQuery('img').css("opacity",".0");
		jQuery(window).scroll(function (){
			jQuery('img').each(function(){
				var imgPos = jQuery(this).offset().top;    
				var scroll = jQuery(window).scrollTop();
				var windowHeight = jQuery(window).height();
				if (scroll > imgPos - windowHeight + 100){
					jQuery(this).animate({ 
						"opacity": "1"
						}, 1000);
					}
				});
			});
	});
	</script>
<?php
} elseif ( trim( $GLOBALS["stdata78"] ) !== '' && $GLOBALS["stdata78"] === 'postopacity' ) { ?>
	<script>
	jQuery(function(){
		jQuery('.post img').css("opacity",".0");
		jQuery(window).scroll(function (){
			jQuery('.post img').each(function(){
				var imgPos = jQuery(this).offset().top;    
				var scroll = jQuery(window).scrollTop();
				var windowHeight = jQuery(window).height();
				if (scroll > imgPos - windowHeight + 100){
					jQuery(this).animate({ 
						"opacity": "1"
						}, 1000);
					}
				});
			});
	});
	</script>
<?php 
}else{ 
}
?>

<?php
if ( trim( $GLOBALS["stdata79"] ) !== '' && $GLOBALS["stdata79"] === 'yes' ) { ?>
	<script>
		jQuery(function(){
		jQuery(".post .entry-title").css("opacity",".0").animate({ 
				"opacity": "1"
				}, 2500);;
		});


	</script>
<?php 
}
?>

<?php
if ( trim( $GLOBALS["stdata108"] ) !== '' && $GLOBALS["stdata108"] === 'yes' ) { ?>
	<script>
		jQuery(function(){
		jQuery('.entry-content a[href^=http]')
			.not('[href*="'+location.hostname+'"]')
　		　　　.attr({target:"_blank"})
　		　;}) 
	</script>
<?php 
}
?>
