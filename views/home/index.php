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
				<div class="d-flex flex-wrap">
					<h3 class="head">พิพิธภัณฑ์ของเรา</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
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
				<div class="tab-content py-4" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-Indoor" role="tabpanel" aria-labelledby="nav-Indoor-tab">
						<div class="owl-carousel nav-dots-style">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Outdoor" role="tabpanel" aria-labelledby="nav-Outdoor-tab">
						<div class="owl-carousel nav-dots-style">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img3.jpg" alt="">
								<div class="text">
									<h6 class="m-0">อาคารเฉลิมพระเกียรติฯ 3</h6>
									<h4>พิพิธภัณฑ์มหัศจรรย์พันธุกรรม</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav-Virtual" role="tabpanel" aria-labelledby="nav-Virtual-tab">
						<div class="owl-carousel nav-dots-style">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img2.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 2</h6>
									<h4>พิพิธภัณฑ์ในหลวงรักเรา</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section
			style="border-top: 1px solid #E7E7E7;height:300px;background: linear-gradient(180deg, rgba(247, 247, 247, 0) 0%, #EBEBEB 100%);">
		</section>

		<section class="box-Learning py-4">
			<div class="container">
				<div class="d-flex flex-wrap">
					<h3 class="head">ปฏิทินกิจกรรมการเรียนรู้</h3>
					<div class="ml-auto">
						<a href="#" class="btn-style2 px-3 py-1 mx-2 bg-white">ทั้งหมด</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted bg-white rounded-pill">ท่องเที่ยวสุขสันต์
							ที่พิพิธภัณฑ์เกษตรฯ</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted bg-white rounded-pill">หลักสูตรอบรมเข้มข้น</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted bg-white rounded-pill">อื่นๆ</a>
					</div>
				</div>
			</div>
		</section>

		<section class="box-Market py-4">
			<div class="container">
				<div class="row m-0">
					<h3 class="head mb-auto">มหกรรมตลาดเศรษฐกิจพอเพียง</h3>
					<p class="mx-auto col-lg px-lg-3" style="max-width: 730px;">ตลาดเศรษฐกิจพอเพียง จัดขึ้นทุกเสาร์ อาทิตย์
						สัปดาห์แรกของเดือน เป็นตลาดนัดแห่งมิตรภาพ และการแบ่งปัน เพื่อจุดประกายความคิด แลกเปลี่ยนเรียนรู้
						ภูมิปัญญานวัตกรรมเกษตร เศรษฐกิจพอเพียง</p>
				</div>
			</div>
		</section>

		<section class="py-4">
			<div class="container">
				<div class="d-flex flex-wrap">
					<h3 class="head">องค์ความรู้</h3>
					<div class="ml-auto">
						<a href="#" class="btn-style2 px-3 py-1 mx-2">
							ทั้งหมด
						</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted">
							<img src="../../public/images/moon.png" style="width: 24px;" alt="">
							บทความ
						</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted">
							<img src="../../public/images/sun.png" style="width: 24px;" alt="">
							บรรยายประกอบภาพ
						</a>
						<a href="#" class="px-3 py-1 mx-2 text-muted">
							<img src="../../public/images/reload.png" style="width: 24px;" alt="">
							บรรยายประกอบภาพ
						</a>
					</div>
				</div>
			</div>
		</section>

		<section style="border-top: 1px solid #E7E7E7height:300px"></section>
		<section style="background: linear-gradient(360deg, #EAEAEA 0%, rgba(234, 234, 234, 0) 100%);height:300px">
		</section>

		<section class="box-News py-4">
			<div class="container">
				<div class="d-flex flex-wrap">
					<h3 class="head">ข่าว & ประชาสัมพันธ์</h3>
					<div class="box-navTabs nav nav-tabs ml-auto  mb-auto" role="tablist">
						<button class="nav-link active" id="nav1-tab" data-toggle="tab" data-target="#nav1"
							type="button" role="tab" aria-controls="nav1" aria-selected="true">
							ทั้งหมด
						</button>
						<button class="nav-link" id="nav2-tab" data-toggle="tab" data-target="#nav2" type="button"
							role="tab" aria-controls="nav2" aria-selected="false">
							ข่าว
						</button>
						<button class="nav-link" id="nav3-tab" data-toggle="tab" data-target="#nav3" type="button"
							role="tab" aria-controls="nav3" aria-selected="false">
							คณะเข้าชม
						</button>
						<button class="nav-link" id="nav4-tab" data-toggle="tab" data-target="#nav4"
							type="button" role="tab" aria-controls="nav4" aria-selected="true">
							ข่าวสื่อมวลชน
						</button>
						<button class="nav-link" id="nav5-tab" data-toggle="tab" data-target="#nav5" type="button"
							role="tab" aria-controls="nav5" aria-selected="false">
							ข่าวผู้บริหาร
						</button>
						<button class="nav-link" id="nav6-tab" data-toggle="tab" data-target="#nav6" type="button"
							role="tab" aria-controls="nav6" aria-selected="false">
							ข่าวกิจกรรมต่างๆ
						</button>
					</div>
				</div>
				<div class="tab-content py-4" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
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
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
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
									<p class="text-line3">วันที่ 18 สิงหาคม 2566 สำนักงานพิพิธภัณฑ์เกษตรเฉลิม พระเกียรติ พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะ เข้าเยี่ยมชม พิพิธภัณฑ์ เพื่อ เรียนรู้พระเกียรติคุณ พระอัจ     ฉริยภาพ พระมหากษัตริย์ไทย ด้านการเกษตรโดยมีหน่วยงานเข้าร่วมเรียนรู้ ดังนี้</p>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
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
									<p class="text-line3">วันพฤหัสบดีที่ 17 สิงหาคม 2566 พิพิธภัณฑ์การเกษตรเฉลิม พระเกียรติ พระบาทสมเด็จพระเจ้าอยู่หัว ต้อนรับคณะเข้า เยี่ยมชม จากโรงเรียน อรุณประดิษฐ จ.เพชรบุรี 
									โรงเรียนเซนต์ ฟรังซีสเซเวียร์ กทม. โรงเรียน  ไตรราชวิทยา จ.พระนครศรีอยุธยา เข้าเยี่ยมชมพิพิธภัณฑ์การเกษตรฯภายใต้โครงการ</p>
								</div>
							</div>
							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
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
									<h5 class="text-line2">สำนักงานพิพิธภัณฑ์เกษตรฯ ร่วมพิธีเปิด มหกรรมวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ประจำปี 2567 (NST FAIR 2024) </h5>
									<p class="text-line3">วันที่ 17 สิงหาคม 2567 พลอากาศเอก เสนาะ พรรณพิกุล ผู้อำนวยการสำนักงานพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว มอบให้ นางสาวสาวิตรี สายโย ผู้อำนวยการสำนักพัฒนาพิพิธภัณฑ์และองค์ความรู้</p>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav5" role="tabpanel" aria-labelledby="nav5-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane fade" id="nav6" role="tabpanel" aria-labelledby="nav6-tab">
						<div class="owl-carousel nav-dots-style show-dots">

							<div class="item">
								<img src="../../public/images/ourmuseum/img1.jpg" alt="">
								<div class="text">
									<h6 class="m-0">ชั้นที่ 1</h6>
									<h4>พระราชพิธีในวิถีเกษตร</h4>
									<span><img src="../../public/images/moon.png" alt="">พิพิธภัณฑ์ในอาคาร</span>
								</div>
							</div>

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
</body>

</html>