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
				<li class="breadcrumb-item active" aria-current="page">ประกาศจัดซื้อจัดจ้าง</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ประกาศจัดซื้อจัดจ้าง</h4>
					<p class="text-center mb-4 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>

				<div class="pb-4">
					<h5 class="text-center mb-4">ข้อมูลข่าวรับสมัครงาน ของ พกฉ.</h5>
					<div class="box-filter-search row row-p10 justify-content-center">
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>ตั้งแต่วันที่</label>
								<input type="date" class="form-control bg-white">
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>ถึงวันที่</label>
								<input type="date" class="form-control bg-white">
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="form-group">
								<label>ตำแหน่ง</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกตำแหน่งงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-lg">
							<div class="form-group">
								<label>ประเภทงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกประเภทงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-lg">
							<div class="form-group">
								<label>คำค้นหาชื่องาน</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหางาน...">
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-striped text-center" style="min-width: 1000px;">
						<thead>
							<tr>
								<th class="text-left align-middle">ชื่องาน</th>
								<th class="align-middle">ตำแหน่ง</th>
								<th class="align-middle" style="min-width: 130px;">ประเภทงาน</th>
								<th class="align-middle" style="min-width: 140px;">วันที่ประกาศ</th>
								<th class="align-middle">จำนวนผู้เยี่ยมชม</th>
								<th>โหลด<br class="d-md-none">เอกสาร</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการปฏิบัติงานด้านการ
									ประสานงานและการจัดนิทรรศการสัญจร</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการปฏิบัติด้านการประสานงานและจัดนิทรรศการสัญจร</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน
								</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ
									ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการปฏิบัติงานด้านการ
									ประสานงานและการจัดนิทรรศการสัญจร</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการปฏิบัติด้านการประสานงานและจัดนิทรรศการสัญจร</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน
								</td>
								<td>สำนักพัฒนากิจการ</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ
									ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</td>
								<td>หน่วยงานตรวจสอบ ภายใน</td>
								<td>จ้างเหมาบริการ</td>
								<td>24-May-2567</td>
								<td>
									<div class="-view m-0">250</div>
								</td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="--detail">
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
								<span class="border rounded-pill px-3 py-1 m-1">#COVID19</span>
								<span class="border rounded-pill px-3 py-1 m-1">#สงกรานต์</span>
								<span class="border rounded-pill px-3 py-1 m-1">#เดินทาง</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 pr-2 pr-sm-3">
							<a href="#" class="btn btn-outline-light text-left border p-3 p-md-4 text-muted w-100 h-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">Lorem Ipsum is simply dummy text</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-3 p-md-4 text-right text-muted w-100 h-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">Lorem Ipsum is simply dummy text</b>
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
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>

</body>

</html>