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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">โครงการส่งเสริมการเรียนรู้เกษตรเศรษฐกิจพอเพียง</li>
			</ol>
		</nav>

		<section class="py-4">
			<div class="container">

				<?php include('inc-course-event.php'); ?>

				<div class="box-status" data-status="1">
					<h4 class="text-center">สมัครเข้าร่วมโครงการ</h4>
					<ul class="-status-bar">
						<li><span class="circle"></span>หลักสูตร</li>
						<li><span class="circle"></span>กิจกรรม</li>
						<li><span class="circle"></span>จอง</li>
						<li><span class="circle"></span>สรุปการจอง</li>
					</ul>
				</div>

				<div class="box-Course pb-4">
					<div class="-recommend">
						กรุณาเลือกประเภทหลักสูตรที่ท่านสนใจ โดยท่านสามารถเลือกได้ครั้งละ 1 หลักสูตร จากหลักสูตรที่สร้างสรรค์เพื่อเพิ่มพูนพื้นฐานด้านการเกษตรวิถีพอเพียง อันทรงคุณค่าของแผ่นดิน สืบสานพระราชปณิธานของพ่อหลวงเพื่อประยุกต์ใ้หเกิดความยั่งยืน
					</div>

					<div class="course-item">
						<div class="item">
							<div class="img">
								<img src="../../public/images/img-course.jpg" alt="">
							</div>
							<div class="text">
								<div class="w-100">
									<h4 class="text-line1">หลักสูตร “ตามรอยพ่อ”</h4>
									<p class="text-line2 mb-0">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.
									</p>
								</div>
								<div class="--button">
									<a class="btn" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-item">
						<div class="item">
							<div class="img">
								<img src="../../public/images/img-course.jpg" alt="">
							</div>
							<div class="text">
								<div class="w-100">
									<h4 class="text-line1">หลักสูตร “ตามรอยพ่อ”</h4>
									<p class="text-line2 mb-0">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.
									</p>
								</div>
								<div class="--button">
									<a class="btn" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-item">
						<div class="item">
							<div class="img">
								<img src="../../public/images/img-course.jpg" alt="">
							</div>
							<div class="text">
								<div class="w-100">
									<h4 class="text-line1">หลักสูตร “ตามรอยพ่อ”</h4>
									<p class="text-line2 mb-0">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.
									</p>
								</div>
								<div class="--button">
									<a class="btn" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>
					<div class="course-item">
						<div class="item">
							<div class="img">
								<img src="../../public/images/img-course.jpg" alt="">
							</div>
							<div class="text">
								<div class="w-100">
									<h4 class="text-line1">หลักสูตร “ตามรอยพ่อ”</h4>
									<p class="text-line2 mb-0">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.
									</p>
								</div>
								<div class="--button">
									<a class="btn" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
								</div>
							</div>
						</div>
					</div>

					<div class="course-item d-flex w-100">
						<button type="button" class="btn btn-style4 mx-auto">
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
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>

</body>

</html>