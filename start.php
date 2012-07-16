<?php
/**
 *	Elgg ShortURL plugin
 *	Author : Jaffer C K | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Mail : info at webgalli dot com
 *	Web	: http://webgalli.com 
 *	Skype : 'team.webgalli'
 *	@package galliShortUrl
 * 	Plugin info : Provides a short URL input for Elgg.
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */
elgg_register_event_handler('init', 'system', 'galliShortUrl_init');

function galliShortUrl_init() {
	elgg_extend_view('js/elgg', 'galliShortUrl/js');
    elgg_register_ajax_view('galliShortUrl/short');	
}
/**
* To know about this function see
* http://www.webgalli.com/blog/easily-create-short-urls-with-php-curl-and-goo-gl-or-bit-ly/
*/
function goo_gl_short_url($longUrl) {
	$GoogleApiKey = elgg_get_plugin_setting('googleApiKey', 'galliShortUrl');
	$postData = array('longUrl' => $longUrl, 'key' => $GoogleApiKey);
	$jsonData = json_encode($postData);
	$curlObj = curl_init();
	curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
	curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curlObj, CURLOPT_HEADER, 0);
	curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
	curl_setopt($curlObj, CURLOPT_POST, 1);
	curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
	$response = curl_exec($curlObj);
	$json = json_decode($response);
	curl_close($curlObj);
	return $json->id;
}
?>