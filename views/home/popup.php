<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">
	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

</head>

<body>

	<!-- begin #content -->
	<div id="content" class="content">

		<section class="box-profile-form d-flex justify-content-center flex-column" style="min-height: 100vh;">
			<div class="container --profile">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ลงนามถวายพระพร</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the industry's standard dummy text ever since the 1500s,</p>
				</div>

				<img class="w-100 rounded mb-4" src="../../public/images/popup/img1.jpg">

				<form action="#" id="yourFormId">
					<div class="form-body">
						<div class="form-group">
							<label>ข้อความถวายพระพร</label>
							<select class="templatingSelect2" required>
								<option value="ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ">ขอพระองค์ทรงพระเจริญ ด้วยเกล้าด้วยกระหม่อม ขอเดชะ</option>
							</select>
						</div>
						<div class="form-group">
							<label for="input1">ข้าพระพุทธเจ้า*</label>
							<input type="text" class="form-control bg-white" id="input1" placeholder="กรุณาระบุชื่อ" required="">
						</div>
						<div class="form-group">
							<label for="input1">หน่วยงาน/ที่อยู่ (ถ้ามี)</label>
							<input type="text" class="form-control bg-white" id="input1" placeholder="กรุณาระบุหน่วยงาน/ที่อยู่">
						</div>
						<div class="form-group">
							<label for="input4">โทร*</label>
							<input type="tel" class="form-control bg-white" id="input4" placeholder="กรุณาระบุเบอร์โทรศัพท์" required="">
						</div>
						<div class="mt-4 d-flex justify-content-center">
							<button type="submit" class="btn btn-style" style="min-width: 250px;">ลงนามถวายพระพร</button>
						</div>
					</div>
				</form>
			</div>
			<div class="mt-4 d-flex justify-content-center">
				<a href="../home/" class="btn btn-light border bg-white rounded-pill" style="min-width: 250px;">เข้าสู่หน้าหลัก</a>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<?php include('../layouts/inc-script.php'); ?>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: 5
		});
	</script>
</body>

</html>