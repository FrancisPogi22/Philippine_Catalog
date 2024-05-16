$(document).ready(() => {
  AOS.init();
  checkScroll();

  $(window).scroll(() => {
    checkScroll();
  });

  function checkScroll() {
    if ($(window).scrollTop() > 45) {
    }
  }


  $('.card-text').click(function() {
    $('.card-text').not($(this)).removeClass('active');
    $(this).toggleClass('active');
    $(this).find('p').slideToggle();
    $('.card-text').not($(this)).find('p').slideUp();
    let videoId = $(this).data('name');

    $('video').each(function() {
        if (!$(this).is('#' + videoId)) {
            this.pause();
        }
    });

    $('#' + videoId)[0].play();
  });

  const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    loop: true,
    slidesPerView: 3,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  window.onload = () => {
    let sliderImagesBox = document.querySelectorAll(".cards-box");
    let cardListItems = document.querySelectorAll(".card-list li");

    sliderImagesBox.forEach((el) => {
      let imageNodes = el.querySelectorAll(".card:not(.hide)");
      let imageLabels = Array.from(cardListItems).map((li) =>
        li.textContent.trim()
      );
      let currentIndex = 0;

      let setIndex = (index) => {
        currentIndex = index;

        imageNodes.forEach((card, i) => {
          card.dataset.slide = i == index ? 1 : "";
        });
      };

      let findImageIndex = (label) => {
        return imageLabels.indexOf(label);
      };

      cardListItems.forEach((li) => {
        li.addEventListener("click", () => {
          let label = li.textContent.trim();
          let index = findImageIndex(label);
          if (index !== -1) {
            setIndex(index);
          }
        });
      });

      setIndex(0);
    });
  };

  //   window.onload = () => {
  //     let sliderImagesBox = document.querySelectorAll(".cards-box");

  //     sliderImagesBox.forEach((el) => {
  //       let imageNodes = el.querySelectorAll(".card:not(.hide)");
  //       let arrIndexes = [];
  //       (() => {
  //         let start = 0;
  //         while (imageNodes.length > start) {
  //           arrIndexes.push(start++);
  //         }
  //       })();

  //       let setIndex = (arr) => {
  //         for (let i = 0; i < imageNodes.length; i++) {
  //           imageNodes[i].dataset.slide = arr[i];
  //         }
  //       };
  //       el.addEventListener("click", () => {
  //         arrIndexes.unshift(arrIndexes.pop());
  //         setIndex(arrIndexes);
  //       });
  //       setIndex(arrIndexes);
  //     });
  //   };
});
