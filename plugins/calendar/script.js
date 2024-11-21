$(function () {
  if (!window.invalidDate) {
    console.error("ไม่พบ invalidDate กรุณาตรวจสอบลำดับการโหลดของสคริปต์");
  } else {
    // กำหนดวันที่ปัจจุบัน
    let today = new Date();

    $('.dateParent').datepicker({
      dateFormat: 'dd/mm/yy',
      inline: true,
      dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
      dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
      monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
      monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
      beforeShowDay: function (date) {
        var dateString = date.toDateString();

        // กำหนด targetDate จาก date ที่ส่งเข้ามา
        let targetDate = new Date(date);

        // ค้นหาวันที่ตรงจาก window.invalidDate
        let matchedDate = window.invalidDate.find(d => d.date === dateString);

        // ตรวจสอบว่า matchedDate มีข้อมูลหรือไม่
        const morning = matchedDate && matchedDate.morning ? matchedDate.morning : [];
        const evening = matchedDate && matchedDate.evening ? matchedDate.evening : [];

        // อนุญาตให้เลือกวันอื่นๆ ยกเว้นวันอาทิตย์
        var day = date.getDay();  // ตรวจสอบวันในสัปดาห์

        if ($(".dateParent").data("click") === "doNot") {
          setTimeout(function () {
            // ค้นหา <td> ที่ตรงกับเดือนและปีของ targetDate
            let $targetTd = $(`td[data-month="${targetDate.getMonth()}"][data-year="${targetDate.getFullYear()}"]`);

            // ค้นหา <a> ภายใน <td> ที่ตรงกับวันที่
            let $targetA = $targetTd.find(`a[data-date="${targetDate.getDate()}"]`);

            let today = new Date();
            today.setHours(0, 0, 0, 0);
            if (targetDate >= today && $targetA.next('.pin').length === 0) {
              const createPinLink = (data, className) => `
                <a class="${className}" href="javascript:;" data-i="${data.length}">
                  ${data.length}
                  <ol>${data.map(value => `<li>คุณ <b>${value}</b></li>`).join('')}</ol>
                </a>
              `;

              $targetA.after(`
                <div class="pin">
                  ${createPinLink(morning, 'a-morning')}
                  ${createPinLink(evening, 'a-evening')}
                </div>
              `);
            }
          }, 0);
          if ((morning.length + evening.length) !== 0) {
            return [day !== 0, "have ui-datepicker-unselectable"];
          }
          return [day !== 0, "ui-datepicker-unselectable"];
        } else {
          var dateString = date.toDateString();
          // เช็คว่าวันที่อยู่ใน invalidDate หรือไม่
          if (invalidDate.includes(dateString)) {
            return [true, "have"]; // เฉพาะวันที่อยู่ใน invalidDate เท่านั้นที่สามารถเลือกได้
          }
          return [false, ""]; // วันที่อื่น ๆ กดไม่ได้
        }
      },
      onChangeMonthYear: function (year, month, inst) {
        // เปลี่ยนปีที่แสดงใน header เป็นปีไทย
        var thaiYear = year + 543; // แปลงปีเป็นปีไทย
        setTimeout(function () {
          inst.dpDiv.find('.ui-datepicker-year').text(thaiYear); // เปลี่ยนปีที่แสดง
          $(".box-calendar-style table.ui-datepicker-calendar tbody td a.ui-state-active").click();
        }, 0);
        // เรียกใช้ฟังก์ชันอัปเดตปุ่ม "Prev" และ "Next"
        updateMonthButton(inst, 'prev');
        updateMonthButton(inst, 'next');

        setTimeout(() => {
          if ($('.ui-datepicker-title').next('.ui-datepicker-day').length === 0) {
            if ($(".dateParent").data("click") === "doNot") {
              $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + $(".box-calendar-style .ui-datepicker-today> a").text() + '</span>');
            }
          }
        }, 0);
        fancyboxPopup();
      },
      onSelect: function (dateText) {
        $('.box-calendar-style').addClass('Loading');

        var selectedDate = $(this).datepicker('getDate');
        var thaiYear = selectedDate.getFullYear() + 543; // แปลงปีเป็นปีไทย
        var formattedDate = $.datepicker.formatDate('dd/mm/', selectedDate) + thaiYear;

        // อัปเดตปีใน header เป็นปีไทย
        setTimeout(() => {
          $('.ui-datepicker-year').text(thaiYear); // แสดงปีไทยใน header
        }, 0);

        // อัปเดตปุ่ม "Prev" และ "Next" เมื่อเลือกวันที่
        var inst = $.datepicker._getInst($('.dateParent')[0]);
        updateMonthButton(inst, 'prev');
        updateMonthButton(inst, 'next');

        const scrollLeftValue = $('.box-calendar-style table.ui-datepicker-calendar').scrollLeft();
        setTimeout(() => {
          $('.box-calendar-style table.ui-datepicker-calendar').scrollLeft(scrollLeftValue);
        }, 0);
        setTimeout(() => {
          $('.box-calendar-style').removeClass('Loading');
        }, 100);

        setTimeout(() => {
          if ($(".dateParent").data("click") !== "doNot") {
            //เอาไปใช้ query ข้อมูล
            myDatepicker(formattedDate);
            if ($('.ui-datepicker-title').next('.ui-datepicker-day').length === 0) {
              $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + formattedDate.split("/")[0] + '</span>');
            }
          } else {
            if ($('.ui-datepicker-title').next('.ui-datepicker-day').length === 0) {
              $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + $(".box-calendar-style .ui-datepicker-today> a").text() + '</span>');
            }
          }
        }, 0);

        fancyboxPopup();
      }
    });

    // ตั้งค่าให้วันที่ปัจจุบันถูกเลือกในช่องป้อนข้อมูล
    $(".dateParent").datepicker("setDate", today);
    $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + $(".box-calendar-style .ui-datepicker-today> a").text() + '</span>');

    // อัปเดตปุ่ม "Prev" และ "Next" ทันทีเมื่อโหลดหน้าเว็บ
    var inst = $.datepicker._getInst($('.dateParent')[0]);
    updateMonthButton(inst, 'prev');
    updateMonthButton(inst, 'next');
    fancyboxPopup();

    // เริ่มต้นแสดงปีไทยเมื่อเปิดปฏิทิน
    var initialDate = $('.dateParent').datepicker('getDate');
    if (initialDate) {
      $('.ui-datepicker-year').text(initialDate.getFullYear() + 543);
    }
  }

});

