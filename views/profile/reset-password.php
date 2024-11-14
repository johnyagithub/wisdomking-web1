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
					<a href="../profile/login.php">ลืมรหัสผ่าน</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">รีเซ็ทรหัสผ่าน</li>
			</ol>
		</nav>

		<section class="box-profile-form">
			<div class="container --profile">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">รีเซ็ทรหัสผ่าน</h4>
				</div>
				<form action="../profile/login.php">
					<div class="form-body" style="max-width: 520px;">

						<div class="form-group">
							<label for="input1">อีเมล*</label>
							<input type="email" class="form-control bg-white" id="input1" placeholder="กรุณาระบุอีเมล" required="">
						</div>
						<div class="form-group">
							<label for="input2">รหัสผ่าน*</label>
							<div class="btn-eye-slash">
								<i></i>
								<input type="password" class="form-control bg-white" id="input2" placeholder="กรุณาระบุรหัสผ่าน"
									required="">
							</div>
						</div>
						<div class="form-group">
							<label for="input3">ใส่รหัสผ่านอีกครั้ง*</label>
							<div class="btn-eye-slash">
								<i></i>
								<input type="password" class="form-control bg-white" id="input3" placeholder="กรุณาระบุรหัสผ่านอีกครั้ง"
									required="">
							</div>
						</div>
						<hr class="my-3">
						<div class="form-row justify-content-center mt-4">
							<div class="col-8 col-md-6 col-lg-4 px-1">
								<button type="submit" class="btn btn-style w-100">บันทึก</button>
							</div>
						</div>

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