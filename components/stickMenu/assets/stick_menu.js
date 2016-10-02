/**
 * Created by Rauan on 25.06.2016.
 */
$(window).load(function () {
    console.log('we ready');
    var isHidden = true;
    $(window).scroll(function (e) {
        var curPos = $(window).scrollTop();
        if(curPos > 50 && isHidden){
            isHidden = false;
            $('.stick-menu').fadeIn();
        }
        if(curPos < 50 && !isHidden){
            isHidden = true;
            $('.stick-menu').fadeOut();
        }
    });
});