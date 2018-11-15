jQuery(document).ready(function() {
	jQuery('.control').on('click touchstart',function(e){
		jQuery('.item-bottom').not(jQuery(this).parent()).removeClass('active');
		jQuery(this).parent().toggleClass('active');
	});
});