import $ from 'jquery';
window.jQuery = window.$ = $;
import Tether from'tether';
import Popper from 'popper.js';
import bootstrap from 'bootstrap';

$( document ).ready( () => {
    console.log("Developed by: Eduardo Almeida")
    
    $('#banner .owl-carousel').owlCarousel({
        items:1,
        loop:true,
    })

    $('#bandas .owl-carousel').owlCarousel({
        lazyLoad:true,
        center: true,
        items:3,
        loop:true,
    })

    $("#perguntas .owl-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplay: true,
        autoplayTimeout:3000,
        dots: true,
    })
})