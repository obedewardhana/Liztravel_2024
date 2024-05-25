AOS.init({
  duration: 800,
  easing: "slide",
});

(function ($) {
  "use strict";

  var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    },
  };

  $(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: "scroll",
  });

  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  // Scrollax
  $.Scrollax();

  var carousel = function () {
    $(".carousel-car").owlCarousel({
      loop: false,
      autoplay: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: true,
      navText: [
        '<span class="ion-ios-arrow-back">',
        '<span class="ion-ios-arrow-forward">',
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
    $(".carousel-testimony").owlCarousel({
      center: true,
      loop: true,
      items: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      navText: [
        '<span class="ion-ios-arrow-back">',
        '<span class="ion-ios-arrow-forward">',
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  };
  carousel();

  $("nav .dropdown").hover(
    function () {
      var $this = $(this);
      // 	 timer;
      // clearTimeout(timer);
      $this.addClass("show");
      $this.find("> a").attr("aria-expanded", true);
      // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").addClass("show");
    },
    function () {
      var $this = $(this);
      // timer;
      // timer = setTimeout(function(){
      $this.removeClass("show");
      $this.find("> a").attr("aria-expanded", false);
      // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
      $this.find(".dropdown-menu").removeClass("show");
      // }, 100);
    }
  );

  $("#dropdown04").on("show.bs.dropdown", function () {
    console.log("show");
  });

  // scroll
  var scrollWindow = function () {
    $(window).scroll(function () {
      var $w = $(this),
        st = $w.scrollTop(),
        navbar = $(".ftco_navbar"),
        sd = $(".js-scroll-wrap");

      if (st > 150) {
        if (!navbar.hasClass("scrolled")) {
          navbar.addClass("scrolled");
        }
      }
      if (st < 150) {
        if (navbar.hasClass("scrolled")) {
          navbar.removeClass("scrolled sleep");
        }
      }
      if (st > 350) {
        if (!navbar.hasClass("awake")) {
          navbar.addClass("awake");
        }

        if (sd.length > 0) {
          sd.addClass("sleep");
        }
      }
      if (st < 350) {
        if (navbar.hasClass("awake")) {
          navbar.removeClass("awake");
          navbar.addClass("sleep");
        }
        if (sd.length > 0) {
          sd.removeClass("sleep");
        }
      }
    });
  };
  scrollWindow();

  var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    },
  };

  var counter = function () {
    $("#section-counter, .hero-wrap, .ftco-counter").waypoint(
      function (direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("ftco-animated")
        ) {
          var comma_separator_number_step =
            $.animateNumber.numberStepFactories.separator(",");
          $(".number").each(function () {
            var $this = $(this),
              num = $this.data("number");
            console.log(num);
            $this.animateNumber(
              {
                number: num,
                numberStep: comma_separator_number_step,
              },
              7000
            );
          });
        }
      },
      { offset: "95%" }
    );
  };
  counter();

  var contentWayPoint = function () {
    var i = 0;
    $(".ftco-animate").waypoint(
      function (direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("ftco-animated")
        ) {
          i++;

          $(this.element).addClass("item-animate");
          setTimeout(function () {
            $("body .ftco-animate.item-animate").each(function (k) {
              var el = $(this);
              setTimeout(
                function () {
                  var effect = el.data("animate-effect");
                  if (effect === "fadeIn") {
                    el.addClass("fadeIn ftco-animated");
                  } else if (effect === "fadeInLeft") {
                    el.addClass("fadeInLeft ftco-animated");
                  } else if (effect === "fadeInRight") {
                    el.addClass("fadeInRight ftco-animated");
                  } else {
                    el.addClass("fadeInUp ftco-animated");
                  }
                  el.removeClass("item-animate");
                },
                k * 50,
                "easeInOutExpo"
              );
            });
          }, 100);
        }
      },
      { offset: "95%" }
    );
  };
  contentWayPoint();

  // navigation
  var OnePageNav = function () {
    $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on(
      "click",
      function (e) {
        e.preventDefault();

        var hash = this.hash,
          navToggler = $(".navbar-toggler");
        $("html, body").animate(
          {
            scrollTop: $(hash).offset().top,
          },
          700,
          "easeInOutExpo",
          function () {
            window.location.hash = hash;
          }
        );

        if (navToggler.is(":visible")) {
          navToggler.click();
        }
      }
    );
    $("body").on("activate.bs.scrollspy", function () {
      console.log("nice");
    });
  };
  OnePageNav();

  $(".navbar-toggler").on("click", function () {
    $(".collapse").toggleClass("slide");
    $("body").toggleClass("overflow-hidden");
    
  });
  
  $(document).click(function(e) {
        var container = $(".navbar-toggler");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".collapse").removeClass("slide");
            $(".collapse").removeClass("show");
            $("body").removeClass("overflow-hidden");
        }
    });

  // magnific popup
  $(".image-popup").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom", // class to remove default margin from left and right side
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
    },
  });

  $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  $("#book_pick_date,#book_off_date").datepicker({
    format: "d-m-yyyy",
    autoclose: true,
  });

  $("#book_pick_date")
    .datepicker()
    .on("changeDate", function (ev) {
      $("#book_pick_date").removeClass("error").next("label.error").remove();
    });

  $("#book_off_date")
    .datepicker()
    .on("changeDate", function (ev) {
      $("#book_off_date").removeClass("error").next("label.error").remove();
    });

  var d = new Date();
  $("#pick_time").timepicker({
    timeFormat: "H:i",
  });
  $("#drop_time").timepicker({
    timeFormat: "H:i",
  });
  $("#fix_picktime").timepicker({
    timeFormat: "H:i",
  });
  $("#fix_droptime").timepicker({
    timeFormat: "H:i",
  });

  $("#fix_pickdate,#fix_dropdate").datepicker({
    format: "d-m-yyyy",
    autoclose: true,
  });

  $("#fix_pickdate")
    .datepicker()
    .on("changeDate", function (ev) {
      $("#fix_pickdate").removeClass("error").next("label.error").remove();
      var curpick = $("#fix_pickdate").val();

      var datepick = curpick.split("-");
      var formatpick = datepick[1] + "-" + datepick[0] + "-" + datepick[2];
      var k = new Date(formatpick);
      var newpickdate = moment(k).format("YYYY-MM-DD");

      $("#fix_pickdate").attr("data-realpick", newpickdate);
    });

  $("#fix_dropdate")
    .datepicker()
    .on("changeDate", function (ev) {
      $("#fix_dropdate").removeClass("error").next("label.error").remove();
      var curdrop = $("#fix_dropdate").val();
      var datedrop = curdrop.split("-");
      var formatdrop = datedrop[1] + "-" + datedrop[0] + "-" + datedrop[2];
      var d = new Date(formatdrop);
      var newdropdate = moment(d).format("YYYY-MM-DD");

      $("#fix_dropdate").attr("data-realdrop", newdropdate);
    });

  $("#order-form").validate({
    rules: {
      location: {
        required: true,
      },
      book_pick_date: {
        required: true,
      },
      book_off_date: {
        required: true,
      },
      pick_time: {
        required: true,
      },
      drop_time: {
        required: true,
      },
    },
    messages: {
      location: {
        required: "*Pilih lokasi.",
      },
      book_pick_date: {
        required: "*Masukkan tanggal mulai.",
      },
      book_off_date: {
        required: "*Masukkan tanggal selesai.",
      },
      pick_time: {
        required: "*Masukkan waktu mulai.",
      },
      drop_time: {
        required: "*Masukkan selesai.",
      },
    },
    submitHandler: function (form) {
      $("#car-section").removeClass("d-none");

      $("html, body").animate(
        {
          scrollTop: $("#car-section").offset().top - 100,
        },
        500
      );

      $("[id^='btnBook_']").attr(
        "data-location",
        jQuery("select[name=location]").val()
      );
      $("[id^='btnBook_']").attr(
        "data-pickdate",
        jQuery("input[name=book_pick_date]").val()
      );
      $("[id^='btnBook_']").attr(
        "data-picktime",
        jQuery("input[name=pick_time]").val()
      );
      $("[id^='btnBook_']").attr(
        "data-dropdate",
        jQuery("input[name=book_off_date]").val()
      );
      $("[id^='btnBook_']").attr(
        "data-droptime",
        jQuery("input[name=drop_time]").val()
      );
    },
    errorPlacement: function (label, element) {
      label.addClass("error");
      element.after(label);
    },
  });

  $("[id^='btnBook_']").on("click", function () {
    var id = $(this).attr("data-product");
    var location = $(this).attr("data-location");
    var service = $(this).attr("data-product");
    var proname = $(this).attr("data-proname");
    var picktime = $(this).attr("data-picktime");
    var droptime = $(this).attr("data-droptime");
    var pickdate = $(this).attr("data-pickdate");
    var dropdate = $(this).attr("data-dropdate");
    var transmission = $(this).attr("data-transmission");
    var seat = $(this).attr("data-seat");
    var wifi = $(this).attr("data-wifi");
    var hotwater = $(this).attr("data-hotwater");
    var photo = $(this).attr("data-photo");
    var price = $(this).attr("data-price");

    $("#detailCar").empty();
    $("#fix_location").val("");
    $("#fix_service").val("");
    $("#fix_pickdate").val("");
    $("#fix_picktime").val("");
    $("#fix_dropdate").val("");
    $("#fix_droptime").val("");

    var html =
      '<div class="detail-car"><img src="' +
      photo +
      '">' +
      '<div class="d-flex flex-column justify-content-center ml-4">' +
      '<p class="text-dark font-weight-bold mb-0">' +
      proname +
      "</p>" +
      '<div class="d-flex small mr-2"><span class="text-orange flaticon-car-seat price"></span><span class="ml-1">' +
      seat +
      " seats</span></div>" +
      '<div class="d-flex small"><span class="text-orange flaticon-pistons price mr-1"></span>' +
      transmission +
      "</div>" +
      '<div class="d-flex"><p class="text-orange small mb-0 mr-1">' +
      price +
      "</p> <span class='small'>/hari</span></div>" +
      "</div>" +
      "</div>";
      
    var htmlroom =
      '<div class="detail-car"><img src="' +
      photo +
      '">' +
      '<div class="d-flex flex-column justify-content-center  ml-4">' +
      '<p class="text-dark font-weight-bold mb-0">' +
      proname +
      "</p>" +
      '<div class="d-flex small align-items-center "><i class="text-orange fa fa-shower mr-1"></i><span class="ml-1">' +
      wifi +
      "</span></div>" +
      '<div class="d-flex small align-items-center"><i class="text-orange fa fa-wifi "></i><span class="ml-1">' +
      hotwater +
      "</span></div>" +
      '<div class="d-flex"><p class="text-orange small mb-0 mr-1">' +
      price +
      "</p> <span class='small'>/hari</span></div>" +
      "</div>" +
      "</div>";

    if(wifi != null){
        $("#detailCar").append(htmlroom);
    }else{
        $("#detailCar").append(html);
    }

    $("#fix_location").val(location);
    $("#fix_service").val(service);
    $("#fix_picktime").val(picktime);
    $("#fix_droptime").val(droptime);

    $("#fix_pickdate").datepicker("update", pickdate);
    $("#fix_dropdate").datepicker("update", dropdate);

    var curpick = $("#fix_pickdate").val();
    var datepick = curpick.split("-");
    var formatpick = datepick[1] + "-" + datepick[0] + "-" + datepick[2];
    var k = new Date(formatpick);
    var newpickdate = moment(k).format("YYYY-MM-DD");

    var curdrop = $("#fix_dropdate").val();
    var datedrop = curdrop.split("-");
    var formatdrop = datedrop[1] + "-" + datedrop[0] + "-" + datedrop[2];
    var d = new Date(formatdrop);
    var newdropdate = moment(d).format("YYYY-MM-DD");

    $("#fix_pickdate").attr("data-realpick", newpickdate);
    $("#fix_dropdate").attr("data-realdrop", newdropdate);
  });

  $("#confirm-form").validate({
    rules: {
      fix_name: {
        required: true,
      },
      fix_handphone: {
        required: true,
      },
      fix_location: {
        required: true,
      },
      fix_pickdate: {
        required: true,
      },
      fix_dropdate: {
        required: true,
      },
      fix_picktime: {
        required: true,
      },
      fix_droptime: {
        required: true,
      },
    },
    messages: {
      fix_name: {
        required: "*Masukkan nama lengkap.",
      },
      fix_handphone: {
        required: "*Masukkan no hp. aktif.",
      },
      fix_location: {
        required: "*Pilih lokasi.",
      },
      fix_pickdate: {
        required: "*Masukkan tanggal mulai.",
      },
      fix_dropdate: {
        required: "*Masukkan tanggal selesai.",
      },
      fix_picktime: {
        required: "*Masukkan waktu mulai.",
      },
      fix_droptime: {
        required: "*Masukkan selesai.",
      },
    },
    submitHandler: function (form) {
      var form = new FormData();
      form.append("name", jQuery("input[name=fix_name]").val());
      form.append("service", jQuery("input[name=fix_service]").val());
      form.append("status", "Waiting list");
      form.append("handphone", jQuery("input[name=fix_handphone]").val());
      form.append(
        "startdate",
        jQuery("input[name=fix_pickdate]").attr("data-realpick")
      );
      form.append(
        "enddate",
        jQuery("input[name=fix_dropdate]").attr("data-realdrop")
      );
      form.append("starttime", jQuery("input[name=fix_picktime]").val());
      form.append("endtime", jQuery("input[name=fix_droptime]").val());
      form.append("location", jQuery("select[name=fix_location]").val());

      jQuery.ajax({
        url: "Main/insert/",
        method: "POST",
        data: form,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (data) {
          if (data.status) {
            jQuery("#modalBook").modal("toggle");
            Swal.fire("Pesanan kami terima.", data.msg, "success").then(
              (result) => {
                location.reload();
              }
            );
          } else {
            Swal.fire("Gagal", data.msg, "error");
          }
        },
      });
    },
    errorPlacement: function (label, element) {
      label.addClass("error");
      element.after(label);
    },
  });

  $("#partnership-form").validate({
    rules: {
      partner_name: {
        required: true,
      },
      partner_phone: {
        required: true,
      },
      partner_type: {
        required: true,
      },
    },
    messages: {
      partner_name: {
        required: "*Masukkan nama anda/Instansi.",
      },
      partner_phone: {
        required: "*Masukkan Nomor handphone aktif.",
      },
      partner_type: {
        required: "*Masukkan jenis kerjasama.",
      },
    },
    submitHandler: function (form) {
      var form = new FormData();
      form.append("name", jQuery("input[name=partner_name]").val());
      form.append("no", jQuery("input[name=partner_phone]").val());
      form.append("type", jQuery("select[name=partner_type]").val());

      jQuery.ajax({
        url: "Main/partnership/",
        method: "POST",
        data: form,
        dataType: "json",
        processData: false,
        contentType: false,
        success: function (data) {
          if (data.status) {
            Swal.fire("Tawaran anda terkirim.", data.msg, "success").then(
              (result) => {
                location.reload();
                $("html, body").animate({ scrollTop: 0 }, "slow");
              }
            );
          } else {
            Swal.fire("Gagal", data.msg, "error");
          }
        },
      });
    },
    errorPlacement: function (label, element) {
      label.addClass("error");
      element.after(label);
    },
  });

  // Gradients

  $("#demo").gradient({
    colors: ["#FDC183", "#F2884D", "#FED6AE", "#FBEFE3"],
    static: false,
  });
  
  // Video js
  videojs("video-player", {
      controls: true,
      autoplay: false
    });

  // Show
  $(".modal").on("shown.bs.modal", function () {});

  $(".modal").on("hidden.bs.modal", function () {});
})(jQuery);
