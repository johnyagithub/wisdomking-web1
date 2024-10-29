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
        <input type="hidden" id="datepicker" readonly>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function () {
            var invalidDate = ["2024-10-02", "2024-10-03"].map(date => new Date(date).toDateString());

            function updateNavButtons(inst) {
                ["prev", "next"].forEach(function (dir, idx) {
                    var offset = idx === 0 ? -1 : 1;
                    var newDate = new Date(inst.selectedYear, inst.selectedMonth + offset);
                    var monthName = $.datepicker._defaults.monthNames[newDate.getMonth()];
                    var thaiYear = newDate.getFullYear() + 543;
                    setTimeout(() => inst.dpDiv.find(`.ui-datepicker-${dir}`).text(`${monthName} ${thaiYear}`), 0);
                });
            }

            $('.dateParent').datepicker({
                dateFormat: 'dd/mm/yy',
                inline: true,
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
                monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
                beforeShowDay: date => [!invalidDate.includes(date.toDateString()) && date.getDay() !== 0, "have"],
                onChangeMonthYear: (year, month, inst) => {
                    setTimeout(() => inst.dpDiv.find('.ui-datepicker-year').text(year + 543), 0);
                    updateNavButtons(inst);
                },
                onSelect: dateText => {
                    var selectedDate = $('.dateParent').datepicker('getDate');
                    var thaiYear = selectedDate.getFullYear() + 543;
                    $("#datepicker").val($.datepicker.formatDate('dd/mm/', selectedDate) + thaiYear);
                    updateNavButtons($.datepicker._getInst($('.dateParent')[0])); // เรียกใช้งานฟังก์ชันที่นี่
                }
            });

            updateNavButtons($.datepicker._getInst($('.dateParent')[0]));
        });
    </script>
</body>
1
</html>
