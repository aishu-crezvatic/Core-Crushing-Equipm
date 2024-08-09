var swiper1 = new Swiper(".swiper1", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true, // Enable infinite loop
  autoplay: {
    delay: 4000, // Change slide every 4 seconds
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1",
  },
});

// Initialize Swiper 2
var swiper2 = new Swiper(".swiper2", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true, // Enable infinite loop
  pagination: true,
  autoplay: {
    delay: 5000, // Change slide every 5 seconds
    disableOnInteraction: false,
  },
  navigation: false,

  navigation: {
    nextEl: ".swiper-button-next2",
    prevEl: ".swiper-button-prev2",
  },
  breakpoints: {
    320: {
        slidesPerView: 1,
        spaceBetween: 20,
    },
    640: {
        slidesPerView: 2,
        spaceBetween: 20,
    },
    768: {
        slidesPerView: 2,
        spaceBetween: 20,
    },
    1024: {
        slidesPerView: 3,
        spaceBetween: 30,
    },
}
});
var swiper3 = new Swiper(".swiper3", {
  loop: true,
  centeredSlides: true /* Center the active slide */,
  slidesPerView: 3 /* Display 3 slides at a time */,
  spaceBetween: 0 /* Space between slides */,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 0,  
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
  },
});
lightGallery(document.querySelector(".swiper-wrapper"), {
  selector: "a",
  download: false,
});
