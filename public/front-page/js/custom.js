(function ($) {
  "use strict";
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });

  $(".popup-youtube, .popup-vimeo").magnificPopup({
    // disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $(document).ready(function () {
    $("select").niceSelect();
  });

  var client_logo = $(".client_logo_slider");
  if (client_logo.length) {
    client_logo.owlCarousel({
      items: 6,
      loop: true,
      responsive: {
        0: {
          items: 3,
          margin: 15
        },
        600: {
          items: 3,
          margin: 15
        },
        991: {
          items: 5,
          margin: 15
        },
        1200: {
          items: 6,
          margin: 15
        }
      }
    });
  }

  $(window).on("load", function () {
    if (document.getElementById("portfolio")) {
      var $workGrid = $(".portfolio-grid").isotope({
        itemSelector: ".all"
      });
    }

    $(".portfolio-filter ul li").on("click", function () {
      $(".portfolio-filter ul li").removeClass("active");
      $(this).addClass("active");

      var data = $(this).attr("data-filter");
      $workGrid.isotope({
        filter: data
      });
    });

    var review = $(".review_part_text");
    if (review.length) {
      review.owlCarousel({
        items: 2,
        loop: true,
        dots: true,
        autoplay: true,
        margin: 40,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        nav: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          768: {
            items: 2
          }
        }
      });
    }

    $(".popup-youtube, .popup-vimeo").magnificPopup({
      // disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  });

})(jQuery);

$(document).ready(function () {

  $('#submitFilterProduct').click(function () {
    var $self = $(this);
    $self.html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>');
    $self.attr('disabled', 'disabled');
    var category = $('#productCategory').val();
    var brand = $('#productBrand').val();
    $('.productList').html(`
    <div class="loading">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>`);
    var data = {
      category: category,
      brand: brand,
      productFilter: true
    }

    $.post('ajax/ajax.php', data, function (data) {
      $self.html('Search <i class="fa fa-search" aria-hidden="true"></i>');
      $self.removeAttr('disabled');
      $('.productList').html(null);
      var arr = JSON.parse(data);
      $.each($(arr), function (key, value) {
        $('.productList').append(`
        <div class="col-lg-4 col-sm-6 p-3" data-aos="zoom-in" data-aos-duration="2000">
        <div>
            <div class="single_offer">
            <img src="assets/img/products/${value.image}.jpg" alt="product image">
            <div class="hover_text text-center">
                <h4 class="text-success my-4">${value.product} <i class="fa fa-align-right" aria-hidden="true"></i>
                </h4>
                <p class="my-4">
                  ${value.description}
                </p>
            </div>
            </div>
        </div>
        </div>
        `);
      });
    });
  });


});