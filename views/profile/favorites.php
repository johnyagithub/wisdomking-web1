<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/profile.css">
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
					<a href="#">ข้อมูลส่วนตัว</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">บัญชีของฉัน</li>
			</ol>
		</nav>

		<section>
			<div class="container">
				<div class="mx-auto mb-4" style="max-width: 1000px;">
					<h4 class="head mb-4 text-center">บัญชีของฉัน</h4>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-3 --sumMenu">

						<div class="sticky-top" style="top: 113px;">
							<a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
								รายการที่ถูกใจ
							</a>
							<div class="sumMenu-profile dropdown-menu">
								<a class="dropdown-item" href="../profile/">
									<i class="fa fa-user-o" aria-hidden="true"></i>
									บัญชีของฉัน
								</a>
								<a class="dropdown-item active" href="../profile/favorites.php">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									รายการที่ถูกใจ
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item text-danger" href="#">
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									ออกจากระบบ
								</a>
							</div>
						</div>

					</div>
					<div class="col box-profile-list">
						<div class="d-none d-md-flex flex-wrap w-100 mb-3">
							<h4 class="mr-auto text-primary">รายการที่ถูกใจ</h4>
						</div>
						<div class="row row-p10 mb-4">
							<div class="col-6">
								<label>ประเภทรายการที่ถูกใจ</label>
								<select class="templatingSelect2 form-control">
									<option value="">คอร์สเรียน</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
									<option value="gbp">Pound</option>
									<option value="gbp">Pound</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
							<div class="col-6">
								<label>เรียงตาม</label>
								<select class="templatingSelect2 form-control">
									<option value="">เรียงตาม...</option>
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="gbp">Pound</option>
								</select>
							</div>
						</div>
						<div class="box-courses row row-p10">
							<div class="col-6 mb-4">
								<a href="../e-learning/detail.php" class="item">
									<div class="img">
										<img src="https://placehold.co/355x192" alt="">
									</div>
									<div class="text"><span class="-type border0" style="background: #41ACFE; color: #fff;">องค์ความรู้วิชาของแผ่นดิน</span>
										<h5 class="text-line1">คอร์สที่ 1</h5>
										<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</a>
							</div>
							<div class="col-6 mb-4">
								<a href="../e-learning/detail.php" class="item">
									<div class="img">
										<img src="https://placehold.co/355x192" alt="">
									</div>
									<div class="text"><span class="-type border0" style="background: #BED257; color: #3B5E22;">เกษตรภูธร</span>
										<h5 class="text-line1">คอร์สที่ 2</h5>
										<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</a>
							</div>
							<div class="col-6 mb-4">
								<a href="../e-learning/detail.php" class="item">
									<div class="img">
										<img src="https://placehold.co/355x192" alt="">
									</div>
									<div class="text"><span class="-type border0" style="background: #BED257; color: #3B5E22;">เกษตรภูธร</span>
										<h5 class="text-line1">คอร์สที่ 2</h5>
										<p class="text-line3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
									</div>
								</a>
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

	<?php include('../layouts/inc-script.php'); ?><script>
		$(document).ready(function() {
			// ปุ่ม upload file
			$("#file-upload").change(function(e) {
				let reader = new FileReader();
				reader.onload = e => {
					$("#profile-pic").css('background-image', 'url(' + e.target.result + ')');
					$('.box-upload-profile').addClass('valid');
				}
				reader.readAsDataURL(this.files[0]);
			});

			// ปุ่ม ลบ
			$("#clear-button").click(function() {
				$("#file-upload").val('');
				$("#profile-pic").css('background-image', '');
				$('.box-upload-profile').removeClass('valid');
			});
		});

		let editPro = () => {
			$('#profile-list label+input[readonly]').prop('readonly', false);
			$('#profile-list label+select[disabled]').prop('disabled', false);
			setTimeout(function() {
				const input = $('#input_name');
				input.focus()[0].setSelectionRange(input.val().length, input.val().length);
			}, 500);
			$('#button-editPro').show();
		}
		let cancelPro = () => {
			$('#profile-list label+input').prop('readonly', true);
			$('#profile-list label+select').prop('disabled', true);
			$('#button-editPro').hide();
		}
	</script>
	<!-- select2 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script>
		$(".templatingSelect2").select2({
			minimumResultsForSearch: 5
		});
	</script>
</body>

</html>