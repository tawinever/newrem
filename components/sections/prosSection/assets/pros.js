/**
 * Created by rauan on 3/30/17.
 */


$(window).load(function () {
    var prosTextState = 'hide';
    $('.section-pros .button-container').click(function (e) {
        if(prosTextState == 'hide'){
            $(this).text('Скрыть');
            $('.section-pros p').slideDown(function () {
                prosTextState = 'open';
            });
        } else {
            $(this).text('Подробнее');
            $('.section-pros p').slideUp(function () {
                prosTextState = 'hide';
            });
        }
    });

});