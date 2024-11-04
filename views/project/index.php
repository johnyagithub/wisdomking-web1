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
				<li class="breadcrumb-item active" aria-current="page">โครงการ อพ.สธ.</li>
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
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">โครงการ อพ.สธ.</h4>
					<p class="text-center mb-5 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="--detail">
					<img src="https://placehold.co/600x300" class="rounded w-100" alt="">
					<div class="d-flex flex-wrap my-3 align-items-center">
						<div class="-date">
							17 สิงหาคม 2023
						</div>
						<div class="-view">
							300
						</div>
						<div class="ml-auto">
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
					</div>
					<div class="px-lg-5">
						<p>โครงการอนุรักษ์พันธุกรรมพืชอันเนื่องมาจากพระราชดำริ สมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี โดย
							สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน) (อพ.สธ. - พกฉ.)</p>
						<img src="https://placehold.co/900x450" class="mw-100 mx-auto d-block" alt="">

						<div class="list-download">
							<div class="list">
								<h6>แผนแม่บทระยะ ๕ ปีที่เจ็ด อพ.สธ.</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
							<div class="list">
								<h6>แผนปฏิบัติงานประจำปี</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
							<div class="list">
								<h6>คำสั่งคณะกรรมการดำเนินงาน อพ.สธ.</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
							<div class="list">
								<h6>คำสั่งคณะทำงาน</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
							<div class="list">
								<h6>รายชื่อผู้ประสานงาน</h6>
								<a class="btn btn-style" href="#" role="button" download>ดาวน์โหลด</a>
							</div>
						</div>
					</div>

					<div class="py-4 border-top mt-5">
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
							<a href="#" class="btn btn-outline-light text-left border p-4 text-muted w-100">
								<i class="fa fa-angle-left" aria-hidden="true"></i>
								ย้อนกลับ
								<br>
								<b class="text-dark text-line2">มาตรการ COVID 1</b>
							</a>
						</div>
						<div class="col-6 pl-2 pl-sm-3">
							<a href="#" class="btn btn-outline-light border p-4 text-right text-muted w-100">
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