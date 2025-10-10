jQuery('.dropdown-trigger').on('click', function(){
	jQuery(this).siblings('.item-content').slideToggle(500, 'linear');
	jQuery(this).find('svg').toggleClass('open');
});