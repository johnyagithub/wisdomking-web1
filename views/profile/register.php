<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">
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
				<li class="breadcrumb-item">
					<a href="#">ข้อมูลส่วนตัว</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../profile/login.php">เข้าสู่ระบบ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">สมัครสมาชิก</li>
			</ol>
		</nav>

		<section class="box-profile-form">
			<div class="container --profile">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">สมัครสมาชิก</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<form action="#" id="yourFormId">
					<div class="form-body">

						<div class="box-upload-profile">
							<div id="profile-pic"></div>
							<div>
								<label for="file-upload" style="cursor: pointer;" class="btn btn-style w-100">
									<img src="../../public/images/icon-Arrange.png" alt="">เลือกไฟล์
								</label>
								<input type="file" id="file-upload" class="d-none" accept="image/*">
								<button type="button" id="clear-button" class="btn btn-light">ลบ</button>
							</div>
						</div>
						<hr class="my-3">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="input1">ชื่อ*</label>
								<input type="text" class="form-control bg-white" id="input1" placeholder="กรุณาระบุชื่อ" required="">
							</div>
							<div class="form-group col-md-6">
								<label for="input2">นามสกุล*</label>
								<input type="text" class="form-control bg-white" id="input2" placeholder="กรุณาระบุนามสกุล" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="input3">วัน/เดือน/ปีเกิด*</label>
								<input type="date" class="form-control bg-white" id="input3" placeholder="กรุณาระบุชื่อ" required="">
							</div>
							<div class="form-group col-md-6">
								<label for="">เพศ*</label>
								<select class="templatingSelect2" required>
									<option value="">กรุณาระบุเพศ</option>
									<option value="ชาย">ชาย</option>
									<option value="หญิง">หญิง</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="">ภูมิลำเนา*</label>
								<select class="templatingSelect2" required>
									<option value="">กรุณาระบุภูมิลำเนา</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="input4">โทรศัพท์มือถือ*</label>
								<input type="tel" class="form-control bg-white" id="input4" placeholder="กรุณาระบุชื่อ" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="input5">อีเมล*</label>
								<input type="email" class="form-control bg-white" id="input5" placeholder="กรุณาระบุอีเมล" required="">
							</div>
							<div class="form-group col-md-6">
								<label for="input6">รหัสผ่าน*</label>
								<div class="btn-eye-slash">
									<i></i>
									<input type="password" class="form-control bg-white" id="input6" placeholder="กรุณาระบุรหัสผ่าน"
										required="">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="input7">ใส่รหัสผ่านอีกครั้ง*</label>
								<div class="btn-eye-slash">
									<i></i>
									<input type="password" class="form-control bg-white" id="input7"
										placeholder="กรุณาระบุรหัสผ่านอีกครั้ง" required="">
								</div>
							</div>
						</div>
						<div class="form-row justify-content-center mt-2">
							<div class="form-check form-check-inline mr-4">
								<input class="form-check-input mr-2" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">ฉันได้อ่านและยอมรับนโยบายความเป็นส่วนตัว</label>
							</div>
							<div class="form-check form-check-inline mr-4">
								<input class="form-check-input mr-2" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label"
									for="inlineCheckbox2">ฉันยินดีให้ใช้ข้อมูลเพื่อส่งข่าวสารและโปรโมชั่น</label>
							</div>
						</div>
						<div class="form-row justify-content-center mt-4">
							<div class="col-6 col-md-4 col-lg-2 px-1">
								<button type="reset" class="btn btn-light border bg-white rounded-pill w-100">ยกเลิก</button>
							</div>
							<div class="col-6 col-md-4 col-lg-2 px-1">
								<button type="submit" class="btn btn-style w-100">บันทึก</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!--  begin popup -->
	<div id="popup-succeed" style="display: none;width: 500px;">
		<div class="-popup">
			<img src="../../public/images/img-succeed.png" class="d-block mx-auto mb-3">
			<h4 class="text-center">ลงทะเบียนสำเร็จ</h4>
			<a href="../profile/register.php" class="btn btn-style d-block mx-auto mt-4" style="width: 230px;">ตกลง</a>
		</div>
	</div>
	<!-- end popup -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
	<script>
		$(document).ready(function () {
			$(".btn-eye-slash i").click(function () {
				$(this).toggleClass('active');
				let input = $(this).next("input");
				input.attr("type", input.attr("type") === "password" ? "text" : "password");
			});

			// ปุ่ม upload file
			$("#file-upload").change(function (e) {
				let reader = new FileReader();
				reader.onload = e => {
					$("#profile-pic").css('background-image', 'url(' + e.target.result + ')');
					$('.box-upload-profile').addClass('valid');
				}
				reader.readAsDataURL(this.files[0]);
			});

			// ปุ่ม ลบ
			$("#clear-button").click(function () {
				$("#file-upload").val('');
				$("#profile-pic").css('background-image', '');
				$('.box-upload-profile').removeClass('valid');
			});

			// submit form
			$("#yourFormId").submit(function (event) {
				event.preventDefault();
				$.fancybox.open({
					src: "#popup-succeed", // ID ของ popup
					type: "inline"
				});
			});
		});
	</script>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: 5
		});
	</script>
</body>

</html>