<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/search.css">
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
				<li class="breadcrumb-item active" aria-current="page">ค้นหาข้อมูล</li>
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
					<h4 class="head mb-4 text-center">ค้นหาข้อมูล</h4>
				</div>

				<form action="../search/" class="pb-4">
					<div class="box-search d-flex justify-content-center align-items-center">
						<div id="search-box-container">
							<input id="search-box" type="search" name="keyword" class="form-control bg-white rounded-pill w-100"
								placeholder="ค้นหา..." value="<?= $_GET['keyword'] ?>">
							<button class="btn" type="submit">ค้นหา</button>
						</div>
						<button type="button" class="btn btn-secondary custom-tooltip ml-2 ml-md-3">
							<span class="-tooltip">ค้นหาด้วยเสียง</span>
							<i class="fa fa-microphone" aria-hidden="true"></i>
						</button>
					</div>
				</form>

				<div class="--detail border-top pt-4 <?= $_GET['keyword'] ? '' : 'd-none' ?>">
					<div class="row">
						<div class="col-md-6">
							<h5>ผลการค้นหา “<?= $_GET['keyword'] ?>”</h5>
							<p>จำนวน <span> 2,469</span> ผลลัพธ์</p>
						</div>
						<div class="col-md-6">
							<div class="row row-p5">
								<div class="col">
									<div class="form-control-style"> <!-- ผลลัพธ์เท่ากับ 0 เพิ่ม disabled -->
										<select class="templatingSelect2">
											<option value="">ประเภท</option>
											<option value="usd">USD</option>
											<option value="euro">Euro</option>
											<option value="gbp">Pound</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-control-style"> <!-- ผลลัพธ์เท่ากับ 0 เพิ่ม disabled -->
										<select class="templatingSelect2">
											<option value="">เรียงตาม...</option>
											<option value="usd">USD</option>
											<option value="euro">Euro</option>
											<option value="gbp">Pound</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="box-search-list col-12">

							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯ ร่วมกิจกรรมจิตอาสา
									สำนักงานปลัดกระทรวงเกษตรและสหกรณ์ เนื่องในวันนวมินทรมหาราช 13 ตุลาคม 2567 และวันปิยมหาราช 23 ตุลาคม
									2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>
							<div class="item">
								<a href="../news/detail.php">สำนักงานพิพิธภัณฑ์เกษตรฯ จัดประชุมคณะกรรมการ พกฉ. ครั้งที่ 10/2567</a>
								<div class="d-flex justify-content-between flex-wrap">
									<div class="-date">
										18 สิงหาคม 2023
									</div>
									<div class="-view">
										300
									</div>
									<div class="type">ประเภท : ข่าวประชาสัมพันธ์</div>
								</div>
							</div>

							<div class="--empty">
								<img src="../../public/images/img-wisdomking.png" alt="" class="mw-100 my-3 mx-auto d-block">
								<h4 class="text-center">ขออภัย ไม่เจอผลลัพธ์ที่ต้องการ</h4>
							</div>
							<div class="box-search-bottom">
								<p class="text-muted m-0" style="font-size: 13px;">ข้อมูลรายการที่ 1 ถึง 20 จากทั้งหมด 1,298 รายการ</p>
								<nav class="box-pagination ml-auto mr-auto mr-lg-0">
									<ul class="pagination">
										<li class="page-item disabled">
											<a class="page-link prev">Previous</a>
										</li>
										<li class="page-item active" aria-current="page">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item"><a class="page-link" href="#">5</a></li>
										<li class="page-item">.....</li>
										<li class="page-item"><a class="page-link" href="#">22</a></li>
										<li class="page-item">
											<a class="page-link next" href="#">Next</a>
										</li>
									</ul>
								</nav>
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
	<!-- search-box -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	<script>
		$(function () {
			const $searchBox = $('#search-box');
			const $searchBoxContainer = $('#search-box-container');

			// เพิ่มคลาส unavailable เมื่อมีค่าใน search-box
			if ($searchBox.val().trim() !== "") $searchBoxContainer.addClass("unavailable");

			// กำหนด autocomplete
			$searchBox.autocomplete({
				minLength: 0,
				appendTo: "#search-box-container",
				source: (request, response) => {
					const popularSuggestions = [
						{ label: "คำค้นหายอดนิยม", group: true },
						{ label: "เกษตรยุคใหม่หัวใจสิ่งแวดล้อม", group: false },
						{ label: "#Covid19", group: false },
						{ label: "#รักในหลวง", group: false }
					];

					const personalizedSuggestions = [
						{ label: "คำค้นหาที่แนะนำสำหรับคุณ", group: true },
						{ label: "พิพิธภัณฑ์เกษตร", group: false },
						{ label: "พิพิธภัณฑ์น่าสนใจ", group: false },
						{ label: "10 พิพิธภัณฑ์ห้ามพลาดในประเทศไทย", group: false }
					];
					const results = request.term === "" ?
						popularSuggestions :
						$.merge($.grep(personalizedSuggestions, item =>
							item.group || item.label.toLowerCase().includes(request.term.toLowerCase())),
							popularSuggestions);
					response(results);
				},
				create() {
					$(this).data("ui-autocomplete")._renderItem = (ul, item) =>
						$("<li>").append("<div class='ui-menu-item-wrapper'>" + item.label + "</div>")
							.toggleClass("ui-autocomplete-group", item.group).appendTo(ul);
				},
				focus(event, ui) {
					$searchBoxContainer.addClass("unavailable");
					if (ui.item.group) {
						event.preventDefault();
						const autocomplete = $(this).data("ui-autocomplete");
						const direction = event.keyCode === $.ui.keyCode.DOWN ? "next" : "previous";
						autocomplete.menu[direction](event);
					} else {
						$(this).val(ui.item.label);
					}
				},
				select(event, ui) {
					$searchBoxContainer.addClass("unavailable");
					if (ui.item.group) event.preventDefault();
				},
				open() {
					$searchBoxContainer.addClass("active");
				},
				close() {
					$searchBoxContainer.removeClass("active");
				}
			}).focus(function () {
				$(this).autocomplete("search", "");
			});

			// ตรวจสอบ input
			$searchBox.on('input', function () {
				$searchBoxContainer.toggleClass("unavailable", $(this).val().trim() !== "");
			});
		});
	</script>

	<!-- Voice command -->
	<script>
		$(document).ready(function () {
			if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
				const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
				recognition.lang = 'th-TH';
				recognition.interimResults = true;

				let isListening = false;

				$('.box-search .custom-tooltip').click(function () {
					isListening ? recognition.stop() : recognition.start();
					$(this).toggleClass('active', !isListening);
					isListening = !isListening;
				});

				recognition.onresult = event => $('#search-box').val(event.results[0][0].transcript).autocomplete("search");
				recognition.onend = () => $('.box-search .custom-tooltip').removeClass('active');
				recognition.onerror = event => console.error('Error: ' + event.error);
			} else {
				alert('เบราว์เซอร์ของคุณไม่รองรับฟีเจอร์นี้');
			}
		});
	</script>

	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: -1
		});
	</script>
</body>

</html>