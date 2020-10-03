/* Make Section height 100%*/
vpw = $(window).width();
vph = $(window).height();
$('.full-min-height').css('min-height',vph);
$('.full-height').height(vph);

var owl = $('.nonloop');
owl.owlCarousel({
	nav:false,
	lazyLoad:true,
    autoWidth:true,
    loop:false,
    margin: 20,
});

owl.on('mousewheel','.owl-stage', function (e) {
	console.log(e.deltaY);
    if (e.deltaY>0) {
        // owl.trigger('next.owl');
		$('.owl-prev').click();
    } else {
        // owl.trigger('prev.owl');
		$('.owl-next').click();
    }
    e.preventDefault();
});

/* animate filter */
var owlAnimateFilter = function(even) {
	$(this)
	.addClass('__loading')
	.delay(70 * $(this).parent().index())
	.queue(function() {
		$(this).dequeue().removeClass('__loading')
	})
}

$('.btn-filter-wrap').on('click', '.btn-filter', function(e) {
	var filter_data = $(this).data('filter');

	/* return if current */
	if($(this).hasClass('btn-active')) return;

	/* active current */
	$(this).addClass('btn-active').siblings().removeClass('btn-active');

	/* Filter */
	owl.owlFilter(filter_data, function(_owl) { 
		$(_owl).find('.item').each(owlAnimateFilter); 
	});
})

$(document).keydown(function(eventObject) {
	if(eventObject.which==37) {//left arrow
		$('.owl-prev').click();//emulates click on prev button
	} else if(eventObject.which==39) {//right arrow
		$('.owl-next').click();//emulates click on next button
	}
});

$(".burger").click(function() {
	$(this).toggleClass("open");
	$(".sidemenu").toggleClass("open");
});

$(document).ready(function() {
	
});

$(window).scroll(function(){

});