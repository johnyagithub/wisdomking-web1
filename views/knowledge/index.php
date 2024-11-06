<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/e-learning.css">
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
			<ol class="breadcrumb container bg-white">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">องค์ความรู้</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">องค์ความรู้</li>
			</ol>
		</nav>

		<section class="box-Knowledge py-4">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">องค์ความรู้</h3>
					<div class="box-navTabs ml-auto d-flex flex-wrap" data-showId="data-Courses">
						<div class="owl-carousel">
							<button type="button" class="btn btn-style3 px-3 text-muted active">ทั้งหมด</button>
							<button type="button" data-type="tab1" class="btn btn-style3 px-3 text-muted">
								<img src="../../public/images/document.png" style="width: 24px;" alt="">
								บทความ
							</button>
							<button type="button" data-type="tab2" class="btn btn-style3 px-3 text-muted">
								<img src="../../public/images/photos.png" style="width: 24px;" alt="">
								บรรยายประกอบภาพ
							</button>
							<button type="button" data-type="tab3" class="btn btn-style3 px-3 text-muted">
								<img src="../../public/images/play_circled.png" style="width: 24px;" alt="">
								บรรยายประกอบภาพ
							</button>
						</div>
					</div>
				</div>
				<div class="row mt-3 justify-content-center">
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
								<option value="">ทั้งหมด</option>
								<option value="usd">USD</option>
								<option value="euro">Euro</option>
								<option value="gbp">Pound</option>
							</select>
						</div>
					</div>
				</div>

				<div id="data-Courses" class="row py-4">
					<div class="col-12 mb-4" data-type="all">
						<div class="mx-auto" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">องค์ความรู้ทั้งหมด</h4>
							<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</div>
					<div class="col-12 mb-4 no-all" style="display:none;" data-type="tab1">
						<div class="mx-auto" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">บทความ</h4>
							<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</div>
					<div class="col-12 mb-4 no-all" style="display:none;" data-type="tab2">
						<div class="mx-auto" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">บรรยายประกอบภาพ</h4>
							<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</div>
					<div class="col-12 mb-4 no-all" style="display:none;" data-type="tab3">
						<div class="mx-auto" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">สื่อวิดิทัศน์</h4>
							<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6" data-type="tab1">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/document.png" style="width: 14px;" alt="">
											บทความ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab2">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/photos.png" style="width: 14px;" alt="">
											บรรยายประกอบภาพ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">ปรุงดินปลูกพืช</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab3">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img -video">
								<img src="../../public/images/Knowledge/img1.jpg" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
											สื่อวิดิทัศน์
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab1">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/document.png" style="width: 14px;" alt="">
											บทความ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab2">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/photos.png" style="width: 14px;" alt="">
											บรรยายประกอบภาพ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">ปรุงดินปลูกพืช</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab3">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img -video">
								<img src="../../public/images/Knowledge/img1.jpg" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
											สื่อวิดิทัศน์
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab1">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/document.png" style="width: 14px;" alt="">
											บทความ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab2">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/photos.png" style="width: 14px;" alt="">
											บรรยายประกอบภาพ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">ปรุงดินปลูกพืช</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab3">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img -video">
								<img src="../../public/images/Knowledge/img1.jpg" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
											สื่อวิดิทัศน์
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab1">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/document.png" style="width: 14px;" alt="">
											บทความ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab2">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img">
								<img src="https://placehold.co/650x350" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/photos.png" style="width: 14px;" alt="">
											บรรยายประกอบภาพ
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">ปรุงดินปลูกพืช</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6" data-type="tab3">
						<a href="../knowledge/detail.php" class="item px-2 px-xl-4">
							<div class="img -video">
								<img src="../../public/images/Knowledge/img1.jpg" alt="">
							</div>
							<div class="text">
								<div class="d-flex justify-content-between flex-wrap">
									<div class="mb-1">
										<span class="-type">
											<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
											สื่อวิดิทัศน์
										</span>
										<span class="-type">การเกษตร</span>
									</div>
									<div class="-view">300</div>
								</div>
								<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
								<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น
									กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
									นอกจากผลิตภัณฑ์ที่เป็น</p>
								<div class="-profile">
									<img src="../../public/images/img-pro.jpg" alt="profile">
									ผู้เขียน : Wisdomking
								</div>
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