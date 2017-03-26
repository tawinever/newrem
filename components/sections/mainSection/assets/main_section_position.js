/**
 * Created by Rauan on 11.07.2016.
 */
$(document).ready(function () {
    var menuHeight = $('.stick-menu').outerHeight();
    console.log(menuHeight);
    $('.section-main').css('height','calc( 100vh - '+ menuHeight+'px )');
});