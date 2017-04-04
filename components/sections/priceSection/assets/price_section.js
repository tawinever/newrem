/**
 * Created by Rauan on 10.07.2016.
 */
$(document).ready(function () {
    var clearPrice = function () {
        $('.section-price .tab-header-container span').removeClass('active');
        $('.section-price .tab-content-container').removeClass('active');
    }
    $('.section-price .tab-header-container span').click(function (e) {
        if(!$(this).hasClass('active')){
            var deviceId = $(this).data('device');
            clearPrice();
            $(this).addClass('active');
            $('.section-price .tab-content-container[data-device='+deviceId+']').addClass('active');
        }
    });

});