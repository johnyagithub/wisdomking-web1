<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/calendar.css">

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
					<div class="row row-p10 justify-content-center">
						<div class="col-6 col-md-4 col-lg">
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
						<div class="col-6 col-md-4 col-lg">
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
						<div class="col-md-4 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา...">
							</div>
						</div>
					</div>
				</div>

				<script>
					// วันที่มีข้อมูล
					window.invalidDate = [
						new Date("2024-11-07").toDateString(),
						new Date("2024-11-09").toDateString(),
						new Date("2024-11-10").toDateString(),
						new Date("2024-12-02").toDateString(),
						new Date("2024-12-03").toDateString(),
						new Date("2024-12-09").toDateString(),
						new Date("2024-12-10").toDateString(),
						new Date("2024-12-11").toDateString(),
						new Date("2024-12-23").toDateString(),
						new Date("2024-12-25").toDateString(),
						new Date("2025-01-01").toDateString(),
						new Date("2025-01-02").toDateString(),
						new Date("2025-01-11").toDateString(),
						new Date("2025-01-12").toDateString(),
						new Date("2025-01-13").toDateString(),
						new Date("2025-01-25").toDateString(),
						new Date("2025-01-26").toDateString(),
					];
				</script>

				<div class="box-calendar-style">
					<div class="dateParent">
						<input type="hidden" id="datepicker" value="" readonly>
					</div>
				</div>

				<div class="--detail">
					<div class="box-navTabs d-flex flex-wrap justify-content-center mt-3" data-showid="data-Calendar">
						<div class="owl-carousel">
							<button type="button" class="btn btn-style3 px-3 text-muted m-1 active">ทั้งหมด</button>
							<button type="button" data-type="tab1" class="btn btn-style3 px-3 text-muted m-1">ท่องเที่ยวสุขสันต์
								ที่พิพิธภัณฑ์เกษตรฯ</button>
							<button type="button" data-type="tab2"
								class="btn btn-style3 px-3 text-muted m-1">หลักสูตรอบรมเข้มข้น</button>
							<button type="button" data-type="tab3" class="btn btn-style3 px-3 text-muted m-1">อื่นๆ</button>
						</div>
					</div>
					<div id="data-Calendar" class="box-Calendar2 row">

						<div class="item" data-type="tab1">
							<div class="d-flex align-items-center flex-wrap mb-auto">
								<div class="-event ac">
									<h4>08</h4>ก.ค.
								</div>
								<div class="-event">
									<h4>16</h4>ก.ค.
								</div>
							</div>
							<a href="../../public/images/calendar/img1.jpg" class="img" data-fancybox="Calendar"
								data-caption="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566">
								<img src="../../public/images/calendar/img1.jpg" alt="">
							</a>
							<div class="text">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="-date">01 กรกฎาคม 2023</div>
									<div class="-view">250</div>
								</div>
								<div class="my-3">
									<span class="-type">ท่องเที่ยวสุขสันต์ ที่พิพิธภัณฑ์เกษตรฯ</span>
									<span class="-type bg-transparent text-white">ไม่มีค่าธรรมเนียม</span>
								</div>
								<h5 class="text-line2">ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566</h5>
								<p class="text-line4">กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย</p>
								<a class="btn btn-light px-4 btn-sm rounded-pill"
									href="../calendar-learn/detail.php">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>
						<div class="item" data-type="tab2">
							<div class="d-flex align-items-center flex-wrap mb-auto">
								<div class="-event ac">
									<h4>08</h4>ก.ค.
								</div>
								<div class="-event">
									<h4>16</h4>ก.ค.
								</div>
							</div>
							<a href="../../public/images/learning/img1.jpg" class="img" data-fancybox="Calendar"
								data-caption="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566">
								<img src="../../public/images/learning/img1.jpg" alt="">
							</a>
							<div class="text">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="-date">01 กรกฎาคม 2023</div>
									<div class="-view">250</div>
								</div>
								<div class="my-3">
									<span class="-type">หลักสูตรอบรมเข้มข้น</span>
									<span class="-type bg-transparent text-white">ไม่มีค่าธรรมเนียม</span>
								</div>
								<h5 class="text-line2">ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566</h5>
								<p class="text-line4">กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย</p>
								<a class="btn btn-light px-4 btn-sm rounded-pill"
									href="../calendar-learn/detail.php">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>
						<div class="item" data-type="tab3">
							<div class="d-flex align-items-center flex-wrap mb-auto">
								<div class="-event ac">
									<h4>08</h4>ก.ค.
								</div>
								<div class="-event">
									<h4>16</h4>ก.ค.
								</div>
							</div>
							<a href="../../public/images/calendar/img1.jpg" class="img" data-fancybox="Calendar"
								data-caption="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566">
								<img src="../../public/images/calendar/img1.jpg" alt="">
							</a>
							<div class="text">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="-date">01 กรกฎาคม 2023</div>
									<div class="-view">250</div>
								</div>
								<div class="my-3">
									<span class="-type">อื่นๆ</span>
									<span class="-type bg-transparent text-white">ไม่มีค่าธรรมเนียม</span>
								</div>
								<h5 class="text-line2">ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566</h5>
								<p class="text-line4">กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย</p>
								<a class="btn btn-light px-4 btn-sm rounded-pill"
									href="../calendar-learn/detail.php">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>
						<div class="item" data-type="tab1">
							<div class="d-flex align-items-center flex-wrap mb-auto">
								<div class="-event ac">
									<h4>08</h4>ก.ค.
								</div>
								<div class="-event">
									<h4>16</h4>ก.ค.
								</div>
							</div>
							<a href="../../public/images/learning/img1.jpg" class="img" data-fancybox="Calendar"
								data-caption="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566">
								<img src="../../public/images/learning/img1.jpg" alt="">
							</a>
							<div class="text">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="-date">01 กรกฎาคม 2023</div>
									<div class="-view">250</div>
								</div>
								<div class="my-3">
									<span class="-type">ท่องเที่ยวสุขสันต์ ที่พิพิธภัณฑ์เกษตรฯ</span>
									<span class="-type bg-transparent text-white">ไม่มีค่าธรรมเนียม</span>
								</div>
								<h5 class="text-line2">ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566</h5>
								<p class="text-line4">กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย</p>
								<a class="btn btn-light px-4 btn-sm rounded-pill"
									href="../calendar-learn/detail.php">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>
						<div class="item" data-type="tab1">
							<div class="d-flex align-items-center flex-wrap mb-auto">
								<div class="-event ac">
									<h4>08</h4>ก.ค.
								</div>
								<div class="-event">
									<h4>16</h4>ก.ค.
								</div>
							</div>
							<a href="../../public/images/calendar/img1.jpg" class="img" data-fancybox="Calendar"
								data-caption="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566">
								<img src="../../public/images/calendar/img1.jpg" alt="">
							</a>
							<div class="text">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="-date">01 กรกฎาคม 2023</div>
									<div class="-view">250</div>
								</div>
								<div class="my-3">
									<span class="-type">ท่องเที่ยวสุขสันต์ ที่พิพิธภัณฑ์เกษตรฯ</span>
									<span class="-type bg-transparent text-white">ไม่มีค่าธรรมเนียม</span>
								</div>
								<h5 class="text-line2">ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566</h5>
								<p class="text-line4">กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย</p>
								<a class="btn btn-light px-4 btn-sm rounded-pill"
									href="../calendar-learn/detail.php">ข้อมูลเพิ่มเติม</a>
							</div>
						</div>

						<button type="button" class="btn btn-style4 mx-auto mt-3">
							โหลดเพิ่มเติม
							<img src="../../public/images/icon-select.png" style="mix-blend-mode: color-dodge;" alt="">
						</button>
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
	<!-- calendar-style -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>
	<script>
		let myDatepicker = (el) => {
			$("#datepicker").val(el);
			console.log('เลือกวันที่ ' + el);
		}
	</script>
</body>

</html>