<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/calendar.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/reserve.css">

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
				<li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
			</ol>
		</nav>

		<section class="py-4">
			<div class="container">

				<?php include('inc-course-event.php'); ?>

				<div class="box-status" data-status="2">
					<h4 class="text-center">สมัครเข้าร่วมโครงการ</h4>
					<ul class="-status-bar">
						<li><span class="circle"></span>หลักสูตร</li>
						<li><span class="circle"></span>กิจกรรม</li>
						<li><span class="circle"></span>จอง</li>
						<li><span class="circle"></span>สรุปการจอง</li>
					</ul>
				</div>

				<form id="form-course" action="./reserve3.php"  class="my-4" novalidate>
					<div class="box-form-course">
						<div class="form-container">
							<div class="d-flex align-items-start pt-3">
								<div class="-number">1</div>
								<div class="w-100">
									<h4 class="text-gradient mb-3">หลักสูตร "ตามรอยพ่อ"</h4>
									<div class="d-lg-flex">
										<b class="mr-1">ระยะเวลาเรียน : </b>
										<p>2 ชั่วโมง เวลา 09:00 - 11:00 น. หรือ เวลา 13:00 - 15:00 น.</p>
									</div>
									<div class="d-lg-flex">
										<b>กิจกรรมการเรียนรู้ :</b>
										<ol class="pl-4">
											<li>เลือกภาพยนตร์ 3 มิติ <strong>ได้ 1 เรื่อง</strong></li>
											<li>เลือกกิจกรรมสร้างสรรค์ความคิด <strong>ได้ 1 กิจกรรม</strong></li>
											<li>เลือกเรียนรู้พิพิธภัณฑ์ภายในอาคาร <strong>ได้ 1 พิพิธภัณฑ์ 3 ฐานการเรียนรู้</strong></li>
										</ol>
									</div>
								</div>
							</div>

							<div class="-paper">
								<!-- Section: เลือกภาพยนตร์ 3 มิติ -->
								<div class="row row-p10 m-0 mb-4">
									<h6 class="col-12 p-0">*1. เลือกภาพยนตร์ 3 มิติ <b class="text-danger">ได้ 1 เรื่อง</b></h6>
									<div class="col-12 column-pc-2">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie1">
											<label class="form-check-label" for="movie1">เรื่องของพ่อในบ้านเรา</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie2">
											<label class="form-check-label" for="movie2">แผ่นดินของเรา</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie3">
											<label class="form-check-label" for="movie3">ทรัพยดิน สินน้ำ</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie4">
											<label class="form-check-label" for="movie4">ไผ่รวกกับทานตะวันผู้ยโส</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie5">
											<label class="form-check-label" for="movie5">แกล้งดินเปลี่ยนดินให้เป็นทอง</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie6">
											<label class="form-check-label" for="movie6">เมล็ดสุดท้าย</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie7">
											<label class="form-check-label" for="movie7">คิดถึงมิลืมเลือน</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie8">
											<label class="form-check-label" for="movie8">สืบทอดความดีงาน</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="movie9">
											<label class="form-check-label" for="movie9">อัจฉริยะนวัตกรรม</label>
										</div>
									</div>
								</div>

								<!-- Section: เลือกกิจกรรมสร้างสรรค์ -->
								<div class="row row-p10 m-0 mb-4">
									<h6 class="col-12 p-0">*2. เลือกกิจกรรมสร้างสรรค์ความคิด <b class="text-danger">ได้ 1 กิจกรรม</b>
									</h6>
									<div class="col-md-6">
										<h6 class="mt-2">ระดับขั้นประถมปลาย - ประชาชนทั่วไป</h6>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity1">
											<label class="form-check-label" for="activity1">รากฐานแห่งความมั่งคง</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity2">
											<label class="form-check-label" for="activity2">เชื่อเจ้าปัญญา</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity3">
											<label class="form-check-label" for="activity3">แม่น้ารวมใจ</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity4">
											<label class="form-check-label" for="activity4">สื่อสารสร้างสรรค์</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity5">
											<label class="form-check-label" for="activity5">แผ่นเจ้าปัญหา</label>
										</div>
									</div>
									<div class="col-md-6">
										<h6 class="mt-2">ระดับขั้นอนุบาล - ประถมต้น</h6>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="activity6">
											<label class="form-check-label" for="activity6">บล็อกสร้างจินตนาการ</label>
										</div>
									</div>
								</div>

								<!-- Section: เลือกพิพิธภัณฑ์ -->
								<div>
									<h6>*3. เลือกเรียนรู้พิพิธภัณฑ์ในอาคาร <b class="text-danger">ได้ 1 พิพิธภัณฑ์ 3 ฐานการเรียนรู้</b>
									</h6>
									<!-- 3.1 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์ในหลวงรักเรา อาคารเฉลิมพระเกียรติฯ 5 ชั้น 1</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-1">
												<label class="form-check-label" for="museum1-1">พระราชพิธีในวิถีเกษตร</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-2">
												<label class="form-check-label" for="museum1-2">หลักการทรวงงาน</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-3">
												<label class="form-check-label" for="museum1-3">วิธีเกษตรของพ่อ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-4">
												<label class="form-check-label" for="museum1-4">ภูมิพลังแผ่นดิน</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-5">
												<label class="form-check-label" for="museum1-5">กษัตริย เกษตร</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-6">
												<label class="form-check-label" for="museum1-6">ตามรอยพ่อ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-7">
												<label class="form-check-label" for="museum1-7">นวัตกรรมของพ่อ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum1-8">
												<label class="form-check-label" for="museum1-8">สนองพระราชปณิธาน</label>
											</div>
										</div>
									</div>

									<!-- 3.2 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์ในหลวงรักเรา (อาคารเฉลิมพระเกียรติฯ ชั้น 5)</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-1">
												<label class="form-check-label" for="museum2-1">วิถีเกษตรลุ่มน้ำ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-2">
												<label class="form-check-label" for="museum2-2">เกษตรถิ่นไทย</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-3">
												<label class="form-check-label" for="museum2-3">เกษตรไทย เกษตรโลก</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-4">
												<label class="form-check-label" for="museum2-4">มหัศจรรย์ท้องทุ่ง</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-5">
												<label class="form-check-label" for="museum2-5">ตลาดเก่าชาวเกษตร</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-6">
												<label class="form-check-label" for="museum2-6">นวัตกรรมเกษตรฯ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-7">
												<label class="form-check-label" for="museum2-7">เกษตรอนาคต</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum2-8">
												<label class="form-check-label" for="museum2-8">น้อมนำคำพ่อสอน</label>
											</div>
										</div>
									</div>

									<!-- 3.3 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์มหัศจรรย์พันธุกรรม (อาคารเฉลิมพระเกียรติฯ ชั้น 3)</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum3-1">
												<label class="form-check-label" for="museum3-1">แรงบันดาลใจ...เจ้าฟ้านักอนุรักษ์</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum3-2">
												<label class="form-check-label" for="museum3-2">พันธุกรรมสร้างชีวิต</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum3-3">
												<label class="form-check-label" for="museum3-3">พันธุกรรมตามนิเวศ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum3-4">
												<label class="form-check-label" for="museum3-4">อนุรักษ์พันธุกรรม...ทำได้</label>
											</div>
										</div>
									</div>

									<!-- 3.4 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์ป่าดงพงไพร (อาคารเฉลิมพระเกียรติฯ ชั้น 4)</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum4-1">
												<label class="form-check-label" for="museum4-1">สมดุลแห่งธรรมชาติ สมดุลแห่งชีวิต</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum4-2">
												<label class="form-check-label" for="museum4-2">เสียงแห่งธรรมชาติ (ป่ากลางวัน - กลางคืน)</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum4-3">
												<label class="form-check-label" for="museum4-3">น้อมนำพระราชดำรัสเพื่อธรรมชาติฯ</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum4-4">
												<label class="form-check-label" for="museum4-4">คืนกลับสู่วิถีธรรมชาติ</label>
											</div>
										</div>
									</div>

									<!-- 3.5 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์ชีวิตน้ำ (อาคารเฉลิมพระเกียรติฯ ชั้น 6)</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum6-1">
												<label class="form-check-label" for="museum6-1">"น้ำ" แม่ผู้ให้ชีวิต</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum6-2">
												<label class="form-check-label" for="museum6-2">โรงภาพยนตร์ 4 มิติ "วิถีแห่งน้ำ"</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum6-3">
												<label class="form-check-label" for="museum6-3">แม่น้ำ สายเลือดที่หล่อเลี้ยงชีวิต</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum6-4">
												<label class="form-check-label" for="museum6-4">รอยดำเนินการเดินไปในแดนชล</label>
											</div>
										</div>
									</div>

									<!-- 3.6 -->
									<div class="row px-2">
										<h6 class="col-12 mt-2 px-3">พิพิธภัณฑ์ดินดล (อาคารเฉลิมพระเกียรติฯ ชั้น 7)</h6>
										<div class="col-12 column-pc-2">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum7-1">
												<label class="form-check-label" for="museum7-1">ชีวิตในดิน</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum7-2">
												<label class="form-check-label" for="museum7-2">โรงภาพยนตร์ 4 มิติ "ดินมีชีวิต"</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum7-3">
												<label class="form-check-label" for="museum7-3">คืนชีพให้ผืนดิน</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="museum7-4">
												<label class="form-check-label" for="museum7-4">นักวิทยาศาสตร์ดินเพื่อมนุษยธรรม</label>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="form-row justify-content-center mt-4 border-top pt-4">
						<div class="col-6 col-md-4 col-lg-3 px-1">
							<button type="reset" class="btn btn-light border bg-white rounded-pill w-100">ยกเลิก</button>
						</div>
						<div class="col-6 col-md-4 col-lg-3 px-1">
							<button type="submit" class="btn btn-style w-100">ดำเนินการต่อ</button>
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
	<!-- calendar -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>

</body>

</html>