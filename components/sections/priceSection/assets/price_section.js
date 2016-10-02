/**
 * Created by Rauan on 10.07.2016.
 */
$(document).ready(function () {
    console.log('pricesection js begin');
    var $price = $('.section-price td[data-role="price"]');
    $price.mouseenter(function () {
        var $priceInfo = $(this).parent().find('td[data-role="info"]');
        $priceInfo.text($(this).data('info'));
        $priceInfo.addClass('changed');
        if(!$(this).hasClass('active')){
            $(this).parents(2).find('td').removeClass('active');
            $(this).addClass('active');

        }
    });

    $price.mouseleave(function () {
        var $priceInfo = $(this).parent().find('td[data-role="info"]');
        $priceInfo.removeClass('changed');

    });
});