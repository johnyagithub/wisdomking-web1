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
				<li class="breadcrumb-item active" aria-current="page">กฎบัตร</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">กฎบัตร</h4>
					<p class="text-center text-secondary">สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว
						(องค์การมหาชน)</p>
				</div>

				<div class="table-responsive">
					<table class="table table-striped text-center">
						<thead>
							<tr>
								<th class="text-left">เรื่อง</th>
								<th style="width: 110px;">โหลดเอกสาร</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">กฎบัตรการตรวจสอบภายใน
									สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน) </td>
								<td>
									<a href="#" download>
										<img src="../../public/images/icon-pdf.png" style="width: 34px;" alt="">
									</a>
								</td>
							</tr>
							<tr>
								<td class="text-left">กฎบัตรคณะกรรมการตรวจสอบ
									สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)</td>
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

</body>

</html>