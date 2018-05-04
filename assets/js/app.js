import $ from "jquery";
window.jQuery = window.$ = $;
import TypeIt from "typeit";
import ScrollReveal from "scrollreveal";
import Tether from "tether";
import Popper from "popper.js";
import bootstrap from "bootstrap";
window.now = new Date();

const getData = () => {
  let countDownDate = new Date("May 31, 2018 00:00:00").getTime();
//   let countDownDate = new Date("Ago 29, 2018 00:00:00").getTime();

  let x = setInterval(function() {
    let now = new Date().getTime();

    let distance = countDownDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("contagem-regressiva-js").innerHTML =
      days + " Dias " + hours + " Horas " + minutes + " Minutos " + seconds + "s ";
    
    $(".progress-bar").css({
        width: 100 - days + "%"
    }).html( 100 - days + "%" )

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("contagem-regressiva-js").innerHTML = "JÁ É HOJE! #DCF2018";
    }
  }, 1000);
};

$(document).ready(() => {
  console.log("Developed by: Eduardo Almeida");
  
  getData();

  const sr = new ScrollReveal();
  const srOptions = {
    origin: "bottom",
    distance: "50px",
    duration: 1000,
    easing: "cubic-bezier(0.6, 0.2, 0.1, 1)",
    reset: true,
    useDelay: "always",
    scale: 0.9
  };
  sr.reveal("#video", srOptions);
  sr.reveal("#mensagem-dcf .scroll-reveal > .col", srOptions);
  sr.reveal("#contagem", srOptions);
  sr.reveal("#detalhes", srOptions);
  sr.reveal("#convidados", srOptions);
  sr.reveal("#bandas .row > .col", srOptions);
  sr.reveal("#perguntas", srOptions);
  sr.reveal("#caravanas", srOptions);
  sr.reveal("#hospedagem", srOptions);
  sr.reveal("#fotos-conferencia", srOptions);

  $("#banner .owl-carousel").owlCarousel({
    items: 1,
    loop: true
  });

  $("#bandas .owl-carousel").owlCarousel({
    lazyLoad: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3500,
    responsive : {
      0: {
        items: 1,
      },
      500: {
        items: 2,
      },
      1024: {
        items: 3,
      }
    }
  });

  $("#perguntas .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    dots: true,
  });

  let instance = new TypeIt("#banner-text-1 span", {
    speed: 80,
    strings: ["filhos de Deus serão revelados."]
  });
});

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});