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
				<li class="breadcrumb-item active" aria-current="page">ผลการดำเนินงานจัดซื้อจัดจ้าง</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ผลการดำเนินงานจัดซื้อจัดจ้าง</h4>
					<p class="text-center mb-4 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>

				<div class="pb-4">
					<div class="box-niche row justify-content-center mb-4 px-1">
						<div class="col-sm-6 col-xl-3 px-2">
							<div class="item">
								<div>
									<div class="text-success">แผนการจัดซื้อจัดจ้าง</div>
									<h2 class="d-inline-block mr-2">8,705</h2>รายการ
								</div>
								<img src="../../public/images/icon-procurement1.png" alt="">
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 px-2">
							<div class="item">
								<div>
									<div class="text-info">ประกาศ</div>
									<h2 class="d-inline-block mr-2">20,849</h2>รายการ
								</div>
								<img src="../../public/images/icon-procurement2.png" alt="">
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 px-2">
							<div class="item">
								<div>
									<div  class="text-danger">ยกเลิกประกาศ</div>
									<h2 class="d-inline-block mr-2">849</h2>รายการ
								</div>
								<img src="../../public/images/icon-procurement3.png" alt="">
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 px-2">
							<div class="item">
								<div>
									<div class="text-warning">เปลี่ยนแปลงประกาศ</div>
									<h2 class="d-inline-block mr-2">379</h2>รายการ
								</div>
								<img src="../../public/images/icon-procurement4.png" alt="">
							</div>
						</div>
					</div>
					<div class="row row-p10 justify-content-center">
						<div class="col-6 col-lg-3 col-xl-2">
							<div class="form-group">
								<label>ตั้งแต่วันที่</label>
								<input type="date" class="form-control bg-white">
							</div>
						</div>
						<div class="col-6 col-lg-3 col-xl-2">
							<div class="form-group">
								<label>ถึงวันที่</label>
								<input type="date" class="form-control bg-white">
							</div>
						</div>
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>ประเภทประกาศ</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกประเภทงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>กรุณาเลือกประเภท</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหางาน...">
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-striped text-center" style="min-width: 1000px;">
						<thead>
							<tr>
								<th class="text-left">ชื่อ</th>
								<th>ประเภท</th>
								<th style="min-width: 130px;">วันที่ประกาศ</th>
								<th style="min-width: 140px;">วันที่สิ้นสุด</th>
								<th>จำนวนผู้เยี่ยมชม</th>
								<th style="width: 110px;">โหลดเอกสาร</th>
							</tr>
						</thead>
						<!-- ประกวดราคา => .Status1 / ใบสั่งจ้าง/ใบสั่งซื้อ => .Status2 / ประกาศผู้ชนะเสนอราคา => .Status3 / อื่น  => .Status4 -->
						<tbody>
							<tr class="Status1">
								<th class="text-left">ประกาศ เรื่องยกเลิกประกาศ ประกวดราคาจ้างก่อสร้างโรงจอดรถอาคารอำนวยการ จำนวน 1 งาน
									ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)</th>
								<td>ประกวดราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status2">
								<th class="text-left">ใบสั่งซื้อชุดโปรแกรมจัดการสำนักงาน แบบที่ 1 ที่มีลิขสิทธิ์ถูกต้องตามกฎหมาย
									ประจำปีงบประมาณ 2567 จำนวน 1 รายการ</th>
								<td>ใบสั่งจ้าง/ใบสั่งซื้อ</td>
								<td>24-May-2567</td>
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
							<tr class="Status3">
								<th class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน
								</th>
								<td>ประกาศผู้ชนะเสนอราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status2">
								<th class="text-left">ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ
									ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน</th>
								<td>ใบสั่งจ้าง/ใบสั่งซื้อ</td>
								<td>24-May-2567</td>
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
							<tr class="Status3">
								<th class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</th>
								<td>ประกาศผู้ชนะเสนอราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status2">
								<th class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</th>
								<td>ใบสั่งจ้าง/ใบสั่งซื้อ</td>
								<td>24-May-2567</td>
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
							<tr class="Status3">
								<th class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการปฏิบัติงานด้านการ
									ประสานงานและการจัดนิทรรศการสัญจร</th>
								<td>ประกาศผู้ชนะเสนอราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status2">
								<th class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการปฏิบัติด้านการประสานงานและจัดนิทรรศการสัญจร</th>
								<td>ใบสั่งจ้าง/ใบสั่งซื้อ</td>
								<td>24-May-2567</td>
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
							<tr class="Status3">
								<th class="text-left">ประกาศรายชื่อผู้ผ่านการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน
								</th>
								<td>ประกาศผู้ชนะเสนอราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status2">
								<th class="text-left">ประกาศรายชื่อผู้มีสิทธิ์เข้ารับการคัดเลือกเป็นเจ้าหน้าที่จ้างเหมาบริการ
									ปฏิบัติงานด้านธุรการ
									หน่วยงานตรวจสอบภายใน</th>
								<td>ใบสั่งจ้าง/ใบสั่งซื้อ</td>
								<td>24-May-2567</td>
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
							<tr class="Status3">
								<th class="text-left">รับสมัครเจ้าหน้าที่จ้างเหมาบริการบุคคลธรรมดาปฏิบัติงานด้านธุรการหน่วยงาน
									ตรวจสอบภายใน จำนวน 1 อัตรา</th>
								<td>ประกาศผู้ชนะเสนอราคา</td>
								<td>24-May-2567</td>
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
							<tr class="Status4">
								<th class="text-left">ประกาศ เรื่องเปลี่ยนแปลงประกาศรายชื่อผู้ชนะการเสนอราคา</th>
								<td>อื่นๆ</td>
								<td>24-May-2567</td>
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
						<tfoot>
							<tr>
								<td colspan="6" class="py-1">ข้อมูล ณ วันที่: 6 สิงหาคม 2567 เวลา 17:43 น.</td>
							</tr>
						</tfoot>
					</table>
				</div>

				<div class="row">
					<div class="col-lg-6 mb-3">
						<div class="box-thead">
							<div class="-thead">จำนวนประเภทประกาศ</div>
							<div class="p-3">
								<div id="chartContainer" style="aspect-ratio: 100/120;"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-3">
						<div class="box-thead">
							<div class="-thead">จำนวนวิธีการจัดหา</div>
							<div class="p-3">
								<div id="chartContainer2" style="aspect-ratio: 100/120;"></div>
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

	<!-- canvasjs -->
	<script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
	<script type="text/javascript">
		$(function () {

			$("#chartContainer").CanvasJSChart({
				exportEnabled: true,
				animationEnabled: true,
				legend: {
					horizontalAlign: "center",
					fontSize: 14,
					fontFamily: "Prompt",
					fontWeight: "100",
					verticalAlign: "bottom"
				},
				data: [{
					type: "doughnut",
					innerRadius: "40%",
					showInLegend: true,
					dataPoints: [
						{ y: 15, name: "ประกาศราคากลาง", color: "#6ADB9B" },
						{ y: 2, name: "ร่างเอกสารประกวดราคา (e-Bidding) และร่างเอกสาร", color: "#95E5FF" },
						{ y: 3, name: "ประกาศเชิญชวน", color: "#FA70FF" },
						{ y: 1, name: "ยกเลิกประกาศเชิญชวน", color: "#FF5F15" },
						{ y: 0, name: "เปลี่ยนแปลงประกาศเชิญชวน", color: "#FFD792" },
						{ y: 7, name: "แผนการจัดซื้อจัดจ้าง", color: "#FFD815" },
						{ y: 95, name: "ประกาศรายชื่อผู้ชนะการเสนอราคา/ประกาศผู้ได้รับการคัดเลือก", color: "#FFA455" },
						{ y: 15, name: "ยกเลิกประกาศรายชื่อผู้ชนะการเสนอราคา/ประกาศผู้ได้รับการคัดเลือก", color: "#6A93DB" },
						{ y: 0, name: "เปลี่ยนแปลงประกาศรายชื่อผู้ชนะการเสนอราคา", color: "#FF3B3B" }
					]
				}]
			});
			$("#chartContainer2").CanvasJSChart({
				exportEnabled: true,
				animationEnabled: true,
				legend: {
					horizontalAlign: "center",
					fontSize: 14,
					fontFamily: "Prompt",
					fontWeight: "100",
					verticalAlign: "bottom"
				},
				data: [{
					type: "pie",
					showInLegend: true,
					dataPoints: [
						{ y: 15, name: "สอบราคา", color: "#6ADB9B" },
						{ y: 2, name: "e-market", color: "#95E5FF" },
						{ y: 3, name: "e-bidding", color: "#FA70FF" },
						{ y: 1, name: "คัดเลือก", color: "#FF5F15" },
						{ y: 0, name: "เฉพาะเจาะจง", color: "#FFD792" },
						{ y: 7, name: "จ้างที่ปรึกษาโดยวิธีประกาศเชิญชวนทั่วไป", color: "#FFD815" },
						{ y: 250, name: "จ้างที่ปรึกษาโดยวิธีคัดเลือก", color: "#FFA455" },
						{ y: 15, name: "จ้างที่ปรึกษาโดยวิธีเจาะจง", color: "#6A93DB" },
						{ y: 0, name: "จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีประกาศเชิญชวนทั่วไป", color: "#FF3B3B" },
						{ y: 0, name: "จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีคัดเลือก", color: "#236A80" },
						{ y: 0, name: "จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีเฉพาะเจาะจง", color: "#3A0088" },
						{ y: 0, name: "จ้างออกแบบหรือควบคุมงานก่อสร้างโดยวิธีประกวดแบบ", color: "#C36B2D" }
					]
				}]
			});

		});
	</script>

</body>

</html>