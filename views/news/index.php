<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

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
				<li class="breadcrumb-item active" aria-current="page">ข่าว & ประชาสัมพันธ์</li>
			</ol>
		</nav>

		<section class="box-News py-4">
			<div class="container px-0 px-sm-3 -sticky">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4 mx-3 mx-sm-0">ข่าว & ประชาสัมพันธ์</h3>
					<div class="scale-navTabs ml-auto">
						<div class="box-navTabs ml-auto d-flex flex-wrap" data-showId="data-Courses">
							<button type="button" class="btn btn-style3 px-3 m-1 text-muted active">ทั้งหมด</button>
							<button type="button" data-type="tab1" class="btn btn-style3 px-3 m-1 text-muted">
								ข่าว
							</button>
							<button type="button" data-type="tab2" class="btn btn-style3 px-3 m-1 text-muted">
								คณะเข้าชม
							</button>
							<button type="button" data-type="tab3" class="btn btn-style3 px-3 m-1 text-muted">
								ข่าวสื่อมวลชน
							</button>
							<button type="button" data-type="tab4" class="btn btn-style3 px-3 m-1 text-muted">
								ข่าวผู้บริหาร
							</button>
							<button type="button" data-type="tab5" class="btn btn-style3 px-3 m-1 text-muted">
								ข่าวกิจกรรมต่างๆ
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
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
						<div class="form-control-style">
							<select class="templatingSelect2">
								<option value="">เรียงลำดับข้อมูล</option>
								<option value="usd">USD</option>
								<option value="euro">Euro</option>
								<option value="gbp">Pound</option>
							</select>
						</div>
					</div>
				</div>
				<div class="mx-auto pt-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ข่าว & ประชาสัมพันธ์ ทั้งหมด</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
						Ipsum
						has been the
						industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div id="data-Courses" class="row py-4">

					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab1">
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
								<span class="-type">ข่าว</span>
								<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
									ประจำปี 2567 (NST FAIR 2024) </h5>
								<p class="text-line3 text-muted">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
									ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
									สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab3">
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
								<span class="-type">ข่าวสื่อมวลชน</span>
								<h5 class="text-line2">นวัตกรรมของพ่อ พัฒนาเกษตรไทย</h5>
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab4">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab5">
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
								<span class="-type">ข่าวกิจกรรมต่างๆ</span>
								<h5 class="text-line2">นวัตกรรมของพ่อ พัฒนาเกษตรไทย</h5>
								<p class="text-line3 text-muted">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
									พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
									เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab4">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab4">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
					<div class="col-lg-4 col-sm-6 mb-4" data-type="tab2">
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
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: -1
		});
	</script>

</body>

</html>