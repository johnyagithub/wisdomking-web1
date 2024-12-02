$(function () {
  $(window).bind("mousewheel", function (event) {
    if (event.originalEvent.wheelDelta >= 0) {
      $("body").removeClass("down");
    } else {
      $("body").addClass("down");
    }
  });

  mySubmenu();
  FilterSearch();
  styleSwitch();
  textSize();
  buttonTabCustom();
  slideNavTabs();
  sliderItem();
  sliderBanner();
  sliderMarket();
  sliderAgricultural();
  sliderMuseum();
  sliderLearning();
  sliderShow();
  if ($(window).width() > 1025) {
    Activitty();
  }

  if (localStorage.getItem("cookie") != "allow") {
    setTimeout(function () {
      $("#cookie-con-head").addClass("show");
    }, 5000);
  }

  $('[data-modal="#video"]').click(function () {
    src = $(this).attr("data-src");
    type = $(this).attr("data-type") || 0;

    if (type == "video") {
      $("#video video").show().attr("src", src);
      $("#video iframe").hide();
    } else {
      $("#video iframe").show().attr("src", src);
      $("#video video").hide();
    }

    $("#video").modal("show");
  });
  $("#video").on("hidden.bs.modal", function () {
    $("#video video,#video iframe").attr("src", "");
  });

  $('[data-toggle="class-toggle-custom"]').on("click", function () {
    $($(this).data("target")).toggleClass("active");
  });

  $("header .navbar-collapse+.box-shadow").click(function () {
    $("header button.navbar-toggler").click();
  });

  $(".slide-show .hide-next").click(function () {
    $(".slide-show").find(".owl-prev").click();
  });
  $(".slide-show .hide-prev").click(function () {
    $(".slide-show").find(".owl-next").click();
  });

  $(".table-responsive,.table-responsive2").each(function () {
    if ($(this).width() < $(this).find("table.table").width()) {
      $(this).wrap('<div class="b-slip"></div>').before(`
        <div class="--slip">
          <img src="../../public/images/slip.png" alt="">
          <span>เลื่อนซ้าย-ขวาเพื่อดูข้อมูลภายในตาราง</span>
        </div>
      `);
    }
  });

  $('[data-toggle="tooltip"]').tooltip();

  $("a[href*='#']").click(function () {
    ScrollTop($(this).attr("href"));
    $("body").addClass("down");
  });

  if (getParameterByName("param") !== "") {
    $(
      "button[data-type=" +
        getParameterByName("param") +
        "],button[data-target='#" +
        getParameterByName("param") +
        "']"
    ).click();
  }
});

window.onload = function () {
  setTimeout(() => {
    $("body").addClass("Loaded");
  }, 200);
};

let ScrollTop = (index) => {
  if ($(window).width() < 768) {
    var e = $(index).offset().top - ($("header").height() + 10);
  } else if ($(window).width() < 1024) {
    var e = $(index).offset().top - ($("header").height() + 120);
  } else {
    var e = $(index).offset().top - ($("header").height() + 70);
  }
  $("html,body").animate(
    {
      scrollTop: e,
    },
    "1000"
  );
  return false;
};

let FilterSearch = () => {
  if ($(window).width() < 1024) {
    $(".box-filter-search")
      .wrap('<div class="box-filterSearch"></div>').parent()
      .prepend('<div class="--filter-search"><img src="../../public/images/icon-search.png" alt=""><h5>ตัวกรอง</h5></div>')
      .find(".box-filter-search").hide();
    $(".box-filterSearch .--filter-search").click(function () {
      $(this).toggleClass("active");
      $(".box-filter-search").slideToggle();
    });
  }
};

let getParameterByName = (name) => {
  const url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  const regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)");
  const results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return "";
  return decodeURIComponent(results[2].replace(/\+/g, " "));
};

