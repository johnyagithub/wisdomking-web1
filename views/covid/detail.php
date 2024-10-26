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
				<li class="breadcrumb-item active" aria-current="page">มาตรการ COVID-19</li>
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
					<h4 class="head mb-4 text-center">มาตรการ COVID-19</h4>
					<p class="text-center mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
						Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="--detail">
					<img src="../../public/images/calendar/img1.jpg" class="rounded w-100" alt="">
					<div class="d-flex flex-wrap my-3 align-items-center">
						<div class="-date">
							17 สิงหาคม 2023
						</div>
						<div class="-view">
							300
						</div>
						<div class="ml-auto">
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
					</div>

					<div class="py-4 border-top mt-5">
						Share this:
						<div class="d-flex flex-wrap my-3">
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
							<div class="ml-auto d-inline-flex mt-4">
								<span class="border rounded-pill px-3 py-1 mx-1">#COVID19</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#สงกรานต์</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#เดินทาง</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<a href="#" class="border p-4 d-block text-muted" style="border-radius: 8px;">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark">มาตรการ COVID 1</b>
							</a>
						</div>
						<div class="col-6">
							<a href="#" class="border p-4 d-block text-right text-muted" style="border-radius: 8px;">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark">มาตรการ COVID 2</b>
							</a>
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