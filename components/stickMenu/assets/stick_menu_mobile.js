/**
 * Created by Rauan on 25.06.2016.
 */
$(window).load(function () {
    var isHidden = true;
    $(window).scroll(function (e) {
        var curPos = $(window).scrollTop();
        if(curPos > 260 && isHidden){
            isHidden = false;
            $('.mobile-menu').fadeIn();
        }
        if(curPos < 260 && !isHidden){
            isHidden = true;
            $('.mobile-menu').fadeOut();
        }
    });
});/**
 * Created by rauan on 5/20/17.
 */
