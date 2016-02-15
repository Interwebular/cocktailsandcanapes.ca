$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height > 20) {
        $('nav, .nav-background').addClass('scrolled');
    }
    else {
        $('nav, .nav-background').removeClass('scrolled');
    }
});


$('.menu-image-preview-slider-1').slick({
    arrows: false,
    draggable: false,
    asNavFor: '.menu-content-preview-slider-1'
});

$('.menu-content-preview-slider-1').slick({
    //arrows: false,
    asNavFor: '.menu-image-preview-slider-1',
    prevArrow: $('.left-1'),
    nextArrow: $('.right-1')
});

$('.menu-image-preview-slider-2').slick({
    arrows: false,
    draggable: false,
    asNavFor: '.menu-content-preview-slider-1'
});

$('.menu-content-preview-slider-2').slick({
    //arrows: false,
    asNavFor: '.menu-image-preview-slider-2',
    prevArrow: $('.left-2'),
    nextArrow: $('.right-2')
});

$('.clients').slick({
    prevArrow: $('.client-left'),
    nextArrow: $('.client-right')
});


$('.contact').hover(function(){
    $('.contact-us').toggleClass('open');
});

$(document).ready(function(){
    setTimeout(function(){
        $('.m-grid').masonry({
            itemSelector: '.m-grid-item'
        });
    }, 500);
});


$('.open-mobile-nav').click(function(e){
    $('nav.mobile .nav-items').addClass('open');
    e.preventDefault();
});

$('.close-mobile-nav').click(function(e){
    $('nav.mobile .nav-items').removeClass('open');
    e.preventDefault();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
})

//# sourceMappingURL=cnc.js.map
