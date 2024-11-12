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
					<a href="../product/">สินค้าและบริการ</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">เสื้อม่อฮ่อม</li>
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
				<div class="--detail">
					<h class="row mb-4 mt-5">
						<div class="col-lg-6">fgh</div>
						<div class="col-lg-6 text-secondary">
							<h4 class="text-dark">เสื้อม่อฮ่อม</h4>
							<p>เสื้อม่อฮ่อม แขนยาว "วิชาของแผ่นดิน www.wisdomking.or.th" </p>
							<table>
								<tr>
									<td>Size S</td>
									<td style="width: 15px;text-align: center;">:</td>
									<td>อก 40"</td>
								</tr>
								<tr>
									<td>Size M</td>
									<td style="width: 15px;text-align: center;">:</td>
									<td>อก 42"</td>
								</tr>
								<tr>
									<td>Size L</td>
									<td style="width: 15px;text-align: center;">:</td>
									<td>อก 44"</td>
								</tr>
								<tr>
									<td>Size XL</td>
									<td style="width: 15px;text-align: center;">:</td>
									<td>อก 46"</td>
								</tr>
							</table>
							<h4 class="text-gradient my-3">฿ 250</h4>
							<hr class="my-4">
							<form action="#" class="bg-muted3 p-4">
								<div class="mb-3 d-flex align-items-center">
									ขนาด :
									<div class="toggle-radio mr-auto">
										<input type="radio" name="size" id="Option1" value="S">
										<label for="Option1">S</label>

										<input type="radio" name="size" id="Option2" value="M">
										<label for="Option2">M</label>

										<input type="radio" name="size" id="Option3" value="L">
										<label for="Option3">L</label>

										<input type="radio" name="size" id="Option4" value="XL">
										<label for="Option4">XL</label>
									</div>
									<input type="number" name="number" class="number-Customize" value="1" min="1" max="5" />
								</div>
								<button type="submit" class="btn btn-style4 w-100" style="border: 8px solid #e5f2ff;box-shadow: none;">สนใจสินค้า</button>
							</form>
						</div>
					</h>

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
								<span class="border rounded-pill px-3 py-1 mx-1">#COVID19</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#สงกรานต์</span>
								<span class="border rounded-pill px-3 py-1 mx-1">#เดินทาง</span>
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

		<section class="box-News box-slide py-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);
">
			<div class="container">
				<h3 class="head mb-5 text-center">สินค้าทั้งหมด</h3>

				<div class="owl-carousel nav-dots-style show-dots" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
					data-itemSlide-mobile="1">

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