<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/calendar.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/reserve.css">

	<!-- select2 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

</head>

<body>
	<?php $IDcourse = isset($_GET['course']) ? $_GET['course'] : ''; ?>

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
				<li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
			</ol>
		</nav>

		<section class="py-4">
			<div class="container">

				<?php include('inc-course-event.php'); ?>

				<div id="join-project">

					<div class="box-status" data-status="3">
						<h4 class="text-center">สมัครเข้าร่วมโครงการ</h4>
						<ul class="-status-bar d-none d-md-block <?= $IDcourse ? '' : 'Asyouwish' ?>">
							<li><span class="circle"></span>หลักสูตร</li>
							<li><span class="circle"></span>กิจกรรม</li>
							<li><span class="circle"></span>จอง</li>
							<li><span class="circle"></span>สรุปการจอง</li>
						</ul>
						<div class="progress-container d-md-none <?= $IDcourse ? '' : 'Asyouwish' ?>">
							<div class="progress-circle">
								<span class="progress-text">of <?= $IDcourse ? 4 : 2 ?></span>
							</div>
							<div>
								<h3 class="progress-title"></h3>
								<div class="progress-step">ขั้นตอนถัดไป : <span></span></div>
							</div>
						</div>
					</div>

					<!-- status3 -->
					<div class="b-status3">
						<?php include('inc-form-course2.php'); ?>
					</div>

					<!-- status4 -->
					<div class="b-status4">
						<?php include('inc-form-course3.php'); ?>
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
	<script type="text/javascript" src="../../public/js/course-event.js"></script>

	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: 6
		});
		$('.templatingSelect2[required]').on('change', function() {
			// ถ้ามีค่า ให้ลบ required
			if ($(this).val()) {
				$(this).removeAttr('required');
			} else {
				// ถ้าไม่มีค่า ให้เพิ่ม required
				$(this).attr('required', 'required');
			}
		});
	</script>

	<!-- calendar -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>

</body>

</html>