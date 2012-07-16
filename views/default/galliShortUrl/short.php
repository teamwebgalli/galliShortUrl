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
	$url = get_input('url');
	if($url){
		if(elgg_normalize_url($url)){
			$result = goo_gl_short_url($url);
			echo elgg_view('input/text', array('id'=>'urlshortner_output', 'value'=> $result));
		} else {
			echo elgg_echo('galliShortUrl:invalid');
		}
	} else {
		echo elgg_echo('galliShortUrl:nourl');
	}	
?>	