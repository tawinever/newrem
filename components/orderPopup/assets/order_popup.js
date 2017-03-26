/**
 * Created by Rauan on 25.06.2016.
 */
$(window).load(function () {
    $('body').delegate('.popup-open','click',function () {
        $('body').css('overflow','hidden');
        if($(this).data('order-info')){
            $('.order-popup .order-popup-info').text($(this).data('order-info'));
            $('#notification-info').attr('value', $(this).data('order-info'));
        }
        else{
            $('.order-popup .order-popup-info').text('');
            $('#notification-info').attr('value', '');
        }
        $('.order-popup').fadeIn();
    });
    $('#order-popup-close').click(function () {
        $('body').css('overflow','auto');
        $('.order-popup').fadeOut();
    });
    $('.order-popup-wrap').click(function () {
        $('body').css('overflow','auto');
        $('.order-popup').fadeOut();
    });
});