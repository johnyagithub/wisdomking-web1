<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/calendar.css">

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
				<li class="breadcrumb-item active" aria-current="page">มหกรรมตลาดเศรษฐกิจพอเพียง</li>
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
					<h4 class="head mb-4 text-center">มหกรรมตลาดเศรษฐกิจพอเพียง</h4>
					<p class="text-center mb-5">ตลาดเศรษฐกิจพอเพียง
						พื้นที่แห่งมิตรภาพและการแบ่งปันองค์ความรู้นวัตกรรมเกษตรเศรษฐกิจพอเพียง
						เพื่อจุดประกายความคิดและสร้างแรงบันดาลใจจัดแสดง
						และจำหน่ายผลผลิตเกษตรปลอดภัย ผลิตภัณฑ์คุณภาพของเครือข่ายพิพิธภัณฑ์เกษตรฯ จากทั่วประเทศ
						พร้อมหลักสูตรอบรมวิชาของแผ่นดิน เรียนรู้การพึ่งพาตนเองจากเกษตรกรต้นแบบโดยไม่มีค่าใช้จ่าย ในวันเสาร์ -
						อาทิตย์ สัปดาห์แรกของทุกเดือน</p>
				</div>

				<div class="pb-4">
					<div class="row row-p10 justify-content-center">
						<div class="col-6 col-md-4 col-lg">
							<div class="form-group">
								<label>ปีจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกปีจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-6 col-md-4 col-lg">
							<div class="form-group">
								<label>เดือนจัดงาน</label>
								<select class="templatingSelect2">
									<option value="">กรุณาเลือกเดือนจัดงาน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-lg">
							<div class="form-group">
								<label>คำค้นหา</label>
								<input type="search" class="form-control bg-white" placeholder="ค้นหา...">
							</div>
						</div>
					</div>
				</div>

				<div class="box-calendar-style">
					<div class="dateParent">
						<input type="hidden" id="datepicker" value="" readonly>
					</div>
				</div>

				<div class="--detail">
					sdfdf
				</div>
			</div>
		</section>

		<section class="py-5" style="background: linear-gradient(180deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);">
			<div class="container">
				<h3 class="head text-center">ภาพกิจกรรมครั้งที่ผ่านมา</h3>
				<div class="slide-show">
					<div class="hide-prev"></div>
					<div class="owl-carousel nav-dots-style show-dots">

						<a href="../../public/images/news/img1.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img1.jpg" alt="">
						</a>
						<a href="../../public/images/news/img2.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img2.jpg" alt="">
						</a>
						<a href="../../public/images/news/img3.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img3.jpg" alt="">
						</a>
						<a href="../../public/images/news/img1.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img1.jpg" alt="">
						</a>
						<a href="../../public/images/news/img2.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img2.jpg" alt="">
						</a>
						<a href="../../public/images/news/img3.jpg" class="img rounded" data-fancybox="detail" data-caption="">
							<img src="../../public/images/news/img3.jpg" alt="">
						</a>

					</div>
					<div class="hide-next"></div>
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
	<!-- calendar-style -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script>
		$(function () {
			// วันที่มีข้อมูล
			window.invalidDate = [
				new Date("2024-09-07").toDateString(),
				new Date("2024-09-09").toDateString(),
				new Date("2024-09-10").toDateString(),
				new Date("2024-10-02").toDateString(),
				new Date("2024-10-03").toDateString(),
				new Date("2024-10-09").toDateString(),
				new Date("2024-10-10").toDateString(),
				new Date("2024-10-11").toDateString(),
				new Date("2024-10-23").toDateString(),
				new Date("2024-10-25").toDateString(),
				new Date("2024-11-01").toDateString(),
				new Date("2024-11-02").toDateString(),
				new Date("2024-11-11").toDateString(),
				new Date("2024-11-12").toDateString(),
				new Date("2024-11-13").toDateString(),
				new Date("2024-11-25").toDateString(),
				new Date("2024-11-26").toDateString(),
			];
		});
	</script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>
	<script>
		let myDatepicker = (el) => {
			$("#datepicker").val(el);
			console.log('เลือกวันที่ ' + el);
		}
	</script>
</body>

</html>