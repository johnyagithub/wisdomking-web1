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
					<div class="col-md-4 col-lg-3 --sumMenu">

						<div class="sticky-top" style="top: 113px;">
							<a href="#" data-toggle="dropdown" aria-expanded="false">
								รับเรื่องร้องเรียน
							</a>
							<div class="sumMenu-profile dropdown-menu">
								<a class="dropdown-item" href="../complaint">
									ช่องทางแจ้งเรื่องร้องเรียน
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item active" href="../complaint/receive-complaints.php">
									รับเรื่องร้องเรียน
								</a>
							</div>
						</div>

					</div>
					<div class="col mt-4 mb-mt-0">
						<div class="box-navTabs nav nav-tabs ml-auto mb-4 justify-content-center" role="tablist">
							<button class="nav-link active" id="nav-general-tab" data-toggle="tab" data-target="#nav-general"
								type="button" role="tab" aria-controls="nav-general" aria-selected="true">
								เรื่องทั่วไป
							</button>
							<button class="nav-link" id="nav-corrupt-tab" data-toggle="tab" data-target="#nav-corrupt" type="button"
								role="tab" aria-controls="nav-corrupt" aria-selected="false">
								ทุจริต และประพฤติมิชอบ
							</button>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
								<p class="text-center">"ข้อความหรือข้อมูลส่วนตัวที่ผู้ร้องเรียนกรอกในระบบใช้เพื่อเป็นการยืนยันตัวตน<br>
									ของผู้ร้องเรียนเท่านั้น และข้อมูลดังกล่าวจะถูกปิดเป็นความลับ"</p>
								<form action="#">
									<div class="px-xl-4">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="input2">ชื่อ*</label>
												<input type="text" class="form-control bg-white" id="input2" placeholder="กรุณาระบุชื่อ"
													required>
											</div>
											<div class="form-group col-md-6">
												<label for="input3">นามสกุล*</label>
												<input type="text" class="form-control bg-white" id="input3" placeholder="กรุณาระบุนามสกุล"
													required>
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
												<input type="mail" class="form-control bg-white" id="input2" placeholder="กรุณาระบุอีเมล"
													required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<label for="input3">เรื่องร้องเรียน*</label>
												<select class="templatingSelect2" id="input3" required>
													<option value="">กรุณาระบุเรื่องร้องเรียน</option>
													<option value="usd">USD</option>
													<option value="euro">Euro</option>
													<option value="gbp">Pound</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-12">
												<label for="input4">ข้อความ*</label>
												<textarea class="form-control bg-white" id="input4" rows="5" required></textarea>
											</div>
										</div>
										<div class="form-row justify-content-center pb-2">
											<div class="form-check form-check-inline mr-4">
												<input class="form-check-input mr-2" type="checkbox" id="inlineCheckbox1" value="option1">
												<label class="form-check-label" for="inlineCheckbox1">ไม่ประสงค์เปิดเผยชื่อต่อสาธารณะ</label>
											</div>
										</div>
										<div class="form-row justify-content-center py-4">
											<div class="col col-md-4 col-lg-3 px-1">
												<button type="reset"
													class="btn btn-light border bg-white rounded-pill w-100">ยกเลิกส่งข้อความ</button>
											</div>
											<div class="col col-md-4 col-lg-3 px-1">
												<button type="submit" class="btn btn-style w-100">ส่งข้อความ</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane fade" id="nav-corrupt" role="tabpanel" aria-labelledby="nav-corrupt-tab">
								<p class="text-center">"ข้อความหรือข้อมูลส่วนตัวที่ผู้ร้องเรียนกรอกในระบบใช้เพื่อเป็นการยืนยันตัวตน<br>
									ของผู้ร้องเรียนเท่านั้น และข้อมูลดังกล่าวจะถูกปิดเป็นความลับ"</p>
									<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfqfanUZsoCpLel1tgrAPShWDHoq6gVnee4_8-HqWatkruAAw/viewform?embedded=true" class="w-100" height="340" frameborder="0"></iframe>
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

	<?php include('../layouts/inc-script.php'); ?>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>

</body>

</html>