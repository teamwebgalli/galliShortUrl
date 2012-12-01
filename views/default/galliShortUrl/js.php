//<script>
elgg.provide('elgg.galliShortUrl');

elgg.galliShortUrl.init = function() {
	$('#urlshortner_input').live('focusout', function(){
		var value = $(this).val();
		var outputDiv = $('.short_url');
		outputDiv.empty();
		outputDiv.addClass('elgg-ajax-loader');
		$.ajax({type: "GET",
			url: "<?php echo elgg_get_site_url() . "ajax/view/galliShortUrl/short/"; ?>",
			dataType: "html",
			cache: false,
			data: {url: value},
			success: function(htmlData) {
				if (htmlData.length > 0) {
					outputDiv.removeClass('elgg-ajax-loader');
					outputDiv.html(htmlData);
				}
			}
		});		
	});
};

elgg.register_hook_handler('init', 'system', elgg.galliShortUrl.init);