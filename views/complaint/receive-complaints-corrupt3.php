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
					<div class="col-lg-5 col-xl-4 mb-3 --sumMenu">
						<?php include('inc-receive-menu.php'); ?>
					</div>
					<div class="col mt-4 mt-md-0">
						<img src="https://placehold.co/700x1000" alt="" class="d-block mx-auto rounded w-100">
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
	<script>
		// active menu
		$('.dropdown-item[href*="receive-complaints-corrupt3.php"]').addClass('active').closest('.dropdown-menu').addClass('show').closest('.dropdown').find('>.dropdown-item').addClass('active');
	</script>

</body>

</html>