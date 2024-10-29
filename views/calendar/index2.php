<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

</head>

<body>

	<!-- begin #header -->
	<?php include('../layouts/inc-header.php'); ?>
	<!-- end #header -->

	<!-- begin #content -->
	<div id="content" class="content">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb container bg-white">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">มหกรรมตลาดเศรษฐกิจพอเพียง</li>
			</ol>
		</nav>

		<div class="box-back">
			<div class="container">
				<a href="javascript:history.back()">
					<img src="../../public/images/icon-angle-left.png" alt="">
					ย้อนกลับ
				</a>
			</div>
		</div>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">มหกรรมตลาดเศรษฐกิจพอเพียง</h4>
					<p class="text-center mb-5">ตลาดเศรษฐกิจพอเพียง
						พื้นที่แห่งมิตรภาพและการแบ่งปันองค์ความรู้นวัตกรรมเกษตรเศรษฐกิจพอเพียง
						เพื่อจุดประกายความคิดและสร้างแรงบันดาลใจจัดแสดง
						และจำหน่ายผลผลิตเกษตรปลอดภัย ผลิตภัณฑ์คุณภาพของเครือข่ายพิพิธภัณฑ์เกษตรฯ จากทั่วประเทศ
						พร้อมหลักสูตรอบรมวิชาของแผ่นดิน เรียนรู้การพึ่งพาตนเองจากเกษตรกรต้นแบบโดยไม่มีค่าใช้จ่าย ในวันเสาร์ -
						อาทิตย์ สัปดาห์แรกของทุกเดือน</p>
				</div>

				<div class="pb-4">
					<div class="row row-p10 justify-content-center">
						<div class="col-6 col-md-4 col-lg">
							<div class="form-group">
								<label>ปีจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกปีจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-md-4 col-lg">
							<div class="form-group">
								<label>เดือนจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกเดือนจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา...">
							</div>
						</div>
					</div>
				</div>

				<div class="box-calendar-style">
					<div class="dateParent">
						<input type="hidden" id="datepicker" value="" readonly>
					</div>
				</div>

				<div class="--detail">
					sdfdf
				</div>
			</div>
		</section>

		<section class="py-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);">
			<div class="container">
				<h3 class="head text-center">ภาพกิจกรรมครั้งที่ผ่านมา</h3>
				<div class="slide-show">
					<div class="hide-prev"></div>
					<div class="owl-carousel nav-dots-style show-dots">

						<a href="../../public/images/news/img1.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img1.jpg" alt="">
						</a>
						<a href="../../public/images/news/img2.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img2.jpg" alt="">
						</a>
						<a href="../../public/images/news/img3.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img3.jpg" alt="">
						</a>
						<a href="../../public/images/news/img1.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img1.jpg" alt="">
						</a>
						<a href="../../public/images/news/img2.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img2.jpg" alt="">
						</a>
						<a href="../../public/images/news/img3.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img3.jpg" alt="">
						</a>

					</div>
					<div class="hide-next"></div>
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>
	<!-- calendar-style -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
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
						$('.ui-datepicker-title').prepend('<span class="ui-datepicker-day">'+day+'</span>');
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
	<style>
		td.have a {
			color: #f30000;
		}

		a.ui-state-active {
			color: #8000ff !important;
		}
	</style>
</body>

</html>2