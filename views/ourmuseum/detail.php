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
					<a href="../ourmuseum/">พิพิธภัณฑ์ของเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">พระราชพิธีในวิถีเกษตร</li>
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

					<div class="mx-auto" style="max-width: 1000px;">
						<h4 class="head mb-4 text-center">พระราชพิธีในวิถีเกษตร</h4>
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
						<div class="col-6 pr-2 pr-sm-3">
							<a href="#" class="btn btn-outline-light text-left border p-4 text-muted w-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">พิพิธภัณฑ์เกษตรคือชีวิต</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-4 text-right text-muted w-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">พิพิธภัณฑ์ในหลวงรักเรา</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="box-Ourmuseum pb-4 pt-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);
">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">พิพิธภัณฑ์ของเรา</h3>
					<div class="scale-navTabs ml-auto">
						<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
							<button class="nav-link active" id="nav-Indoor-tab" data-toggle="tab" data-target="#nav-Indoor"
								type="button" role="tab" aria-controls="nav-Indoor" aria-selected="true">
								<img src="../../public/images/moon.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์ในอาคาร
							</button>
							<button class="nav-link" id="nav-Outdoor-tab" data-toggle="tab" data-target="#nav-Outdoor" type="button"
								role="tab" aria-controls="nav-Outdoor" aria-selected="false">
								<img src="../../public/images/sun.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์กลางแจ้ง
							</button>
							<button class="nav-link" id="nav-Virtual-tab" data-toggle="tab" data-target="#nav-Virtual" type="button"
								role="tab" aria-controls="nav-Virtual" aria-selected="false">
								<img src="../../public/images/reload.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์เสมือนจริง
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content py-4">
					<div class="tab-pane fade show active" id="nav-Indoor" role="tabpanel" aria-labelledby="nav-Indoor-tab">
						<div class="owl-carousel nav-dots-style">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Outdoor" role="tabpanel" aria-labelledby="nav-Outdoor-tab">
						<div class="owl-carousel nav-dots-style">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Virtual" role="tabpanel" aria-labelledby="nav-Virtual-tab">
						<div class="owl-carousel nav-dots-style">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
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