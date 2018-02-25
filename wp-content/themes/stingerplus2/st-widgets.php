<?php
class Form_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'form_widget',
               __( '02_STINGER問合せボタン', 'default' ),
               array( 'description' => __( '問合せボタンを表示するウィジェットです。', 'default' ), ) 
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_form'] ) ) {
			if ( ! empty( $instance['st_title'] ) ) {
				$formname = $instance['st_title'];
			}else{
				$formname = 'Contact Form';
			}
			$formbtn = '<a class="st-formbtnlink" href="'.esc_url($instance['st_form']).'">
					<div class="st-formbtn">
						<div class="st-originalbtn-l"><span class="btnwebfont"><i class="fa fa-envelope" aria-hidden="true"></i></span></div>
						<div class="st-originalbtn-r"><span class="originalbtn-bold">'.esc_html($formname).'</span></div>
					</div>
				</a> ';
               echo apply_filters( 'widget_st_form', $formbtn );
          }
        echo $args['after_widget'];
     }

     public function form( $instance ) {
          $st_form = ! empty( $instance['st_form'] ) ? $instance['st_form'] : __( '', 'default' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'default' );
          ?>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'st_title' ); ?>" name="<?php echo $this->get_field_name( 'st_title' ); ?>" type="text" value="<?php echo esc_attr( $st_title ); ?>">
		</p>
          <p>
          <label for="<?php echo $this->get_field_id( 'st_form' ); ?>">url:</label> 
          <input class="widefat" id="<?php echo $this->get_field_id( 'st_form' ); ?>" name="<?php echo $this->get_field_name( 'st_form' ); ?>" type="text" value="<?php echo esc_attr( $st_form ); ?>">
          </p>
          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          $instance['st_form'] = ( ! empty( $new_instance['st_form'] ) ) ? strip_tags( $new_instance['st_form'] ) : '';
          $instance['st_title'] = ( ! empty( $new_instance['st_title'] ) ) ? strip_tags( $new_instance['st_title'] ) : '';
          return $instance;
     }

} 

function register_form_widget() {
    register_widget( 'Form_Widget' );
}
add_action( 'widgets_init', 'register_form_widget' );

//オリジナルボタンウィジェットを登録
class Form2_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'form2_widget', 
               __( '06_STINGERオリジナルボタン（ST-PRO）', 'default' ),
               array( 'description' => __( 'オリジナルボタンを表示するウィジェットです。', 'default' ), ) 
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_form'] ) ) {
			if ( ! empty( $instance['st_title'] ) ) {
				$formname = $instance['st_title'];
			}else{
				$formname = 'Contact Form2';
			}
			if ( ! empty( $instance['st_webfont'] ) ) {
				$st_webfont = $instance['st_webfont'];
			}else{ 
				$st_webfont = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>';
			}
					
			$formbtn = '<a class="st-originallink" href="'.esc_url($instance['st_form']).'">
					<div class="st-originalbtn">
						<div class="st-originalbtn-l"><span class="btnwebfont">'.$st_webfont.'</span></div>
						<div class="st-originalbtn-r"><span class="originalbtn-bold">'.esc_html($formname).'</span></div>
					</div>
				</a>';
               echo apply_filters( 'widget_st_form', $formbtn );
          }
        echo $args['after_widget'];
     }

     public function form( $instance ) {
          $st_form = ! empty( $instance['st_form'] ) ? $instance['st_form'] : __( '', 'default' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'default' );
	  $st_webfont = ! empty( $instance['st_webfont'] ) ? $instance['st_webfont'] : '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>';
          ?>
                    <p>
		<label for="<?php echo $this->get_field_id( 'st_webfont' ); ?>">Webフォント</label> 
     <select class="widefat" name="<?php echo $this->get_field_name( 'st_webfont' ); ?>" id="<?php echo $this->get_field_id( 'st_webfont' ); ?>">
          <option <?php if ( $st_webfont === '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'>メモ
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-trophy" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-trophy" aria-hidden="true"></i>'>トロフィー
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'>注意
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-map-marker" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-map-marker" aria-hidden="true"></i>'>マップ
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-download" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-download" aria-hidden="true"></i>'>ダウンロード
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-calendar" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-calendar" aria-hidden="true"></i>'>カレンダー
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-camera-retro" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-camera-retro" aria-hidden="true"></i>'>写真
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-video-camera" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-video-camera" aria-hidden="true"></i>'>ビデオ
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-comments" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-comments" aria-hidden="true"></i>'>コメント
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-user" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-user" aria-hidden="true"></i>'>人物
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-calculator" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-calculator" aria-hidden="true"></i>'>電卓
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-shopping-cart" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-shopping-cart" aria-hidden="true"></i>'>カート
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-gift" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-gift" aria-hidden="true"></i>'>プレゼント
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-file-text" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-file-text" aria-hidden="true"></i>'>ファイル
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-heart" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-heart" aria-hidden="true"></i>'>ハート
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-book" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-book" aria-hidden="true"></i>'>Book
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-twitter" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-twitter" aria-hidden="true"></i>'>Twitter
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-facebook-square" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-facebook-square" aria-hidden="true"></i>'>Facebook
          </option>
     </select>
     
		</p>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル</label> 
		<input disabled="disabled" class="widefat" id="" name="" type="text" value="">
		</p>
          <p>
          <label for="<?php echo $this->get_field_id( 'st_form' ); ?>">url:</label> 
          <input disabled="disabled" class="widefat" id="" name="" type="text" value="">
          </p>
          <?php 
     }

     public function update( $new_instance, $old_instance ) {
     }

} 

