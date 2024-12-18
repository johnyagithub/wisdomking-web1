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
					<ul class="-status-bar d-none d-md-flex">
						<li><span class="circle"></span>หลักสูตร</li>
						<li><span class="circle"></span>กิจกรรม</li>
						<li><span class="circle"></span>จอง</li>
						<li><span class="circle"></span>สรุปการจอง</li>
					</ul>
					<div class="progress-container d-md-none">
						<div class="progress-circle">
							<span class="progress-text">of 4</span>
						</div>
						<div>
							<h3 class="progress-title"></h3>
							<div class="progress-step">ขั้นตอนถัดไป : <span></span></div>
						</div>
					</div>
				</div>

				<div class="box-Ourmuseum row m-0 pb-4">
					<div class="bg-muted3 text-secondary rounded py-3 px-4 mb-4 mx-auto text-center" style="max-width: 1000px;">
						กรุณาเลือกประเภทหลักสูตรที่ท่านสนใจ โดยท่านสามารถเลือกได้ครั้งละ 1 หลักสูตร จากหลักสูตรที่สร้างสรรค์เพื่อเพิ่มพูนพื้นฐานด้านการเกษตรวิถีพอเพียง อันทรงคุณค่าของแผ่นดิน สืบสานพระราชปณิธานของพ่อหลวงเพื่อประยุกต์ใ้หเกิดความยั่งยืน
					</div>

					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">1. หลักสูตร “ตามรอยพ่อ”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">2. หลักสูตร “เกษตรสร้างสรรค์”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">3. หลักสูตร “วิถีเกษตรของพ่อ”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">4. หลักสูตร “สืบทอดพระราชปณิธาน กษัตริย์เกษตร”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">5. หลักสูตร “นวัตกรรมของพ่อ”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">6. หลักสูตร “พอดีพอเพียง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">7. หลักสูตร “ตามรอยพ่อ กษัตริย์เกษตรเศรษฐกิจพอเพียง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">8. หลักสูตร “ลดเวลาเรียน เพิ่มเวลารู้”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 5 ชั่วโมง เวลา 09.00 - 15.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">9. หลักสูตร “รู้ก่อนทำ ตามรอยพ่อ”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 5 ชั่วโมง เวลา 09.00 - 15.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">10. หลักสูตรอบรม/ค่ายการเรียนรู้ “วิถีพอเพียง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 2 วัน 1 คืน</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">11. หลักสูตรอบรม/ค่ายการเรียนรู้ “ต้นกล้าพอเพียง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 วัน 2 คืน</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">12. หลักสูตรเกษตรเคลื่อนที่ “เกษตรพอเพียง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 2 ชั่วโมง เวลา 09.00 - 11.00 น. หรือ เวลา 13.00 - 15.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3 px-0 px-sm-2">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/628x376" alt="" style="aspect-ratio: 628 / 376;">
							</div>
							<div class="text">
								<h4 class="text-line1">13. หลักสูตรเกษตรเคลื่อนที่ “เกษตรพึ่งตนเอง”</h4>
								<p class="text-line2">ระยะเวลาเรียนรู้ 3 ชั่วโมง เวลา 09.00 - 12.00 น. หรือ เวลา 13.00 - 16.00 น.</p>
								<a class="btn btn-light px-5 rounded-pill" href="../course-event/detail.php">ดูรายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>

					<div class="col-12 d-flex justify-content-center">
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