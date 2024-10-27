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
				<li class="breadcrumb-item active" aria-current="page">ปฏิทินกิจกรรมการเรียนรู้</li>
			</ol>
		</nav>

		<div class="box-back">
			<div class="container">
				<a href="javascript:history.back()">
					<img src="../../public/images/icon-angle-left.png" alt="">
					ย้อนกลับ
				</a>
			</div>
		</div>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ปฏิทินกิจกรรมการเรียนรู้</h4>
					<p class="text-center mb-5">กิจกรรมต่างๆ ตามวาระ กิจกรรมการเรียนรู้ด้านการเกษตร รองรับกลุ่มเป้าหมายที่หลากหลาย
						และสร้างแรงบันดาลใจในการทำการเกษตร เรียนรู้ สู่การปฏิบัติจริง อาทิเช่น สุข สนุก
						ไปกับกิจกรรมท่องเที่ยวสุขสันต์ ที่พิพิธภัณฑ์เกษตร ที่รองรับกลุ่มครอบครัว หรือนักท่องเที่ยว ที่ทั้งสนุก
						และได้สาระจากเรียนรู้ฐานพิพิธภัณฑ์การเกษตร และลงมือฝึกปฏิบัติกับกิจกรรมที่หลากหลาย ในทุกวันเสาร์ และอาทิตย์
						ที่ 2,3,4 ของเดือน หรือเรียนรู้ การทำการเกษตรแบบมืออาชีพ หลากหลายวิชา กับหลักสูตรอบรมเข้มข้นแบบมืออาชีพ
						เต็มอิ่มไปกับองค์ความรู้ด้านการเกษตร กับเกษตรกรตัวจริง ผู้มากประสบการณ์ และกิจกรรมอื่นๆ อีกมากมาย</p>
				</div>

				<div class="pb-4">
					<div class="row justify-content-center">
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>ปีจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกปีจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>เดือนจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกเดือนจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา...">
							</div>
						</div>
					</div>
				</div>

				<div class="--detail">
					sdgdsg
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