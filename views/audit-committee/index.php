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
					<a href="#">เกี่ยวกับเรา</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">โครงสร้างองค์กร</a>
				</li>
				<li class="breadcrumb-item">
					<a href="#">แต่งตั้งคณะกรรมการสำนักงาน</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">คณะกรรมการ</li>
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
					<h3 class="head mb-4">แต่งตั้งคณะกรรมการสำนักงาน</h3>
					<div class="scale-navTabs ml-auto">
						<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
							<button class="nav-link active" id="nav-Committee-tab" data-toggle="tab" data-target="#nav-Committee"
								type="button" role="tab" aria-controls="nav-Committee" aria-selected="true">
								คณะกรรมการ
							</button>
							<button class="nav-link" id="nav-Subcommittee-tab" data-toggle="tab" data-target="#nav-Subcommittee"
								type="button" role="tab" aria-controls="nav-Subcommittee" aria-selected="false">
								คณะอนุกรรมการ
							</button>
							<button class="nav-link" id="nav-Working-tab" data-toggle="tab" data-target="#nav-Working" type="button"
								role="tab" aria-controls="nav-Working" aria-selected="false">
								คณะทำงาน
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="nav-Committee" role="tabpanel" aria-labelledby="nav-Committee-tab">
						<div class="--detail">
							<h4 class="head mb-4 text-center">คณะกรรมการ</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								industry's standard dummy text ever since the 1500s,</p>
						</div>
						<h5 class="text-center">คณะกรรมการตรวจสอบ</h5>
						<div class="board-list">

							<div class="-list">
								<div class="img">
									<img
										src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
										alt="">
								</div>
								<div class="text">
									<h5 class="--position text-primary">ประธานกรรมการ Chairman of the Board</h5>
									<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
									<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
									<hr>
									<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
									<a class="--tel" href="tel:0812345678">081-234-5678</a>
									<button type="button" class="btn btn-style" data-toggle="modal"
										data-target="#detailModal">ประวัติและผลงาน</button>
								</div>
								<div class="--detail d-none">
									<ol>
										<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
										<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
									</ol>
								</div>
							</div>
							<div class="-list">
								<div class="img">
									<img src="https://placehold.co/198x280" alt="">
								</div>
								<div class="text">
									<h5 class="--position text-primary">กรรมการ</h5>
									<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
									<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
									<hr>
									<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
									<a class="--tel" href="tel:0812345678">081-234-5678</a>
									<button type="button" class="btn btn-style" data-toggle="modal"
										data-target="#detailModal">ประวัติและผลงาน</button>
								</div>
								<div class="--detail d-none">
									<ol>
										<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
										<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
									</ol>
								</div>
							</div>
							<div class="-list">
								<div class="img">
									<img src="https://placehold.co/198x280" alt="">
								</div>
								<div class="text">
									<h5 class="--position text-primary">กรรมการ</h5>
									<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
									<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
									<hr>
									<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
									<a class="--tel" href="tel:0812345678">081-234-5678</a>
									<button type="button" class="btn btn-style" data-toggle="modal"
										data-target="#detailModal">ประวัติและผลงาน</button>
								</div>
								<div class="--detail d-none">
									<ol>
										<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
										<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
									</ol>
								</div>
							</div>
							<div class="-list">
								<div class="img">
									<img src="https://placehold.co/198x280" alt="">
								</div>
								<div class="text">
									<h5 class="--position text-primary">กรรมการ</h5>
									<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
									<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
									<hr>
									<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
									<a class="--tel" href="tel:0812345678">081-234-5678</a>
									<button type="button" class="btn btn-style" data-toggle="modal"
										data-target="#detailModal">ประวัติและผลงาน</button>
								</div>
								<div class="--detail d-none">
									<ol>
										<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
										<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
									</ol>
								</div>
							</div>
							<div class="-list">
								<div class="img">
									<img src="https://placehold.co/198x280" alt="">
								</div>
								<div class="text">
									<h5 class="--position text-primary">กรรมการ</h5>
									<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
									<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
									<hr>
									<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
									<a class="--tel" href="tel:0812345678">081-234-5678</a>
									<button type="button" class="btn btn-style" data-toggle="modal"
										data-target="#detailModal">ประวัติและผลงาน</button>
								</div>
								<div class="--detail d-none">
									<ol>
										<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
										<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
									</ol>
								</div>
							</div>

						</div>
						<div class="list-download">
							<div class="list">
								<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 2/2565 เรื่อง แต่งตั้งคณะกรรมการตรวจสอบ</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-Subcommittee" role="tabpanel" aria-labelledby="nav-Subcommittee-tab">
						<div class="--detail">
							<h4 class="head mb-4 text-center">คณะอนุกรรมการ</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								industry's standard dummy text ever since the 1500s,</p>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะอนุกรรมการประเมินผู้อำนวยการ</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานอนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 6/2563 เรื่อง แต่งตั้งคณะอนุกรรมการประเมินผู้อำนวยการ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 9/2564 เรื่อง
										แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการประเมินผู้อำนวยการ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 12/2564 แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการประเมินผู้อำนวยการ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะอนุกรรมการพัฒนางานวิจัย</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานอนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 11/2563 เรื่อง แต่งตั้งคณะอนุกรรมการพัฒนางานวิจัย</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 6/2564 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการพัฒนางานวิจัย
									</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 1/2565 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการพัฒนางานวิจัย
										(ฉบับที่ 2)</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 1/2565 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการพัฒนางานวิจัย
										(ฉบับที่ 3)</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะอนุกรรมการขับเคลื่อนนโยบายและการดำเนินงานของ พกฉ.</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานอนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 4/2563 เรื่อง แต่งตั้งคณะอนุกรรมการขับเคลื่อนนโยบายและการดำเนินงานของ
										พกฉ.</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 8/2564 เรื่อง
										แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการขับเคลื่อนนโยบายและการดำเนินงานของ พกฉ.</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 1/2566 เรื่อง
										แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการขับเคลื่อนนโยบายและการดำเนินงานของ พกฉ. (ฉบับที่ 2)</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะอนุกรรมการบริหารงานบุคคล</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานอนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 4/2564 เรื่อง แต่งตั้งคณะอนุกรรมการบริหารงานบุคคล</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div>
							<h5 class="text-center">คณะอนุกรรมการด้านกฎหมาย</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานอนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">อนุกรรมการ</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 2/2563 เรื่อง แต่งตั้งคณะอนุกรรมการด้านกฎหมาย</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 7/2564 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการด้านกฎหมาย</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 11/2564 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการด้านกฎหมาย</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่งคณะกรรมการ พกฉ. ที่ 3/2566 เรื่อง แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะอนุกรรมการด้านกฎหมาย</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-Working" role="tabpanel" aria-labelledby="nav-Working-tab">
						<div class="--detail">
							<h4 class="head mb-4 text-center">คณะทำงาน</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
								industry's standard dummy text ever since the 1500s,</p>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะทำงานให้คำแนะนำและช่วยปฏิบัติงานด้านการตรวจสอบภายในและการบริหารความเสี่ยง</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานคณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 24/2564 เรื่อง
										แต่งตั้งคณะทำงานให้คำแนะนำและช่วยปฏิบัติงานด้านการตรวจสอบภายในและการบริหารความเสี่ยง</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div class="border-bottom mb-4">
							<h5 class="text-center">คณะทำงานกลั่นกรองระเบีบย ข้อบังคับ</h5>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานคณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 23/2564 เรื่อง แต่งตั้งคณะทำงานกลั่นกรองระเบียบ ข้อบังคับ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 70/2564 แก้ไขเพิ่มเติม คำสั่ง พกฉ. เรื่อง
										แต่งตั้งคณะทำงานกลั่นกรองระเบียบข้อบังคับ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>
						<div>
							<h5 class="text-center">คณะทำงานบริการงานวิจัย พกฉ.</h5>
							<div class="board-list underline">

								<div class="-list ">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ที่ปรึกษา</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ที่ปรึกษา</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="board-list">

								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">ประธานคณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img
											src="https://www.wisdomking.or.th/files/executive_directory/executive_dir_f5fa160f2c0c09dbbb354b6bf8eb2448.png"
											alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>
								<div class="-list">
									<div class="img">
										<img src="https://placehold.co/198x280" alt="">
									</div>
									<div class="text">
										<h5 class="--position text-primary">คณะทำงาน</h5>
										<b class="--name">นายวีระชัย นาควิบูลย์วงศ์</b>
										<p class="--name-en m-0 text-secondary">Mr.Werachai Narkwiboonwong</p>
										<hr>
										<a class="--email" href="mailto:information@wisdomking.or.th">information@wisdomking.or.th</a>
										<a class="--tel" href="tel:0812345678">081-234-5678</a>
										<button type="button" class="btn btn-style" data-toggle="modal"
											data-target="#detailModal">ประวัติและผลงาน</button>
									</div>
									<div class="--detail d-none">
										<ol>
											<li><b>ชื่อ - นามสกุล</b><br>นายวีระชัย นาควิบูลย์วงศ์</li>
											<li><b>วัน เดือน ปีเกิด / อายุ</b><br>4 มกราคม 2498 อายุ 65 ปี</li>
										</ol>
									</div>
								</div>

							</div>
							<div class="list-download">
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 60/2566 แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะทำงานบริหารงานวิจัย พกฉ (ฉบับที่ 2)</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 66/2564 คำสั่งแต่งตั้งคณะทำงานบริหารงานวิจัย พกฉ</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
								<div class="list">
									<h6>คำสั่ง พกฉ. ที่ 79/2564 แก้ไขเพิ่มเติมคำสั่งแต่งตั้งคณะทำงานบริหารงานวิจัย พกฉ.</h6>
									<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin popup -->
	<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="detailModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="-list">
						<div class="img">
							<img src="https://placehold.co/198x280" alt="">
						</div>
						<div class="text">
							<h5 class="--position text-primary"></h5>
							<b class="--name"></b>
							<p class="--name-en m-0 text-secondary"></p>
							<hr>
							<a class="--email" href="#"></a>
							<a class="--tel" href="#"></a>
						</div>
					</div>
					<div class="--detail"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- end popup -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
	<script>
		$('#detailModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget).closest('.-list');
			var modal = $(this);
			var Position = button.find('.--position').text();
			var Name = button.find('.--name').text();
			var NameEN = button.find('.--name-en').text();
			var Email = button.find('.--email').text();
			var Tel = button.find('.--tel').text();
			var Img = button.find('.img img').attr('src');
			var Detail = button.find('.--detail').html();
			modal.find('.modal-title').text(Name);
			modal.find('.modal-body .img img').attr('src', Img);
			modal.find('.--position').text(Position);
			modal.find('.--name').text(Name);
			modal.find('.--name-en').text(NameEN);
			modal.find('.--email').attr('href', 'mailto:' + Email).text(Email);
			modal.find('.--tel').attr('href', 'tel:' + Tel).text(Tel);
			modal.find('.--detail').html(Detail);
		})
	</script>
</body>

</html>