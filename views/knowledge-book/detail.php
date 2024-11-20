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
					<a href="../knowledge-book/">หนังสือองค์ความรู้</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">สารพัดว่าน</li>
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
				<div class="--detail">
					<h3 class="head mb-4 text-center">สารพัดว่าน</h3>
					<img src="https://placehold.co/1200x1565" class="rounded w-100" alt="">
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
								<span class="border rounded-pill px-3 py-1 m-1">#พืช</span>
								<span class="border rounded-pill px-3 py-1 m-1">#มะพร้าวไทย</span>
								<span class="border rounded-pill px-3 py-1 m-1">#แมลง</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6 pr-2 pr-sm-3">
							<a href="#" class="btn btn-outline-light text-left border p-3 p-md-4 text-muted w-100 h-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">สารพัดว่าน</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-3 p-md-4 text-right text-muted w-100 h-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">สมุนไพรเสริมภูมิคุ้มกันทุก บ้านควรมี</b>
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