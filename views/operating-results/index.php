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
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">ผลการดำเนินงานจัดซื้อจัดจ้าง</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="mx-auto" style="max-width: 1000px;">
					<div class="row row-p10 justify-content-center pb-4">
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>ปีงบประมาณ</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกปีงบประมาณ</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา">
							</div>
						</div>
					</div>
				</div>

				<div class="accordion" id="accordionExample">
					<div class="card">
						<div class="card-header" id="heading-1">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
									data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2567
								</button>
							</h2>
						</div>
						<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยมาตรการการดำเนินการกรณีการฝ่าฝืนหรือไม่ปฏิบัติตาม
													ประมวลจริยธรรม ของสำนักงาน พ.ศ. 2566</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยการจัดแบ่งส่วนงาน
													และขอบเขตหน้าที่ของส่วนงาน พ.ศ. 2566</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยคณะกรรมการตรวจสอบและการตรวจสอบภายใน พ.ศ. 2566</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยการบริหารงานวิจัยของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติ พระบาทสมเด็จพระเจ้าอยู่หัว
													(องค์การมหาชน) พ.ศ. 2565</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยการช่วยเหลือกรรมการ ผู้อำนวยการ และผู้ปฏิบัติงานของสำนักงาน
													ที่ถูกกล่าวหาหรือถูกฟ้องคดีอาญาเนื่องจากการปฏิบัติหน้าที่ พ.ศ. 2565</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยการประนีประนอมยอมความ</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวว่าด้วยหลักเกณฑ์การจัดทำบันทึกความร่วมมือ
													พ.ศ. 2565</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยการปฏิบัติงานและการประเมินผลการปฏิบัติงานของผู้อำนวยการ การรักษาการแทน การมอบหมาย
													และการมอบอำนาจให้ผู้อื่นปฏิบัติงานแทนผู้อำนวยการ พ.ศ. 2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยการบริหารงานบุคคล พ.ศ. 2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
											<tr>
												<th class="text-left">
													ข้อบังคับคณะกรรมการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
													ว่าด้วยค่าตอบแทนสำหรับคณะบุคคลหรือบุคคลภายนอก พ.ศ. 2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-2">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2566
								</button>
							</h2>
						</div>
						<div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-3">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2565
								</button>
							</h2>
						</div>
						<div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-4">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2564
								</button>
							</h2>
						</div>
						<div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-5">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2563
								</button>
							</h2>
						</div>
						<div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-6">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2562
								</button>
							</h2>
						</div>
						<div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading-7">
							<h2 class="mb-0">
								<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
									data-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
									สรุปผลการดำเนินงานการจัดซื้อจัดจ้าง (สขร.1) ปีงบประมาณ 2561
								</button>
							</h2>
						</div>
						<div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordionExample">
							<div class="card-body">
								<div class="table-responsive mb-0">
									<table class="table table-striped text-center">
										<thead>
											<tr>
												<th class="text-left">ชื่อ</th>
												<th style="width: 110px;">โหลดเอกสาร</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th class="text-left">ข้อบังคับคณะกรรมการข้อบังคับคณะกรรมการ
													สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว ว่าด้วยเครื่องแบบพิธีการ
													และเครื่องแบบ
													ปฏิบัติงาน ของสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)
													พ.ศ.
													2563</th>
												<td>
													<a href="#" download>
														<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="--detail">
					<div class="py-4 border-top mt-4">
						<div class="d-flex flex-wrap justify-content-center my-3">
							<div class="mb-2 w-100 text-center text-sm-left">Share this:</div>
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
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2();
	</script>
</body>

</html>