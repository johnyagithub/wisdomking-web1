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
					<div class="row justify-content-center my-4">
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
					<p class="text-center text-secondary">พิพิธภัณฑ์การเกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
						(องค์การมหาชน)</p>
				</div>
				<div class="--detail">
					<div class="table-responsive2" style="box-shadow:none;">
						<table class="table table-striped2 text-center">
							<thead>
								<tr>
									<th>เดือน/ปี</th>
									<th>จำนวนผู้เข้าชม Onsite (ราย)</th>
									<th>จำนวนผู้เข้าชม Online (ราย)</th>
									<th>จำนวนผู้เข้าชมรวม (ราย)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>ตุลาคม 2566</td>
									<td>38,417</td>
									<td>15,783</td>
									<td>54,200</td>
								</tr>
								<tr>
									<td>พฤศจิกายน 2566</td>
									<td>32,443</td>
									<td>6,262</td>
									<td>38,705</td>
								</tr>
								<tr>
									<td>ธันวาคม 2566</td>
									<td>59,473</td>
									<td>21,335</td>
									<td>80,808</td>
								</tr>
								<tr>
									<td>มกราคม 2567</td>
									<td>28,083</td>
									<td>7,763</td>
									<td>35,891</td>
								</tr>
								<tr>
									<td>กุมภาพันธ์ 2567</td>
									<td>18,792</td>
									<td>12,099</td>
									<td>30,891</td>
								</tr>
								<tr>
									<td>มีนาคม 2567</td>
									<td>13,234</td>
									<td>7,147</td>
									<td>20,381</td>
								</tr>
								<tr>
									<td>เมษายน 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>พฤษภาคม 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>มิถุนายน 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>กรกฎาคม 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>สิงหาคม 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>กันยายน 2567</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td>รวม</td>
									<td>190,442</td>
									<td>70,389</td>
									<td>260,831</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<hr class="my-4">

					<div class="mx-auto" style="max-width: 800px;">
						<h5 class="text-center">จำนวนผู้เข้าใช้บริการระบบจองเข้าชมพิพิธภัณฑ์ ประจำปีงบประมาณ พ.ศ. 2567</h5>
						<p class="text-center">พิพิธภัณฑ์การเกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)</p>
						<div class="table-responsive2" style="box-shadow:none;">
							<table class="table table-striped2 text-center">
								<thead>
									<tr>
										<th style="width: 200px;">เดือน/ปี</th>
										<th>จำนวน</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ตุลาคม 2566</td>
										<td>519</td>
									</tr>
									<tr>
										<td>พฤศจิกายน 2566</td>
										<td>623</td>
									</tr>
									<tr>
										<td>ธันวาคม 2566</td>
										<td>602</td>
									</tr>
									<tr>
										<td>มกราคม 2567</td>
										<td>633</td>
									</tr>
									<tr>
										<td>กุมภาพันธ์ 2567</td>
										<td>713</td>
									</tr>
									<tr>
										<td>มีนาคม 2567</td>
										<td>652</td>
									</tr>
									<tr>
										<td>เมษายน 2567</td>
										<td></td>
									</tr>
									<tr>
										<td>พฤษภาคม 2567</td>
										<td></td>
									</tr>
									<tr>
										<td>มิถุนายน 2567</td>
										<td></td>
									</tr>
									<tr>
										<td>กรกฎาคม 2567</td>
										<td></td>
									</tr>
									<tr>
										<td>สิงหาคม 2567</td>
										<td></td>
									</tr>
									<tr>
										<td>กันยายน 2567</td>
										<td></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>รวม</td>
										<td>3,742</td>
									</tr>
								</tfoot>
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
					</div>

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
								<span class="border rounded-pill px-3 py-1 m-1">#พืช</span>
								<span class="border rounded-pill px-3 py-1 m-1">#มะพร้าวไทย</span>
								<span class="border rounded-pill px-3 py-1 m-1">#แมลง</span>
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