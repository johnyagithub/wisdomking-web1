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
				<li class="breadcrumb-item active" aria-current="page">เข้าเรียน</li>
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
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">เข้าเรียน</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="--detail">
					<h5>รายวิชาของฉัน</h5>
					<div class="box-Course-syllabus">

						<div class="item">
							<div class="img">
								<a href="../../public/images/news/img1.jpg" data-fancybox="img" data-caption="">
									<img src="https://placehold.co/500x300 " alt="">
								</a>
							</div>
							<div class="text">
								<h4 class="text-gradient">พลังดิน 3 ดี เตรียมดินให้พร้อม<br> พืชผลก็งอกงาม</h4>
								<b class="text-primary">DSO5</b>
								<div class="date mt-auto text-secondary">
									<h6 class="font-weight-light">2567/1</h6>
									<h6 class="font-weight-light"><b>ลงทะเบียน :</b> 23 พ.ค. 2567
									</h6>
									<h6 class="font-weight-light"><b>เข้าเรียนได้ :</b> 2 พ.ค. ถึง 31 พ.ค. 2567</h6>
								</div>
							</div>
							<div class="-button">
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-I.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ข้อมูลรายวิชา</u></h6>
								</a>
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-delete.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ยกเลิกการลงทะเบียน</u></h6>
								</a>
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-graduation.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ขอสำเร็จการศึกษา</u></h6>
								</a>
								<a class="btn btn-style w-100 mt-auto" href="../e-learning/classroom.php" role="button">เข้าเรียน</a>
							</div>
						</div>
						<div class="item">
							<div class="img">
								<a href="../../public/images/news/img1.jpg" data-fancybox="img" data-caption="">
									<img src="https://placehold.co/500x300 " alt="">
								</a>
							</div>
							<div class="text">
								<h4 class="text-gradient">ปลูกผักปลดหนี้ ปรับแนวคิด<br> ก้าวข้าม วิกฤตต้มยำกุ้ง</h4>
								<b class="text-primary">DSO8</b>
								<div class="date mt-auto text-secondary">
									<h6 class="font-weight-light">2567/1</h6>
									<h6 class="font-weight-light"><b>ลงทะเบียน :</b> 23 พ.ค. 2567
									</h6>
									<h6 class="font-weight-light"><b>เข้าเรียนได้ :</b> 2 พ.ค. ถึง 31 พ.ค. 2567</h6>
								</div>
							</div>
							<div class="-button">
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-I.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ข้อมูลรายวิชา</u></h6>
								</a>
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-delete.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ยกเลิกการลงทะเบียน</u></h6>
								</a>
								<a href="#" class="d-flex text-secondary mb-2">
									<img src="../../public/images/icon-graduation.png" style="width:20px;" class="mr-2 mb-auto" alt="">
									<h6><u>ขอสำเร็จการศึกษา</u></h6>
								</a>
								<a class="btn btn-style w-100 mt-auto" href="../e-learning/classroom.php" role="button">เข้าเรียน</a>
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
</body>

</html>