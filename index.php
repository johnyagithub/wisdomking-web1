<!DOCTYPE html>
<html lang="EN">

<head>
	<title>wisdomking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="copyright" content="">

	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 ,minimal-ui">
	<link rel="icon" href="../../public/images/favicon.png" type="image/gif" sizes="16x16">

	<!-- begin content share -->
	<meta property="og:title" content="wisdomking">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="wisdomking">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">
	<!-- end content share -->

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400&display=swap" rel="stylesheet">
	<link href="plugins/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- ================== END BASE CSS STYLE ================== -->

	<style>
		body {
			font-family: 'Prompt', sans-serif !important; 
			font-weight: 100;
			font-size: 16px;
			background: linear-gradient(90.41deg, #2BCB7E 2.96%, #37A8E2 99.49%);
			color: #4C58E2;
		}

		.mih-100vh {
			min-height: 100vh;
		}

		.rounded {
			border-radius: 24px !important;
		}

		.box-1 {
			background-image: url('public/images/welcome/bg-1.png'), linear-gradient(rgb(231, 251, 241) 0%, rgb(209, 241, 169) 100%);
			background-position: right bottom, 0 0;
			min-height: 350px !important;
		}

		.box-2 {
			background-image: url('public/images/welcome/bg-2.png'), linear-gradient(180deg, #EEFAE6 0%, #DEFCF8 100%);
			background-position: right bottom, 0 0;
		}

		.box-3 {
			background-image: url('public/images/welcome/bg-3.png'), linear-gradient(180deg, #EEFAE6 0%, #DEFCF8 100%);
			background-position: left bottom, 0 0;
		}

		.box-1,
		.box-2,
		.box-3 {
			background-size: contain, auto;
			background-repeat: no-repeat;
			box-shadow: 9px 10px 26.8px 0px #00000040;
			min-height: 270px;
		}

		.box-1 .img-logo {
			width: 50px;
			margin-right: 5px;
		}

		.box-1 h3 {
			color: #4C58E2;
			margin-bottom: 0;
		}

		.box-2 .img-logo,
		.box-3 .img-logo {
			width: 37px;
			margin-bottom: 5px;
		}

		.box-2 h3,
		.box-3 h3 {
			color: #4C58E2;
		}

		.box-2 a.btn,
		.box-3 a.btn {
			background: #589BD4;
			padding: 7px 28px;
		}

		.box-2 a.btn:hover,
		.box-3 a.btn:hover {
			background: #58C3D4;
			border-color: #58C3D4;
		}

		/* ---------------------------------------------------**** Tablet ****--------------------------------------------------- */
		@media only screen and (max-width: 1024px) {
			/* แนวตั้ง */
			@media only screen and (orientation:portrait) {
				.box-1 {
					background: linear-gradient(rgb(231, 251, 241) 0%, rgb(209, 241, 169) 100%);
				}
			}
		}

		/* ---------------------------------------------------**** Mobile ****--------------------------------------------------- */
		@media only screen and (max-width: 767px) {
			body {
				font-size: 14px;
			}

			.box-1 .img-logo {
				width: 40px;
			}

			.box-1 h3 {
				font-size: 18px;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="d-flex align-items-center justify-content-center mih-100vh">
			<div class="row w-100 py-4">
				<div class="col-12 my-2 px-2">
					<div class="box-1 rounded p-4 d-flex align-items-start flex-column">
						<div class="d-flex align-items-center">
							<img src="public/images/Logo-welcome.png" class="img-logo" alt="">
							<h3>สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติ<br class="d-none d-md-block">พระบาทสมเด็จพระเจ้าอยู่หัว (องค์การมหาชน)</h3>
						</div>
						<p class="mt-auto">"เป็นพิพิธภัณฑ์ชั้นนำแห่งการเรียนรู้พระเกียรติคุณและพระอัจฉริยภาพของกษัตริย์เกษตร<br> และเป็นศูนย์กลางการเรียนรู้หลักปรัชญาของเศรษฐกิจพอเพียงนวัตกรรมด้านการเกษตรของประเทศ"</p>
						<p style="color:#A4A5A6;">โทร: 0-2529-2212 or 0-2529-2213,<br class="d-md-none"> แฟกซ์: 0-2529-2214</p>
					</div>
				</div>
				<div class="col-md-6 my-2 px-2">
					<div class="box-2 rounded p-4 d-flex align-items-start flex-column">
						<img src="public/images/Logo-welcome.png" class="img-logo" alt="">
						<h3>เข้าสู่เว็บไซต์เดิม</h3>
						<a href="https://www.wisdomking.or.th/th" class="btn btn-primary mt-auto">เข้าชมเว็บไซต์เดิม</a>
					</div>
				</div>
				<div class="col-md-6 my-2 px-2">
					<div class="box-3 rounded p-4 d-flex align-items-end flex-column">
						<img src="public/images/Logo-welcome.png" class="img-logo" alt="">
						<h3>เข้าสู่เว็บไซต์ใหม่</h3>
						<a href="http://webnew.wisdomking.or.th/" class="btn btn-primary mt-auto ml-auto">เข้าชมเว็บไซต์ใหม่</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
