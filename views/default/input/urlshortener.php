<?php
/**
 *  This view provides a hook for third parties to provide a URL shortener.
 *  @package galliShortUrl
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
?>
<label><?php echo elgg_echo('galliShortUrl:enterurl'); ?></label><br />
<?php echo elgg_view('input/text', array('id'=>'urlshortner_input'));?>
<div class="short_url">&nbsp;</div>