$(document).ready(() => {
  AOS.init();
  checkScroll();

  $(window).scroll(() => {
    checkScroll();
  });

  function checkScroll() {
    if ($(window).scrollTop() > 45) {
      $("#header").addClass("scrolled");
    } else {
      $("#header").removeClass("scrolled");
    }
  }

  $(".card-text").click(function () {
    $(".card-text").not($(this)).removeClass("active");
    $(this).toggleClass("active");
    $(this).find("p").slideToggle();
    $(".card-text").not($(this)).find("p").slideUp();

    let videoId = $(this).data("name");

    $("video").each(function () {
      if (!$(this).is("#" + videoId)) {
        this.pause();
      }
    });
    $("#" + videoId)[0].play();
  });

  $(".faqs-header").click(function () {
    $(".faqs-details")
      .not(
        $(this)
          .closest(".faqs-widget")
          .find(".faqs-details")
          .toggleClass("active")
          .slideToggle()
      )
      .slideUp(function () {
        $(this).removeClass("active");
      });

      $(this).closest('.faqs-widget').addClass('active');
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

  $(document).on("click", "#submitBtn", (e) => {
    e.preventDefault();

    if ($("#concernForm").valid()) {
      let formData = $("#concernForm").serialize();

      $.ajax({
        type: "POST",
        url: "submitConcern",
        data: formData,
        success() {
          Swal.fire({
            icon: "success",
            title: "Your Concern Has Been Submitted!",
            showConfirmButton: false,
            timer: 1500,
          });
          $("#concernForm")[0].reset();
        },
      });
    }
  });

  $(".gallery-navbar li a").click(function (e) {
    e.preventDefault();
    let widget = $(this).data("id");

    $(".gallery-navbar li").removeClass("active");
    $(this).closest("li").addClass("active");

    $(".gallery-grid-con").removeClass("active");

    $("#" + widget + "").addClass("active");
  });
});
