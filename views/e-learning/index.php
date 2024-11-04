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
				<li class="breadcrumb-item active" aria-current="page">e-Learning</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h5 class="mb-4 text-center">สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
					</h5>
					<h3 class="head mb-4 text-center">โลกแห่งการเรียนรู้ ไม่มีวันจบสิ้น</h3>
					<p class="text-center mb-5 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					<hr class="my-3">
					<h4 class="head mb-4 text-center">หมวดหมู่</h4>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link border-0 active" id="nav-Indoor-tab" data-toggle="tab" data-target="#nav-Indoor"
								type="button" role="tab" aria-controls="nav-Indoor" aria-selected="true" style="aspect-ratio: 1;">
								หมวดหมู่<br>1
							</button>
							<button class="nav-link border-0" id="nav-Outdoor-tab" data-toggle="tab" data-target="#nav-Outdoor"
								type="button" role="tab" aria-controls="nav-Outdoor" aria-selected="false" style="aspect-ratio: 1;">
								หมวดหมู่<br>2
							</button>
							<button class="nav-link border-0" id="nav-Virtual-tab" data-toggle="tab" data-target="#nav-Virtual"
								type="button" role="tab" aria-controls="nav-Virtual" aria-selected="false" style="aspect-ratio: 1;">
								หมวดหมู่<br>3
							</button>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="box-Learning pt-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-5 col-lg-3 d-flex flex-column text-center text-sm-left order-sm-1">
						<a href="../e-learning/list.php" class="text-secondary"><u>ทั้งหมด</u></a>
						<div class="mb-auto py-4">
							<h3 class="head mb-4">คอร์สใหม่</h3>
							<h5>คอร์เรียนล่าสุดจากพิพิธภัณฑ์การเกษตรฯ มาสนุกกับการเรียนได้เลย !</h5>
						</div>
						<div class="arrow-default">
							<div class="o-prev"></div>
							<div class="o-next"></div>
						</div>
					</div>
					<div class="col-sm-7 col-lg-9">
						<div class="owl-carousel">

							<a href="../e-learning/detail.php" class="item">
								<div class="img">
									<img src="https://placehold.co/355x192" alt="">
								</div>
							</a>
							<a href="../e-learning/detail.php" class="item">
								<div class="img">
									<img src="https://placehold.co/355x192" alt="">
								</div>
							</a>
							<a href="../e-learning/detail.php" class="item">
								<div class="img">
									<img src="https://placehold.co/355x192" alt="">
								</div>
							</a>

						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-courses py-5"
			style="background: linear-gradient(180deg, rgba(247, 247, 247, 0) 0%, #EBEBEB 100%);">
			<div class="container">
				<div class="d-flex flex-wrap mb-2">
					<h4 class="head">คอร์สแนะนำ</h4>
					<a href="../e-learning/list.php" class="text-secondary ml-auto"><u>ทั้งหมด</u></a>
				</div>

				<div class="owl-carousel nav-dots-style show-dots">

					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #41ACFE; color: #fff;">องค์ความรู้วิชาของแผ่นดิน</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 1</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #BED257; color: #3B5E22;">เกษตรภูธร</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 2</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #BED257; color: #3B5E22;">เกษตรภูธร</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 3</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #41ACFE; color: #fff;">องค์ความรู้วิชาของแผ่นดิน</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 1</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>

				</div>
			</div>
		</section>

		<section class="box-courses py-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);
">
			<div class="container">
				<div class="d-flex flex-wrap mb-2">
					<h4 class="head">คอร์สทั้งหมด</h4>
					<a href="../e-learning/list.php" class="text-secondary ml-auto"><u>ทั้งหมด</u></a>
				</div>

				<div class="owl-carousel nav-dots-style show-dots">

					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #41ACFE; color: #fff;">องค์ความรู้วิชาของแผ่นดิน</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 3</h5>
							<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
								ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
								สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #BED257; color: #3B5E22;">เกษตรภูธร</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 3</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #EAF4B6; color: #3B5E22;">กิน อยู่ ดี</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 3</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>
					<a href="../e-learning/detail.php" class="item">
						<div class="img">
							<img src="https://placehold.co/355x192" alt="">
						</div>
						<div class="text">
							<span class="-type" style="background: #41ACFE; color: #fff;">องค์ความรู้วิชาของแผ่นดิน</span>
							<h5 class="text-line2">คอร์สแนะนำที่ 3</h5>
							<p class="text-line3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</a>

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