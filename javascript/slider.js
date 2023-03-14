const slider = document.querySelector("#slider");
let sliderCaja = document.querySelectorAll(".slider-caja");
let sliderCajaLast = sliderCaja[sliderCaja.length -1];

const btnleft = document.querySelector("#b-izq");
const btnright = document.querySelector("#b-der");

slider.insertAdjacentElement('afterbegin', sliderCajaLast);

function moverDer(){
    let sliderCajaFirst = document.querySelectorAll(".slider-caja")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderCajaFirst);
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnright.addEventListener('click', function(){
    moverDer();
});

function moverIzq(){
    let sliderCaja = document.querySelectorAll(".slider-caja");
    let sliderCajaLast = sliderCaja[sliderCaja.length -1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderCajaLast);
        slider.style.marginLeft = "-100%";
    }, 500);
}
btnleft.addEventListener('click', function(){
    moverIzq();
});

//setInterval(function(){moverDer();},6000); modo automatico