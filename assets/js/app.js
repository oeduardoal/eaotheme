import $ from "jquery";
window.jQuery = window.$ = $;
import TypeIt from "typeit";
import ScrollReveal from "scrollreveal";
import Tether from "tether";
import Popper from "popper.js";
import bootstrap from "bootstrap";
// window.now = new Date();
import * as basicLightbox from "basiclightbox";

const showModal = (tipo, id, title, descricao, link) => {
  let iframe;

  if (tipo == "vimeo")
    iframe = `<iframe class="c-frame" src="https://player.vimeo.com/video/${id}?autoplay=1" width="800" height="440" frameborder="0"></iframe>`;
  else if (tipo == "youtube")
    iframe = `<iframe class="c-frame" src="https://www.youtube.com/embed/${id}" width="800" height="440" frameborder="0"></iframe>`;

  if ($(window).width() > 600) {
    iframe = `<div class="c-modal">
        ${iframe}
        <div class="c-type" style="display:none;">
          <h3>
            ${title}
          </h3>
          <p>
            ${descricao}
          </p>
          <a href="${link}">Veja mais!</a>
        </div>
      </div>`;
  }

  const instance = basicLightbox.create(iframe, {
    closable: true
  });

  instance.show();

  $(".c-modal iframe").load(() => {
    $(".c-type").fadeIn();
  });
};

$(document).ready(() => {
  console.log("Developed by: Eduardo Almeida");

  // const sr = new ScrollReveal();
  // const srOptions = {
  //   origin: "bottom",
  //   distance: "50px",
  //   duration: 2000,
  //   easing: "cubic-bezier(0.6, 0.2, 0.1, 1)",
  //   reset: true,
  //   useDelay: "always",
  //   scale: 0.9
  // };
  //   sr.reveal("#video", srOptions);
  //   sr.reveal("#mensagem-dcf > .row", srOptions);
  //   sr.reveal("#contagem", srOptions);
  //   sr.reveal("#detalhes", srOptions);
  //   sr.reveal("#convidados", srOptions);
  //   sr.reveal("#bandas .row > .col", srOptions);
  //   sr.reveal("#perguntas", srOptions);
  //   sr.reveal("#caravanas", srOptions);
  //   sr.reveal("#hospedagem", srOptions);
  // sr.reveal(".c-modal", srOptions);

  $("#main-banner .owl-carousel").owlCarousel({
    items: 1,
    loop: true
  });

  $("#main-banner.banner-portfolio .owl-carousel").owlCarousel({
    items: 1,
    loop: false
  });

  $('a[href*="#"]:not([href="#"])').click(function() {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top
          },
          1000
        );
        return false;
      }
    }
  });
  $("#main-clientes-parceiros .owl-carousel").owlCarousel({
    items: 5,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplaySpeed: 500
  });

  $(".masonry-brick a").on("click", function(ev) {
    ev.preventDefault();
    let tipo = $(this).attr("data-tipo");
    let id = $(this).attr("data-id");
    let title = $(this).attr("data-title");
    let descricao = $(this).attr("data-descricao");
    let link = $(this).attr("data-link");

    showModal(tipo, id, title, descricao, link);
  });
});