let updateMonthButton = (inst, direction) => {
  let currentMonth = inst.selectedMonth;
  let currentYear = inst.selectedYear;
  if (direction === 'prev') currentMonth -= 1;
  if (direction === 'next') currentMonth += 1;
  if (currentMonth < 0) { currentMonth = 11; currentYear -= 1; }
  if (currentMonth > 11) { currentMonth = 0; currentYear += 1; }
  const thaiMonths = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
  let monthName = thaiMonths[currentMonth];
  let thaiYear = currentYear + 543;
  setTimeout(() => { inst.dpDiv.find('.ui-datepicker-' + direction).text(`${monthName} ${thaiYear}`); }, 0);
}
let fancyboxPopup = () => {
  setTimeout(() => {
    $('.pin .a-morning, .pin .a-evening').on('click', function (e) {
      e.preventDefault();
      var $selectDay = $(this).closest('[data-handler="selectDay"]');
      var day = $selectDay.find('a').data('date');
      var month = $selectDay.data('month');
      var year = $selectDay.data('year') + 543;
      var formattedDay = `${day}-${month}-${year}`;
      $('#popup .--day').text(formattedDay);
      $('#popup .--time').text($(this).attr('class') === 'a-evening ui-state-hover' ? 'เย็น' : 'เช้า');
      $('#popup .--quantity').text($(this).data('i'));
      $('#popup .--content').html($(this).find('ol').clone());
      $.fancybox.open({ src: "#popup", type: "inline" });
    });
  }, 500);
}