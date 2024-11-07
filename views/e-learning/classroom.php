<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/e-learning.css">

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
					<a href="#">e-Learning</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">คอร์สทั้งหมด</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../e-learning/attend-class.php">เข้าเรียน</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">ห้องเรียน</li>
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
					<h4 class="head mb-4 text-center">ห้องเรียน</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
		</section>

		<section class="pb-4">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xl-4">
						<h5>รายวิชาของฉัน</h5>
						<h4 class="text-gradient">พลังดิน 3 ดี เตรียมดินให้พร้อม<br> พืชผลก็งอกงาม</h4>
						<b class="text-primary">DSO5</b>
						<div class="box-Course-syllabus d-block nav nav-tabs border-bottom-0" role="tablist">

							<div class="item align-items-center finished" id="nav-1-tab" data-toggle="tab" data-target="#nav-1"
								type="button" role="tab" aria-controls="nav-1" aria-selected="false">
								<div class="-icon">
									<img src="../../public/images/play-circle-fill.png" alt="">
								</div>
								<div class="text">
									<b>บทที่ 1</b>
									<span>วีดีโอ, 15 นาที</span>
								</div>
								<i class="fa fa-angle-right ml-auto fa-2x text-secondary" aria-hidden="true"></i>
							</div>
							<div class="item align-items-center active" id="nav-2-tab" data-toggle="tab" data-target="#nav-2"
								type="button" role="tab" aria-controls="nav-2" aria-selected="true">
								<div class="-icon">
									<img src="../../public/images/play-circle-fill.png" alt="">
								</div>
								<div class="text">
									<b>บทที่ 2</b>
									<span>วีดีโอ, 15 นาที</span>
								</div>
								<i class="fa fa-angle-right ml-auto fa-2x text-secondary" aria-hidden="true"></i>
							</div>
							<div class="item align-items-center" id="nav-3-tab" data-toggle="tab" data-target="#nav-3" type="button"
								role="tab" aria-controls="nav-3" aria-selected="false">
								<div class="-icon">
									<img src="../../public/images/play-circle-fill.png" alt="">
								</div>
								<div class="text">
									<b>บทที่ 3</b>
									<span>วีดีโอ, 15 นาที</span>
								</div>
								<i class="fa fa-angle-right ml-auto fa-2x text-secondary" aria-hidden="true"></i>
							</div>
							<div class="item align-items-center" id="nav-4-tab" data-toggle="tab" data-target="#nav-4" type="button"
								role="tab" aria-controls="nav-4" aria-selected="false">
								<div class="-icon">
									<img src="../../public/images/icon-document.png" alt="">
								</div>
								<div class="text">
									<b>แบบทดสอบ Post - test</b>
								</div>
								<i class="fa fa-angle-right ml-auto fa-2x text-secondary" aria-hidden="true"></i>
							</div>

						</div>
					</div>
					<div class="box-Course-syllabus-tab col tab-content">
						<div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
							<div class="-video">
								<h4 class="text-center font-weight-light mb-3"><b>บทที่ 1 :</b> บทแนะนำรายวิชา</h4>
								<!-- ตัวอย่างแบบ popup -->
								<!-- <div class="img">
									<div class="btn-play-video">
										<button type="button" class="btn rounded-circle" data-modal="#video" data-type="youtube"
											data-src="https://www.youtube.com/embed/6VStThKU2cU?autoplay=1&amp;loop=1&amp;autopause=0"></button>
									</div>
									<img src="https://placehold.co/500x300" alt="">
								</div> -->
								<video class="video" controls src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"></video>
							</div>
							<p class="text-center mt-3"><b>หมายเหตุ :</b>
								<img src="../../public/images/Vector.png" class="mr-2" style="width: 16px;"
									alt="">คุณสะสมเวลาเรียนในหัวข้อนี้ครบตามที่กำหนดแล้ว
							</p>
						</div>
						<div class="tab-pane fade show active" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
							<div class="-video">
								<h4 class="text-center font-weight-light mb-3"><b>บทที่ 2 :</b> บทแนะนำรายวิชา</h4>
								<video class="video" controls src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"></video>
							</div>
							<p class="text-center mt-3"><b>หมายเหตุ :</b>
								<img src="../../public/images/Vector.png" class="mr-2" style="width: 16px;"
									alt="">คุณสะสมเวลาเรียนในหัวข้อนี้ครบตามที่กำหนดแล้ว
							</p>
						</div>
						<div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
							<div class="-video">
								<h4 class="text-center font-weight-light mb-3"><b>บทที่ 3 :</b> บทแนะนำรายวิชา</h4>
								<video class="video" controls src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"></video>
							</div>
							<p class="text-center mt-3"><b>หมายเหตุ :</b>
								<img src="../../public/images/Vector.png" class="mr-2" style="width: 16px;"
									alt="">คุณสะสมเวลาเรียนในหัวข้อนี้ครบตามที่กำหนดแล้ว
							</p>
						</div>
						<div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
							<div class="-video">
								<h4 class="text-center font-weight-light mb-3"><b>บทที่ 4 :</b> บทแนะนำรายวิชา</h4>
								<video class="video" controls src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"></video>
							</div>
							<p class="text-center mt-3"><b>หมายเหตุ :</b>
								<img src="../../public/images/Vector.png" class="mr-2" style="width: 16px;"
									alt="">คุณสะสมเวลาเรียนในหัวข้อนี้ครบตามที่กำหนดแล้ว
							</p>
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
		$(function () {
			$('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				var $iframes = $('.box-Course-syllabus-tab .-video').find('.video');
				$iframes.each(function (index, video) {
					video.pause();
				});
			});
		});
	</script>
</body>

</html>