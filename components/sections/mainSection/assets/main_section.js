/**
 * Created by Rauan on 23.06.2016.
 */

function SetBGVideo(videoName) {
    console.log('we ready');
    var video = $('.section-main video').get(0);
    var r = new XMLHttpRequest();
    r.onload = function() {
        video.src = URL.createObjectURL(r.response);
        video.playbackRate = 0.5;
        video.play();
    };
    if (video.canPlayType('video/mp4;codecs="avc1.42E01E, mp4a.40.2"')) {
        r.open("GET", "http://remonteka.kz/videos/"+videoName+".mp4");
    }
    else {
        r.open("GET", "http://remonteka.kz/videos/"+videoName+".webm");
    }
    r.responseType = "blob";
    r.send();

}
// $(window).load(function () {
//     console.log('we ready');
//     var video = $('.section-main video').get(0);
//     var r = new XMLHttpRequest();
//     r.onload = function() {
//         video.src = URL.createObjectURL(r.response);
//         video.playbackRate = 0.5;
//         video.play();
//     };
//     if (video.canPlayType('video/mp4;codecs="avc1.42E01E, mp4a.40.2"')) {
//         r.open("GET", "http://newrem.dev/videos/sup.mp4");
//     }
//     else {
//         r.open("GET", "http://newrem.dev/videos/sup.webm");
//     }
//     r.responseType = "blob";
//     r.send();
//
// });
