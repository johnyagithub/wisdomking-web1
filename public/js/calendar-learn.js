$(function () {

  buttonTabCustom();

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
      $('#' + thisId).find('[data-type]').hide();
      $('#' + thisId).find('[data-type*="' + Type + '"]').show();
    }
  });
};