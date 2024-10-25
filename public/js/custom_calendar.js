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
  $('#data-Calendar').html('');
  $('#dataCalendar>[data-item=\"' + M + '\"] .item[data-date=\"' + D + '\"] .list').each(function () {
    var Img = $(this).data('img');
    var Date = $(this).data('date');
    var View = $(this).data('view');
    var Type = '';
    $.each($(this).data('type').split(","), function (key, value) {
      Type = Type + '<span class=\"-type\">' + value + '</span>';
    });
    var IDtype = $(this).data('idtype');
    var Name = $(this).data('name');
    var Detail = $(this).data('detail');
    var link = $(this).data('link');

    var Html = `<div class=\"col-xl-6\" data-type=\"` + IDtype + `\">
						<div class=\"item\">
							<div class=\"img\">
								<img src=\"`+ Img + `\" alt=\"\">
							</div>
							<div class=\"text\">
								<div class=\"d-flex align-items-center flex-wrap\">
                  <div class=\"-event ac\"><h4>` + D + `</h4>` + getShortMonth(M) + `</div>
                  <div class=\"-event\"><h4>` + Date.split(" ")[0] + `</h4>` + getShortMonth(Date.split(" ")[1]) + `</div>
                </div>
								<div class=\"d-flex justify-content-between align-items-center flex-wrap\">
									<div class=\"-date\">`+ Date + `</div>
									<div class=\"-view\">`+ View + `</div>
								</div>
								<div class=\"my-3\">`+ Type + `</div>
								<h5 class=\"text-line2\">`+ Name + `</h5>
								<p class=\"text-line4\">`+ Detail + `</p>
								<a class=\"btn btn-light px-4 btn-sm rounded-pill\" href=\"`+ link + `\">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>
					</div>`;
    $('#data-Calendar').append(Html);
  });
  $("[data-showId] button").removeClass('active');
  $("[data-showId] button").eq(0).addClass('active');
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
      $('#' + thisId).find('[data-type]').hide();
      $('#' + thisId).find('[data-type*="' + Type + '"]').show();
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
    var Active = '';

    if (!e && i == 0 || $(this).attr('class') === 'item active') {
      Active = 'active';
      getItem(Date, selectMonth);
    }
    Html = Html + '<div class=\"item ' + Active + '\"><span>' + Day + '</span><div><h4 data-m=\"' + selectMonth + '\">' + Date + '</h4>' + getShortMonth(selectMonth) + '</div></div>';
  });
  $('#slide-Day').html('').append('<div class=\"owl-carousel\">' + Html + '</div>');
  sliderDay();
}

let sliderDay = () => {
  $("#slide-Day .owl-carousel").owlCarousel({
    margin: 0,
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

let getShortMonth = (month) => {
  switch (month) {
    case 'มกราคม': return 'ม.ค.';
    case 'กุมภาพันธ์': return 'ก.พ.';
    case 'มีนาคม': return 'มี.ค.';
    case 'เมษายน': return 'เม.ย.';
    case 'พฤษภาคม': return 'พ.ค.';
    case 'มิถุนายน': return 'มิ.ย.';
    case 'กรกฎาคม': return 'ก.ค.';
    case 'สิงหาคม': return 'ส.ค.';
    case 'กันยายน': return 'ก.ย.';
    case 'ตุลาคม': return 'ต.ค.';
    case 'พฤศจิกายน': return 'พ.ย.';
    case 'ธันวาคม': return 'ธ.ค.';
    default: return month;
  }
}