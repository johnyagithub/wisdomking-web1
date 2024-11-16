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
				<li class="breadcrumb-item active" aria-current="page">บัญชีของฉัน</li>
			</ol>
		</nav>

		<section>
			<div class="container">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">บัญชีของฉัน</h4>
				</div>
				<div class="row">
					<div class="col-md-4 mb-4 --sumMenu">

						<div class="sticky-top" style="top: 113px;">
							<a href="#" data-toggle="dropdown" aria-expanded="false">
								ข้อมูลบัญชี
							</a>
							<div class="sumMenu-profile dropdown-menu">
								<a class="dropdown-item active" href="../profile/">
									<i class="fa fa-user-o" aria-hidden="true"></i>
									บัญชีของฉัน
								</a>
								<a class="dropdown-item" href="../profile/favorites.php">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									รายการที่ถูกใจ
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									ออกจากระบบ
								</a>
							</div>
						</div>

					</div>
					<div class="col box-profile-list">
						<div class="d-flex flex-wrap w-100 mb-3">
							<h4 class="text-primary">ข้อมูลบัญชี</h4>
							<div class="ml-auto d-flex align-items-start">
								<a href="#" class="text-gradient px-3 d-block">แก้ไขโปรไฟล์</a>
								<a href="../profile/reset-password.php" class="text-gradient px-3 border-left d-block">แก้ไขรหัสผ่าน</a>
							</div>
						</div>
						<div class="row row-p10">
							<div class="col-sm-4 col-md-12 col-lg-3">
								<div class="box-upload-profile d-block">
									<div class="bg-gradient">
										<div id="profile-pic"></div>
									</div>
									<div class="d-flex d-sm-block d-md-flex d-lg-block">
										<label for="file-upload" style="cursor: pointer;" class="btn btn-style w-100 mx-2 mx-sm-0 mx-md-2 mx-lg-0">
											<img src="../../public/images/icon-Arrange.png" alt="">เลือกไฟล์
										</label>
										<input type="file" id="file-upload" class="d-none" accept="image/*">
										<button type="button" id="clear-button" class="btn btn-light mx-2 mx-sm-0 mx-md-2 mx-lg-0">ลบ</button>
									</div>
								</div>
							</div>
							<div class="-profile-list col-sm">
								<div class="row mb-3">
									<div class="col-6">
										<label>ชื่อ</label>
										<div>Pattanan Pattanan</div>
									</div>
									<div class="col-6">
										<label>อีเมล</label>
										<div>test.test@gmail.com</div>
									</div>
									<div class="col-6">
										<label>เบอร์มือถือ</label>
										<div>081-234-5678</div>
									</div>
									<div class="col-6">
										<label>วันเกิด</label>
										<div>29 / 04 / 1991</div>
									</div>
									<div class="col-6">
										<label>เพศ</label>
										<div>หญิง</div>
									</div>
									<div class="col-6">
										<label>ภูมิลำเนา</label>
										<div>กรุงเทพมหานคร</div>
									</div>
								</div>
								<label class="mb-0 text-muted mt-auto">วันที่เข้าร่วม : 29/Oct/2567 10:44 PM</label>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?><script>
		$(document).ready(function() {
			// ปุ่ม upload file
			$("#file-upload").change(function(e) {
				let reader = new FileReader();
				reader.onload = e => {
					$("#profile-pic").css('background-image', 'url(' + e.target.result + ')');
					$('.box-upload-profile').addClass('valid');
				}
				reader.readAsDataURL(this.files[0]);
			});

			// ปุ่ม ลบ
			$("#clear-button").click(function() {
				$("#file-upload").val('');
				$("#profile-pic").css('background-image', '');
				$('.box-upload-profile').removeClass('valid');
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