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
					<a href="../learning/">สื่อการเรียนรู้</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">ภาพยนตร์แอนิเมชั่น 3 มิติ</li>
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
								<b class="text-dark text-line2">แกล้งดิน เปลี่ยนดินให้เป็นทอง</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-4 text-right text-muted w-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">แผ่นดินของเรา</b>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="box-News pb-4 pt-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);
">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">สื่อการเรียนรู้</h3>
					<div class="scale-navTabs ml-auto">
						<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
							<button class="nav-link active" id="nav1-tab" data-toggle="tab" data-target="#nav1" type="button"
								role="tab" aria-controls="nav1" aria-selected="true">
								ทั้งหมด
							</button>
							<button class="nav-link" id="nav2-tab" data-toggle="tab" data-target="#nav2" type="button" role="tab"
								aria-controls="nav2" aria-selected="false">
								ภาพยนตร์แอนิเมชั่น 3 มิติ
							</button>
							<button class="nav-link" id="nav3-tab" data-toggle="tab" data-target="#nav3" type="button" role="tab"
								aria-controls="nav3" aria-selected="false">
								วิดีทัศน์เต็มเรื่อง ภาพยนตร์แอนิเมชั่น 2 มิติ
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content py-4">
					<div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											19 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>
							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img2.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											18 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">คณะเข้าชม</span>
									<h5 class="text-line2">วิถีเกษตรของพ่อ วิถีเกษตรของไทย</h5>
									<p class="text-line3">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
										พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
										ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
								</div>
							</a>
							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img3.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											17 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">คณะเข้าชม</span>
									<h5 class="text-line2">นวัตกรรมของพ่อ พัฒนาเกษตรไทย</h5>
									<p class="text-line3">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
										พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
										โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
										เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
								</div>
							</a>
							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											19 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											19 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../learning/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											19 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
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