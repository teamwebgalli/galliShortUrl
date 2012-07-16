<?php
echo '<div>';
echo elgg_echo('galliShortUrl:Apikey');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[googleApiKey]',
	'value' => $vars['entity']->googleApiKey,
));
echo '</div>';
