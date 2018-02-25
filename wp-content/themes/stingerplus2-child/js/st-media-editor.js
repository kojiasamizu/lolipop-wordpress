;(function (window, document, $, wp, undefined) {
	'use strict';

	if (typeof wp === 'undefined' || !wp.media || !wp.media.editor) {
		return;
	}

	/**
	 * @param {jQuery} $button
	 *
	 * @returns {jQuery}
	 */
	function get$Target($button) {
		var target  = $button.attr('data-st-media-target');
		var $target = $('[name="' + target.replace(/[ !"#$%&'()*+,.\/:;<=>?@\[\\\]^`{|}~]/g, '\\$&') + '"]');

		return $target;
	}

	/**
	 * @param {jQuery} $button
	 */
	function handleEditorButton($button) {
		var $target = get$Target($button);

		wp.media.editor.send.attachment = function (props, attachment) {
			if (!$target.length) {
				return;
			}

			$target.val(attachment.url);
		};

		wp.media.editor.open($button);
	}

	/**
	 * @param {jQuery} $button
	 */
	function handleResetButton($button) {
		var $target = get$Target($button);

		if (!$target.length) {
			return;
		}

		$target.val('');
	}

	/**
	 * @param {jQuery} $button
	 */
	function initializeEditorButton($button) {
		$button.on('click', function (event) {
			event.preventDefault();
			event.stopPropagation();

			handleEditorButton($button);
		});
	}

	/**
	 * @param {jQuery} $button
	 */
	function initializeResetButton($button) {
		$button.on('click', function (event) {
			event.preventDefault();
			event.stopPropagation();

			handleResetButton($button);
		});
	}

	function onReady() {
		$('[data-st-media-editor-button]').each(function () {
			initializeEditorButton($(this));
		});

		$('[data-st-media-reset-button]').each(function () {
			initializeResetButton($(this));
		});
	}

	$(onReady);
}(window, window.document, jQuery, wp));
