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

				<div class="pb-4">
					<div id="search-box-container">
						<input id="search-box" type="search" class="form-control bg-white rounded-pill w-100"
							placeholder="ค้นหา..." value="<?=$_GET['keyword']?>">
					</div>
				</div>

				<div class="--detail">
					ดะ้ัก55
				</div>
			</div>
		</section>

	</div>
	<!-- end #content -->

	<!-- begin #footer -->
	<?php include('../layouts/inc-footer.php'); ?>
	<!-- end #footer -->

	<?php include('../layouts/inc-script.php'); ?>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	<script>
		$(function () {
			// คำค้นหายอดนิยม (แสดงตลอดเวลา)
			var popularSuggestions = [
				{ label: "คำค้นหายอดนิยม", group: true },
				{ label: "เกษตรยุคใหม่หัวใจสิ่งแวดล้อม", group: false },
				{ label: "#Covid19", group: false },
				{ label: "#รักในหลวง", group: false }
			];

			// คำค้นหาที่แนะนำสำหรับคุณ (แสดงเมื่อเริ่มพิมพ์)
			var personalizedSuggestions = [
				{ label: "คำค้นหาที่แนะนำสำหรับคุณ", group: true },
				{ label: "พิพิธภัณฑ์เกษตร", group: false },
				{ label: "พิพิธภัณฑ์น่าสนใจ", group: false },
				{ label: "10 พิพิธภัณฑ์ห้ามพลาดในประเทศไทย", group: false }
			];

			// การตั้งค่า Autocomplete
			$("#search-box").autocomplete({
				minLength: 0,
				appendTo: "#search-box-container",
				source: function (request, response) {
					var results = [];

					// หากไม่มีการพิมพ์ ให้แสดงเฉพาะคำค้นหายอดนิยม
					if (request.term === "") {
						results = popularSuggestions;
					} else {
						// หากมีการพิมพ์ ให้แสดงคำค้นหาที่แนะนำสำหรับคุณและคำค้นหายอดนิยมตามลำดับ
						var filteredPersonalized = $.grep(personalizedSuggestions, function (item) {
							return item.group || item.label.toLowerCase().includes(request.term.toLowerCase());
						});
						results = $.merge($.merge([], filteredPersonalized), popularSuggestions);
					}

					response(results);
				},
				create: function () {
					$(this).data("ui-autocomplete")._renderItem = function (ul, item) {
						if (item.group) {
							return $("<li class='ui-autocomplete-group'></li>")
								.text(item.label)
								.appendTo(ul);
						} else {
							return $("<li></li>")
								.append("<div class='ui-menu-item-wrapper'>" + item.label + "</div>")
								.appendTo(ul);
						}
					};
				},
				focus: function (event, ui) {
					if (ui.item.group) {
						event.preventDefault();

						var autocomplete = $(this).data("ui-autocomplete");
						if (event.keyCode === $.ui.keyCode.DOWN) {
							autocomplete.menu.next(event);
						} else if (event.keyCode === $.ui.keyCode.UP) {
							autocomplete.menu.previous(event);
						}
					} else {
						$(this).val(ui.item.label);
					}
				},
				select: function (event, ui) {
					if (ui.item.group) {
						event.preventDefault();
					}
				},
				open: function () {
					// เมื่อเปิด autocomplete ให้เพิ่มคลาส "active" ให้กับ #search-box
					$("#search-box").addClass("active");
				},
				close: function () {
					// เมื่อปิด autocomplete ให้ลบคลาส "active"
					$("#search-box").removeClass("active");
				}
			}).focus(function () {
				$(this).autocomplete("search", "");
			});
		});
	</script>
</body>

</html>