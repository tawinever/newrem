/**
 * Created by rauan on 3/30/17.
 */


$(document).ready(function () {
    $('#certSlider').bxSlider({
        maxSlides: 3,
        minSlides:3,
        moveSlides:1,
        pager: false,
        nextSelector: '#certright',
        prevSelector: '#certleft',
        nextText: '<i class="fa fa-angle-right" ></i>',
        prevText: '<i class="fa fa-angle-left" ></i>',
        infiniteLoop: false,
        slideWidth: 360,
        slideMargin: 15

    });

    // $(".section-certificate [data-fancybox]")
    //     .fancybox({
    //         infobar:true,
    //         buttons:false,
    //         baseTpl	: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
    //         '<div class="fancybox-bg"></div>' +
    //         '<div class="fancybox-controls">' +
    //         '<div class="fancybox-infobar">' +
    //         '<button data-fancybox-previous class="fancybox-button fancybox-button--left" title="Previous"></button>' +
    //         '<div class="fancybox-infobar__body">' +
    //         '<span class="js-fancybox-index"></span>&nbsp;/&nbsp;<span class="js-fancybox-count"></span>' +
    //         '</div>' +
    //         '<button data-fancybox-next class="fancybox-button fancybox-button--right" title="Next"></button>' +
    //         '</div>' +
    //         '<div class="fancybox-buttons">' +
    //         '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="Close (Esc)"></button>' +
    //         '</div>' +
    //         '</div>' +
    //         '<div class="fancybox-slider-wrap">' +
    //         '<div class="fancybox-slider"></div>' +
    //         '</div>' +
    //         '<div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div>' +
    //         '</div>',
    //
    //     });
});