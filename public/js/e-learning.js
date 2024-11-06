$(function () {

  $(".box-courses [data-type]").each(function () {
    var type = $(this).data('type');
    var Text = $("[data-showId] button[data-type='" + type + "']").text();
    var Bg = $("[data-showId] button[data-type='" + type + "']").data('bg');
    var Color = $("[data-showId] button[data-type='" + type + "']").data('color');
    var Html = `<span class="-type border0" style="background: ` + Bg + `; color: ` + Color + `;">` + Text + `</span>`;
    $(this).find('.item .text').prepend(Html);
  });

});