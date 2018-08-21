import $ from "jquery";
window.jQuery = window.$ = $;
import TypeIt from "typeit";
import ScrollReveal from "scrollreveal";
import Tether from "tether";
import Popper from "popper.js";
import bootstrap from "bootstrap";
window.now = new Date();

$(document).ready(() => {
  console.log("Developed by: Eduardo Almeida");

  //   const sr = new ScrollReveal();
  //   const srOptions = {
  //     origin: "bottom",
  //     distance: "50px",
  //     duration: 1000,
  //     easing: "cubic-bezier(0.6, 0.2, 0.1, 1)",
  //     reset: true,
  //     useDelay: "always",
  //     scale: 0.9
  //   };
  //   sr.reveal("#video", srOptions);
  //   sr.reveal("#mensagem-dcf > .row", srOptions);
  //   sr.reveal("#contagem", srOptions);
  //   sr.reveal("#detalhes", srOptions);
  //   sr.reveal("#convidados", srOptions);
  //   sr.reveal("#bandas .row > .col", srOptions);
  //   sr.reveal("#perguntas", srOptions);
  //   sr.reveal("#caravanas", srOptions);
  //   sr.reveal("#hospedagem", srOptions);
  //   sr.reveal("#fotos-conferencia", srOptions);

  $("#main-banner .owl-carousel").owlCarousel({
    items: 1,
    loop: true
  });
});
