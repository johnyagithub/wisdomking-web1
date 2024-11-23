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
				<li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
			</ol>
		</nav>

		<section class="py-4">
			<div class="container">

				<?php include('inc-course-event.php'); ?>

				<div id="join-project">
					<div class="box-status">
						<h4 class="text-center">สมัครเข้าร่วมโครงการ</h4>
						<ul class="-status-bar">
							<li><span class="circle"></span>หลักสูตร</li>
							<li><span class="circle"></span>กิจกรรม</li>
							<li><span class="circle"></span>จอง</li>
							<li><span class="circle"></span>สรุปการจอง</li>
						</ul>
					</div>

					<!-- status2 -->
					<div class="b-status2">
						<?php include('inc-form-course.php'); ?>
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
	</script>

	<!-- calendar -->
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../plugins/calendar/script.js"></script>

</body>

</html>