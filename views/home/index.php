<!DOCTYPE html>
<html lang="th">

<head>

	<?php include('../layouts/inc-meta.php'); ?>
	<link rel="stylesheet" type="text/css" href="../../public/css/home.css">

</head>

<body>

	<!-- begin #header -->
	<?php include('../layouts/inc-header.php'); ?>
	<!-- end #header -->

	<!-- begin #content -->
	<div id="content" class="content">

		<section class="box-banner">
			<div class="container">
				<div class="owl-carousel">

					<div class="item">
						<img class="img-banner" src="../../public/images/banner.jpg">
						<div class="box-text p-5">
							<div class="b-text">
								<h1 class="text-white mb-4">
									สำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว(องค์การมหาชน)</h1>
								<p class="text-white mb-4">
									"เป็นพิพิธภัณฑ์ชั้นนำแห่งการเรียนรู้พระเกียรติคุณและพระอัจฉริยภาพของกษัตริย์เกษตรและเป็นศูนย์กลางการเรียนรู้หลักปรัชญาของเศรษฐกิจ
									พอเพียง นวัตกรรมด้านการเกษตรของประเทศ"</p>
								<a class="btn btn-light px-5 rounded-pill" href="#">อ่านต่อ</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="py-5">
			<div class="container">
				<h5 class="head text-center text-primary font-weight-lighter d-table mx-auto">เกี่ยวกับเรา</h5>
				<p class="h4 text-center text-secondary font-weight-lighter" style="line-height: 1.5;">
					กระทรวงเกษตรและสหกรณ์ <b class="text-primary font-weight-lighter">ได้จัดตั้งพิพิธภัณฑ์การเกษตรเฉลิม<br>
						พระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัวโดยมีวัตถุประสงค์เพื่อเฉลิม พระเกียรติ</b><br>
					พระบาทสมเด็จพระบรม ชนกาธิเบศรมหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร<br>
					เนื่องในมหามงคลสมัยที่ทรง...
				</p>
				<br>
				<a class="btn btn-style px-5 d-table mx-auto" href="#" role="button">อ่านต่อ</a>
			</div>
		</section>

		<section class="box-Ourmuseum py-4">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">พิพิธภัณฑ์ของเรา</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link active" id="nav-Indoor-tab" data-toggle="tab" data-target="#nav-Indoor"
								type="button" role="tab" aria-controls="nav-Indoor" aria-selected="true">
								<img src="../../public/images/moon.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์ในอาคาร
							</button>
							<button class="nav-link" id="nav-Outdoor-tab" data-toggle="tab" data-target="#nav-Outdoor" type="button"
								role="tab" aria-controls="nav-Outdoor" aria-selected="false">
								<img src="../../public/images/sun.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์กลางแจ้ง
							</button>
							<button class="nav-link" id="nav-Virtual-tab" data-toggle="tab" data-target="#nav-Virtual" type="button"
								role="tab" aria-controls="nav-Virtual" aria-selected="false">
								<img src="../../public/images/reload.png" style="width: 24px;" alt="">
								พิพิธภัณฑ์เสมือนจริง
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content box-slide py-4">
					<div class="tab-pane fade show active" id="nav-Indoor" role="tabpanel" aria-labelledby="nav-Indoor-tab">
						<div class="owl-carousel nav-dots-style" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
							data-itemSlide-mobile="1">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Outdoor" role="tabpanel" aria-labelledby="nav-Outdoor-tab">
						<div class="owl-carousel nav-dots-style" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
						data-itemSlide-mobile="1">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Virtual" role="tabpanel" aria-labelledby="nav-Virtual-tab">
						<div class="owl-carousel nav-dots-style" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
						data-itemSlide-mobile="1">

							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>
							<a href="../ourmuseum/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								</div>
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="box-Learning py-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-5 col-lg-3 d-flex flex-column text-center text-sm-left order-sm-1">
						<a href="../learning/" class="text-secondary"><u>ทั้งหมด</u></a>
						<div class="my-auto py-4">
							<h3 class="head mb-4">สื่อการเรียนรู้</h3>
							<h5>ภาพยนตร์แอนิเมชั่น 3 มิติ</h5>
						</div>
						<div class="arrow-default">
							<div class="o-prev"></div>
							<div class="o-next"></div>
						</div>
					</div>
					<div class="col-sm-7 col-lg-9">
						<div class="owl-carousel">

							<div class="item">
								<div class="img">
									<div class="btn-play-video">
										<button type="button" class="btn rounded-circle" data-modal="#video" data-type="youtube"
											data-src="https://www.youtube.com/embed/IoPWOZoiJh0?autoplay=1&amp;loop=1&amp;autopause=0"></button>
									</div>
									<img src="../../public/images/learning/img1.jpg" alt="">
								</div>
								<div class="text">
									<h5 class="text-line1 font-weight-lighter"><b>เรื่องที่ 2</b> แผ่นดินของเรา</h5>
									<p class="text-line2">สนุกสนานไปกับการผจญภัย ที่จะพาย้อนเวลาตามหาความหมายของคำว่า “กษัตริย์ เกษตร”</p>
								</div>
							</div>
							<div class="item">
								<div class="img">
									<div class="btn-play-video">
										<button type="button" class="btn rounded-circle" data-modal="#video" data-type="youtube"
											data-src="https://www.youtube.com/embed/6VStThKU2cU?autoplay=1&amp;loop=1&amp;autopause=0"></button>
									</div>
									<img src="../../public/images/learning/img2.jpg" alt="">
								</div>
								<div class="text">
									<h5 class="text-line1 font-weight-lighter"><b>เรื่องที่ 1</b> เรื่องของพ่อในบ้านของเรา</h5>
									<p class="text-line2">ร่วมเรียนรู้ไปพร้อมกับ 3 เพื่อนซี้จอมป่วน ที่จะพาชมเรื่องราวของพ่อผู้ทรง
										งานหนักเพื่อความสุขของลูก ผลผลิตที่พ่อก่อออกผลอย่างไรกับบ้านของเรา</p>
								</div>
							</div>
							<div class="item">
								<div class="img">
									<div class="btn-play-video">
										<button type="button" class="btn rounded-circle" data-modal="#video" data-type="youtube"
											data-src="https://www.youtube.com/embed/-D5-CYGapNg?autoplay=1&amp;loop=1&amp;autopause=0"></button>
									</div>
									<img src="../../public/images/learning/img1.jpg" alt="">
								</div>
								<div class="text">
									<h5 class="text-line1 font-weight-lighter"><b>เรื่องที่ 2</b> แผ่นดินของเรา</h5>
									<p class="text-line2">สนุกสนานไปกับการผจญภัย ที่จะพาย้อนเวลาตามหาความหมายของคำว่า “กษัตริย์ เกษตร”</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-Calendar py-4">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">ปฏิทินกิจกรรมการเรียนรู้</h3>
					<div class="box-navTabs ml-auto d-flex flex-wrap" data-showId="data-Calendar">
						<div class="owl-carousel">
							<button type="button" class="btn btn-style3 px-3 text-muted active">ทั้งหมด</button>
							<button type="button" data-type="tab1" class="btn btn-style3 px-3 text-muted">ท่องเที่ยวสุขสันต์
								ที่พิพิธภัณฑ์เกษตรฯ</button>
							<button type="button" data-type="tab2" class="btn btn-style3 px-3 text-muted">หลักสูตรอบรมเข้มข้น</button>
							<!-- <button type="button" data-type="tab3" class="btn btn-style3 px-3 text-muted">อื่นๆ</button> -->
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-4 col-xl-3">
						<div id="slide-Month" class="owl-carousel"></div>
					</div>
					<div class="offset-xl-1 col-md-8">
						<div id="slide-Day">
							<div class="owl-carousel"></div>
						</div>
					</div>
				</div>
				<div class="row" id="data-Calendar"></div>

				<div id="dataCalendar" class="d-none">
					<div data-item="กรกฎาคม">
						<div class="item" data-day="วันจันทร์" data-start="08 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="../../public/images/calendar/img1.jpg" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="ท่องเที่ยวสุขสันต์ ที่พิพิธภัณฑ์เกษตรฯ" data-idtype="tab1"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
							<div class="list" data-img="../../public/images/learning/img1.jpg" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="อบรมเข้มข้นแบบมืออาชีพ ประจำ เดือน ก.ค. 66"
								data-detail="เปิดอบรมเข้มข้น สายเรียนรู้ สร้างอาชีพ ต้องมา ทุกเสาร์อาทิตย์ที่ 3 และ 4 ของเดือน"
								data-link="../calendar-learn/detail.php"></div>
						</div>
						<div class="item" data-day="วันอังคาร" data-start="09 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=09" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น,อื่นๆ" data-idtype="tab2 tab3"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
						<div class="item" data-day="วันจันทร์" data-start="15 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=15" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="อื่นๆ" data-idtype="tab3" data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
						<div class="item" data-day="วันอังคาร" data-start="16 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=16" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="อื่นๆ" data-idtype="tab3" data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
						<div class="item" data-day="วันเสาร์" data-start="20 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=20" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
						<div class="item" data-day="วันอาทิตย์" data-start="21 กรกฎาคม" data-end="16 กรกฎาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=21" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
					</div>
					<div data-item="กันยายน">
						<div class="item" data-day="วันจันทร์" data-start="08 กันยายน" data-end="16 กันยายน">
							<div class="list" data-img="https://placehold.co/630x830?text=08" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
					</div>
					<div data-item="ธันวาคม">
						<div class="item" data-day="วันจันทร์" data-start="08 ธันวาคม" data-end="16 ธันวาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=08" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
						<div class="item" data-day="วันอาทิตย์" data-start="20 ธันวาคม" data-end="16 ธันวาคม">
							<div class="list" data-img="https://placehold.co/630x830?text=20" data-date="01 กรกฎาคม 2023"
								data-view="250" data-type="หลักสูตรอบรมเข้มข้น" data-idtype="tab2"
								data-name="ท่องเที่ยวสุขสันต์ 15-16 ก.ค. 2566"
								data-detail="กิจกรรม ตามหาเชฟตัวน้อย เข้าครัว ทำเมนูอร่อย" data-link="../calendar-learn/detail.php">
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-Market py-5">
			<div class="container">
				<div class="row m-0">
					<h3 class="head mb-4 mb-auto">มหกรรมตลาดเศรษฐกิจพอเพียง</h3>
					<p class="mx-auto mt-4 mt-lg-0 col-lg px-lg-3 text-black-50" style="max-width: 730px;">ตลาดเศรษฐกิจพอเพียง
						จัดขึ้นทุกเสาร์ อาทิตย์ สัปดาห์แรกของเดือน เป็นตลาดนัดแห่งมิตรภาพ และการแบ่งปัน เพื่อจุดประกายความคิด
						แลกเปลี่ยนเรียนรู้ภูมิปัญญานวัตกรรมเกษตร เศรษฐกิจพอเพียง</p>
				</div>
				<div class="row mt-3">
					<div class="col-lg-6" id="Market-show">
						<a href="#" class="item-show">
							<div class="img">
								<img src="../../public/images/img1.jpg" alt="">
							</div>
							<div class="text">
								<h5>เรื่องข้าวชาวเกษตร</h5>
								<div class="-date">04-05 พฤษภาคม 2567</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 align-self-center px-lg-5">
						<div class="owl-carousel">

							<div class="item active" data-img="../../public/images/img1.jpg" data-subject="เรื่องข้าวชาวเกษตร"
								data-date="04-05 กรกฎาคม 2567">
								กรกฎาคม
								<hr>
								04 - 05
							</div>
							<div class="item" data-img="../../public/images/img2.jpg" data-subject="ตลาดเศรษฐกิจพอเพียง"
								data-date="04-05 สิงหาคม 2567">
								พฤศจจิกายน
								<hr>
								04 - 05
							</div>
							<div class="item" data-img="https://placehold.co/800x300?text=1" data-subject="เรื่องข้าวชาวเกษตร"
								data-date="04-05 กันยายน 2567">
								กันยายน
								<hr>
								04 - 05
							</div>
							<div class="item" data-img="https://placehold.co/800x300?text=2" data-subject="เรื่องข้าวชาวเกษตร"
								data-date="04-05 สิงหาคม 2567">
								สิงหาคม
								<hr>
								04 - 05
							</div>
							<div class="item active" data-img="https://placehold.co/800x300?text=3" data-subject="เรื่องข้าวชาวเกษตร"
								data-date="04-05 กรกฎาคม 2567">
								กรกฎาคม
								<hr>
								04 - 05
							</div>

						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="box-Knowledge py-4">
			<div class="container">
				<div class="-sticky d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">องค์ความรู้</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link active" id="nav-All-tab" data-toggle="tab" data-target="#nav-All" type="button"
								role="tab" aria-controls="nav-All" aria-selected="true">
								ทั้งหมด
							</button>
							<button class="nav-link" id="nav-Articles-tab" data-toggle="tab" data-target="#nav-Articles" type="button"
								role="tab" aria-controls="nav-Articles" aria-selected="true">
								<img src="../../public/images/document.png" style="width: 24px;" alt="">
								บทความ
							</button>
							<button class="nav-link" id="nav-Captions-tab" data-toggle="tab" data-target="#nav-Captions" type="button"
								role="tab" aria-controls="nav-Captions" aria-selected="false">
								<img src="../../public/images/photos.png" style="width: 24px;" alt="">
								บรรยายประกอบภาพ
							</button>
							<button class="nav-link" id="nav-Video-tab" data-toggle="tab" data-target="#nav-Video" type="button"
								role="tab" aria-controls="nav-Video" aria-selected="false">
								<img src="../../public/images/play_circled.png" style="width: 24px;" alt="">
								สื่อวิดิทัศน์
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content pt-4">
					<div class="tab-pane fade show active" id="nav-All" role="tabpanel" aria-labelledby="nav-All-tab">
						<div class="row">
							<div class="col-lg-5 pr-lg-4 mb-4">

								<!-- ก้อนแรกซ้ายมือ -->
								<a href="#" class="item item-left-sticky">
									<div class="img">
										<img src="../../public/images/Knowledge/img2.jpg" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="mb-1">
												<span class="-type">
													<img src="../../public/images/document.png" style="width: 14px;" alt="">
													บทความ
												</span>
												<span class="-type">การเกษตร</span>
											</div>
											<div class="-view">300</div>
										</div>
										<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
										<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น
											กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
											นอกจากผลิตภัณฑ์ที่เป็น</p>
										<div class="-profile">
											<img src="../../public/images/img-pro.jpg" alt="profile">
											ผู้เขียน : Wisdomking
										</div>
									</div>
								</a>

							</div>
							<div class="col-lg-7">
								<div class="row">

									<!-- ลูปเฉพาะก้อน 2 ขึ้นไป -->
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img -video">
												<img src="../../public/images/Knowledge/img1.jpg" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
															สื่อวิดิทัศน์
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img">
												<img src="../../public/images/Knowledge/img2.jpg" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/photos.png" style="width: 14px;" alt="">
															บรรยายประกอบภาพ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/document.png" style="width: 14px;" alt="">
															บทความ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/document.png" style="width: 14px;" alt="">
															บทความ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/document.png" style="width: 14px;" alt="">
															บทความ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/document.png" style="width: 14px;" alt="">
															บทความ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Articles" role="tabpanel" aria-labelledby="nav-Articles-tab">
						<div class="row">
							<div class="col-lg-5 pr-lg-4 mb-4">

								<!-- ก้อนแรกซ้ายมือ -->
								<a href="#" class="item item-left-sticky" style="top: 195px;">
									<div class="img">
										<img src="https://placehold.co/650x350" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="mb-1">
												<span class="-type">
													<img src="../../public/images/document.png" style="width: 14px;" alt="">
													บทความ
												</span>
												<span class="-type">การเกษตร</span>
											</div>
											<div class="-view">300</div>
										</div>
										<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
										<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น
											กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
											นอกจากผลิตภัณฑ์ที่เป็น</p>
										<div class="-profile">
											<img src="../../public/images/img-pro.jpg" alt="profile">
											ผู้เขียน : Wisdomking
										</div>
									</div>
								</a>

							</div>
							<div class="col-lg-7">
								<div class="row">

									<!-- ลูปเฉพาะก้อน 2 ขึ้นไป -->
									<div class="col-lg-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/document.png" style="width: 14px;" alt="">
															บทความ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Captions" role="tabpanel" aria-labelledby="nav-Captions-tab">
						<div class="row">
							<div class="col-lg-5 pr-lg-4 mb-4">

								<!-- ก้อนแรกซ้ายมือ -->
								<a href="#" class="item item-left-sticky" style="top: 195px;">
									<div class="img">
										<img src="https://placehold.co/650x350" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="mb-1">
												<span class="-type">
													<img src="../../public/images/photos.png" style="width: 14px;" alt="">
													บรรยายประกอบภาพ
												</span>
												<span class="-type">การเกษตร</span>
											</div>
											<div class="-view">300</div>
										</div>
										<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
										<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น
											กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
											นอกจากผลิตภัณฑ์ที่เป็น</p>
										<div class="-profile">
											<img src="../../public/images/img-pro.jpg" alt="profile">
											ผู้เขียน : Wisdomking
										</div>
									</div>
								</a>

							</div>
							<div class="col-lg-7">
								<div class="row">

									<!-- ลูปเฉพาะก้อน 2 ขึ้นไป -->
									<div class="col-lg-6">
										<a href="#" class="item">
											<div class="img">
												<img src="https://placehold.co/650x350" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/photos.png" style="width: 14px;" alt="">
															บรรยายประกอบภาพ
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Video" role="tabpanel" aria-labelledby="nav-Video-tab">
						<div class="row">
							<div class="col-lg-5 pr-lg-4 mb-4">

								<!-- ก้อนแรกซ้ายมือ -->
								<a href="#" class="item item-left-sticky" style="top: 195px;">
									<div class="img -video">
										<img src="https://placehold.co/650x350" alt="">
									</div>
									<div class="text">
										<div class="d-flex justify-content-between flex-wrap">
											<div class="mb-1">
												<span class="-type">
													<img src="../../public/images/Knowledge/img1.jpg" style="width: 14px;" alt="">
													สื่อวิดิทัศน์
												</span>
												<span class="-type">การเกษตร</span>
											</div>
											<div class="-view">300</div>
										</div>
										<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
										<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก นอกจากผลิตภัณฑ์ที่เป็น
											กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
											นอกจากผลิตภัณฑ์ที่เป็น</p>
										<div class="-profile">
											<img src="../../public/images/img-pro.jpg" alt="profile">
											ผู้เขียน : Wisdomking
										</div>
									</div>
								</a>

							</div>
							<div class="col-lg-7">
								<div class="row">

									<!-- ลูปเฉพาะก้อน 2 ขึ้นไป -->
									<div class="col-lg-6">
										<a href="#" class="item">
											<div class="img -video">
												<img src="../../public/images/Knowledge/img1.jpg" alt="">
											</div>
											<div class="text">
												<div class="d-flex justify-content-between flex-wrap">
													<div>
														<span class="-type">
															<img src="../../public/images/play_circled.png" style="width: 14px;" alt="">
															สื่อวิดิทัศน์
														</span>
														<span class="-type">การเกษตร</span>
													</div>
													<div class="-view">300</div>
												</div>
												<h5 class="text-line1">สารพันปัญหามะพร้าวไทย</h5>
												<p class="text-line2">ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น
													กะทิกล่องแล้ว ยังมีอุตสาหกรรมอื่นๆ ประเทศไทย เป็นประเทศที่ส่งออกกะทิเป็นอันดับที่ 1 ของโลก
													นอกจากผลิตภัณฑ์ที่เป็น</p>
												<div class="-profile">
													<img src="../../public/images/img-pro.jpg" alt="profile">
													ผู้เขียน : Wisdomking
												</div>
											</div>
										</a>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="box-Agricultural pb-5">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-lg-5 py-4">
						<h2 class="head mb-4">เครือข่ายพิพิธภัณฑ์เกษตรฯ</h2>
						<p>
							จัดกระบวนการแลกเปลี่ยนเรียนรู้เครือข่ายพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติฯเพื่อสร้างความร่วมมือในการขับเคลื่อนงานในระดับพื้นที่เพื่อเผยแพร่พระเกียรติคุณ
							และพระอัจฉริยภาพของพระบาทสมเด็จพระเจ้าอยู่หัว รัชกาลที่ 9 ด้านการเกษตร และสร้างผู้สืบทอด
							การจัดการผลผลิตและการอนุรักษ์พันธุกรรม โดยการดำเนิน โครงการขยายผลเครือข่าย พกฉ. และโครงการเผยแพร่ขยายผล
							นวัตกรรมเกษตร เศรษฐกิจพอเพียง ปัจจุบัน มีศูนย์เครือข่าย พกฉ.</p>
						<br />
						<div class="ml-auto d-flex flex-wrap align-items-start">
							<a href="#" class="btn-style2 px-4 py-1 mx-1">บุคคล</a>
							<a href="#" class="btn-style3 px-4 py-1 mx-1">ศูนย์การเรียนรู้</a>
						</div>
					</div>
					<div class="col-lg-7">
						<img src="../../public/images/img-map.png" class="--img-map" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="box-Agricultural-slide">
			<div class="container px-lg-5">
				<div class="owl-carousel px-xl-5 nav-dots-style show-dots">

					<div class="item">
						<a href="../../public/images/img3.jpg" class="img" data-fancybox="Agricultural" data-caption="">
							<img src="../../public/images/img3.jpg" alt="">
						</a>
						<div class="text">
							<div class="-pro">
								<img src="../../public/images/img-pro2.jpg" alt="">
								<div>
									<h4 class="text-line2">เครือข่ายพิพิธพัณฑ์เกษตรฯ จังหวัดจันทบุรี</h4>
									<span>นายเกษม จ่าพันดุง</span>
								</div>
							</div>
							<p class="text-line4 mb-0">“ ...เริ่มเห็นพี่น้องที่เป็นสมาชิกเครือข่าย มีรายได้จากการอนุรักษ์ดูแลทรัพยากร
								ของเขาเอง โดยแปลงให้เป็นเงิน อาจจะมีการแปรรูป หรืเอาเรื่องการท่องเที่ยว
								เข้ามาประกอบโดยน้อมนำเอาหลักเศรษฐกิจพอเพียงของพระเจ้าอยู่หัวเราทำจาก ตัวเองกระจายสู่ผู้อื่น...”</p>
						</div>
					</div>
					<div class="item">
						<a href="../../public/images/img3.jpg" class="img" data-fancybox="Agricultural" data-caption="">
							<img src="../../public/images/img3.jpg" alt="">
						</a>
						<div class="text">
							<div class="-pro">
								<img src="../../public/images/img-pro2.jpg" alt="">
								<div>
									<h4 class="text-line2">เครือข่ายพิพิธพัณฑ์เกษตรฯ จังหวัดจันทบุรี</h4>
									<span>นายเกษม จ่าพันดุง</span>
								</div>
							</div>
							<p class="text-line4 mb-0">“ ...เริ่มเห็นพี่น้องที่เป็นสมาชิกเครือข่าย มีรายได้จากการอนุรักษ์ดูแลทรัพยากร
								ของเขาเอง โดยแปลงให้เป็นเงิน อาจจะมีการแปรรูป หรืเอาเรื่องการท่องเที่ยว
								เข้ามาประกอบโดยน้อมนำเอาหลักเศรษฐกิจพอเพียงของพระเจ้าอยู่หัวเราทำจาก ตัวเองกระจายสู่ผู้อื่น...”</p>
						</div>
					</div>
					<div class="item">
						<a href="../../public/images/img3.jpg" class="img" data-fancybox="Agricultural" data-caption="">
							<img src="../../public/images/img3.jpg" alt="">
						</a>
						<div class="text">
							<div class="-pro">
								<img src="../../public/images/img-pro2.jpg" alt="">
								<div>
									<h4 class="text-line2">เครือข่ายพิพิธพัณฑ์เกษตรฯ จังหวัดจันทบุรี</h4>
									<span>นายเกษม จ่าพันดุง</span>
								</div>
							</div>
							<p class="text-line4 mb-0">“ ...เริ่มเห็นพี่น้องที่เป็นสมาชิกเครือข่าย มีรายได้จากการอนุรักษ์ดูแลทรัพยากร
								ของเขาเอง โดยแปลงให้เป็นเงิน อาจจะมีการแปรรูป หรืเอาเรื่องการท่องเที่ยว
								เข้ามาประกอบโดยน้อมนำเอาหลักเศรษฐกิจพอเพียงของพระเจ้าอยู่หัวเราทำจาก ตัวเองกระจายสู่ผู้อื่น...”</p>
						</div>
					</div>
					<div class="item">
						<a href="../../public/images/img3.jpg" class="img" data-fancybox="Agricultural" data-caption="">
							<img src="../../public/images/img3.jpg" alt="">
						</a>
						<div class="text">
							<div class="-pro">
								<img src="../../public/images/img-pro2.jpg" alt="">
								<div>
									<h4 class="text-line2">เครือข่ายพิพิธพัณฑ์เกษตรฯ จังหวัดจันทบุรี</h4>
									<span>นายเกษม จ่าพันดุง</span>
								</div>
							</div>
							<p class="text-line4 mb-0">“ ...เริ่มเห็นพี่น้องที่เป็นสมาชิกเครือข่าย มีรายได้จากการอนุรักษ์ดูแลทรัพยากร
								ของเขาเอง โดยแปลงให้เป็นเงิน อาจจะมีการแปรรูป หรืเอาเรื่องการท่องเที่ยว
								เข้ามาประกอบโดยน้อมนำเอาหลักเศรษฐกิจพอเพียงของพระเจ้าอยู่หัวเราทำจาก ตัวเองกระจายสู่ผู้อื่น...”</p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="box-News py-4">
			<div class="container">
				<div class="d-flex flex-wrap align-items-start">
					<h3 class="head mb-4">ข่าว & ประชาสัมพันธ์</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<div class="owl-carousel">
							<button class="nav-link active" id="nav1-tab" data-toggle="tab" data-target="#nav1" type="button"
								role="tab" aria-controls="nav1" aria-selected="true">
								ทั้งหมด
							</button>
							<button class="nav-link" id="nav2-tab" data-toggle="tab" data-target="#nav2" type="button" role="tab"
								aria-controls="nav2" aria-selected="false">
								ข่าว
							</button>
							<button class="nav-link" id="nav3-tab" data-toggle="tab" data-target="#nav3" type="button" role="tab"
								aria-controls="nav3" aria-selected="false">
								คณะเข้าชม
							</button>
							<button class="nav-link" id="nav4-tab" data-toggle="tab" data-target="#nav4" type="button" role="tab"
								aria-controls="nav4" aria-selected="true">
								ข่าวสื่อมวลชน
							</button>
							<button class="nav-link" id="nav5-tab" data-toggle="tab" data-target="#nav5" type="button" role="tab"
								aria-controls="nav5" aria-selected="false">
								ข่าวผู้บริหาร
							</button>
							<button class="nav-link" id="nav6-tab" data-toggle="tab" data-target="#nav6" type="button" role="tab"
								aria-controls="nav6" aria-selected="false">
								ข่าวกิจกรรมต่างๆ
							</button>
						</div>
					</div>
				</div>
				<div class="tab-content box-slide py-4">
					<div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
						<div class="owl-carousel nav-dots-style show-dots" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
							data-itemSlide-mobile="1">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>
							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img2.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											18 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">คณะเข้าชม</span>
									<h5 class="text-line2">วิถีเกษตรของพ่อ วิถีเกษตรของไทย</h5>
									<p class="text-line3">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ
										พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ
										ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
								</div>
							</a>
							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img3.jpg" alt="">
								</div>
								<div class="text">
									<div class="d-flex justify-content-between flex-wrap">
										<div class="-date">
											17 สิงหาคม 2023
										</div>
										<div class="-view">
											300
										</div>
									</div>
									<span class="-type">คณะเข้าชม</span>
									<h5 class="text-line2">นวัตกรรมของพ่อ พัฒนาเกษตรไทย</h5>
									<p class="text-line3">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ
										พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี
										โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน ไตรราชวิทยา จ.พระนครศรีอยุธยา
										เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
								</div>
							</a>
							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav5" role="tabpanel" aria-labelledby="nav5-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
					<div class="tab-pane fade" id="nav6" role="tabpanel" aria-labelledby="nav6-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<a href="../news/detail.php" class="item">
								<div class="img">
									<img src="../../public/images/news/img1.jpg" alt="">
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
									<span class="-type">ข่าวผู้บริหาร</span>
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ
										ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล
										ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี
										สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="box-museum">
			<div class="container">
				<h3 class="text-white head text-center mb-5">พิพิธภัณฑ์<br>แห่งการเรียนรู้เกษตรเศรษฐกิจพอเพียง</h3>
				<div class="row">
					<div class="col-md-6 col-lg-3">
						<img src="../../public/images/museum/img1.jpg" alt="" class="--img">
						<p>เผยแพร่ พระเกียรติคุณ และ พระอัจฉริยภาพด้านการเกษตร ของพระมหากษัตริย์ไทย และพระบรม วงศานุวงศ์</p>
					</div>
					<div class="col-md-6 col-lg-3">
						<img src="../../public/images/museum/img2.jpg" alt="" class="--img">
						<p>สืบสาน รักษา ต่อยอด หลักปรัชญา ของเศรษฐกิจพอเพียงด้านการเกษตร</p>
					</div>
					<div class="col-md-6 col-lg-3">
						<img src="../../public/images/museum/img3.jpg" alt="" class="--img">
						<p>บริหารจัดการองค์กรให้เป็นพิพิธภัณฑ์ แห่งการเรียนรู้หลักปรัชญาของเศรษฐกิจพอเพียงของประเทศ</p>
					</div>
					<div class="col-md-6 col-lg-3">
						<img src="../../public/images/museum/img4.jpg" alt="" class="--img">
						<p>ส่งเสริม สนับสนุน เครือข่ายและ ภาคีความ ร่วมมือในการขับเคลื่อนหลัก ปรัชญาของ เศรษฐกิจพอเพียง ด้านการเกษตร
						</p>
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
	<script type="text/javascript" src="../../public/js/custom_calendar.js"></script>
</body>

</html>