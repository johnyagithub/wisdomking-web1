<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
	<!-- FileUp -->
	<link href="../../plugins/jQuery-AJAX-File-Uploader-FileUp/src/fileup.css" rel="stylesheet" type="text/css">

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

						<div class="sticky-top" style="top: 113px;">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								รับเรื่องร้องเรียน ทุจริต และประพฤติมิชอบ
							</a>
							<div class="sumMenu-profile dropdown-menu">
								<a class="dropdown-item" href="../complaint">
									ช่องทางแจ้งเรื่องร้องเรียน
								</a>
								<div class="dropdown">
									<a class="dropdown-item active" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
										รับเรื่องร้องเรียน
									</a>
									<div class="dropdown-menu show">
										<a class="dropdown-item" href="../complaint/receive-complaints1.php">
											เรื่องทั่วไป
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../complaint/receive-complaints2.php">
											menu 2
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item active" href="../complaint/receive-complaints3.php">
											menu 3
										</a>
									</div>
								</div>
								<div class="dropdown">
									<a class="dropdown-item" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
										รับเรื่องร้องเรียน ทุจริต และประพฤติมิชอบ
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="../complaint/receive-complaints-corrupt1.php">
											เรื่องทั่วไป
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../complaint/receive-complaints-corrupt2.php">
											menu 2
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../complaint/receive-complaints-corrupt3.php">
											menu 3
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col mt-4 mt-md-0">
						<img src="https://placehold.co/500x1000" alt="" class="d-block mx-auto rounded w-100">
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
	<!-- FileUp -->
	<script src="../../plugins/jQuery-AJAX-File-Uploader-FileUp/src/fileup.js"></script>
	<script>
		$.fileup({
			url: '#',
			inputID: 'upload',
			queueID: 'upload-queue',
			autostart: true,
			// onSelect: function (file) {
			// },
			// onRemove: function (file, total) {
			// },
			onSuccess: function (response, file_number, file) {
				$('#file-upload-' + file_number).addClass('--success');
			},
			onError: function (event, file, file_number) {
				$('#file-upload-' + file_number).addClass('--error');
				$('#file-upload-' + file_number).find('.result').text('This document is not supported, please delete and upload another file.');
			}
		});
	</script>

</body>

</html>