function register_form2_widget() {
    register_widget( 'Form2_Widget' );
}
add_action( 'widgets_init', 'register_form2_widget' );

class Sidemenu_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'sidemenu_widget', 
               __( '01_STINGERサイドバーメニュー', 'default' ), 
               array( 'description' => __( 'サイドメニューを表示します。項目や並び順は「カスタムメニュー」で設定して下さい', 'default' ), ) 
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div id="sidebg">';
			get_template_part( 'st-sidepage-link' );
	echo '</div>';
        echo $args['after_widget'];
     }

     public function sidemenu( $instance ) {

          ?>

          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_sidemenu_widget() {
    register_widget( 'Sidemenu_Widget' );
}
add_action( 'widgets_init', 'register_sidemenu_widget' );

class News_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'news_widget', 
               __( '03_STINGERフリーボックス', 'default' ), 
               array( 'description' => __( 'トピックス風の自由なボックスです。', 'default' ), ) 
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_body'] ) ) {
			if ( ! empty( $instance['st_title'] ) ) {
				$freetitle = '<p class="p-free"><span class="p-entry-f">'.$instance['st_title'].'</span></p>';
			}else{
				$freetitle = '';
			}
			$newsbox = '<div class="freebox">'.$freetitle.'<div class="free-inbox">'.nl2br($instance['st_body']).'</div></div>';
               echo apply_filters( 'widget_st_body', $newsbox );
          }
        echo $args['after_widget'];
     }

     public function form( $instance ) {
          $st_body = ! empty( $instance['st_body'] ) ? $instance['st_body'] : __( '', 'default' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'default' );
          ?>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル（※15文字まで）</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'st_title' ); ?>" name="<?php echo $this->get_field_name( 'st_title' ); ?>" type="text" value="<?php echo esc_attr( $st_title ); ?>">
		</p>

                  <p>
           <label for="<?php echo $this->get_field_id('st_body'); ?>">テキストエリア</label>
           <textarea  class="widefat" rows="16" colls="20" id="<?php echo $this->get_field_id('st_body'); ?>" name="<?php echo $this->get_field_name('st_body'); ?>"><?php echo $st_body; ?></textarea>
        </p>
          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          $instance['st_body'] = ( ! empty( $new_instance['st_body'] ) ) ? trim( $new_instance['st_body'] ) : '';
          $instance['st_title'] = ( ! empty( $new_instance['st_title'] ) ) ? strip_tags( $new_instance['st_title'],'<i>' ) : '';
          return $instance;
     }

} 

function register_news_widget() {
    register_widget( 'News_Widget' );
}
add_action( 'widgets_init', 'register_news_widget' );

