let slides = document.querySelectorAll(".slideshow img");
let slideAtual = 0;

function mostrarSlide() {

    if (slides.length === 0) {
        return;
    }

    slides.forEach(function(slide) {
        slide.classList.remove("ativo");
    });

    slides[slideAtual].classList.add("ativo");
}

function proximoSlide() {

    if (slides.length === 0) {
        return;
    }

    slideAtual++;

    if (slideAtual >= slides.length) {
        slideAtual = 0;
    }

    mostrarSlide();
}

mostrarSlide();

slides.forEach(function(slide) {

    slide.addEventListener("click", function() {
        proximoSlide();
    });

});

setInterval(proximoSlide, 5000);