let styleSwitch = () => {
  if (localStorage.getItem("styleSwitch") != null) {
    ThisActive =
      "ul.styleswitch li[data-li=" + localStorage.getItem("styleSwitch") + "]";
    $(ThisActive).siblings().removeClass("active");
    $(ThisActive).addClass("active");
    mySwitch(localStorage.getItem("styleSwitch"));
  }

  $("ul.styleswitch li").click(function () {
    $(this).siblings().removeClass("active");
    $(this).addClass("active");
    styleName = $(this).data("li");
    localStorage.setItem("styleSwitch", styleName);
    mySwitch(styleName);
  });
};
let mySwitch = (Name) => {
  $("link[rel*=style][title]").each(function () {
    this.disabled = true;
    if (this.getAttribute("title") == Name) this.disabled = false;
  });
};

let textSize = () => {
  if (localStorage.getItem("textSize") != "") {
    ThisActive =
      "ul.textsizer li[data-li=" + localStorage.getItem("textSizeLi") + "]";
    $(ThisActive).siblings().removeClass("active");
    $(ThisActive).addClass("active");
    $("body").css("font-size", localStorage.getItem("textSize"));
  }

  $("ul.textsizer li").click(function () {
    $(this).siblings().removeClass("active");
    $(this).addClass("active");

    localStorage.setItem("textSizeLi", $(this).data("li"));
    switch ($(this).data("li")) {
      case "mediumFont":
        $("body").css("font-size", "14px");
        localStorage.setItem("textSize", "14px");
        break;
      case "largeFont":
        $("body").css("font-size", "18px");
        localStorage.setItem("textSize", "18px");
        break;
      default:
        $("body").css("font-size", "");
        localStorage.removeItem("textSize");
    }
  });
};

let setcookieuser = (x) => {
  $("#cookie-con-head").removeClass("show");
  if (x == "Allow") {
    localStorage.setItem("cookie", "allow");
  }
};

let Activitty = () => {
  $(".box-Agricultural-slide").mousemove(function (event) {
    var h = $(this).height();
    var w = $(this).width();
    var t = (event.clientY - h / 2) * -1;
    var l = (event.clientX - w / 2) * -1;
    $(".box-Agricultural-slide .item .text").css(
      "transform",
      "translate(" + l / 40 + "px, " + t / 40 + "px)"
    );
  });
};

let buttonTabCustom = () => {
  $("[data-showId] button").click(function () {
    $("[data-showId] button").removeClass("active");
    $(this).addClass("active");

    var thisId = $(this).closest("[data-showId]").attr("data-showId");
    var Type = $(this).attr("data-type") || "all";
    if (Type === "all") {
      $("#" + thisId)
        .find("[data-type]")
        .hide();
      $("#" + thisId)
        .find("[data-type]:not(.no-all)")
        .show();
    } else {
      $("#" + thisId)
        .find("[data-type]")
        .hide();
      $("#" + thisId)
        .find('[data-type*="' + Type + '"]')
        .show();
    }
  });
};

let sliderBanner = () => {
  $(".box-banner .owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
    },
    afterAction: (current) => {
      current.find("video").get(0).play();
    },
  });
};

let sliderMarket = () => {
  $(".box-Market .owl-carousel")
    .owlCarousel({
      margin: 0,
      nav: true,
      // center: true,
      // startPosition: 1,
      dots: false,
      lazyLoad: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
        },
        667: {
          items: 3,
        },
        1024: {
          items: 2,
        },
        1400: {
          items: 3,
        },
      },
    })
    .on("changed.owl.carousel", function (e) {
      $(
        ".box-Market .owl-carousel .owl-item:nth-child(" +
          (e.item.index + 1) +
          ") .item"
      ).click();
    });
  $(".box-Market .owl-carousel .item").click(function () {
    $(".box-Market .owl-carousel .item").removeClass("active");
    $(this).addClass("active");

    var imgMarket = $(this).data("img");
    var subjectMarket = $(this).data("subject");
    var dateMarket = $(this).data("date");
    $("#Market-show .item-show img").fadeOut(function () {
      $(this).attr("src", imgMarket).fadeIn();
    });
    $("#Market-show .item-show .text h5").text(subjectMarket);
    $("#Market-show .item-show .text .-date").text(dateMarket);
  });
};