class Rss_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'rss_widget',
               __( '04_STINGER_RSSボタン', 'default' ),
               array( 'description' => __( 'RSS配信用ボタンです', 'default' ), ) 
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div class="rssbox"><a href="';
	echo esc_url( home_url( '/' ) );
	echo '/?feed=rss2"><i class="fa fa-rss-square"></i>&nbsp;購読する</a></div>';
        echo $args['after_widget'];
     }

     public function rss( $instance ) {

          ?>

          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_rss_widget() {
    register_widget( 'Rss_Widget' );
}
add_action( 'widgets_init', 'register_rss_widget' );

class Newentry_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'newentry_widget', 
               __( '05_STINGER最新の投稿一覧', 'default' ),
               array( 'description' => __( '新着投稿一覧を表示します', 'default' ), )
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div class="newentrybox">';
	get_template_part( 'newpost' );
	echo '</div>';
        echo $args['after_widget'];
     }

     public function newentry( $instance ) {

          ?>

          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_newentry_widget() {
    register_widget( 'Newentry_Widget' );
}
add_action( 'widgets_init', 'register_newentry_widget' );

class Newsst_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'stnews_widget', 
               __( '07_STINGERお知らせエリア', 'default' ),
               array( 'description' => __( 'お知らせ一覧を表示します', 'default' ), )
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div id="newsin">';
			get_template_part( 'news-st-widgets' );
	echo '</div>';
        echo $args['after_widget'];
     }

     public function stnews( $instance ) {

          ?>

          <?php 
     }

     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_stnews_widget() {
    register_widget( 'Newsst_Widget' );
}
add_action( 'widgets_init', 'register_stnews_widget' );


class Custompost_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'custompostentry_widget', 
               __( '09_STINGERカスタム投稿一覧 （ST-PRO）', 'default' ), 
               array( 'description' => __( 'カスタム投稿一覧を表示します', 'default' ), )
          );
     }

     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div class="newentrybox">';
	echo '</div>';
        echo $args['after_widget'];
     }

} 

function register_custompostentry_widget() {
    register_widget( 'Custompost_Widget' );
}
add_action( 'widgets_init', 'register_custompostentry_widget' );

class Catbox_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'catbox_widget',
			__( '08_STINGERカテゴリ別ボックス（ST-PRO）', 'default' ), 
			array( 'description' => __( 'カテゴリ別に表示を分けるボックスです。※コンテンツ内', 'default' ), ) 
		);
	}

	protected function should_show( $args, $instance ) {
		$st_catid = isset( $instance['st_catid'] ) ? $instance['st_catid'] : '';

		if ( $instance['st_body'] === '' ) {
			return false;
		}

		$queried_object_id     = get_queried_object_id();
		$is_main_query         = is_main_query();
		$is_single             = is_single();
		$is_category           = $is_main_query && is_category();
		$is_home_or_front_page = $is_main_query &&
		                         ( get_the_ID() === $queried_object_id ) && ( is_home() || is_front_page() );

		if ( $is_home_or_front_page ) {
			return false;
		}

		if ( ! $is_single && ! $is_category ) {
			return false;
		}

		$st_catid = '';
		$st_catid = ( $st_catid !== '' ) ? $st_catid : '0';
		$cat_ids  = array_map( 'intval', explode( ',', $st_catid ) );

		if ( in_array( 0, $cat_ids, true ) ) {
			return true;
		}

		if ( $is_single && in_category( $cat_ids ) ) {
			return true;
		}

		if ( $is_category && in_array( $queried_object_id, $cat_ids, true ) ) {
			return true;
		}

		return false;
	}

	public function widget( $args, $instance ) {
		$st_body = isset( $instance['st_body'] ) ? $instance['st_body'] : '';

		if ( ! $this->should_show( $args, $instance ) ) {
			return;
		}

		$content = '<div></div>';

		echo $args['before_widget'];
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'st_catid' => '',
				'st_body'  => '',
			)
		);
		$st_catid = '';
		$st_body  = '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'st_catid' ); ?>">表示したいカテゴリID（複数の場合は半角カンマで区切る）</label>
			<input disabled="disabled" pattern="^[0-9,]+$" class="widefat" id="" name="" type="text" value="" style="ime-mode:disabled;">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'st_body' ); ?>">テキストエリア</label>
			<textarea disabled="disabled" class="widefat" rows="16" cols="20" id="" name=""></textarea>
		</p>
		<?php
	}

}

