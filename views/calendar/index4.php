<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Inline jQuery UI Datepicker ภาษาไทย</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        td.have a {
            color: #f30000 !important;
        }

        a.ui-state-active {
            color: #8000ff !important;
        }
    </style>
</head>

<body>
    <div class="dateParent">
        <input type="hidden" id="datepicker" value="" readonly>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function () {
            var invalidDate = [
                new Date("2024-10-02").toDateString(),
                new Date("2024-10-03").toDateString() // วันที่มีข้อมูล
            ];

            // ฟังก์ชันอัปเดตปุ่ม "Prev" และ "Next" แสดงเป็นชื่อเดือนภาษาไทย
            function updateMonthButton(inst, direction) {
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

            $('.dateParent').datepicker({
                dateFormat: 'dd/mm/yy',
                inline: true,
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
                monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'],
                beforeShowDay: function (date) {
                    var dateString = date.toDateString();
                    var day = date.getDay();
                    // เช็คว่าวันที่อยู่ใน invalidDate หรือไม่
                    if (invalidDate.includes(dateString)) {
                        return [true, "have"];
                    }
                    return [day !== 0, ""]; // อนุญาตให้เลือกวันอื่นๆ ยกเว้นวันอาทิตย์
                },
                onChangeMonthYear: function (year, month, inst) {
                    // เปลี่ยนปีที่แสดงใน header เป็นปีไทย
                    var thaiYear = year + 543; // แปลงปีเป็นปีไทย
                    setTimeout(function () {
                        inst.dpDiv.find('.ui-datepicker-year').text(thaiYear); // เปลี่ยนปีที่แสดง
                    }, 0);
                    // เรียกใช้ฟังก์ชันอัปเดตปุ่ม "Prev" และ "Next"
                    updateMonthButton(inst, 'prev');
                    updateMonthButton(inst, 'next');
                },
                onSelect: function (dateText) {
                    var selectedDate = $(this).datepicker('getDate');
                    var thaiYear = selectedDate.getFullYear() + 543; // แปลงปีเป็นปีไทย
                    var formattedDate = $.datepicker.formatDate('dd/mm/', selectedDate) + thaiYear;
                    $("#datepicker").val(formattedDate);

                    // อัปเดตปีใน header เป็นปีไทย
                    setTimeout(() => {
                        $('.ui-datepicker-year').text(thaiYear); // แสดงปีไทยใน header
                    }, 0);

                    // อัปเดตปุ่ม "Prev" และ "Next" เมื่อเลือกวันที่
                    var inst = $.datepicker._getInst($('.dateParent')[0]);
                    updateMonthButton(inst, 'prev');
                    updateMonthButton(inst, 'next');

                    // อัปเดต ui-datepicker-title ด้วยวันที่ที่เลือก
                    var day = selectedDate.getDate();
                    setTimeout(() => {
                        $('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">' + day + '</span>');
                    }, 0);
                }
            });

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
        });
    </script>
</body>

</html>
