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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">ข้อมูลส่วนตัว</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">เข้าสู่ระบบ</li>
			</ol>
		</nav>

		<section class="box-profile-form">
			<div class="container --profile">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">เข้าสู่ระบบ</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<form action="#">
					<div class="form-body" style="max-width: 520px;">

						<div class="form-group">
							<label for="input5">อีเมล*</label>
							<input type="email" class="form-control bg-white" id="input5" placeholder="กรุณาระบุอีเมล" required="">
						</div>
						<div class="form-group">
							<label for="input6">รหัสผ่าน*</label>
							<div class="btn-eye-slash">
								<i></i>
								<input type="password" class="form-control bg-white" id="input6" placeholder="กรุณาระบุรหัสผ่าน"
									required="">
							</div>
						</div>
						<div class="form-row justify-content-center mt-2">
							<div class="form-check form-check-inline mr-4">
								<input class="form-check-input mr-2" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Remember this password</label>
							</div>
							<div class="ml-auto mr-auto mr-sm-0">
								<a href="../profile/forgot.php" class="text-gradient">Forgot your password?</a>
							</div>
						</div>
						<hr class="my-3">
						<div class="form-row justify-content-center mt-4">
							<div class="col-8 col-md-6 col-lg-4 px-1">
								<button type="submit" class="btn btn-style w-100">เข้าสู่ระบบ</button>
							</div>
						</div>
						<p class="text-center mt-4">
							คุณยังไม่ได้สมัครสมาชิก?
							<a href="../profile/register.php" class="text-gradient" style="white-space: nowrap;">สมัครสมาชิก</a>
						</p>
					</div>
				</form>
			</div>
		</section>

	</div>
	<!-- end #content -->

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
		});
	</script>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>
</body>

</html>