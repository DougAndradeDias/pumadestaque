let time = 2000,
    currentImageIndex = 0,
    images = document.querySelectorAll("#slider img")
    max = images.length

function nextImage() {
    images[currentImageIndex].classList.remove("selecionado")

    currentImageIndex++

    if(currentImageIndex >= max){
        currentImageIndex = 0
    }
    images[currentImageIndex].classList.add("selecionado")
}



function start() {
    setInterval(() => {
        nextImage
        ()
    }, time)
}

window.addEventListener("load", start)

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// DEPOIMENTOS FEITO COM O SWIPER
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,

    pagination: {
      el: '.swiper-pagination',
    },
  
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    loop: true,

    keyboard: true
  });