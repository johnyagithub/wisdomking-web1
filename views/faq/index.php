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
			<ol class="breadcrumb container">
				<li class="breadcrumb-item">
					<a href="../home/">
						<i class="fa fa-home" aria-hidden="true"></i> หน้าแรก
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../contact-us/">ติดต่อเรา</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">คำถามที่พบบ่อย</li>
			</ol>
		</nav>

		<section class="pb-4">
			<div class="container">
				<div class="mx-auto mb-5" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">คำถามที่พบบ่อย</h4>
					<p class="text-center text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting
						industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div class="--detail">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="heading-1">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
										data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										พิพิธภัณฑ์มีชีวิตหมายถึงอะไร ?
									</button>
								</h2>
							</div>
							<div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
								<div class="card-body">
									พิพิธภัณฑ์มีชีวิตหมายถึงพิพิธภัณฑ์ที่มีการจัดแสดงที่ผู้ชมสามารถเรียนรู้ สัมผัส
									จับต้องได้มีปฏิสัมพันธ์ระหว่างชิ้นงานการจัดแสดงและผู้ชม เพื่อให้เรียนรู้ได้เข้าใจง่ายยิ่งขึ้น
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-2">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
										data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										ทราบว่าพิพิธภัณฑ์การเกษตรฯ ได้มีการปรับปรุงพัฒนาแล้วจริงหรือไม่ ?
									</button>
								</h2>
							</div>
							<div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
								<div class="card-body">
									พิพิธภัณฑ์มีชีวิตหมายถึงพิพิธภัณฑ์ที่มีการจัดแสดงที่ผู้ชมสามารถเรียนรู้ สัมผัส จับต้องได้
									มีปฏิสัมพันธ์ระหว่างชิ้นงานการจัดแสดงและผู้ชม เพื่อให้เรียนรู้ได้เข้าใจง่ายยิ่งขึ้น
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-3">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
										data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										สำนักงานพิพิธภัณฑ์เกษตรฯ จัดงานตลาดนัดเศรษฐกิจพอเพียงทุกเดือนใช่หรือไม่
										ในแต่ละครั้งมีหลักสูตรการฝึกอบรมวิชาชีพฟรี จริงหรือเปล่า ?
									</button>
								</h2>
							</div>
							<div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordionExample">
								<div class="card-body">
									พิพิธภัณฑ์มีชีวิตหมายถึงพิพิธภัณฑ์ที่มีการจัดแสดงที่ผู้ชมสามารถเรียนรู้ สัมผัส จับต้องได้
									มีปฏิสัมพันธ์ระหว่างชิ้นงานการจัดแสดงและผู้ชม เพื่อให้เรียนรู้ได้เข้าใจง่ายยิ่งขึ้น
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-4">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
										data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										ทำไมในงานตลาดนัดเศรษฐกิจพอเพียงถึงมีของขายน้อยจัง ?
									</button>
								</h2>
							</div>
							<div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordionExample">
								<div class="card-body">
									พิพิธภัณฑ์มีชีวิตหมายถึงพิพิธภัณฑ์ที่มีการจัดแสดงที่ผู้ชมสามารถเรียนรู้ สัมผัส จับต้องได้
									มีปฏิสัมพันธ์ระหว่างชิ้นงานการจัดแสดงและผู้ชม เพื่อให้เรียนรู้ได้เข้าใจง่ายยิ่งขึ้น
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
</body>

</html>