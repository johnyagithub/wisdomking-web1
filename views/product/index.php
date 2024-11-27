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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../product/">สินค้าและบริการ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">สินค้า</li>
			</ol>
		</nav>

		<section class="box-News py-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">สินค้าทั้งหมด</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-sm-7 col-lg-5 col-xl-4 mb-3">
						<div class="input-group bg-light form-control-style">
							<div class="input-group-append">
								<button class="btn px-3 bg-white btn-sm" type="submit">
									<img src="../../public/images/icon-search.png" alt="" class="icon-search" style="width: 24px;">
								</button>
							</div>
							<input type="text" class="bg-white form-control pl-0 border-0" placeholder="ค้นหา..."
								autocomplete="off">
						</div>
					</div>
					<div class="col-sm-4 col-lg-3 col-xl-2 pl-sm-0">
						<div class="form-control-style">
							<select class="templatingSelect2">
								<option value="">ทั้งหมด</option>
								<option value="usd">USD</option>
								<option value="euro">Euro</option>
								<option value="gbp">Pound</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row row-p10 py-4">

					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-4">
						<div class="item">
							<div class="img">
								<img src="https://placehold.co/500x350" style="aspect-ratio: 500 / 350;" alt="">
							</div>
							<div class="text mt-3">
								<h5 class="text-line1">เสื้อม่อฮ่อม</h5>
								<p class="text-line1 text-muted">เสื้อม่อฮ่อม (แขนยาว)</p>
								<h4 class="text-gradient mb-3">฿ 250</h4>
								<a href="../product/detail.php" class="btn btn-style4 w-100">ดูรายละเอียด</a>
							</div>
						</div>
					</div>

					<div class="d-flex w-100">
						<button type="button" class="btn btn-style4 mx-auto">
							โหลดเพิ่มเติม
							<img src="../../public/images/icon-select.png" style="mix-blend-mode: color-dodge;" alt="">
						</button>
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
		$(".templatingSelect2").select2({
			minimumResultsForSearch: -1
		});
	</script>

</body>

</html>