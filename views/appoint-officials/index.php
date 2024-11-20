<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>

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
					<a href="#">เกี่ยวกับเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">แต่งตั้งเจ้าหน้าที่</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">แต่งตั้งเจ้าหน้าที่</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<img
					src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/428-0.38327600%201689922971-froalaeditor.jpg"
					class="mw-100 mx-auto d-block rounded my-3" alt="">
				<div class="--detail">
					<div class="py-4 border-top">
						<div class="d-flex flex-wrap justify-content-center align-items-center my-3">
							<div class="box-Share">Share this:</div>
							<div>
								<a href="#" target="_blank">
									<img src="../../public/images/icon-fb2.png" style="width:24px;" class="m-1" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="../../public/images/icon-line2.png" style="width:24px;" class="m-1" alt="">
								</a>
								<a href="#" target="_blank">
									<img src="../../public/images/icon-x.png" style="width:24px;" class="m-1" alt="">
								</a>
							</div>
							<div class="mx-auto mr-sm-0 d-inline-flex flex-wrap mt-4 mt-sm-0">
								<span class="border rounded-pill px-3 py-1 m-1">#COVID19</span>
								<span class="border rounded-pill px-3 py-1 m-1">#สงกรานต์</span>
								<span class="border rounded-pill px-3 py-1 m-1">#เดินทาง</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6 pr-2 pr-sm-3">
							<a href="#" class="btn btn-outline-light text-left border p-3 p-md-4 text-muted w-100 h-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">มาตรการ COVID 1</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-3 p-md-4 text-right text-muted w-100 h-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">มาตรการ COVID 2</b>
							</a>
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
</body>

</html>