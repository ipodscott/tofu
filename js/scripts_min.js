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
    });
    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500);
        $(".all, body").removeClass('stop-scroll');
    });
   
});
