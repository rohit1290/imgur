define(['require', 'jquery', 'elgg'], function(require, $, elgg) {
	$('a#imgur').on('click', function(e) {
		e.preventDefault();
		$('input[name=imgur]').click();
	});
	$('input[name=imgur]').liteUploader({
		script: elgg.normalize_url('ajax/view/imgur/upload')
	})
	.on('lu:before', function (e, files) {
		elgg.system_message('Uploading...');
	})
	.on('lu:success', function (e, response) {
		var response = $.parseJSON(response);
		elgg.system_message('Image uploaded!');
		$('form').find('.cke_wysiwyg_frame').contents().find('body').append('<img src="'+response.url+'" />');
	});
});