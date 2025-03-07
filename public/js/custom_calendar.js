$(function () {

  $('#dataCalendar>[data-item]').each(function () {
    var Month = $(this).data('item');
    const Length = $(this).find('>.item').length;

    if (Length > 0) {
      $('#slide-Month').append('<div class=\"item\">' + Month + '</div>');
    }
  });

  sliderMonth();
  mySelectMonth();

  $(document).on("click", "#slide-Day .item", function () {
    // active ปุ่มที่กด slide-Day
    $('#slide-Day .item').removeClass('active');
    $(this).addClass('active');

    var Start = $(this).find('h4').data('m');
    // เก็บ active ตอนกด
    $('#dataCalendar .item').removeClass('active');
    $('#dataCalendar .item[data-start=\"' + Start + '\"]').addClass('active');
    // ดึง list จากวันที่กดเอาไปสร้างมาแสดง
    getItem(Start);
  });

});

let getItem = (Start) => {
  var Item = $('#dataCalendar .item[data-start=\"' + Start + '\"]');
  var End = Item.data('end');
  if ($('#data-Calendar .owl-carousel').length > 0) {
    if ($(window).width() < 1025) {
      $('#data-Calendar .owl-carousel').html('');
    } else {
      $('#data-Calendar .owl-carousel').remove();
    }
  } else {
    $('#data-Calendar').html('');
  }
  let AllHtml = '';
  Item.find('.list').each(function () {
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
            <a href=\"`+ Img + `\" class=\"img\" data-fancybox=\"Calendar\" data-caption=\"` + Name + `\">
              <img src=\"`+ Img + `\" alt=\"\">
            </a>
            <div class=\"text\">
              <div class=\"d-flex align-items-center flex-wrap\">
                <div class=\"-event ac\"><h4>` + Start.split(" ")[0] + `</h4>` + getShortMonth(Start.split(" ")[1]) + `</div>
                <div class=\"-event\"><h4>` + End.split(" ")[0] + `</h4>` + getShortMonth(End.split(" ")[1]) + `</div>
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
    AllHtml += Html;
  });
  if ($('#data-Calendar .owl-carousel').length > 0 && $(window).width() < 1025) {
    CalendarCarousel(AllHtml);
  } else {
    $('#data-Calendar').append(AllHtml);
  }
  $("[data-showId] button").removeClass('active');
  $("[data-showId] button").eq(0).addClass('active');
};

let CalendarCarousel = (AllHtml) => {
  var $carousel = $("#data-Calendar .owl-carousel");

  // ทำลาย Carousel เดิม
  if ($carousel.hasClass("owl-loaded")) {
    $carousel.trigger('destroy.owl.carousel').removeClass('owl-loaded').find('.owl-stage-outer').children().unwrap();
  }

  // เพิ่มเนื้อหาลงใน Carousel
  $carousel.html(AllHtml);

  // ใช้ imagesLoaded เพื่อรอการโหลดของภาพ
  $carousel.imagesLoaded(function() {
    // สร้าง Owl Carousel ใหม่เมื่อภาพโหลดเสร็จ
    $carousel.owlCarousel({
      nav: false,
      dots: true,
      autoHeight: true,
      lazyLoad: true,
      items: 1,
      margin: 10
    });
  });
};

let sliderMonth = () => {
  var owlMonth = $("#slide-Month").owlCarousel({
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
  $('#dataCalendar>[data-item]').each(function (index) {
    let currentMonth = new Date().getMonth();// เดือนปัจจบัน
    const fullMonths = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
    
    var Month = $(this).data('item');
    if(fullMonths[currentMonth] === Month) {
      setTimeout(function() {
        owlMonth.trigger("to.owl.carousel", [index, 300]);
        $('#slide-Day [data-m*='+fullMonths[currentMonth]+']').eq(0).click();
      }, 500);
    }
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
    var Date = $(this).data('start');
    var Active = '';

    if (!e && i == 0 || $(this).attr('class') === 'item active') {
      Active = 'active';
      getItem(Date);
    }
    Html = Html + '<div class=\"item ' + Active + '\"><span>' + Day + '</span><div><h4 data-m=\"' + Date + '\">' + Date.split(" ")[0] + '</h4>' + getShortMonth(Date.split(" ")[1]) + '</div></div>';
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