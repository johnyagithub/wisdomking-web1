$(function () {

  (function (e) {
    e.fn.visible = function (t, n, r) {
      var i = e(this).eq(0),
        s = i.get(0),
        o = e(window),
        u = o.scrollTop(),
        a = u + o.height(),
        f = o.scrollLeft(),
        l = f + o.width(),
        c = i.offset().top,
        h = c + i.height(),
        p = i.offset().left,
        d = p + i.width(),
        v = t === true ? h : c,
        m = t === true ? c : h,
        g = t === true ? d : p,
        y = t === true ? p : d,
        b = n === true ? s.offsetWidth * s.offsetHeight : true,
        r = r ? r : "both";
      if (r === "both")
        return !!b && m <= a && v >= u && y <= l && g >= f;
      else if (r === "vertical")
        return !!b && m <= a && v >= u;
      else if (r === "horizontal")
        return !!b && y <= l && g >= f
    }
  })(jQuery)

  jQuery(window).scroll(function (event) {

    jQuery("#firstbox").each(function () {
      if ($("#firstbox").visible(true)) {
        $('body').removeClass("down");
      } else {
        $('body').addClass("down");
      }
    });
  });

  styleSwitch();
  textSize();
  sliderItem();
  sliderBanner();
  sliderMarket();
  sliderOurmuseum();
  sliderNews();
  sliderAgricultural();
  sliderLearning();

  if (localStorage.getItem("cookie") != "allow") {
    setTimeout(function () {
      $("#cookie-con-head").addClass("show");
    }, 5000);
  }

  $("[data-modal=\"#video\"]").click(function () {
    src = $(this).attr('data-src');
    type = $(this).attr('data-type') || 0;

    if (type == 'video') {
      $('#video video').show().attr('src', src);
      $('#video iframe').hide();
    } else {
      $('#video iframe').show().attr('src', src);
      $('#video video').hide();
    }

    $('#video').modal('show');
  });
  $('#video').on('hidden.bs.modal', function () {
    $('#video video,#video iframe').attr('src', '');
  });

  $('[data-toggle="class-toggle-custom"]').on("click", function () {
    $($(this).data("target")).toggleClass("active");
  });
  $(document).on("click", ".front-header-search .box-shadow", function () {
    $(this).closest(".front-header-search").removeClass("active");
  });

  $("header .navbar-collapse+.box-shadow").click(function () {
    $("header button.navbar-toggler").click();
  });

  $('[data-toggle="tooltip"]').tooltip();
});

window.onload = function () {
  setTimeout(() => {
    $('body').addClass('Loaded');
  }, 200);
}

let styleSwitch = () => {
  if (localStorage.getItem("styleSwitch") != null) {
    ThisActive = 'ul.styleswitch li[data-li=' + localStorage.getItem("styleSwitch") + ']'
    $(ThisActive).siblings().removeClass('active');
    $(ThisActive).addClass('active');
    mySwitch(localStorage.getItem("styleSwitch"));
  }

  $("ul.styleswitch li").click(function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    styleName = $(this).data('li');
    localStorage.setItem("styleSwitch", styleName);
    mySwitch(styleName);
  });
};
let mySwitch = (Name) => {
  $('link[rel*=style][title]').each(function () {
    this.disabled = true;
    if (this.getAttribute('title') == Name) this.disabled = false;
  });
};

let textSize = () => {
  if (localStorage.getItem("textSize") != "") {
    ThisActive = 'ul.textsizer li[data-li=' + localStorage.getItem("textSizeLi") + ']'
    $(ThisActive).siblings().removeClass('active');
    $(ThisActive).addClass('active');
    $('html').css('font-size', localStorage.getItem("textSize"));
  }

  $("ul.textsizer li").click(function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');

    localStorage.setItem("textSizeLi", $(this).data('li'));
    switch ($(this).data('li')) {
      case 'mediumFont':
        $('html').css('font-size', '14px');
        localStorage.setItem("textSize", "14px");
        break;
      case 'largeFont':
        $('html').css('font-size', '18px');
        localStorage.setItem("textSize", "18px");
        break;
      default:
        $('html').css('font-size', '');
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
  $(".box-Market .owl-carousel").owlCarousel({
    margin: 0,
    nav: true,
    // center: true,
    // startPosition: 1,
    dots: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 3,
      },
    },
  }).on('changed.owl.carousel', function (e) {
    $(".box-Market .owl-carousel .owl-item:nth-child(" + (e.item.index + 1) + ") .item").click();
  });
  $(".box-Market .owl-carousel .item").click(function () {
    $(".box-Market .owl-carousel .item").removeClass('active');
    $(this).addClass('active');

    var imgMarket = $(this).data('img');
    var subjectMarket = $(this).data('subject');
    var dateMarket = $(this).data('date');
    $('#Market-show .item-show img').fadeOut(function () {
      $(this).attr('src', imgMarket).fadeIn();
    });
    $('#Market-show .item-show .text h5').text(subjectMarket);
    $('#Market-show .item-show .text .-date').text(dateMarket);
  });
};

let sliderItem = () => {
  $(".box-slide .owl-carousel").each(function () {
    $(this).owlCarousel({
      margin: 20,
      nav: true,
      dots: false,
      lazyLoad: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: $(this).attr("data-itemSlide-mobile") || 2,
        },
        667: {
          items: $(this).attr("data-itemSlide-Tablet") || 3,
        },
        900: {
          items: $(this).attr("data-itemSlide-pc") || 4,
        },
      },
    });
  });
};

let sliderOurmuseum = () => {
  $(".box-Ourmuseum .owl-carousel").owlCarousel({
    margin: 20,
    nav: true,
    dots: true,
    // center:true,
    // loop:true,
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

let sliderNews = () => {
  $(".box-News .owl-carousel").owlCarousel({
    margin: 20,
    nav: true,
    dots: true,
    // center:true,
    // loop:true,
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

let sliderLearning = () => {
  $(".box-Learning .owl-carousel").owlCarousel({
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
      }
    },
  });
  $('.box-Learning .o-prev').click(function () {
    $(this).closest(".box-Learning").find(".owl-prev").click();
  });
  $('.box-Learning .o-next').click(function () {
    $(this).closest(".box-Learning").find(".owl-next").click();
  });
};

let sliderAgricultural = () => {
  $(".box-Agricultural-slide .owl-carousel").owlCarousel({
    margin: 20,
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
      }
    },
  });
};