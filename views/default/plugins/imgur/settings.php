<?php
/**
 * Demyx
 *
 * @package Demyx
 */

$client_id = elgg_get_plugin_setting('client_id', 'imgur');

?>

<p>
	<label>Client ID</label>
	<input type="text" name="params[client_id]" value="<?php echo $client_id ?>"></input>
</p>

<p>
	Please get your key here: <a href="https://api.imgur.com/oauth2/addclient" target="_blank">Imgur Key</a>
</p>