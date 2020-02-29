(function ($) {
    "use strict";

    /*************************
     add class on scroll js start
     *************************/
    // if ($(window).width() <= 991) {
    //     $('.menu-container').find('.inner-collapse').addClass("collapse");
    //     $(".dropdown-sec").on('click', function () {
    //         $('.navbar-nav').find('.dropdown-content').removeClass("demo");
    //         $(this).find('.dropdown-content').addClass("demo");
    //     });

    //     $(".menu-container").on('click', function () {
    //         $('.menu-container').find('.inner-collapse').removeClass("demo2");
    //         $(this).find('.inner-collapse').removeClass("collapse");
    //         $(this).find('.inner-collapse').addClass("demo2");
    //     });

    //     //demo2
    // }

    /*************************
     add class on scroll js end
     *************************/


$('#business_slider').owlCarousel({
    items: 3,
    margin: 150,
    autoHeight: true,
    nav: false,
    autoplay:false,
    center:false,
    slideSpeed: 500,
    paginationSpeed: 700,
    dots: true,
    loop: false,
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 3
        }
    }
})




    /*************************
     tap to top js start
     *************************/

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 500) {
            $('.tap-top').fadeIn();
        } else {
            $('.tap-top').fadeOut();
        }
    });
    $('.tap-top').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    /*************************
     tap to top js end
     *************************/


    /*************************
     scroll js start
     *************************/
    // if ($(window).width() >= 991) {
    //     $("nav a").on('click', function (event) {
    //         if (this.hash !== "") {
    //             event.preventDefault();
    //             var hash = this.hash;
    //             $('html, body').animate({
    //                 scrollTop: $(hash).offset().top - 45
    //             }, 1000, function () {
    //             });
    //             return false;
    //         }
    //     });
    // } else {
    //     $("nav a").on('click', function (event) {
    //         if (this.hash !== "") {
    //             event.preventDefault();
    //             var hash = this.hash;
    //             $('html, body').animate({
    //                 scrollTop: $(hash).offset().top - 50
    //             }, 1000, function () {
    //             });
    //             return false;
    //         }
    //     });
    // }

    /*************************
     scroll js end
     *************************/




    //toggle show

    //     $('.toggle-nav').on('click', function(e) {
    //         $('.navbar').css("right","0px");
    //         $('#close_side_menu').css("display","inline");

    //     });
    //     $('.btn-back').on('click', function(e) {
    //         $('.navbar').css("right","-350px");
    //         $('#close_side_menu').css("display","none");
    //     });
    //     $('.linkNav').on('click', function(e) {
    //         $('.navbar').css("right","-350px");
    //         $('#close_side_menu').css("display","none");
    //     });
    //     $('#close_side_menu').on('click', function(e) {
    //         $('.navbar').css("right","-350px");
    //         $('#close_side_menu').css("display","none");
    //     });


    // $('.linkNav').click(function(){
    //     $('li a').removeClass("activeNav");
    //     $(this).addClass("activeNav");
    // });


    // sticky menu - start
  // --------------------------------------------------
  var headerId = $(".sticky-header");
  $(window).on('scroll' , function() {
    var amountScrolled = $(window).scrollTop();
    if ($(this).scrollTop() > 50) {
      headerId.removeClass("not-stuck");
      headerId.addClass("stuck");
    } else {
      headerId.removeClass("stuck");
      headerId.addClass("not-stuck");
    }
  });

  if($("body").hasClass("intrective")){
    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $("html,body").animate({
            scrollTop: $(this.hash).offset().top}, 1200);
    });

    }else {

        $(".scroll").on("click", function (event) {
            event.preventDefault();
            $("html,body").animate({
                scrollTop: $(this.hash).offset().top - 60}, 1200);
        });

    }


    if ($(window).width() > 300) {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        new WOW().init();
    }



    function animatedCursor() {

    if ($("#aimated-cursor").length) {

        var e = {x: 0, y: 0}, t = {x: 0, y: 0}, n = .25, o = !1, a =    document.getElementById("cursor"),
            i = document.getElementById("cursor-loader");
        TweenLite.set(a, {xPercent: -50, yPercent: -50}), document.addEventListener("mousemove", function (t) {
            var n = window.pageYOffset || document.documentElement.scrollTop;
            e.x = t.pageX, e.y = t.pageY - n
        }), TweenLite.ticker.addEventListener("tick", function () {
            o || (t.x += (e.x - t.x) * n, t.y += (e.y - t.y) * n, TweenLite.set(a, {x: t.x, y: t.y}))
        }),
            $(".animated-wrap").mouseenter(function (e) {
                TweenMax.to(this, .3, {scale: 2}), TweenMax.to(a, .3, {
                    scale: 2,
                    borderWidth: "1px",
                    opacity: .2
                }), TweenMax.to(i, .3, {
                    scale: 2,
                    borderWidth: "1px",
                    top: 1,
                    left: 1
                }), TweenMax.to($(this).children(), .3, {scale: .5}), o = !0
            }),
            $(".animated-wrap").mouseleave(function (e) {
                TweenMax.to(this, .3, {scale: 1}), TweenMax.to(a, .3, {
                    scale: 1,
                    borderWidth: "2px",
                    opacity: 1
                }), TweenMax.to(i, .3, {
                    scale: 1,
                    borderWidth: "2px",
                    top: 0,
                    left: 0
                }), TweenMax.to($(this).children(), .3, {scale: 1, x: 0, y: 0}), o = !1
            }),
            // $(".animated-wrap").mousemove(function (e) {
            //     var n, o, i, l, r, d, c, s, p, h, x, u, w, f, m;
            //     n = e, o = 2, i = this.getBoundingClientRect(), l = n.pageX - i.left, r = n.pageY - i.top, d = window.pageYOffset || document.documentElement.scrollTop, t.x = i.left + i.width / 2 + (l - i.width / 2) / o, t.y = i.top + i.height / 2 + (r - i.height / 2 - d) / o, TweenMax.to(a, .3, {
            //         x: t.x,
            //         y: t.y
            //     }), s = e, p = c = this, h = c.querySelector(".animated-element"), x = 20, u = p.getBoundingClientRect(), w = s.pageX - u.left, f = s.pageY - u.top, m = window.pageYOffset || document.documentElement.scrollTop, TweenMax.to(h, .3, {
            //         x: (w - u.width / 2) / u.width * x,
            //         y: (f - u.height / 2 - m) / u.height * x,
            //         ease: Power2.easeOut
            //     })
            // }),
            $(".hide-cursor,.btn,.tp-bullets").mouseenter(function (e) {
                TweenMax.to("#cursor", .2, {borderWidth: "1px", scale: 2, opacity: 0})
            }), 
            $(".hide-cursor,.btn,.tp-bullets").mouseleave(function (e) {
            TweenMax.to("#cursor", .3, {borderWidth: "2px", scale: 1, opacity: 1})
        }),
            $(".link").mouseenter(function (e) {
            TweenMax.to("#cursor", .2, {
                borderWidth: "0px",
                scale: 3,
                backgroundColor: "rgba(255, 255, 255, 1)",
                opacity: .15
            })
        }), $(".link").mouseleave(function (e) {
            TweenMax.to("#cursor", .3, {
                borderWidth: "2px",
                scale: 1,
                backgroundColor: "rgba(255, 255, 255, 0)",
                opacity: 1
            })
        })

    }

    }
    if ($(window).width() > 991) {
    setTimeout(function () {
        animatedCursor();
    }, 1000);
    }


})(jQuery);


