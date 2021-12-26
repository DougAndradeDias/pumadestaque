let time = 2000,
  currentImageIndex = 0,
  images = document.querySelectorAll('#slider img')
max = images.length

function nextImage() {
  images[currentImageIndex].classList.remove('selecionado')

  currentImageIndex++

  if (currentImageIndex >= max) {
    currentImageIndex = 0
  }
  images[currentImageIndex].classList.add('selecionado')
}

function start() {
  setInterval(() => {
    nextImage()
  }, time)
}

window.addEventListener('load', start)

window.onscroll = function () {
  scrollFunction()
}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('myBtn').style.display = 'block'
  } else {
    document.getElementById('myBtn').style.display = 'none'
  }
}

function topFunction() {
  document.body.scrollTop = 0
  document.documentElement.scrollTop = 0
}

// DEPOIMENTOS FEITO COM O SWIPER
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,

  pagination: {
    el: '.swiper-pagination'
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },

  loop: true,

  keyboard: true
})

//Get the button
let mybutton = document.getElementById('btn-back-to-top')

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = 'block'
  } else {
    mybutton.style.display = 'none'
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener('click', backToTop)

function backToTop() {
  document.body.scrollTop = 0
  document.documentElement.scrollTop = 0
}
