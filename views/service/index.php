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
			<ol class="breadcrumb container bg-white">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">สินค้าและบริการ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">บริการ</li>
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

		<section>
			<div class="container">
				<div class="-sticky d-flex flex-wrap align-items-start mb-4">
					<h3 class="head mb-4">ร้าน</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link active" id="nav-RoomService-tab" data-toggle="tab" data-target="#nav-RoomService"
								type="button" role="tab" aria-controls="nav-RoomService" aria-selected="true">
								ห้องพัก
							</button>
							<button class="nav-link" id="nav-MeetingRoomService-tab" data-toggle="tab"
								data-target="#nav-MeetingRoomService" type="button" role="tab" aria-controls="nav-MeetingRoomService"
								aria-selected="false">
								ห้องประชุม
							</button>
							<button class="nav-link" id="nav-FoodEatGood-tab" data-toggle="tab" data-target="#nav-FoodEatGood"
								type="button" role="tab" aria-controls="nav-FoodEatGood" aria-selected="false">
								อาหารและเครื่องดื่ม
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="nav-RoomService" role="tabpanel"
					aria-labelledby="nav-RoomService-tab">
					<div class="container">
						<div class="mx-auto mb-4" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">ห้องพัก</h4>
							<p class="text-center">มีบริการห้องพัก ให้กับหน่วยงานต่างๆ และประชาชนทั่วไป
								ที่เข้าร่วมทำกิจกรรมกับทางพิพิธภัณฑ์ที่จัดขึ้น ในลักษณะเข้าชมพิพิธภัณฑ์ อบรม และค่ายการการเรียนรู้
								โครงการส่งเสริมการเรียนรู้ มีบริการแบบห้องนอนรวม ห้องพัก 1 คน ห้องพัก 2 คน หรือ ห้องพัก 3 คน</p>
							<h6 class="text-center">ติดต่อสอบถามรายละเอียดได้ที่เบอร์โทรศัพท์ 02-529-2212</h6>
						</div>
						<div class="table-responsive2">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-left">ห้องพักมาตรฐาน (ห้องปรับอากาศทุกห้อง)</th>
										<th>จำนวน</th>
										<th>พัก 1 คน</th>
										<th>พัก 2 คน</th>
										<th>พัก 3 คน</th>
										<th>หมายเหตุ</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">อาคารเรือนพัก 1</td>
										<td>20 ห้อง</td>
										<td>8,000 บาท</td>
										<td>600 บาท</td>
										<td>700 บาท</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">อาคารเรือนพัก 2</td>
										<td>30 ห้อง</td>
										<td>5,000 บาท</td>
										<td>600 บาท</td>
										<td>700 บาท</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">อาคารเรือนพัก 3</td>
										<td>10 ห้อง</td>
										<td>25,000 บาท</td>
										<td>1,000 บาท</td>
										<td>-</td>
										<td></td>
									</tr>
								</tbody>
								<thead>
									<tr>
										<th class="text-left">ห้องอบรมรวม (ห้องปรับอากาศทุกห้อง)</th>
										<th>จำนวน</th>
										<th colspan="4">ราคา</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">เรือนพัก 1 ห้อง 1 (ห้องประชุม)</td>
										<td>35 คน</td>
										<td colspan="4">150 บาท/คน (แยกหญิง - ชาย)</td>
									</tr>
									<tr>
										<td class="text-left">เรือนพัก 1 ห้อง 2</td>
										<td>14 คน</td>
										<td colspan="4">150 บาท/คน (แยกหญิง - ชาย)</td>
									</tr>
									<tr>
										<td class="text-left">เรือนพัก 1 ห้อง 3</td>
										<td>7 คน</td>
										<td colspan="4">150 บาท/คน (แยกหญิง - ชาย)</td>
									</tr>
									<tr>
										<td class="text-left">เรือนพัก 2 ห้อง 1</td>
										<td>25 คน</td>
										<td colspan="4">150 บาท/คน (แยกหญิง - ชาย)</td>
									</tr>
									<tr>
										<td class="text-left">เรือนพัก 2 ห้อง 2</td>
										<td>25 คน</td>
										<td colspan="4">150 บาท/คน (แยกหญิง - ชาย)</td>
									</tr>
									<tr>
										<td class="text-left">อาคารเรือนพัก 3</td>
										<td>16 คน</td>
										<td colspan="4">จำนวน 24 ห้อง ราคาห้องละ 4,000 บาท</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="bg-muted2 p-4">
						<div class="container bg-white p-4 px-lg-5 rounded --service">
							<h4 class="head mb-4 text-center">จองห้องพัก</h4>
							<div class="box-Ourmuseum box-slide">
								<div class="owl-carousel" data-itemSlide-pc="1" data-itemSlide-Tablet="1" data-itemSlide-mobile="1">

									<div class="item">
										<div class="img">
											<img src="https://placehold.co/800x400" style="aspect-ratio: auto;" alt="">
										</div>
										<div class="text">
											<h6 class="mb-0">ห้องพระคุณพ่อ</h6>
										</div>
									</div>
									<div class="item">
										<div class="img">
											<img src="https://placehold.co/800x400" style="aspect-ratio: auto;" alt="">
										</div>
										<div class="text">
											<h6 class="mb-0">ห้องพระคุณพ่อ</h6>
										</div>
									</div>

								</div>
							</div>
							<form action="#" style="background: #F9F9F999;" class="rounded">
								<div class="px-3 px-lg-4 py-4">

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">ประเภทห้องพัก*</label>
											<select class="templatingSelect2" required>
												<option value="">ห้องพักมาตรฐาน (ห้องปรับอากาศ ทุกห้อง)</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="">ห้องพัก*</label>
											<select class="templatingSelect2" required>
												<option value="">กรุณาเลือกประเภทห้องพัก...</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">วันที่เช็คอิน*</label>
											<input type="date" class="form-control bg-white" placeholder="กรุณาระบุชื่อ" required="">
										</div>
										<div class="form-group col-md-6">
											<label for="">วันที่เช็คเอาท์*</label>
											<input type="date" class="form-control bg-white" placeholder="กรุณาระบุนามสกุล" required="">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">จำนวนผู้เข้าพัก</label>
											<select class="templatingSelect2">
												<option value="">กรุณาเลือกปีงบประมาณ</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="">จำนวนห้อง</label>
											<select class="templatingSelect2">
												<option value="">กรุณาเลือกปีงบประมาณ</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-12">
											<label for="">หมายเหตุ</label>
											<textarea class="form-control bg-white" rows="5"
												placeholder="กรุณาระบุหมายเหตุ เช่น ต้องการเตียงเสริม..."></textarea>
										</div>
									</div>
									<hr class="my-3">
									<div class="form-row justify-content-between">
										<div class="col d-flex align-items-center">
											ราคาทั้งหมด <h3 class="text-gradient mb-0 ml-2">฿ 8,000</h3>
										</div>
										<div class="col-6 col-md-4 col-lg-2">
											<button type="submit" class="btn btn-style w-100">จองทันที</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-MeetingRoomService" role="tabpanel"
					aria-labelledby="nav-MeetingRoomService-tab">
					<div class="container">
						<div class="mx-auto mb-4" style="max-width: 1000px;">
							<h4 class="head mb-4 text-center">ห้องประชุม</h4>
							<p class="text-center">มีบริการห้องประชุม ห้องอบรมสัมมนา หรือจัดกิจกรรมต่างๆ หลากหลายขนาด
								ตกแต่งอย่างสวยงาม ทันสมัย บรรยากาศธรรมชาติ</p>
							<h6 class="text-center">ติดต่อสอบถามรายละเอียดได้ที่เบอร์โทรศัพท์ 02-529-2212</h6>
						</div>
						<div class="table-responsive2">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-left">ห้องประชุม-สัมมนา</th>
										<th>จำนวน</th>
										<th>อัตรา/วัน</th>
										<th>อัตรา/ครึ่งวัน</th>
										<th>อัตรา/ชม. นอกเวลา</th>
										<th>หมายเหตุ</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">ห้องพระคุณพ่อ</td>
										<td>50 คน</td>
										<td>8,000 บาท</td>
										<td>5,000 บาท</td>
										<td>1,000 บาท</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">ศาลาเพียงดิน</td>
										<td>150 คน</td>
										<td>5,000 บาท</td>
										<td>3,000 บาท</td>
										<td>1,000 บาท</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">ห้องประชุมอาคารจำนงการพิพิธภัณฑ์ ชั้น 2 (ห้องประชุมศาสตร์พระราชา)</td>
										<td>400-700 คน</td>
										<td>25,000 บาท</td>
										<td>-</td>
										<td>-</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">ห้องประชุมอาคารจำนงการพิพิธภัณฑ์ ชั้น 3 (ห้องประชุมตามรอยพ่อ)</td>
										<td>150-288 คน</td>
										<td>12,000 บาท</td>
										<td>-</td>
										<td>-</td>
										<td></td>
									</tr>
									<tr>
										<td class="text-left">ห้องประชุมอาคารจำนงการพิพิธภัณฑ์ ชั้น 3 (ห้องประชุมพอเพียง)</td>
										<td>30-50 คน</td>
										<td>5,000 บาท</td>
										<td>-</td>
										<td>-</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="bg-muted2 p-4">
						<div class="container bg-white p-4 px-lg-5 rounded --service">
							<h4 class="head mb-4 text-center">จองห้องประชุม</h4>
							<div class="box-Ourmuseum box-slide">
								<div class="owl-carousel" data-itemSlide-pc="1" data-itemSlide-Tablet="1" data-itemSlide-mobile="1">

									<div class="item">
										<div class="img">
											<img src="https://placehold.co/800x400" style="aspect-ratio: auto;" alt="">
										</div>
										<div class="text">
											<h6 class="mb-0">ห้องพระคุณพ่อ</h6>
										</div>
									</div>
									<div class="item">
										<div class="img">
											<img src="https://placehold.co/800x400" style="aspect-ratio: auto;" alt="">
										</div>
										<div class="text">
											<h6 class="mb-0">ห้องพระคุณพ่อ</h6>
										</div>
									</div>

								</div>
							</div>
							<form action="#" style="background: #F9F9F999;" class="rounded">
								<div class="px-3 px-lg-4 py-4">

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">ห้องประชุม*</label>
											<select class="templatingSelect2" required>
												<option value="">ห้องพักมาตรฐาน (ห้องปรับอากาศ ทุกห้อง)</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="">ประเภทช่วงเวลา</label>
											<select class="templatingSelect2">
												<option value="">กรุณาเลือกประเภทห้องพัก...</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">วันที่เริ่มประชุม*</label>
											<input type="date" class="form-control bg-white" placeholder="กรุณาระบุชื่อ" required="">
										</div>
										<div class="form-group col-md-6">
											<label for="">วันที่สิ้นสุดการประชุม*</label>
											<input type="date" class="form-control bg-white" placeholder="กรุณาระบุนามสกุล" required="">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="">จำนวนผู้เข้าประชุม</label>
											<select class="templatingSelect2">
												<option value="">กรุณาระบุจำนวน..</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="">จำนวนห้อง</label>
											<select class="templatingSelect2">
												<option value="">กรุณาระบุจำนวน..</option>
												<option value="usd">USD</option>
												<option value="euro">Euro</option>
												<option value="gbp">Pound</option>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-12">
											<label for="">หมายเหตุ</label>
											<textarea class="form-control bg-white" rows="5" placeholder="กรุณาระบุหมายเหตุ..."></textarea>
										</div>
									</div>
									<hr class="my-3">
									<div class="form-row justify-content-between">
										<div class="col d-flex align-items-center">
											ราคาทั้งหมด <h3 class="text-gradient mb-0 ml-2">฿ 8,000</h3>
										</div>
										<div class="col-6 col-md-4 col-lg-2">
											<button type="submit" class="btn btn-style w-100">จองทันที</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-FoodEatGood" role="tabpanel" aria-labelledby="nav-FoodEatGood-tab">
					<div class="container">
						<div class="--detail">
							<h4 class="head mb-4 text-center">อาหารและเครื่องดื่ม</h4>
							<p class="text-center">จำหน่ายกาแฟอินทรีย์ และเครื่องดื่มเพื่อสุขภาพ เปิดบริการ วันอังคาร-วันอาทิตย์ เวลา
								08.30-16.30 น. ริมถนนพหลโยธิน (กม.46-48) ตรงข้าม โรงพยาบาลการุญเวช นวนคร จ.ปทุมธานี</p>
							<h6 class="text-center">สอบถามรายละเอียดที่เบอร์โทรศัพท์ 081-567-2806</h6>
							<div>
								<div class="row row-p10">
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;"
											class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;"
											class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;"
											class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
									<div class="col-md-6">
										<img src="https://placehold.co/800x400" style="aspect-ratio: 800 / 400;"
											class="mw-100 mx-auto d-block rounded my-3" alt="">
									</div>
								</div>
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
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>
</body>

</html>