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
					<a href="#">องความรู้และเครือข่าย</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">เครือข่ายพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯ</li>
			</ol>
		</nav>

		<section class="box-News py-4">
			<div class="container">
				<div class="mx-auto" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">เครือข่ายพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯ</h4>
					<p class="text-center mb-4">จัดกระบวนการแลกเปลี่ยนเรียนรู้เครือข่ายพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯ
						เพื่อสร้างความร่วมมือในการขับเคลื่อนงานในระดับพื้นที่เพื่อเผยแพร่พระเกียรติคุณ
						และพระอัจฉริยภาพของพระบาทสมเด็จพระเจ้าอยู่หัว รัชกาลที่ 9 ด้านการเกษตร และสร้างผู้สืบทอด
						การจัดการผลผลิตและการอนุรักษ์พันธุกรรม โดยการดำเนินโครงการขยายผลเครือข่าย พกฉ.
						และโครงการเผยแพร่ขยายผลนวัตกรรมเกษตรเศรษฐกิจพอเพียง ปัจจุบันมีศูนย์เครือข่าย พกฉ.และศูนย์เรียนรู้เครือข่าย
						พกฉ. กระจายอยู่ในพื้นที่ภูมิภาคต่างๆ โดยแบ่งตามภูมิภาคได้ดังนี้</p>
				</div>

				<div class="box-navTabs ml-auto d-flex flex-wrap justify-content-center mb-4" data-showId="data-Courses">
					<button type="button" class="btn btn-style3 px-3 mx-1 text-muted active">ทั้งหมด</button>
					<button type="button" data-type="tab1" class="btn btn-style3 px-3 mx-1 text-muted">
						บุคคล
					</button>
					<button type="button" data-type="tab2" class="btn btn-style3 px-3 mx-1 text-muted">
						ศูนย์การเรียนรู้
					</button>
				</div>

				<div class="box-filter-search row row-p10 justify-content-center mb-3">
					<div class="col-6 col-md-4 col-lg">
						<div class="form-group">
							<label>ภูมิภาค</label>
							<select id="selectRegion" class="templatingSelect2">
								<option value="">กรุณาเลือกภูมิภาค</option>
								<option value="ภาคเหนือ">ภาคเหนือ</option>
								<option value="ภาคกลาง">ภาคกลาง</option>
								<option value="ตะวันออกเฉียงเหนือ">ตะวันออกเฉียงเหนือ</option>
								<option value="ภาคตะวันตก">ภาคตะวันตก</option>
								<option value="ภาคตะวันออก">ภาคตะวันออก</option>
								<option value="ภาคใต้">ภาคใต้</option>
							</select>
						</div>
					</div>
					<div class="col-6 col-md-4 col-lg">
						<div class="form-group">
							<label>จังหวัด</label>
							<select id="selectProvince" class="templatingSelect2">
								<option value="">กรุณาเลือกจังหวัด</option>
								<option value="เชียงราย">เชียงราย</option>
								<option value="เชียงใหม่">เชียงใหม่</option>
								<option value="ปาย">ปาย</option>
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

				<div class="row">
					<div class="col-lg-5 pr-lg-4 mb-4">
						<div id="museum-map">
							<?php include('inc-map.php'); ?>
							<img src="../../public/images/map-museum/map.svg" alt="">

							<div id="r1" class="list-region">
								<h4 class="text-primary">ภาคเหนือ</h4>
								<?php include('inc-map-r1.php'); ?>
								<img src="../../public/images/map-museum/r1.svg" alt="">
							</div>
							<div id="r2" class="list-region">
								<h4 class="text-primary">ภาคกลาง</h4>
								<?php include('inc-map-r2.php'); ?>
								<img src="../../public/images/map-museum/r2.svg" alt="">
							</div>
							<div id="r3" class="list-region">
								<h4 class="text-primary">ตะวันออกเฉียงเหนือ</h4>
								<?php include('inc-map-r3.php'); ?>
								<img src="../../public/images/map-museum/r3.svg" alt="">
							</div>
							<div id="r4" class="list-region">
								<h4 class="text-primary">ภาคตะวันตก</h4>
								<?php include('inc-map-r4.php'); ?>
								<img src="../../public/images/map-museum/r4.svg" alt="">
							</div>
							<div id="r5" class="list-region">
								<h4 class="text-primary">ภาคตะวันออก</h4>
								<?php include('inc-map-r5.php'); ?>
								<img src="../../public/images/map-museum/r5.svg" alt="">
							</div>
							<div id="r6" class="list-region">
								<h4 class="text-primary">ภาคใต้</h4>
								<?php include('inc-map-r6.php'); ?>
								<img src="../../public/images/map-museum/r6.svg" alt="">
							</div>
							<div class="button-map">
								<button id="regionFull" type="botton"><i class="fa fa-expand" aria-hidden="true"></i></button>
								<button id="regionHome" type="botton"><i class="fa fa-home" aria-hidden="true"></i></button>
							</div>
						</div>
						<div class="box-shadow"></div>
					</div>
					<div class="col-lg-7">
						<a href="#--text" class="text-body">
							<h4 id="--text" data-default="ทุกภูมิภาค"></h4>
						</a>
						<div id="data-Courses" class="row py-2">

							<div class="col-sm-6 mb-4" data-type="tab1">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">ศูนย์เรียนรู้พืชพรรณท้องถิ่นต้นน้ำลำ พระเพลิง</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											นครราชสีมา
										</span>
										<p class="text-line1 text-muted mt-2">38 ม.15 ต.วังน้ำเขียว อ.วังน้ำเขียว จ.นครราชสีมา</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">สวนเฮือนเฮา</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											ยโสธร
										</span>
										<p class="text-line1 text-muted mt-2">40 ม.2 ต.นาโส่ อ.กุดชุม จ.ยโสธร</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">เครือข่ายอินแปง</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											สกลนคร
										</span>
										<p class="text-line1 text-muted mt-2">38 ม.15 ต.วังน้ำเขียว อ.วังน้ำเขียว จ.นครราชสีมา</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">ครามบุญ</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											มุกดาหาร
										</span>
										<p class="text-line1 text-muted mt-2">305 หมู่ที่ 8 ต.คำอาฮวน อ.เมืองมุกดาหาร จ.มุกดาหาร</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">ศูนย์เรียนรู้พืชพรรณท้องถิ่นต้นน้ำลำ พระเพลิง</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											นครราชสีมา
										</span>
										<p class="text-line1 text-muted mt-2">38 ม.15 ต.วังน้ำเขียว อ.วังน้ำเขียว จ.นครราชสีมา</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">สวนเฮือนเฮา</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											ยโสธร
										</span>
										<p class="text-line1 text-muted mt-2">40 ม.2 ต.นาโส่ อ.กุดชุม จ.ยโสธร</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">เครือข่ายอินแปง</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											สกลนคร
										</span>
										<p class="text-line1 text-muted mt-2">38 ม.15 ต.วังน้ำเขียว อ.วังน้ำเขียว จ.นครราชสีมา</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mb-4" data-type="tab2">
								<div class="item">
									<div class="img">
										<img src="https://placehold.co/363x197" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="-date">
												19 สิงหาคม 2023
											</div>
											<div class="-view">
												300
											</div>
										</div>
										<h5 class="text-line2 mt-3">ครามบุญ</h5>
										<span class="text-primary">
											<img src="../../public/images/icon-pin.png" style="width:20px;" alt="">
											มุกดาหาร
										</span>
										<p class="text-line1 text-muted mt-2">305 หมู่ที่ 8 ต.คำอาฮวน อ.เมืองมุกดาหาร จ.มุกดาหาร</p>
										<a class="btn btn-style d-block" href="../museum-central/detail.php">อ่านเพิ่ม</a>
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

		// กำหนด event เมื่อมีการเลือกตัวเลือก
		$('#selectRegion').on('select2:select', function (e) {
			var selectedValue = e.params.data.id;
			console.log('Selected:', selectedValue);
			if (selectedValue !== "") {
				$('#museum-map .-region[data-region=' + selectedValue + ']').click();
				$('#selectProvince').val(null).trigger('change');
			} else {
				$('#regionHome').click();
			}
		});
		$('#selectProvince').on('select2:select', function (e) {
			var selectedValue = e.params.data.id;
			if (selectedValue !== "") {
				var Province = $('#museum-map .-province[data-province=' + selectedValue + ']');

				// เช็คจังหวัดที่เลือกมีข้อมูลไม
				if (Province.attr('class') == '-province have') {
					var Region = Province.closest(".list-region").attr('id');
					$('#museum-map .-province[data-province=' + selectedValue + ']').click();
					$('#museum-map .-region[data-regionid=' + Region + ']').click();
				} else {
					alert('จังหวัดนี้ไม่มีข้อมูล')
				}
			} else {
				$('#museum-map .-province').removeClass('active');
				$('#regionHome').click();
			}
		});
	</script>

	<script>
		$(function () {
			headDefault();
			$("#museum-map .-region").click(function () {
				$(this).siblings().removeClass('active');
				$(this).addClass('active');

				var ID = $(this).data('regionid');
				var Name = $(this).data('region');
				headDefault(Name);
				region(ID);
			});
			$("#regionFull").click(function () {
				$('#museum-map').toggleClass('expand');
			});
			$("#museum-map+.box-shadow,#museum-map .-province.have").click(function () {
				$('#museum-map').removeClass('expand');
			});
			$("#regionHome").click(function () {
				headDefault();
				$('#regionHome').removeClass('active');
				$('#museum-map .-region').removeClass('active');
				$('#museum-map .list-region').removeClass('active');
				$('#museum-map .-province').removeClass('active');
				$('#selectRegion,#selectProvince').val(null).trigger('change');
			});
			$(document).on("click", "#museum-map .-province:not(.active)", function () {
				$(this).siblings().removeClass('active');
				$(this).addClass('active');

				var ID = $(this).data('provinceid');
				var Name = $(this).data('province');
				console.log("เอาไปใช้ดึงข้อมูล : " + ID + " " + Name);
				$('[href="#--text"]').click();
			});

			$("#museum-map .list-region svg").each(function () {
				$(this).find('.-province.have').appendTo(this);
			});

		});

		let region = (r) => {
			$('#museum-map .list-region').removeClass('active');
			$('#' + r).addClass('active');

			$('#regionHome').addClass('active');
			$('#museum-map .-province').removeClass('active');
		}

		let headDefault = (el) => {
			$('#--text').text(el || $('#--text').data('default'));
		}
	</script>
</body>

</html>