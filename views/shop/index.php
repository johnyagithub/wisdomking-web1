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
					<a href="#">สินค้าและบริการ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">ร้าน</li>
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
				<div class="-sticky d-flex flex-wrap align-items-start mb-4">
					<h3 class="head mb-4">ร้าน</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link active" id="nav-FoodEatGood-tab" data-toggle="tab" data-target="#nav-FoodEatGood"
								type="button" role="tab" aria-controls="nav-FoodEatGood" aria-selected="true">
								กิน อยู่ ดี
							</button>
							<button class="nav-link" id="nav-Shop-tab" data-toggle="tab" data-target="#nav-Shop" type="button"
								role="tab" aria-controls="nav-Shop" aria-selected="false">
								ร้านจำหน่ายของที่ระลึก
							</button>
							<button class="nav-link" id="nav-madocafe-tab" data-toggle="tab" data-target="#nav-madocafe" type="button"
								role="tab" aria-controls="nav-madocafe" aria-selected="false">
								MADO CAFE
							</button>
						</div>
					</div>
				</div>
				<div class="--detail">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="nav-FoodEatGood" role="tabpanel"
							aria-labelledby="nav-FoodEatGood-tab">
							<h4 class="head mb-4 text-center">กิน อยู่ ดี</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								industry's
								standard dummy text ever since the 1500s,</p>
							<br>
							<div>
								<h5>อาหาร กิน อยู่ ดี</h5>
								<p>จำหน่ายอาหารเพื่อสุขภาพ มีเมนูหลากหลาย ใหม่สดจากแปลงของพิพิธภัณฑ์เกษตรฯ ทุกวัน และผลผลิตเพื่อสุขภาพ
									ผลิตภัณฑ์คุณภาพ เปิดวันอังคาร - วันอาทิตย์ เวลา 08.30 - 16.30 น.</p>
								<h6>สอบถามรายละเอียด โทร 081-567-2806</h6>
								<div class="row row-p10">
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
								<h5>อาหาร กิน อยู่ ดี</h5>
								<p>จำหน่ายสินค้าอุปโภคบริโภค สินค้าเกษตรปลอดภัย จาก เครือข่ายพิพิธภัณฑ์เกษตรฯ
									เพื่อเชื่อมโยงภูมิปัญญาเกษตรไทย ที่สอดคล้องกับวิถีชีวิตคนปัจจุบัน ความสำคัญของการเกษตรในการดำเนินชีวิต
									และเป็นพื้นที่จัดแสดงผลผลิตเกษตรเศรษฐกิจพอเพียง เปิดวันอังคาร - วันอาทิตย์ เวลา 08.00 - 17.00 น.</p>
								<h6>สอบถามรายละเอียดที่เบอร์โทรศัพท์ 081-567-2806</h6>
								<div class="row row-p10">
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-Shop" role="tabpanel" aria-labelledby="nav-Shop-tab">
							<h4 class="head mb-4 text-center">ร้านจำหน่ายของที่ระลึก</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								industry's
								standard dummy text ever since the 1500s,</p>
							<br>
							<div>
								<h5>ร้านสดชื่น</h5>
								<p>ร้านจำหน่ายเครื่องดื่ม ขนม ไอศกรีม อาหารว่าง จุดรวมพล เตรียมความพร้อมก่อนเข้าชมพิพิธภัณฑ์ภายในอาคาร
									</h6>
								<div class="row row-p10">
									<div class="col-12">
										<img src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/344-0.00271400%201711766879-froalaeditor.jpg" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/858-0.00365200%201711768111-froalaeditor.jpg" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
								<h5>ร้านชื่นใจ</h5>
								<p>ร้านจำหน่ายกาแฟอินทรีย์ เครื่องดื่มเพื่อสุขภาพ ผลผลิตปลอดภัยจากพิพิธภัณฑ์ และเมนูเพื่อสุขภาพอื่นๆ
									อีกมากมาย</h6>
								<div class="row row-p10">
									<div class="col-12">
										<img src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/543-0.96327800%201711766754-froalaeditor.jpg" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
								<h5>ร้านสดใส</h5>
								<p>ร้านจำหน่ายสินค้าของที่ระลึกสินค้าอัตลักษณ์ พกฉ.หนังสือองค์ความรู้ด้านการเกษตร ผลิตภัณฑ์สมุนไพร
									เวชสำอาง สินค้าแปรรูป ผลิตภัณฑ์ แปรรูป จากเครือข่ายพิพิธภัณฑ์ การเกษตรฯ ทั่วประเทศ</h6>
								<div class="row row-p10">
									<div class="col-12">
										<img src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/394-0.27748300%201711767896-froalaeditor.jpg" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-madocafe" role="tabpanel" aria-labelledby="nav-madocafe-tab">
							<h4 class="head mb-4 text-center">MADO CAFE</h4>
							<p class="text-center">จำหน่ายกาแฟอินทรีย์ และเครื่องดื่มเพื่อสุขภาพ เปิดบริการ วันอังคาร-วันอาทิตย์ เวลา
								08.30-16.30 น. ริมถนนพหลโยธิน (กม.46-48) ตรงข้าม โรงพยาบาลการุญเวช นวนคร จ.ปทุมธานี</p>
							<h6 class="text-center">สอบถามรายละเอียดที่เบอร์โทรศัพท์ 081-567-2806</h6>
							<div>
								<div class="row row-p10">
									<div class="col-12">
										<img src="https://placehold.co/1000x600" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;" class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="py-4 border-top mt-4">
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
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
</body>

</html>