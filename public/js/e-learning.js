$(function () {


  $(".box-courses [data-type]").each(function () {
    var type = $(this).data('type');
    var Text = $("[data-showId] button[data-type='" + type + "']").text();
    var Bg = $("[data-showId] button[data-type='" + type + "']").data('bg');
    var Color = $("[data-showId] button[data-type='" + type + "']").data('color');
    var Html = `<span class="-type" style="background: ` + Bg + `; color: ` + Color + `;">` + Text + `</span>`;
    $(this).find('.item .text').prepend(Html);
  });
  buttonTabCustom();
  slidercCourses();

});

let buttonTabCustom = () => {
  $("[data-showId] button").click(function () {
    $('[data-showId] button').removeClass('active');
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

let slidercCourses = () => {
  $(".box-courses .owl-carousel").owlCarousel({
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