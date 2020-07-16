
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if(ww < 780){

        $(".toggleMenu").css("display", "inline-block");
        $(".header-left").css("width", "65%");
        $(".header_right").css("width", "35%");
        $(".logo").css("padding","7px");
        $("#logo_xs").css("display", "inline-block");
        $("#logo_lg").css("display", "none");
        if (!$(".toggleMenu").hasClass("active")) {
            $(".nav").hide();
        } else {
            $(".nav").show();
        }
        $(".nav li").unbind('mouseenter mouseleave');
        $(".nav li a.parent").unbind('click').bind('click', function(e) {
            // must be attached to anchor element to prevent bubbling
            e.preventDefault();
            $(this).parent("li").toggleClass("hover");
        });
	}
	else if (ww > 780 && ww < 980) {
		$(".toggleMenu").css("display", "inline-block");
        $(".header-left").css("width", "65%");
        $(".header_right").css("width", "35%");
        $("#logo_lg").css("display", "inline-block");
        $("#logo_xs").css("display", "none");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 980) {
		$(".toggleMenu").css("display", "none");
        $(".header-left").css("width", "80%");
        $(".header_right").css("width", "10%");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
        $("#logo_lg").css("display", "inline-block");
        $("#logo_xs").css("display", "none");
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

