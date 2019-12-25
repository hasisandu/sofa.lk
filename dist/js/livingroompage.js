// (function() {
//     function loadJS(u){var r=document.getElementsByTagName("script")[ 0 ],s=document.createElement("script");s.src=u;r.parentNode.insertBefore(s,r);}
//
//     if(!window.HTMLPictureElement){
//         document.createElement('picture');
//         //generating the config array
//         window.picturefillCFG = window.picturefillCFG || [];
//         picturefillCFG.push([ "algorithm", "saveData" ]);
//
//         loadJS("https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.0-beta1/picturefill.min.js");
//     }loadJS
// }());
//
// (function() {
//     window.lazySizesConfig = window.lazySizesConfig || {};
//     window.lazySizesConfig.loadMode = 1;
//
//     window.lazySizesConfig.expand = 222;
//     window.lazySizesConfig.expFactor = 1.6;
// }());
//
// /*
//     for this demo not needed because we use CSS intrinsic sizing,
//     but really useful if you deal with responsive images or lazyloaded images
// */
// (function(){
//     var oldFlickityCreate = window.Flickity.prototype._create;
//
//     window.Flickity.prototype._create = function(){
//         var that = this;
//         if(this.element.addEventListener){
//             this.element.addEventListener('load', function(){
//                 that.onresize();
//             }, true);
//         }
//         this._create = oldFlickityCreate;
//         return oldFlickityCreate.apply(this, arguments);
//     };
// })();


var sliderTag = $('.slider');
var sliderItems = sliderTag.find('.item');
var slideCount = sliderItems.length;
var nextSlide = 1;
var slidernavigatourActive = sliderTag.find('.slide_menu ul li');
var timeOut = 4000;

function slider() {
    if (nextSlide > slideCount) {
        nextSlide = 1;
    }
    if (nextSlide < 1) {
        nextSlide = slideCount;
    }
    sliderItems.fadeOut(200);
    sliderItems.eq(nextSlide - 1).fadeIn(600);
    slidernavigatourActive.removeClass('active_slide');
    slidernavigatourActive.eq(nextSlide - 1).addClass('active_slide');
    nextSlide++;

}

slider();
var sliderInterval = setInterval(slider, timeOut);

sliderTag.mouseleave(function () {
    clearInterval(sliderInterval);
    sliderInterval = setInterval(slider, timeOut);
});

function nextSlid() {
    slider();
}

function prevSlide() {
    nextSlide = nextSlide - 2;
    slider();
}

function slideClick(index) {
    nextSlide = index;
    slider();
}

$('.slider .slide_menu li').click(function () {
    clearInterval(sliderInterval);
    var index = $(this).index();
    slideClick(index + 1);
});
$('.next').click(function () {
    clearInterval(sliderInterval);
    nextSlid();
});
$('.prev').click(function () {
    clearInterval(sliderInterval);
    prevSlide();
});

$(document).ready(function () {

    $(window).load(function () {

        $('#loadOverlay').fadeOut('slow');

    })

})