if ( !function_exists( 'register_catbox_widget' ) ) {
	function register_catbox_widget() {
		register_widget( 'Catbox_Widget' );
	}
}
add_action( 'widgets_init', 'register_catbox_widget' );

class Singlebox_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'singlebox_widget', 
			__( '10_STINGER記事別ボックス （ST-PRO）', 'default' ), 
			array( 'description' => __( '記事別に表示を分けるボックスです。', 'default' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		$st_post_id = isset( $instance['st_post_id'] ) ? $instance['st_post_id'] : '';
		$st_body    = isset( $instance['st_body'] ) ? $instance['st_body'] : '';

		$queried_object_id     = get_queried_object_id();
		$is_home_or_front_page = is_main_query() && ( get_the_ID() === $queried_object_id ) &&
		                         ( is_home() || is_front_page() );

		if ( $instance['st_body'] === '' || $is_home_or_front_page || ( ! is_single() && ! is_page() ) ) {
			return;
		}

		$st_post_id = '';
		$st_post_id = ( $st_post_id !== '' ) ? $st_post_id : '0';

		$post_ids = array_map( 'intval', explode( ',', $st_post_id ) );

		if ( ! in_array( 0, $post_ids, true ) && ! in_array( $queried_object_id, $post_ids, true ) ) {
			return;
		}

		$content = '<div></div>';

		echo $args['before_widget'];
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$instance   = wp_parse_args(
			(array) $instance,
			array(
				'st_post_id' => '',
				'st_body'    => '',
			)
		);
		$st_post_id = '';
		$st_body    = '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'st_post_id' ); ?>">表示したい記事ID（複数の場合は半角カンマで区切る）</label>
			<input disabled="disabled" pattern="^[0-9,]+$" class="widefat" id="" name="" type="text" value="" style="ime-mode:disabled;">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'st_body' ); ?>">テキストエリア</label>
			<textarea disabled="disabled" class="widefat" rows="16" cols="20" id="" name=""></textarea>
		</p>
		<?php
	}

}

if ( ! function_exists( 'register_singlebox_widget' ) ) {
	function register_singlebox_widget() {
		register_widget( 'Singlebox_Widget' );
	}
}
add_action( 'widgets_init', 'register_singlebox_widget' );


if ( ! function_exists( 'st_widget_is_active_sidebar' ) ) {

	function st_widget_is_active_sidebar( $is_active_sidebar, $index ) {
		global $wp_registered_sidebars, $wp_registered_widgets, $sidebars_widgets;

		if ( empty( $wp_registered_sidebars[ $index ] ) || empty( $sidebars_widgets[ $index ] ) || ! is_array( $sidebars_widgets[ $index ] ) ) {
			return $is_active_sidebar;
		}

		$sidebar = $wp_registered_sidebars[ $index ];

		ob_start();

		foreach ( (array) $sidebars_widgets[ $index ] as $id ) {
			if ( ! isset( $wp_registered_widgets[ $id ] ) ) {
				continue;
			}

			$params = array_merge(
				array(
					array_merge(
						$sidebar,
						array( 'widget_id' => $id, 'widget_name' => $wp_registered_widgets[ $id ]['name'] )
					),
				),
				(array) $wp_registered_widgets[ $id ]['params']
			);

			$classname_ = '';

			foreach ( (array) $wp_registered_widgets[ $id ]['classname'] as $cn ) {
				if ( is_string( $cn ) ) {
					$classname_ .= '_' . $cn;
				} elseif ( is_object( $cn ) ) {
					$classname_ .= '_' . get_class( $cn );
				}
			}

			$classname_                 = ltrim( $classname_, '_' );
			$params[0]['before_widget'] = sprintf( $params[0]['before_widget'], $id, $classname_ );
			$params                     = apply_filters( 'dynamic_sidebar_params', $params );
			$callback                   = $wp_registered_widgets[ $id ]['callback'];

			if ( is_callable( $callback ) ) {
				call_user_func_array( $callback, $params );
			}
		}

		$content = trim( ob_get_clean() );

		return ( $content !== '' );
	}
}
add_filter( 'is_active_sidebar', 'st_widget_is_active_sidebar', 10, 2 );

add_filter( 'widget_st_body', 'do_shortcode' );
