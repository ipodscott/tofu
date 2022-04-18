$(document).ready(function() {
    $('.open-overlay').delay(1000).fadeOut(500, function() {});
    $('.all').delay(500).fadeTo(500, 1);
    
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return !1
            }
        }
    });
    
    $(".modal-open").click(function() {
        $('.modal-box').fadeIn()
    });
    $(".close-modal").click(function() {
        $('.modal-box').fadeOut()
    });
    $(".menu-btn").click(function() {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500);
        $(".all, body").addClass('stop-scroll');
		$('footer').removeClass('footer-up').addClass('footer-down');
    });
    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500);
        $(".all, body").removeClass('stop-scroll');
    });
    
    $(".menu-btn").click(function() {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500);
        $(".all, body").addClass('stop-scroll');
        });

	$(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500);
        $(".all, body").removeClass('stop-scroll');
		});
   
   
   // Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('footer').outerHeight();
	
	$(window).scroll(function(event){
	    didScroll = true;
	});
	
	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 500);
	
	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('footer').removeClass('footer-down').addClass('footer-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('footer').removeClass('footer-up').addClass('footer-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}   
});