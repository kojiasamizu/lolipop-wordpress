(function (window, document, $, undefined) {
	'use strict';

	var $accordion = $("#s-navi dl.acordion");
	var $accordionTree = $accordion.find('.acordion_tree');
	var acHeight = $accordion.height();
	var stPosition = 0;

	$(window).scroll(function () {
		var currentPosition = $(this).scrollTop();

		if (currentPosition > stPosition) {
			if ($(window).scrollTop() >= 200) {
				$accordion.css('top', (acHeight * -1) + 'px');
				$accordionTree.css('max-height', '100vh');
			}
		} else {
			$accordion.css('top', 0);
			$accordionTree.css('max-height', 'calc(100vh - ' + acHeight + 'px)');
		}

		stPosition = currentPosition;
	});
}(window, window.document, jQuery));
