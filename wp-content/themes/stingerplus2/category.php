<?php get_header(); ?>

<div id="content" class="clearfix">
    <div id="contentInner">
        <main>
            <article>
					<!--ぱんくず -->
					<div id="breadcrumb">
					<ol itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo home_url(); ?>" itemprop="item"><span itemprop="name"><?php echo esc_html( $GLOBALS["stdata141"] ); ?></span></a> > <meta itemprop="position" content="1" /></li>
					<?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
					<?php
					$catid = get_query_var('cat');
					if( !$catid ){
					$cat_now = get_the_category();
					$cat_now = $cat_now[0];
					$catid  = $cat_now->cat_ID;
					}
					?>
					<?php $allcats = array( $catid ); ?>
					<?php
					while ( !$catid == 0 ) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
						$mycat = get_category( $catid );    /* カテゴリーIDをセット */
						$catid = $mycat->parent;    /* 上で取得したカテゴリーIDの親カテゴリーをセット */
						array_push( $allcats, $catid );
					}
					array_pop( $allcats );
					$allcats = array_reverse( $allcats );
					?>
					<?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
					<?php 
					$i = 2;
					foreach ( $allcats as $catid ): ?>
							<li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( get_category_link( $catid ) ); ?>" itemprop="item">
								<span itemprop="name"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt; 
								<meta itemprop="position" content="<?php echo $i; ?>" />
							</li>
					<?php  $i++; ?>
					<?php endforeach; ?>
					</ol>
					</div>
					<!--/ ぱんくず -->
                <?php
		$now_category = get_query_var('cat'); //現在のカテゴリIDを取得
		$args = array(
                'include' => array($now_category),
		);
		$tag_all = get_terms("category", $args);
		$cat_data = get_option('cat_'.$now_category);
   
		if(trim($cat_data['listdelete']) === ''){
                     //一覧を表示する場合　?>
                        <div class="post">
                        <?php if(trim($cat_data['st_cattitle']) !== ''){ ?>
                            <h1 class="entry-title"><?php echo esc_html($cat_data['st_cattitle']) ?></h1>
                        <?php }else{ ?>
                            <h1 class="entry-title">「<?php single_cat_title(); ?>」 一覧</h1>
                        <?php } ?>

			<?php if(!is_paged()){ ?>
				<div id="nocopy" <?php st_text_copyck(); ?>>
					<?php echo apply_filters('the_content',category_description()); //コンテンツを表示 ?>
				</div>
				<?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?>
			<?php } ?>

			<?php if( (trim($cat_data['snscat']) !== '') && (category_description())){ //コンテンツがある場合 ?>
				<?php get_template_part( 'sns-cat' ); //ソーシャルボタン読み込み ?>
			<?php } ?>

                        </div><!-- /post -->


			<?php if( category_description() && (!is_paged()) ){ //コンテンツがある場合 ?>
				<div class="cat-itiran">
					<p class="point"><span class="point-in">カテゴリ一覧</span></p>
			<?php } ?>

                        		<?php get_template_part( 'itiran' ); //投稿一覧読み込み ?>
                       			<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>

			<?php if( category_description() && (!is_paged()) ){ //コンテンツがある場合 ?>
				</div>
			<?php } ?>

		<?php }else{ //一覧を表示しない ?>

                        <div class="post">
                        <?php if(trim($cat_data['st_cattitle']) !== ''){ ?>
                            <h1 class="entry-title"><?php echo esc_html($cat_data['st_cattitle']) ?></h1>
                        <?php }else{ ?>
                            <h1 class="entry-title">「<?php single_cat_title(); ?>」 一覧</h1>
                        <?php } ?>
                      
			<div id="nocopy" <?php st_text_copyck(); ?>>
				<?php echo apply_filters('the_content',category_description()); //コンテンツを表示 ?>
			</div>
			<?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?>

			<?php if(trim($cat_data['snscat']) !== '' && (category_description())){ //コンテンツがある場合 ?>
				<?php get_template_part( 'sns-cat' ); //ソーシャルボタン読み込み ?>
			<?php } ?>

                        </div><!-- /post -->
		<?php } ?>

		<?php if((trim($cat_data['snscat']) !== '') && (!category_description())){ //コンテンツがない場合 ?>
			<?php get_template_part( 'sns-cat' ); //ソーシャルボタン読み込み ?>
		<?php } ?>

            </article>
        </main>
    </div>
    <!-- /#contentInner -->
    <?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
