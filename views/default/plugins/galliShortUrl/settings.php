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
echo '<div>';
echo elgg_echo('galliShortUrl:Apikey');
echo ' ';
echo elgg_view('input/text', array(
	'name' => 'params[googleApiKey]',
	'value' => $vars['entity']->googleApiKey,
));
echo '</div>';
