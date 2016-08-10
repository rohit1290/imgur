<?php
/**
 * Imgur
 *
 * @package Demyx
 * @author Cim
 */

elgg_register_event_handler('init','system','imgur_init');

function imgur_init() {
	// Register the ajax view
	elgg_register_ajax_view('imgur/upload');

	// Register the longtext menu and upload input if there's a client id and if CKeditor is running
	$client_id = elgg_get_plugin_setting('client_id', 'imgur');
	if ($client_id) {
		elgg_register_plugin_hook_handler('register', 'menu:longtext', 'imgur_longtext_menu');
		// Deploy hidden imgur upload input
		elgg_extend_view('input/longtext', 'imgur/init');
	}
}

function imgur_longtext_menu($hook, $type, $items, $vars) {
	$items[] = ElggMenuItem::factory(array(
		'name' => 'imgur',
		'id' => 'imgur',
		'link_class' => 'elgg-longtext-control',
		'href' => '#',
		'text' => 'Upload Image',
	));

	return $items;
}