let sliderItem = () => {
  $(".box-slide .owl-carousel").each(function () {
    $(this).owlCarousel({
      nav: true,
      dots: true,
      lazyLoad: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: $(this).attr("data-itemSlide-mobile") || 2,
          margin: 10,
        },
        667: {
          items: $(this).attr("data-itemSlide-Tablet") || 3,
          margin: 15,
        },
        900: {
          items: $(this).attr("data-itemSlide-pc") || 4,
          margin: 20,
        },
      },
    });
  });
};

let slideNavTabs = () => {
  var $owl = $(".box-navTabs .owl-carousel").owlCarousel({
    margin: 10,
    nav: true,
    dots: false,
    mouseDrag: false,
    touchDrag: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
      },
      667: {
        autoWidth: true,
      },
    },
  });
  setTimeout(function () {
    $owl.trigger("refresh.owl.carousel");
  }, 0);
  $(".box-navTabs .owl-carousel .owl-item").click(function () {
    $(this)
      .siblings()
      .find(".nav-link")
      .removeClass("active")
      .attr("aria-selected", false);
  });
};

let sliderLearning = () => {
  $(".box-Learning:not(.box-slide) .owl-carousel").owlCarousel({
    margin: 20,
    nav: true,
    dots: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
    },
  });
  $(".box-Learning:not(.box-slide) .o-prev").click(function () {
    $(this).closest(".box-Learning").find(".owl-prev").click();
  });
  $(".box-Learning:not(.box-slide) .o-next").click(function () {
    $(this).closest(".box-Learning").find(".owl-next").click();
  });
};

let sliderAgricultural = () => {
  $(".box-Agricultural-slide .owl-carousel").owlCarousel({
    margin: 0,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
    },
  });
};

let sliderMuseum = () => {
  if ($(window).width() < 1025) {
    $(".box-museum .owl-carousel").owlCarousel({
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      lazyLoad: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        667: {
          items: 2,
        },
      },
    });
  } else {
    $(".box-museum .owl-carousel").removeClass("owl-carousel");
  }
};

let sliderShow = () => {
  $(".slide-show .owl-carousel").owlCarousel({
    margin: 20,
    nav: true,
    dots: true,
    loop: true,
    center: true,
    // autoplay: true,
    // autoplayTimeout: 5000,
    // autoplayHoverPause: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      667: {
        items: 2,
      },
      900: {
        items: 3,
      },
    },
  });
};

let mySubmenu = () => {
  if ($(window).width() > 1024) {
    // เพิ่มการเปิด dropdown เมื่อ hover
    $("header .dropdown,header .btn-group").hover(
      function () {
        $(this).addClass("show").find(".dropdown-menu").addClass("show");
      },
      function () {
        $(this).removeClass("show").find(".dropdown-menu").removeClass("show");
      }
    );
  } else {
    $("#navbarMain").append('<div id="active-submenu"></div>');
    $("header #navbarMain .submenu .group").click(function () {
      $("#navbarMain").css("overflow", "hidden");
      $("#active-submenu")
        .addClass("active")
        .css("top", $("#navbarMain").scrollTop())
        .html($(this).html());
      if ($(this).hasClass("active")) {
        $(this).toggleClass("active");
      } else {
        $(this).closest(".submenu").find(".group").removeClass("active");
        $(this).addClass("active");
      }
    });
    $(document).on("click", "#active-submenu > span", function () {
      $(this).closest("#active-submenu").removeClass("active");
      $("#navbarMain").css("overflow", "");
    });
  }

  $('.dropdown[data-bs-auto-close="false"] .dropdown-toggle').on(
    "click",
    function (e) {
      e.stopPropagation();
      const $dropdown = $(this).closest(".dropdown");
      $(".dropdown.show")
        .not($dropdown)
        .removeClass("show")
        .find(".dropdown-menu")
        .removeClass("show");
      $dropdown.toggleClass("show").find(".dropdown-menu").toggleClass("show");
    }
  );
};
