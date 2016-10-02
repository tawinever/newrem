/**
 * Created by Rauan on 10.07.2016.
 */
$(document).ready(function () {
    console.log('pricesection js begin');
    $('.section-price td[data-role="price"]').mouseenter(function () {
        $(this).parent().find('td[data-role="info"]').text($(this).data('info'));
        if(!$(this).hasClass('active')){
            $(this).parents(2).find('td').removeClass('active');
            $(this).addClass('active');

        }
    });
});