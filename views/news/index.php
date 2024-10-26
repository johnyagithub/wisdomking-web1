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
				<li class="breadcrumb-item active" aria-current="page">ข่าว & ประชาสัมพันธ์</li>
			</ol>
		</nav>

		<section class="box-News py-4">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">ข่าว & ประชาสัมพันธ์</h3>
					<div class="ml-auto d-flex flex-wrap" data-showid="data-Calendar">
						<a href="#" class="btn btn-style3 px-3 text-muted m-1 active">ทั้งหมด</a>
						<a href="#" class="btn btn-style3 px-3 text-muted m-1">ข่าว</a>
						<a href="#" class="btn btn-style3 px-3 text-muted m-1">คณะเข้าชม</a>
						<a href="#" class="btn btn-style3 px-3 text-muted m-1">ข่าวสื่อมวลชน</a>
						<a href="#" class="btn btn-style3 px-3 text-muted m-1">ข่าวผู้บริหาร</a>
						<a href="#" class="btn btn-style3 px-3 text-muted m-1">ข่าวกิจกรรมต่างๆ</a>
					</div>
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
					<div class="col-sm-4 col-lg-3 col-xl-2 pl-sm-0">
						<select class="bg-white form-control form-control-style">
							<option selected>เรียงลำดับข้อมูล</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="mx-auto pt-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ข่าว & ประชาสัมพันธ์ ทั้งหมด</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
						has been the
						industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="row py-4">

					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
									ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
									สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
									ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
									ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
									สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
									ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
									ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
									สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
									ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
									ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
									สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
									ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<a href="../news/detail.php" class="item">
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
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>

					<button type="button" class="btn btn-style4 mx-auto" style="margin-top: -42px;">
						โหลดเพิ่มเติม
						<img src="../../public/images/icon-select.png" style="mix-blend-mode: color-dodge;" alt="">
					</button>
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
	<script type="text/javascript" src="../../public/js/custom_calendar.js"></script>
</body>

</html>