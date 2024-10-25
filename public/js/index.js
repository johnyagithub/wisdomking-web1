$(function () {

  buttonTabCustom();
  slideList();
  mySelectMonth();

  $(document).on("click", "#slide-Day .item", function () {
    $('#slide-Day .item').removeClass('active');
    $(this).addClass('active');

    var M = $(this).find('h4').data('m');
    var D = $(this).find('h4').text();
    $('#dataCalendar .item').removeClass('active');
    $('#dataCalendar [data-item="' + M + '"] .item[data-date="' + D + '"]').addClass('active');

    getItem(D, M);
  });

});
let getItem = (D, M) => {
  console.log(D + ' ' + M);
};

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
    margin: 0,
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
    mySelectMonth(e);
  });
};

let mySelectMonth = (e) => {
  var Index = 1;
  if (e) {
    var Index = e.item.index + 1;
  }
  var selectMonth = $("#slide-Month .owl-item:nth-child(" + Index + ") .item").text();
  var Value = $('#dataCalendar>[data-item=\"' + selectMonth + '\"] .item');
  var Html = '';

  Value.each(function (i) {
    var Day = $(this).data('day');
    var Date = $(this).data('date');
    var Month = $(this).data('month');
    var Active = '';

    if (!e && i == 0 || $(this).attr('class') === 'item active') { Active = 'active' }
    Html = Html + '<div class=\"item ' + Active + '\"><span>' + Day + '</span><div><h4 data-m=\"' + selectMonth + '\">' + Date + '</h4>' + Month + '</div></div>';
  });
  $('#slide-Day').html('').append('<div class=\"owl-carousel\">' + Html + '</div>');
  sliderDay();
}

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