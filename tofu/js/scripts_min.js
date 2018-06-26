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
    var $container = jQuery('.acc-body'),
        $acc_head = jQuery('.acc-head');
    $acc_head.last().addClass('last');
    $acc_head.on('click', function(e) {
        if (jQuery(this).next().is(':hidden')) {
            $acc_head.removeClass('active').next().slideUp(500);
            jQuery(this).toggleClass('active').next().slideToggle(300)
        } else {
            jQuery(this).toggleClass('active').next().slideToggle(300)
        }
        e.preventDefault()
    });
    $(".modal-open").click(function() {
        $('.modal-box').fadeIn()
    });
    $(".close-modal").click(function() {
        $('.modal-box').fadeOut()
    });
    $(".menu-btn").click(function() {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500)
    });
    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500)
    });
   

   
    (function($) {
        $.fn.parallax = function(options) {
            var windowHeight = $(window).height();
            var settings = $.extend({
                speed: 0.15
            }, options);
            return this.each(function() {
                var $this = $(this);
                $(document).scroll(function() {
                    var scrollTop = $(window).scrollTop();
                    var offset = $this.offset().top;
                    var height = $this.outerHeight();
                    if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
                        return
                    }
                    var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
                    $this.css('background-position', 'center ' + yBgPosition + 'px')
                })
            })
        }
    })(jQuery);
    $('.parallax').parallax({
        speed: -0.125
    });
   
});
window.document.onkeydown = function(e) {
    if (!e) e = event;
    if (e.keyCode == 27) {
        $('.img-pop-box, .close-media').fadeOut(500, function() {
            $('.media-overlay').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg')
        });
        $('.youTube, .myVideo').attr('src', '');
        $('.modal-vid').fadeOut(500);
        $('.modal-box').fadeOut(500);
        document.getElementById('myVideo').pause();
        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);
        $('.btt-footer').fadeIn(500)
    }
    if (!e) e = event;
    if (e.keyCode == 39) {
        $(".menu").addClass('show-menu');
        $(".menu-layer").fadeIn(500)
    }
    if (!e) e = event;
    if (e.keyCode == 37) {
        $(".menu").removeClass('show-menu');
        $(".menu-layer").delay(250).fadeOut(500)
    }
};
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 40) {
        $('.btt-footer').fadeIn(500)
    } else {
        $('.btt-footer').fadeOut(500)
    }
})

  $(window).scroll(function(){
    $(".top").css("opacity", 1 - $(window).scrollTop() / 750);
    $(".fadey").css("opacity", 1 - $(window).scrollTop() / 750);
    $(".logo img").css("margin-top", '300' + $(window).scrollTop() / 1500);
  });