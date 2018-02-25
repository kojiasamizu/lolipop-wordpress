<?php //ページ改
		$defaults = array(
		'before'           => '<p class="tuzukicenter"><span class="tuzuki">' . __( '', 'default' ),
		'after'            => '</span></p>',
		'link_before'      => '&gt;&ensp;',
		'link_after'       => '&ensp;',
		'next_or_number'   => 'next',
		'separator'        => ' ',
		'nextpagelink'     => __( '続きを読む', 'default' ),
		'previouspagelink' => __( '前のページへ', 'default' ),
		'pagelink'         => '%',
		'echo'             => 1
		);
		wp_link_pages( $defaults );