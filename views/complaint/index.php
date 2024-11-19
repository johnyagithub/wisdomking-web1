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
					<a href="../contact-us/">ติดต่อเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">เรื่องร้องเรียนการทุจริต และประพฤติมิชอบ</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">เรื่องร้องเรียนการทุจริต และประพฤติมิชอบ</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-3 --sumMenu">

						<div class="sticky-top" style="top: 113px;">
							<a href="#" data-toggle="dropdown" aria-expanded="false">
								ช่องทางแจ้งเรื่องร้องเรียน
							</a>
							<div class="sumMenu-profile dropdown-menu">
								<a class="dropdown-item active" href="../complaint">
									ช่องทางแจ้งเรื่องร้องเรียน
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../complaint/receive-complaints.php">
									รับเรื่องร้องเรียน
								</a>
							</div>
						</div>

					</div>
					<div class="col mt-4 mb-mt-0">
						<img
							src="https://www.wisdomking.or.th/files/media_manager/12075f8459499dd19b4bc0eed7ccbf39/523-0.57635200%201730880042-froalaeditor.png"
							alt="" class="d-block mx-auto rounded">
						<div class="mx-auto" style="max-width: 800px;">
							<div class="list-download">
								<div class="list">
									<h6>ช่องทางแจ้งเรื่องร้องเรียน</h6>
									<a class="btn btn-style" href="#" download="">ดาวน์โหลด</a>
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