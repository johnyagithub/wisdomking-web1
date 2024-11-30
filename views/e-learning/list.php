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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../e-learning/">e-Learning</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">คอร์สทั้งหมด</li>
			</ol>
		</nav>

		<section class="box-courses py-4">
			<div class="container px-0 px-sm-3 -sticky">
				<div class="d-flex flex-wrap flex-md-nowrap align-items-start">
					<h3 class="head mb-4 mx-3 ml-sm-0" style="white-space: nowrap;">คอร์สทั้งหมด</h3>
					<div class="scale-navTabs ml-auto">
						<div class="box-navTabs ml-auto d-flex flex-wrap" data-showId="data-Courses">
							<button type="button" class="btn btn-style3 px-3 m-1 text-muted active">ทั้งหมด</button>
							<button type="button" data-type="tab1" data-bg="#41ACFE" data-color="#fff"
								class="btn btn-style3 px-3 m-1 text-muted">องค์ความรู้วิชาของแผ่นดิน</button>
							<button type="button" data-type="tab2" data-bg="#BED257" data-color="#3B5E22"
								class="btn btn-style3 px-3 m-1 text-muted">เกษตรภูธร</button>
							<button type="button" data-type="tab3" data-bg="#EAF4B6" data-color="#3B5E22"
								class="btn btn-style3 px-3 m-1 text-muted">กิน อยู่ ดี</button>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mx-auto pt-4" style="max-width: 1000px;">
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the
						industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="row pt-5 justify-content-center">
					<div class="col-sm-7 col-lg-5 col-xl-4 mb-3">
						<div class="input-group bg-light form-control-style">
							<div class="input-group-append">
								<button class="btn px-3 bg-white btn-sm" type="submit">
									<img src="../../public/images/icon-search.png" alt="" class="icon-search" style="width: 24px;">
								</button>
							</div>
							<input type="text" class="bg-white form-control pl-0 border-0" placeholder="ค้นหาข้อมูล..."
								autocomplete="off">
						</div>
					</div>

				</div>

				<div id="data-Courses" class="row py-4">

					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 1</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 2</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 3</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 1</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 2</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 3</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 1</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 2</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 3</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 1</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 2</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 3</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 1</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 2</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
						<a href="../e-learning/detail.php" class="item">
							<div class="img">
								<img src="https://placehold.co/355x192" alt="">
							</div>
							<div class="text">
								<h5 class="text-line1">คอร์สที่ 3</h5>
								<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
							</div>
						</a>
					</div>

					<div class="d-flex w-100">
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
	<script type="text/javascript" src="../../public/js/e-learning.js"></script>

</body>

</html>