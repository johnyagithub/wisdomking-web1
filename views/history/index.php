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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">เกี่ยวกับเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">ความเป็นมา</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h2 class="head mb-4 text-center">ความเป็นมา</h2>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>

				<div class="box-navTabs nav nav-tabs justify-content-center mb-4" role="tablist">
					<div class="owl-carousel">
						<button class="nav-link active" id="nav-goal-tab" data-toggle="tab" data-target="#nav-goal" type="button"
							role="tab" aria-controls="nav-goal" aria-selected="true">
							เป้าประสงค์
						</button>
						<button class="nav-link" id="nav-target-tab" data-toggle="tab" data-target="#nav-target" type="button"
							role="tab" aria-controls="nav-target" aria-selected="false">
							เป้าหมาย
						</button>
						<button class="nav-link" id="nav-Report-tab" data-toggle="tab" data-target="#nav-Report" type="button"
							role="tab" aria-controls="nav-Report" aria-selected="false">
							รายงานการประเมินผลการปฏิบัติงาน
						</button>
					</div>
				</div>

				<div class="tab-content pb-4">
					<div class="tab-pane fade show active" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab">
						<div class="--detail pb-0">
							<h4 class="head mb-4 text-center">เป้าประสงค์</h4>
						</div>
						<img src="https://placehold.co/1200x660" class="mw-100 mx-auto d-block rounded my-3" alt="">
						<div class="row row-p10">
							<div class="col-md-4"><img src="https://placehold.co/500x300" class="mw-100 mx-auto d-block rounded my-3"
									alt=""></div>
							<div class="col-md-4"><img src="https://placehold.co/500x300" class="mw-100 mx-auto d-block rounded my-3"
									alt=""></div>
							<div class="col-md-4"><img src="https://placehold.co/500x300" class="mw-100 mx-auto d-block rounded my-3"
									alt=""></div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-target" role="tabpanel" aria-labelledby="nav-target-tab">
						<div class="--detail pb-0">
							<h4 class="head mb-4 text-center">เป้าหมาย</h4>
							<p class="text-center">เกษตรกรและประชาชนได้รับการพัฒนาและเรียนรู้
								ภูมิปัญญาและนวัตกรรมการเกษตรตามแนวทางเศรษฐกิจพอเพียง</p>
						</div>
						<img src="https://placehold.co/1200x660" class="mw-100 mx-auto d-block rounded my-3" alt="">
						<div class="--detail">
							<ol>
								<li><b>ตัวชี้วัดเชิงปริมาณ : ประชาชนที่เข้าชมพิพิธภัณฑ์ (onsite และ Online)</b><br>
									ปี พ.ศ. 2566 = 430,000 ราย<br>
									ปี พ.ศ. 2567 = 540,000 ราย<br>
									ปี พ.ศ. 2568 = 580,000 ราย<br>
									ปี พ.ศ. 2569 = 620,000 ราย<br>
									ปี พ.ศ. 2570 = 660,000 ราย</li>
								<li><b>ตัวชี้วัดเชิงปริมาณ : ชิ้นงานการจัดแสดงของพิพิธภัณฑ์ ที่พัฒนาปรับปรุง หรือ สร้างขึ้นใหม่</b><br>
									ปี พ.ศ. 2566 = 24 ชิ้นงาน<br>
									ปี พ.ศ. 2567 = 24 ชิ้นงาน<br>
									ปี พ.ศ. 2568 = 24 ชิ้นงาน<br>
									ปี พ.ศ. 2569 = 24 ชิ้นงาน<br>
									ปี พ.ศ. 2570 = 24 ชิ้นงาน</li>
								<li><b>ตัวชี้วัดเชิงปริมาณ : สมาชิกเครือข่ายเศรษฐกิจพอเพียง</b><br>
									ปี พ.ศ. 2566 = 120 เครือข่าย<br>
									ปี พ.ศ. 2567 = 130 เครือข่าย<br>
									ปี พ.ศ. 2568 = 140 เครือข่าย<br>
									ปี พ.ศ. 2569 = 150 เครือข่าย<br>
									ปี พ.ศ. 2570 = 160 เครือข่าย</li>
								<li><b>ตัวชี้วัดเชิงคุณภาพ :
										ผู้เข้าร่วมโครงการส่งเสริมการเรียนรู้และฝึกปฏิบัติเกษตรเศรษฐกิจพอเพียงมีความรู้และความเข้าใจปรัชญาของเศรษฐกิจพอเพียง</b><br>ปี
									พ.ศ. 2566 - 2570 ไม่น้อยกว่าร้อยละ 85</li>
								<li><b>ตัวชี้วัดเชิงคุณภาพ : ผู้เข้ารับการถ่ายทอด องค์ความรู้ได้นำความรู้ไปประยุกต์ใช้</b><br> ปี พ.ศ.
									2566 - 2570 ไม่น้อยกว่าร้อยละ 80 </li>
								<li><b>ตัวชี้วัดห่วงโซ่ผลการดำเนินงาน (result chain) ผลลัพธ์ : ร้อยละการเกิดความร่วมมือกับเครือข่ายของ
										พกฉ.</b><br> ปี พ.ศ. 2568 ไม่น้อยกว่าร้อยละ 80</li>
								<li><b>ตัวชี้วัดห่วงโซ่ผลการดำเนินงาน (result chain) ผลกระทบ : เกิดตลาดเศรษฐกิจพอเพียงต้นแบบ
										เพื่อส่งเสริมเศรษฐกิจระดับชุมชนท้องถิ่น</b><br>อย่างน้อย 1 แห่ง/ปี</li>
							</ol>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-Report" role="tabpanel" aria-labelledby="nav-Report-tab">
						<div class="--detail pb-0">
							<h4 class="head mb-4 text-center">รายงานการประเมินผลการปฏิบัติงาน</h4>
						</div>
						<div class="table-responsive">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-left align-middle">คำรับรองการปฏิบัติงานขององค์การมหาชน</th>
										<th>โหลด<br class="d-md-none">เอกสาร</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2561</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2560</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2559</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2558</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2557</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2556</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2555</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">คำรับรองการปฏิบัติงานขององค์การมหาชน 2554</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-left align-middle">รายงานการประเมินผลตามคำรับรองการปฏิบัติงานขององค์การมหาชน</th>
										<th>โหลด<br class="d-md-none">เอกสาร</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2559</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2558</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2557</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2556</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2555</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2554</th>
										<td>
											<a href="#" download>
												<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-striped text-center">
								<thead>
									<tr>
										<th class="text-left align-middle">รายงานสรุปผลการดำเนินงานตามแผนปฏิบัติงาน</th>
										<th>โหลด<br class="d-md-none">เอกสาร</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">รายงานการประเมินผลการปฏิบัติงาน 2559</th>
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

</body>

</html>