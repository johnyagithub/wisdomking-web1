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
				<li class="breadcrumb-item active" aria-current="page">สถิติการให้บริการเข้าชม</li>
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
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">สถิติการให้บริการเข้าชม</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					<div class="row justify-content-center">
						<div class="col-sm-9 col-md-8 col-lg-6">
							<div class="form-group">
								<label>ปีสถิติการให้บริการเข้าชม</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือปีงบประมาณ</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
					</div>
					<h5 class="text-center">สถิติการให้บริการเข้าชม ประจำปีงบประมาณ พ.ศ. 2567</h5>
					<p class="text-center text-secondary">พิพิธภัณฑ์การเกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)</p>
				</div>
				<div class="--detail">
					<div class="table-responsive mb-3" style="box-shadow:none;">
						<div class="bg-gradient text-center text-white p-3 h5 mb-0">อัตราค่าเข้าชม (Ticket)
							พิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯ</div>
						<table class="table table-striped2 text-center">
							<thead>
								<tr>
									<th class="text-left" rowspan="2">พิพิธภัณฑ์/อัตราค่าเข้าชม (บาท/คน)</th>
									<th colspan="2">คนไทย</th>
									<th colspan="2">Foreigner</th>
								</tr>
								<tr class="bg-light-blue">
									<th>เด็ก</th>
									<th>ผู้ใหญ่</th>
									<th>Child</th>
									<th>Adult</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">พิพิธภัณฑ์ในหลวงรักเรา</td>
									<td>30</td>
									<td>50</td>
									<td>50</td>
									<td>100</td>
								</tr>
								<tr>
									<td class="text-left">พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</td>
									<td>20</td>
									<td>40</td>
									<td>50</td>
									<td>100</td>
								</tr>
								<tr>
									<td class="text-left">พิพิธภัณฑ์ป่าดงพงไพร</td>
									<td>20</td>
									<td>40</td>
									<td>50</td>
									<td>100</td>
								</tr>
								<tr>
									<td class="text-left">พิพิธภัณฑ์ วิถีน้ำ</td>
									<td>30</td>
									<td>50</td>
									<td>50</td>
									<td>100</td>
								</tr>
								<tr>
									<td class="text-left">พิพิธภัณฑ์ ดินดล</td>
									<td>30</td>
									<td>50</td>
									<td>50</td>
									<td>100</td>
								</tr>
								<tr>
									<td class="text-left">พิพิธภัณฑ์เกษตรเศรษฐกิจ</td>
									<td>30</td>
									<td>50</td>
									<td>-</td>
									<td>-</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="list-download">
						<div class="list">
							<h6>สถิติการให้บริการเข้าชม ประจำปีงบประมาณ พ.ศ. 2566</h6>
							<a class="btn btn-style" href="#" download>ดาวน์โหลด</a>
						</div>
						<div class="list">
							<h6>สถิติการให้บริการเข้าชม ประจำปีงบประมาณ พ.ศ. 2565</h6>
							<a class="btn btn-style" href="#" download>ดาวน์โหลด</a>
						</div>
						<div class="list">
							<h6>สถิติการให้บริการเข้าชม ประจำปีงบประมาณ พ.ศ. 2564</h6>
							<a class="btn btn-style" href="#" download>ดาวน์โหลด</a>
						</div>
						<div class="list">
							<h6>สถิติการให้บริการเข้าชม ประจำปีงบประมาณ พ.ศ. 2563</h6>
							<a class="btn btn-style" href="#" download>ดาวน์โหลด</a>
						</div>
					</div>

					<div class="py-4 border-top">
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
								<span class="border rounded-pill px-3 py-1 mx-1">#พืช</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#มะพร้าวไทย</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#แมลง</span>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6 pr-2 pr-sm-3">
							<a href="#" class="btn btn-outline-light text-left border p-3 p-md-4 text-muted w-100 h-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">สารพัดว่าน</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-3 p-md-4 text-right text-muted w-100 h-100">
								ต่อไป
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<br>
								<b class="text-dark text-line2">สมุนไพรเสริมภูมิคุ้มกันทุก บ้านควรมี</b>
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