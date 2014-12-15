(function ($) {
	$(document).ready(function(){		
		$(".field-name-field-project-title").each(function() {
		  $(this).closest(".flexslider").append(this);
		});
		$(".field-name-field-project-description").each(function() {
		  $(this).closest(".flexslider").append(this);
		});
		
	});

})(jQuery);


(function ($) {
	$(document).ready(function(){
		$(".node-type-client-page h2.node-title a").removeAttr("href");
	});
	$(document).ready(function(){
		$("#block-views-client-page-block-block .views-row").hover(
			function() {
			$(this).children(".views-field-title").animate({
				position: 'absolute',
				bottom: '0'
				});
			},
			function() {
			$(this).children(".views-field-title").animate({
					position: 'absolute',
					bottom: '-70px'
				});
			});
			
	});

	$(document).ready(function() {	
		$('#block-block-3').click(function(){
			$('#block-menu-menu-mobile-menu-main').appendTo('#page').fadeToggle();
		//	$('#section-content').fadeToggle();
		//	$('#section-footer').fadeToggle();
		});
	});

})(jQuery);
