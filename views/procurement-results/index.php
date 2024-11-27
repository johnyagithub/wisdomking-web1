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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">ผลการดำเนินงานจัดซื้อจัดจ้าง</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ผลการดำเนินงานจัดซื้อจัดจ้าง</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="mx-auto" style="max-width: 1000px;">
					<div class="row row-p10 justify-content-center pb-4">
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>ปีงบประมาณ</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกปีงบประมาณ</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา">
							</div>
						</div>
					</div>
				</div>

				<div class="pb-4">
					<h5 class="mb-4">สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2567</h5>
				</div>

				<div class="table-responsive">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th class="text-left">ชื่อ</th>
								<th style="width: 110px;">โหลดเอกสาร</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">สรุปผลการดำเนินงานการจัดซื้อจัดจ้างในรอบเดือน มกราคม 2567</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">สรุปผลการดำเนินงานการจัดซื้อจัดจ้างในรอบเดือน กุมภาพันธ์2567</th>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">สรุปผลการดำเนินงานการจัดซื้อจัดจ้างในรอบเดือน มีนาคม 2567</th>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">สรุปผลการดำเนินงานการจัดซื้อจัดจ้างในรอบเดือน เมษายน 2567</th>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
						</tbody>
					</table>
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