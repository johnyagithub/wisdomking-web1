<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>

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
				<li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ติดต่อเรา</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="--detail">
					<form action="#">
						<div class="px-4">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="input2">ชื่อ*</label>
									<input type="text" class="form-control bg-white" id="input2" placeholder="กรุณาระบุชื่อ" required>
								</div>
								<div class="form-group col-md-6">
									<label for="input3">นามสกุล*</label>
									<input type="text" class="form-control bg-white" id="input3" placeholder="กรุณาระบุนามสกุล" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="input1">เบอร์โทรศัพท์*</label>
									<input type="tel" class="form-control bg-white" id="input1" placeholder="กรุณาระบุเบอร์โทรศัพท์"
										required>
								</div>
								<div class="form-group col-md-6">
									<label for="input2">อีเมล*</label>
									<input type="mail" class="form-control bg-white" id="input2" placeholder="กรุณาระบุอีเมล" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="input3">ข้อความ*</label>
									<textarea class="form-control bg-white" id="input3" rows="5" required></textarea>
								</div>
							</div>
							<div class="form-row justify-content-center pb-2">
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
							<div class="form-row justify-content-center py-4">
								<div class="col-6 col-md-4 col-lg-2 px-1">
									<button type="reset" class="btn btn-light border bg-white rounded-pill w-100">ยกเลิกส่งข้อความ</button>
								</div>
								<div class="col-6 col-md-4 col-lg-2 px-1">
									<button type="submit" class="btn btn-style w-100">ส่งข้อความ</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
</body>

</html>