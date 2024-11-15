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
					<a href="#">ข้อมูลส่วนตัว</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">บัญชีของฉัน</li>
			</ol>
		</nav>

		<section>
			<div class="container">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">บัญชีของฉัน</h4>
				</div>
				<div class="row">
					<div class="col-lg-4 mb-4">

						<div class="sticky-top" style="top: 113px;">
							<div class="sumMenu-profile">
								<a class="dropdown-item active" href="../profile/">
									<i class="fa fa-user-o" aria-hidden="true"></i>
									บัญชีของฉัน
								</a>
								<a class="dropdown-item" href="../profile/favorites.php">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									รายการที่ถูกใจ
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									ออกจากระบบ
								</a>
							</div>
						</div>

					</div>
					<div class="col mb-4">
						<div class="row m-0">

							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>
							fgjgfj<br>

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