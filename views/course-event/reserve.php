<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/calendar.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/reserve.css">

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
				<li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
			</ol>
		</nav>

		<section class="py-4">
			<div class="container">

				<?php include('inc-course-event.php'); ?>

				<div id="join-project">
					<div class="box-status">
						<h4 class="text-center">สมัครเข้าร่วมโครงการ</h4>
						fghfd
					</div>

					<!-- status2 -->
					<div class="b-status2">
						<?php include('inc-form-course.php'); ?>
					</div>

					<!-- status3 -->
					<div class="b-status3">
						<?php include('inc-form-course2.php'); ?>
					</div>

					<!-- status4 -->
					<div class="b-status4">
						<?php include('inc-form-course3.php'); ?>
					</div>

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
		$(".templatingSelect2").select2({
			minimumResultsForSearch: 6
		});
	</script>

	<!-- calendar -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>

	<!-- checkbox -->
	<script>
		$(document).ready(function () {
			$(".box-form-course .form-check-input").prop('required', true);

			groupChoose1();
			groupChoose3();
			submitForm1();
			submitForm2();

		});

		let groupChoose1 = () => {
			$(".group-choose1").each(function () {
				$(this).find('.form-check-input[type="checkbox"]').on('change', function () {
					// ยกเลิกการเลือก checkbox อื่นในกลุ่มเดียวกัน
					$(this).closest(".group-choose1")
						.find('.form-check-input[type="checkbox"]')
						.not(this)
						.prop('checked', false);

					// ตรวจสอบว่ามี checkbox ใดในกลุ่มถูกเลือกหรือไม่
					var $group = $(this).closest(".group-choose1");
					if ($group.find('.form-check-input:checked').length > 0) {
						$group.removeClass('has-error').find('.form-check-input').prop('required', false); // ลบ required เมื่อมีการเลือก
					} else {
						$group.find('.form-check-input').prop('required', true); // เพิ่ม required เมื่อไม่มีการเลือก
					}
				});
			});
		}

		let groupChoose3 = () => {
			$(".group-choose3 .form-check-input[type='checkbox']").on('change', function () {
				setTimeout(() => {
					// ค้นหา row ที่ checkbox นี้อยู่
					var $currentRow = $(this).closest('.row');

					// นับ checkbox ที่ถูกเลือกใน row ปัจจุบัน
					var selectedCount = $currentRow.find(".form-check-input:checked").length;

					// ตรวจสอบและตั้งค่า
					if (selectedCount >= 3) {
						$currentRow.find('.form-check-input:not(:checked)').prop('disabled', true); // disable checkbox อื่นใน row เดียวกัน
						$(".group-choose3").removeClass('has-error').find(".form-check-input").prop('required', false); // ลบ required ถ้ามีการเลือกแล้ว
					} else {
						$currentRow.find('.form-check-input').prop('disabled', false); // enable checkbox ทั้งหมดใน row เดียวกัน
						$currentRow.find(".form-check-input").prop('required', true); // เพิ่ม required ถ้าไม่มีการเลือก
					}

					// ยกเลิก checkbox ที่ถูกเลือกใน row อื่น
					$(".group-choose3 .row").not($currentRow).find('.form-check-input:checked').prop('checked', false);
					$(".group-choose3 .row").not($currentRow).find('.form-check-input').prop('disabled', false);
				}, 0);
			});
		}

		let submitForm1 = () => {
			$(document).on("submit", "#form-course", function (e) {
				let isValid = true; // ตัวแปรสถานะการตรวจสอบ
				$("#form-course [class*=group-choose]").each(function () {
					const $group = $(this); // อ้างถึงกลุ่มปัจจุบัน
					const hasUnselectedRequired = $group.find('.form-check-input:required').length > 0;

					if (hasUnselectedRequired) {
						isValid = false; // ถ้ามีกลุ่มไหน required
						$group.addClass("has-error"); // เพิ่มคลาสแสดงข้อผิดพลาด
						scrollToTop();
					} else {
						$group.removeClass("has-error"); // ลบคลาสข้อผิดพลาดหากเลือกแล้ว
					}
				});

				// ถ้ามีกลุ่มไหนยังไม่ได้เลือก ให้หยุดการ submit
				if (!isValid) {
					e.preventDefault(); // ป้องกันการ submit
					alert("กรุณาเลือกตัวเลือกให้ครบในแต่ละกลุ่มที่จำเป็นก่อนส่งแบบฟอร์ม"); // แจ้งเตือนผู้ใช้
				} else {
					e.preventDefault(); // ป้องกันการ submit
					$('#join-project').attr('data-status', '3');
					scrollToTop();
				}
			});
		}

		let submitForm2 = () => {
			$(document).on("submit", "#form-course2", function (e) {
				e.preventDefault(); // ป้องกันการ submit

				// ตรวจสอบว่ามี radio ที่ถูกเลือกหรือไม่
				if (!$('#form-course2 input[name="foodMenu"]:checked').length) {
					alert("กรุณาเลือกเมนูอาหาร"); // แจ้งเตือนผู้ใช้
					$('#form-course2 .box-form-course .owl-carousel').addClass('has-error');
					event.preventDefault(); // ป้องกันการส่งฟอร์ม
				} else {
					$('#join-project').attr('data-status', '4');
					scrollToTop();
					$('#form-course2 .box-form-course .owl-carousel').removeClass('has-error');
					var formData = $(this).serializeArray();

					// ใส่ค่าลงในฟอร์ม #form-course2
					formData.forEach(field => {
						const $target = $(`#form-course3 [name="${field.name}"]`);
						$target.val(field.value);

						const $inputWithAuto = $(`#form-course3 .input-width-auto [name="${field.name}"]`);
						if ($inputWithAuto.next('span').length === 0) {
							$inputWithAuto.after(`<span>${field.value}</span>`);
						}
					});
				}
			});

			$('#form-course2 input[name="foodMenu"]').on('change', function () {
				$('#form-course2 .box-form-course .owl-carousel').removeClass('has-error');
			});
		}

		let scrollToTop = () => {
			ScrollTop('#join-project'); // เลื่อนไปด้านบน
			$('body').addClass("down");
		}
	</script>

</body>

</html>