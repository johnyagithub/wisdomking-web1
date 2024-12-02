<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
	<!-- FileUp -->
	<link href="../../plugins/jQuery-AJAX-File-Uploader-FileUp/src/fileup.css" rel="stylesheet" type="text/css">

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
					<a href="../contact-us/">ติดต่อเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">เรื่องร้องเรียนการทุจริต และประพฤติมิชอบ</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">เรื่องร้องเรียนการทุจริต และประพฤติมิชอบ</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="row">
					<div class="col-lg-5 col-xl-4 mb-3 --sumMenu">
						<?php include('inc-receive-menu.php'); ?>
					</div>
					<div class="col mb-mt-0">
						<div class="border-left">
							<p class="text-center">
								"ข้อความหรือข้อมูลส่วนตัวที่ผู้ร้องเรียนกรอกในระบบใช้เพื่อเป็นการยืนยันตัวตน<br>
								ของผู้ร้องเรียนเท่านั้น และข้อมูลดังกล่าวจะถูกปิดเป็นความลับ"</p>
							<div class="list-download px-lg-4">
								<div class="list">
									<h6>Lorem Ipsum is simply dummy text</h6>
									<a class="btn btn-style" href="#" download>ดาวน์โหลด</a>
								</div>
							</div>
							<form action="#">
								<input type="hidden" name="subject" value="เรื่องทั่วไป">
								<div class="px-lg-4">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="input1">ชื่อ (ผู้ร้องเรียน)*</label>
											<input type="text" class="form-control bg-white" id="input1" placeholder="กรุณาระบุชื่อ"
												required>
										</div>
										<div class="form-group col-md-6">
											<label for="input2">นามสกุล (ผู้ร้องเรียน)*</label>
											<input type="text" class="form-control bg-white" id="input2" placeholder="กรุณาระบุนามสกุล"
												required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-12">
											<label for="input3">ที่อยู่ (ผู้ร้องเรียน)*</label>
											<input type="text" class="form-control bg-white" id="input3" placeholder="กรุณาระบุที่อยู่"
												required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="input4">อีเมล (ผู้ร้องเรียน)*</label>
											<input type="mail" class="form-control bg-white" id="input4" placeholder="กรุณาระบุอีเมล"
												required>
										</div>
										<div class="form-group col-md-6">
											<label for="input5">เบอร์โทร (ผู้ร้องเรียน)*</label>
											<input type="tel" class="form-control bg-white" id="input5"
												placeholder="กรุณาระบุเบอร์โทรศัพท์" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-12">
											<label for="input6">ชื่อผู้ถูกร้องเรียน*</label>
											<input type="tel" class="form-control bg-white" id="input6" placeholder="กรุณาระบุชื่อ"
												required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="input7">รายละเอียดเรื่องร้องเรียน (อธิบายเหตุการณ์/ข้อเท็จจริง)*</label>
											<textarea class="form-control bg-white" id="input7" rows="5" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="input8">ต้องการให้ สวพส. ดำเนินการอย่างไร (ความประสงค์)*</label>
											<textarea class="form-control bg-white" id="input8" rows="5" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<b>แนบไฟล์หลักฐานการร้องเรียน</b><br>
											<label class="text-secondary" style="font-size: 13px;"><b>หมายเหตุ : </b>อัปโหลดไฟล์ที่รองรับ
												1
												รายการ: PDF, document หรือ image ขนาดสูงสุด 10 MB</label>
											<div class="box-Drag">
												<div class="-Drag">
													<img src="../../public/images/icon-drag.png" alt="">
													<label class="m-0" for="upload">Drag your file here</label>
													<div class="d-inline-block border-l ml-auto pl-3">
														<button type="button" class="btn btn-style fileup-btn">
															เลือกไฟล์
															<input type="file" id="upload" multiple accept="image/*">
														</button>
													</div>
												</div>
												<div id="upload-queue" class="queue"></div>
											</div>
										</div>
									</div>
									<div class="form-row justify-content-center pb-2">
										<div class="form-check form-check-inline mr-4">
											<input class="form-check-input mr-2" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1">ไม่ประสงค์เปิดเผยชื่อต่อสาธารณะ</label>
										</div>
									</div>
									<div class="form-row justify-content-center py-4">
										<div class="col col-lg-4 col-xl-3 px-1">
											<button type="reset"
												class="btn btn-light border bg-white rounded-pill w-100">ยกเลิกส่งข้อความ</button>
										</div>
										<div class="col col-lg-4 col-xl-3 px-1">
											<button type="submit" class="btn btn-style w-100">ส่งข้อความ</button>
										</div>
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

	<?php include('../layouts/inc-script.php'); ?>
	<script>
		// active menu
		$('.dropdown-item[href*="receive-complaints1.php"]').addClass('active').closest('.dropdown-menu').addClass('show').closest('.dropdown').find('>.dropdown-item').addClass('active');
	</script>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>
	<!-- FileUp -->
	<script src="../../plugins/jQuery-AJAX-File-Uploader-FileUp/src/fileup.js"></script>
	<script>
		$.fileup({
			url: '#',
			inputID: 'upload',
			queueID: 'upload-queue',
			autostart: true,
			// onSelect: function (file) {
			// },
			// onRemove: function (file, total) {
			// },
			onSuccess: function(response, file_number, file) {
				$('#file-upload-' + file_number).addClass('--success');
			},
			onError: function(event, file, file_number) {
				$('#file-upload-' + file_number).addClass('--error');
				$('#file-upload-' + file_number).find('.result').text('This document is not supported, please delete and upload another file.');
			}
		});
	</script>

</body>

</html>