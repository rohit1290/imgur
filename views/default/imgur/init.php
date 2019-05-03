<?php
/**
 * Demyx
 *
 * @package Demyx
 */

elgg_register_js('liteuploader', 'mod/imgur/vendor/liteuploader.js');
elgg_load_js('liteuploader');

if (elgg_is_active_plugin ('ckeditor')) {
	elgg_require_js('js/imgur/ckeditor');
}
if (elgg_is_active_plugin ('extended_tinymce')) {
	elgg_require_js('js/imgur/tinymce');
}

echo '<input name="imgur" type="file" accept="image/*" style="display: none"></input>';