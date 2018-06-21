$(document).ready(function () {

    //butoes do filtro
    buttonMapa = $('#btn_mapa');
    buttonStreet = $('#btn_street');
    buttonGallery = $('#btn_gallery');

    //div
    gallery = $('#gallery');
    mapa = $('#mapa');
    streetview = $("#streetview");

    mapa.hide();
    streetview.hide();

    buttonMapa.click(function () {
        gallery.delay(300).fadeOut("slow");
        streetview.delay(300).fadeOut("slow");
        mapa.delay(1000).fadeIn("slow");
    });

    buttonStreet.click(function () {
        gallery.delay(300).fadeOut("slow");
        mapa.delay(300).fadeOut("slow");
        streetview.delay(1000).fadeIn("slow");
    });
    
    buttonGallery.click(function () {
        streetview.delay(300).fadeOut("slow");
        mapa.delay(300).fadeOut("slow");
        gallery.delay(1000).fadeIn("slow");
    });


});