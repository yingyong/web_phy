( function( $ ) {
	$( document ).ready(function() {
		$(document).on("scroll", onScroll);
		$('.sub__menu > ul > li > a').click(function(e) {
			$('.sub__menu li').removeClass('active');
			$(this).closest('li').addClass('active');	
		});
	});
})( jQuery );

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.sub__menu a').each(function () {
        var currLink = $(this);
        var refElement =$(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.sub__menu ul li').removeClass("active");
            currLink.parent().addClass("active");
            currValue=currLink.attr('href').substring(1);
            $(".sub__menu select").val(currValue);
        }
        else{
            currLink.parent().removeClass("active");
        }
    });    
	 $('.subb__menu a').each(function () {
        var currLink = $(this);
        var refElement =$(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.subb__menu ul li').removeClass("active");
            currLink.parent().addClass("active");
            currValue=currLink.attr('href').substring(1);
            $(".subb__menu select").val(currValue);
        }
        else{
            currLink.parent().removeClass("active");
        }
    });    
	
	
}
