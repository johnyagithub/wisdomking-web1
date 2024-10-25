$(function () {

  buttonTabCustom();
  slideList();

});

let buttonTabCustom = () => {
  $("[data-showId] button").click(function () {
    $(this).siblings().removeClass('active');
    $(this).addClass('active');

    var thisId = $(this).closest("[data-showId]").attr('data-showId');
    var Type = $(this).attr('data-type') || 'all';
    if (Type === 'all') {
      $('#' + thisId).find('[data-type]').show();
    } else {
      $('#' + thisId).find('[data-type]').siblings().hide();
      $('#' + thisId).find('[data-type="' + Type + '"]').show();
    }
  });
};

let slideList = () => {
  $('#dataCalendar>[data-item]').each(function () {
    var Month = $(this).data('item');
    const Length = $(this).find('>.item').length;

    if (Length > 0) {
      $('#slide-Month').append('<div class=\"item\">' + Month + '</div>');
    }
  });
  sliderMonth();
};

let sliderMonth = () => {
  $("#slide-Month").owlCarousel({
    margin: 20,
    nav: true,
    dots: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      }
    },
  }).on('changed.owl.carousel', function (e) {
    var selectMonth = $("#slide-Month .owl-item:nth-child(" + (e.item.index + 1) + ") .item").text();
    var Value = $('#dataCalendar>[data-item=\"' + selectMonth + '\"]').html();
    $('#slide-Day').html('').append('<div class=\"owl-carousel\">' + Value + '</div>');
    sliderDay();
  });
};
let sliderDay = () => {
  $("#slide-Day .owl-carousel").owlCarousel({
    margin: 20,
    nav: true,
    dots: false,
    lazyLoad: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 3,
      },
      667: {
        items: 4,
      },
      900: {
        items: 5,
      },
    },
  });
};