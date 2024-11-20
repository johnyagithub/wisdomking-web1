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
        let dataClick = $(".dateParent").data("click");

        // กำหนด targetDate จาก date ที่ส่งเข้ามา
        let targetDate = new Date(date);

        // ค้นหาวันที่ตรงจาก window.invalidDate
        let matchedDate = window.invalidDate.find(d => d.date === dateString);

        // ตรวจสอบว่า matchedDate มีข้อมูลหรือไม่
        let morning = matchedDate ? matchedDate.morning : 0;
        let evening = matchedDate ? matchedDate.evening : 0;

        // อนุญาตให้เลือกวันอื่นๆ ยกเว้นวันอาทิตย์
        var day = date.getDay();  // ตรวจสอบวันในสัปดาห์

        if (dataClick === "doNot") {
          setTimeout(function () {
            // ค้นหา <td> ที่ตรงกับเดือนและปีของ targetDate
            let $targetTd = $(`td[data-month="${targetDate.getMonth()}"][data-year="${targetDate.getFullYear()}"]`);

            // ค้นหา <a> ภายใน <td> ที่ตรงกับวันที่
            let $targetA = $targetTd.find(`a[data-date="${targetDate.getDate()}"]`);

            let today = new Date();
            today.setHours(0, 0, 0, 0);
            if (targetDate >= today && $targetA.next('.pin').length === 0) {
              $targetA.after(`
                <div class="pin">
                  <a class="a-morning" href="#" data-i="${morning}">${morning}</a>
                  <a class="a-evening" href="#" data-i="${evening}">${evening}</a>
                </div>
              `);
            }
          }, 0);
          return [day !== 0, ""];
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

        //เอาไปใช้ query ข้อมูล
        myDatepicker(formattedDate);
        setTimeout(() => {
          $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + formattedDate.split("/")[0] + '</span>');
        }, 0);
      }
    });

    // ตั้งค่าให้วันที่ปัจจุบันถูกเลือกในช่องป้อนข้อมูล
    $(".dateParent").datepicker("setDate", today);
    $(".box-calendar-style .ui-datepicker-calendar .ui-datepicker-today a").click();

    // อัปเดตปุ่ม "Prev" และ "Next" ทันทีเมื่อโหลดหน้าเว็บ
    var inst = $.datepicker._getInst($('.dateParent')[0]);
    updateMonthButton(inst, 'prev');
    updateMonthButton(inst, 'next');

    // เริ่มต้นแสดงปีไทยเมื่อเปิดปฏิทิน
    var initialDate = $('.dateParent').datepicker('getDate');
    if (initialDate) {
      var thaiYear = initialDate.getFullYear() + 543; // แปลงปีเป็นปีไทย
      $('.ui-datepicker-year').text(thaiYear); // แสดงปีไทยใน header
    }
  }

});

let updateMonthButton = (inst, direction) => {
  var currentMonth = inst.selectedMonth;
  var currentYear = inst.selectedYear;

  // คำนวณเดือนและปีที่จะแสดงในปุ่ม
  if (direction === 'prev') {
    currentMonth -= 1;
    if (currentMonth < 0) {
      currentMonth = 11; // ย้อนกลับไปเดือนธันวาคมของปีก่อนหน้า
      currentYear -= 1;
    }
  } else if (direction === 'next') {
    currentMonth += 1;
    if (currentMonth > 11) {
      currentMonth = 0; // ย้ายไปเดือนมกราคมของปีถัดไป
      currentYear += 1;
    }
  }

  // แสดงชื่อเดือนภาษาไทยในปุ่ม
  var thaiMonths = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
  var monthName = thaiMonths[currentMonth];
  var thaiYear = currentYear + 543; // แปลงปีเป็นปีไทย

  // แสดงชื่อเดือนและปีไทยในปุ่ม
  setTimeout(function () {
    inst.dpDiv.find('.ui-datepicker-' + direction).text(monthName + " " + thaiYear);
  }, 0);
}
