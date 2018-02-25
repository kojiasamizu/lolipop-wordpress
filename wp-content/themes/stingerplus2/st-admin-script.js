(function (window, document, $, undefined) {
	'use strict';

	function isWidgetScreen($body) {
		var _$body = $body || $('bddy');

		return (_$body.hasClass('widgets-php'));
	}

	function isCustomizer($body) {
		var _$body = $body || $('bddy');

		return (_$body.hasClass('wp-customizer'));
	}

	function stopPropagation(event) {
		event.stopPropagation();
	}

	function wait(criteria) {
		var timer = null;
		var $deferred = $.Deferred();

		(function poll(interval) {
			clearTimeout(timer);

			if (criteria($deferred.resolve, $deferred.reject)) {
				return;
			}

			timer = setTimeout(function () {
				poll(interval)
			}, interval);
		}(500));

		return $deferred.promise();
	}

	function getProMarkHtml() {
		return '<span class="pro-only"><a href="//on-store.net/" target="_blank" rel="nofollow">PRO</a></span>';
	}

	function replaceWidgetTitle($title) {
		var title = $title.html();
		var pro = getProMarkHtml();

		return $title.html(title.replace(/（ST-PRO）/g, pro));
	}

	function replaceWidgetTitles($titles) {
		$titles.each(function () {
			replaceWidgetTitle($(this));
		});

		$titles.find('span.pro-only a').off('click', stopPropagation)
			.on('click', stopPropagation);
	}

	// ウィジェット

	function untilWidgetsChooserRendered(resolve, reject) {
		var $chooser = $('.widgets-chooser');

		if ($chooser.length) {
			resolve($chooser);

			return true;
		}

		return false;
	}

	function initializeWidgetScreen() {
		var $description;
		var $availableWidgets = $('#available-widgets');

		// 説明
		$description = $('<p />', {'class': 'description'})
			.html('※<span class="pro-only"><a href="//on-store.net/" target="_blank" rel="nofollow">PRO</a></span>マークの付いた機能は<a href="//on-store.net/" target="_blank" rel="nofollow">PRO版</a>限定となります');

		$availableWidgets.find('.sidebar-description').append($description);

		// [PRO]
		replaceWidgetTitles($('#widgets-right .sidebar-name h2, #wpbody .widget-title h3, #wpbody .widget-title h4'));

		$availableWidgets.find('.widget-title h3').on('click', function () {
			wait(untilWidgetsChooserRendered)
				.then(function ($chooser) {
					replaceWidgetTitles($chooser.find('.widgets-chooser-sidebars li'));
				});
		});
	}

	// カスタマイザー: ウィジェット

	function untilWidgetTemplatesAreRendered() {
		var selector = '[id^="sub-accordion-section-sidebar-widgets-sidebar-"].open .widget-title h3';

		return function (resolve, reject) {
			var $titles = $(selector);

			if ($titles.length) {
				resolve($titles);

				return true;
			}

			return false;
		};
	}

	function untilWidgetIsAppended() {
		var selector = '[id^="sub-accordion-section-sidebar-widgets-sidebar-"].open .widget-title h3';
		var currentTitles = $(selector);

		return function (resolve, reject) {
			var $titles = $(selector);

			if ($titles.length > currentTitles.length) {
				resolve($titles);

				return true;
			}

			return false;
		};
	}

	function initializeWidget() {
		// タイトル
		$('[id^="accordion-section-sidebar-widgets-sidebar-"] .accordion-section-title,' +
			'.widget-tpl .widget-title h3').each(function () {
			var $title = $(this);

			replaceWidgetTitle($title);

			$title.find('span.pro-only a').on('click', stopPropagation);
		});

		// セクション
		$('[id^="sub-accordion-section-sidebar-widgets-sidebar-"] .customize-section-title').each(function () {
			var $title = $(this);
			var $h = $title.find('h3');
			var $action = $title.find('.customize-action');

			replaceWidgetTitle($h);

			$action.find('span.pro-only a').on('click', stopPropagation);
		});

		// メニュー
		$('[id^="accordion-section-sidebar-widgets-sidebar-"] .accordion-section-title').on('click', function () {
			var $section = $(this).parent('[id^="accordion-section-sidebar-widgets-sidebar-"]');
			var subSectionId = 'sub-' + $section.attr('id');

			// サイドバー
			wait(untilWidgetTemplatesAreRendered())
				.then(replaceWidgetTitles);

			// セクションタイトル
			wait(function (resolve, reject) {
				var $action = $('#' + subSectionId + ' .customize-section-title .customize-action');

				if ($action.length) {
					resolve($action);

					return true;
				}

				return false;
			})
				.then(function ($action) {
					var $pro = $('#' + subSectionId + ' .customize-section-title h3 span.pro-only');

					if ($pro.length) {
						$action.append($pro.clone());
						$pro.remove();
					}
				});
		});

		// ウィジェットテンプレート
		$('.widget-tpl').on('click', function () {
			wait(untilWidgetIsAppended())
				.then(replaceWidgetTitles);
		});
	}

	// カスタマイザー: その他

	function appendProMarkTo($element) {
		var $pro = $(getProMarkHtml());

		$element.append($pro);
	}

	function getProFeatureSectionIds() {
		// [PRO] マークを付けるセクションの ID
		//
		// $wp_customize->add_section( 'stmenus', array() );
		// の場合は `stmenus`
		return [
			''
		];
	}

	function getProFeatureTitleIds() {
		// [PRO] マークを付けるタイトルの ID
		//
		// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor', array() ) );
		// や
		// $wp_customize->add_control( 'st_menu_navbarcolor', array() );
		// の場合は `st_menu_navbarcolor`
		return [
			'st_kaiwa_bgcolor',
			'st_formbtn2_textcolor',
			'st_header_bgcolor',
			'st_menu_sumart_st_color',
			'st_menu_sumart_st2_color'
		];
	}

	function getProFeatureIds() {
		// [PRO] マークを付けるコントロールの ID
		//
		// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor', array() ) );
		// や
		// $wp_customize->add_control( 'st_menu_navbarcolor', array() );
		// の場合は `st_menu_navbarcolor`
		return [
			'st_header_bgcolor',
			'topga_Image',
			'st_menu100',
			'st_topgabg_image_sumahoonly',
			'st_line100',
			'st_header100',
			'headerunder_Image',
			'st_footer100',
			'footer_Image',
			'sidebg_Image',
			'headermenu_Image',
			'sidemenu_Image',
			'st_sticky_menu',
			'title_Image',
			'h2_Image',
			'h3_Image',
			'h4_Image',
			'h5_Image',
			'footer_logo',
			'st_headerimg100',
			'st_header_sc',
			'st_slide_btn'
		];
	}

	function initializeControls() {
		var sectionIds = getProFeatureSectionIds();
		var titleIds = getProFeatureTitleIds();
		var controlIds = getProFeatureIds();

		// セクション
		sectionIds.forEach(function (id) {
			var $section = $('#accordion-section-' + id + ' .accordion-section-title, ' +
				'#sub-accordion-section-' + id + ' .customize-section-title .customize-action');

			if ($section.length) {
				appendProMarkTo($section);

				$section.find('span.pro-only a').on('click', stopPropagation);
			}
		});

		// タイトル
		titleIds.forEach(function (id) {
			var $control = $('#customize-control-' + id);

			if ($control.has('.customize-control-title').length) {
				appendProMarkTo($control.find('.customize-control-title'));
			}
		});

		// コントロール
		controlIds.forEach(function (id) {
			var $control = $('#customize-control-' + id);

			// 説明 or ラベル
			if ($control.has('.customize-control-description').length) {
				appendProMarkTo($control.find('.customize-control-description'));
			} else if ($control.has('label').length) {
				appendProMarkTo($control.find('label'));
			}

			// フォームコントロール
			if ($control.has('input, textarea, select, button').length) {
				$control.find('input, textarea, select, button').prop('disabled', true);
			}

			// カラーピッカー
			if ($control.has('.wp-color-result').length) {
				$control.find('.wp-color-result').off('click')
					.parent('.wp-picker-container').addClass('disabled');
			}
		});
	}

	// 全般

	function initializeCustomizer() {
		initializeControls();
		initializeWidget();
	}

	$(function () {
		$(window).on('load', function () {
			var $body = $('body');

			switch (true) {
				case isWidgetScreen($body):
					initializeWidgetScreen();

					break;

				case isCustomizer($body):
					initializeCustomizer();

					break;
			}
		});
	});
}(window, window.document, jQuery));
