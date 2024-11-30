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
				<li class="breadcrumb-item active" aria-current="page">บัญชีของฉัน</li>
			</ol>
		</nav>

		<section>
			<div class="container">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">บัญชีของฉัน</h4>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-3 --sumMenu">

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
								<a class="dropdown-item text-danger" href="#">
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									ออกจากระบบ
								</a>
							</div>
						</div>

					</div>
					<div class="col box-profile-list">
						<div class="d-flex flex-wrap w-100 mb-3">
							<h4 class="mr-auto text-primary">ข้อมูลบัญชี</h4>
							<div class="d-flex align-items-start flex-wrap">
								<a href="#profile-list" onclick="editPro();" class="text-gradient pr-3 d-block">แก้ไขโปรไฟล์</a>
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
							<form action="../profile/index.php" id="profile-list" class="col-sm">
								<div class="row row-p5 mb-3">
									<div class="col-6">
										<label for="input_name">ชื่อ</label>
										<input type="text" class="form-control" id="input_name" value="Pattanan Pattanan" readonly>
									</div>
									<div class="col-6">
										<label for="input_mail">อีเมล</label>
										<input type="text" class="form-control" id="input_mail" value="test.test@gmail.com" readonly>
									</div>
									<div class="col-6">
										<label for="input_tel">เบอร์มือถือ</label>
										<input type="tel" class="form-control" id="input_tel" value="081-234-5678" readonly>
									</div>
									<div class="col-6">
										<label for="input_date">วันเกิด</label>
										<input type="date" class="form-control" id="input_date" value="1991-04-29" readonly>
									</div>
									<div class="col-6">
										<label for="select1">เพศ</label>
										<select class="templatingSelect2 form-control" id="select1" disabled>
											<option value="">กรุณาระบุเเพศ</option>
											<option value="ชาย">ชาย</option>
											<option value="หญิง" selected>หญิง</option>
										</select>
									</div>
									<div class="col-6">
										<label for="select2">ภูมิลำเนา</label>
										<select class="templatingSelect2 form-control" id="select2" disabled>
											<option value="">กรุณาระบุภูมิลำเนา</option>
											<option value="กรุงเทพมหานคร" selected>กรุงเทพมหานคร</option>
											<option value="euro">Euro</option>
											<option value="gbp">Pound</option>
											<option value="euro">Euro</option>
											<option value="gbp">Pound</option>
											<option value="euro">Euro</option>
											<option value="gbp">Pound</option>
										</select>
									</div>
								</div>
								<div class="d-flex flex-wrap-reverse">
									<label class="mb-0 text-muted mt-auto">วันที่เข้าร่วม : 29/Oct/2567 10:44 PM</label>
									<div id="button-editPro" class="ml-auto mr-auto mr-md-0 mb-3 mb-md-0" style="display: none;">
										<button type="button" onclick="cancelPro();" class="btn btn-light rounded-pill px-4 mx-1">ยกเลิก</button>
										<button type="submit" class="btn btn-style px-4 mx-1">บันทึก</button>
									</div>
								</div>
							</form>
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

		let editPro = () => {
			$('#profile-list label+input[readonly]').prop('readonly', false);
			$('#profile-list label+select[disabled]').prop('disabled', false);
			setTimeout(function() {
				const input = $('#input_name');
				input.focus()[0].setSelectionRange(input.val().length, input.val().length);
			}, 500);
			$('#button-editPro').show();
		}
		let cancelPro = () => {
			$('#profile-list label+input').prop('readonly', true);
			$('#profile-list label+select').prop('disabled', true);
			$('#button-editPro').hide();
		}
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