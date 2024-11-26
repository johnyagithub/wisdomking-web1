<form id="form-course2" class="my-4">
  <div class="box-form-course">
    <div class="form-container">
      <!-- <div class="form-group">
        <label for="input_Agency">ชื่อ (หน่วยงาน/สถาบันการศึกษา)*</label>
        <input type="text" class="form-control bg-white" name="input_Agency" id="input_Agency"
          placeholder="กรุณาระบุชื่อ" required="">
      </div>
      <div class="form-group">
        <label for="input_address">ที่อยู่*</label>
        <input type="text" class="form-control bg-white" name="input_address" id="input_address"
          placeholder="กรุณาระบุที่อยู่" required="">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">จังหวัด*</label>
          <select class="templatingSelect2" name="input_province" required>
            <option value="">กรุณาเลือกจังหวัด</option>
            <option value="usd">USD</option>
            <option value="euro">Euro</option>
            <option value="gbp">Pound</option>
            <option value="usd">USD</option>
            <option value="euro">Euro</option>
            <option value="gbp">Pound</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="input_post">ไปรษณีย์*</label>
          <input type="text" class="form-control bg-white" name="input_post" id="input_post"
            placeholder="กรุณาระบุรหัสไปรษณีย์" required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input_tel">เบอร์โทร*</label>
          <input type="tel" class="form-control bg-white" name="input_tel" id="input_tel"
            placeholder="กรุณาระบุเบอร์โทร" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input_fax">โทรสาร</label>
          <input type="text" class="form-control bg-white" name="input_fax" id="input_fax"
            placeholder="กรุณาระบุเบอร์โทรสาร">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input_date">วันที่เข้าร่วมโครงการ*</label>
          <input type="date" class="form-control bg-white minDate" name="input_date" id="input_date"
            placeholder="กรุณาระบุชื่อ" value="<?= date('Y-m-d'); ?>" min="<?= date('Y-m-d'); ?>" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="">ระยะเวลาเรียนรู้*</label>
          <select class="templatingSelect2" name="input_learningPeriod" required>
            <option value="">ช่วงเวลา.....</option>
            <option value="1 ชั่วโมง">1 ชั่วโมง</option>
            <option value="2 ชั่วโมง">2 ชั่วโมง</option>
            <option value="3 ชั่วโมง">3 ชั่วโมง</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input_nameCoordinator">ชื่อผู้ประสานงาน*</label>
          <input type="text" class="form-control bg-white" name="input_nameCoordinator" id="input_nameCoordinator"
            placeholder="กรุณาระบุชื่อผู้ประสานงาน" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input_positionCoordinator">ตำแหน่ง*</label>
          <input type="text" class="form-control bg-white" name="input_positionCoordinator"
            id="input_positionCoordinator" placeholder="กรุณาระบุตำแหน่งผู้ประสานงาน" required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input_telCoordinator">เบอร์โทรผู้ประสานงาน*</label>
          <input type="tel" class="form-control bg-white" name="input_telCoordinator" id="input_telCoordinator"
            placeholder="กรุณาระบุเบอร์โทรผู้ประสานงาน" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input_emailCoordinator">E-mail ผู้ประสานงาน*</label>
          <input type="email" class="form-control bg-white" name="input_emailCoordinator" id="input_emailCoordinator"
            placeholder="กรุณาระบุ E-mail ผู้ประสานงาน" required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-12">
          <label for="">ประเภทผู้เข้าร่วม*</label>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="นักเรียน" name="input_participantTypes1"
                id="input_participantTypes1" required="">
              <label class="form-check-label ml-1 mb-1" for="input_participantTypes1">นักเรียน</label>
              <div class="box-form-check">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">ระดับอายุ ตั้งแต่*</label>
                    <select class="templatingSelect2" name="input_ageRange1">
                      <option value="">อายุ.....</option>
                      <option value="18 - 22 ปี">18 - 22 ปี</option>
                      <option value="23 - 27 ปี">23 - 27 ปี</option>
                      <option value="18+ ปี">28+ ปี</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input_Quantity1">จำนวน*</label>
                    <input type="number" class="form-control bg-white" name="input_Quantity1" id="input_Quantity1">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="ครู/อาจารย์" name="input_participantTypes2"
                id="input_participantTypes2">
              <label class="form-check-label ml-1 mb-1" for="input_participantTypes2">ครู/อาจารย์</label>
              <div class="box-form-check">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">ระดับอายุ ตั้งแต่*</label>
                    <select class="templatingSelect2" name="input_ageRange2">
                      <option value="">อายุ.....</option>
                      <option value="18 - 22 ปี">18 - 22 ปี</option>
                      <option value="23 - 27 ปี">23 - 27 ปี</option>
                      <option value="18+ ปี">28+ ปี</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input_Quantity2">จำนวน*</label>
                    <input type="number" class="form-control bg-white" name="input_Quantity2" id="input_Quantity2">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="นักศึกษา" name="input_participantTypes3"
                id="input_participantTypes3">
              <label class="form-check-label ml-1 mb-1" for="input_participantTypes3">นักศึกษา</label>
              <div class="box-form-check">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">ระดับอายุ ตั้งแต่*</label>
                    <select class="templatingSelect2" name="input_ageRange3">
                      <option value="">อายุ.....</option>
                      <option value="18 - 22 ปี">18 - 22 ปี</option>
                      <option value="23 - 27 ปี">23 - 27 ปี</option>
                      <option value="18+ ปี">28+ ปี</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input_Quantity3">จำนวน*</label>
                    <input type="number" class="form-control bg-white" name="input_Quantity3" id="input_Quantity3">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="อื่นๆ" name="input_participantTypes4"
                id="input_participantTypes4">
              <label class="form-check-label ml-1 mb-1" for="input_participantTypes4">อื่นๆ</label>
              <div class="box-form-check">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">ระดับอายุ ตั้งแต่*</label>
                    <select class="templatingSelect2" name="input_ageRange4">
                      <option value="">อายุ.....</option>
                      <option value="18 - 22 ปี">18 - 22 ปี</option>
                      <option value="23 - 27 ปี">23 - 27 ปี</option>
                      <option value="18+ ปี">28+ ปี</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="input_Quantity4">จำนวน*</label>
                    <input type="number" class="form-control bg-white" name="input_Quantity4" id="input_Quantity4">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div
          class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
          รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span><br>
          <p class="w-100 m-0">ราคาดังกล่าวรวมค่าวิทยาการตลอดหลักสูตร, ค่าอุปกรณ์การเรียนรู้ และค่าห้องประชุม</p>
        </div>
      </div> -->

      <hr class="mt-3 mb-4">
      <!-- <div class="d-flex flex-wrap align-items-center mb-3">
        <h6 class="my-1 mr-2">ค่าอาหารว่าง</h6>
        <div class="ml-auto mb-0 d-flex align-items-center">
          <label class="switch" for="Snack_cost">
            <input type="checkbox" id="Snack_cost" checked>
            <span class="slider"></span>
          </label>
          <label class="form-check-label ml-2" for="Snack_cost">ไม่รับอาหารว่าง</label>
        </div>
      </div>
      <div id="box-Snack_cost" class="form-row disabled">
        <div class="form-group col-md-6">
          <label for="">ประเภทอาหารว่างและเครื่องดื่ม</label>
          <select class="templatingSelect2 form-control" name="input_snackCost" required>
            <option value="">กรุณาเลือกชุดอาหารว่าง</option>
            <option value="ขนมไทย + ชา,กาแฟ,โอวัลติน">ขนมไทย + ชา, กาแฟ, โอวัลติน</option>
            <option value="เบเกอรี่ + ชา, กาแฟ, โอวัลติน">เบเกอรี่ + ชา, กาแฟ, โอวัลติน</option>
            <option value="เครื่องดื่ม (น้ำสมุนไพร)">เครื่องดื่ม (น้ำสมุนไพร)</option>
            <option value="SNACK BOX">SNACK BOX</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="input_snackCostQuantity">จำนวน</label>
          <input type="number" class="form-control bg-white" name="input_snackCostQuantity"
            id="input_snackCostQuantity" required>
        </div>
        <div
          class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
          รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
        </div>
      </div> -->

      <hr class="mt-3 mb-4">
      <div class="d-flex flex-wrap align-items-center mb-3">
        <h6 class="my-1 mr-2">ค่าอาหาร</h6>
        <div class="ml-auto mb-0 d-flex align-items-center">
          <label class="switch" for="switch_food">
            <input type="checkbox" id="switch_food" checked>
            <span class="slider"></span>
          </label>
          <label class="form-check-label ml-2" for="switch_food">ไม่รับอาหาร</label>
        </div>
      </div>
      <div id="box-switch_food" class="form-group group-choose1 box-Ourmuseum disabled">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="ชุดละ 35 บาท" name="input_food" id="input_food-1" required>
          <label class="form-check-label ml-1 mb-1" for="input_food-1">ชุดละ 35 บาท</label>

          <div class="box-form-check box-slide mt-3">
            <label>เลือกเมนูอาหาร</label>
            <div class="owl-carousel nav-dots-style show-dots" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
              data-itemSlide-mobile="2">

              <div class="item" for="input_foodMenu-11">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img1.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง" name="input_foodMenu" disabled
                    id="input_foodMenu-11">
                  <label class="form-check-label mb-0" for="input_foodMenu-11">สุกี้แห้ง</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-12">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สปาเก็ตตี้ผัดขี้เมากุ้ง"
                    name="input_foodMenu" disabled id="input_foodMenu-12">
                  <label class="form-check-label mb-0" for="input_foodMenu-12">สปาเก็ตตี้ผัดขี้เมากุ้ง</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-13">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img3.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="ขนมจีนน้ำยา" name="input_foodMenu" disabled
                    id="input_foodMenu-13">
                  <label class="form-check-label mb-0" for="input_foodMenu-13">ขนมจีนน้ำยา</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-14">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง" name="input_foodMenu" disabled
                    id="input_foodMenu-14">
                  <label class="form-check-label mb-0" for="input_foodMenu-14">สุกี้แห้ง</label>
                </div>
              </div>

            </div>

            <div class="form-group">
              <label for="input_foodQuantity-1">จำนวน*</label>
              <input type="number" class="form-control bg-white" name="input_foodQuantity" id="input_foodQuantity-1"
                required="" disabled>
            </div>
            <div
              class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
              รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="ชุดละ 50 บาท" name="input_food" id="input_food-2" required>
          <label class="form-check-label ml-1 mb-1" for="input_food-2">ชุดละ 50 บาท</label>

          <div class="box-form-check box-slide mt-3">
            <label>เลือกเมนูอาหาร*</label>
            <div class="owl-carousel nav-dots-style show-dots" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
              data-itemSlide-mobile="2">

              <div class="item" for="input_foodMenu-21">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img1.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง2" name="input_foodMenu" disabled
                    id="input_foodMenu-21" required="">
                  <label class="form-check-label mb-0" for="input_foodMenu-21">สุกี้แห้ง2</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-22">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สปาเก็ตตี้ผัดขี้เมากุ้ง2"
                    name="input_foodMenu" disabled id="input_foodMenu-22">
                  <label class="form-check-label mb-0" for="input_foodMenu-22">สปาเก็ตตี้ผัดขี้เมากุ้ง2</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-23">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img3.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="ขนมจีนน้ำยา2" name="input_foodMenu" disabled
                    id="input_foodMenu-23">
                  <label class="form-check-label mb-0" for="input_foodMenu-23">ขนมจีนน้ำยา2</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-24">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง2" name="input_foodMenu" disabled
                    id="input_foodMenu-24">
                  <label class="form-check-label mb-0" for="input_foodMenu-24">สุกี้แห้ง2</label>
                </div>
              </div>

            </div>

            <div class="form-group">
              <label for="input_foodQuantity-2">จำนวน*</label>
              <input type="number" class="form-control bg-white" name="input_foodQuantity" id="input_foodQuantity-2"
                required="" disabled>
            </div>
            <div
              class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
              รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="บุฟเฟต์" name="input_food" id="input_food-3" required>
          <label class="form-check-label ml-1 mb-1" for="input_food-3">บุฟเฟต์</label>

          <div class="box-form-check box-slide mt-3">
            <label>เลือกเมนูอาหาร*</label>
            <div class="owl-carousel nav-dots-style show-dots" data-itemSlide-pc="3" data-itemSlide-Tablet="2"
              data-itemSlide-mobile="2">

              <div class="item" for="input_foodMenu-31">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img1.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง3" name="input_foodMenu" disabled
                    id="input_foodMenu-31" required="">
                  <label class="form-check-label mb-0" for="input_foodMenu-31">สุกี้แห้ง3</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-32">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สปาเก็ตตี้ผัดขี้เมากุ้ง3"
                    name="input_foodMenu" disabled id="input_foodMenu-32">
                  <label class="form-check-label mb-0" for="input_foodMenu-32">สปาเก็ตตี้ผัดขี้เมากุ้ง3</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-33">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img3.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="ขนมจีนน้ำยา3" name="input_foodMenu" disabled
                    id="input_foodMenu-33">
                  <label class="form-check-label mb-0" for="input_foodMenu-33">ขนมจีนน้ำยา3</label>
                </div>
              </div>
              <div class="item" for="input_foodMenu-34">
                <div class="img">
                  <img src="../../public/images/ourmuseum/img2.jpg" alt="">
                </div>
                <div class="text">
                  <input class="form-check-input custom-radio" type="radio" value="สุกี้แห้ง3" name="input_foodMenu" disabled
                    id="input_foodMenu-34">
                  <label class="form-check-label mb-0" for="input_foodMenu-34">สุกี้แห้ง3</label>
                </div>
              </div>

            </div>

            <div class="form-group">
              <label for="input_foodQuantity-3">จำนวน*</label>
              <input type="number" class="form-control bg-white" name="input_foodQuantity" id="input_foodQuantity-3"
                required="" disabled>
            </div>
            <div
              class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
              รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="form-row justify-content-center mt-4 border-top pt-4">
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="button" class="btn btn-light border bg-white rounded-pill w-100"
        onclick="<?= $page !== 'Asyouwish' ? "$('#join-project').attr('data-status', '2');" : "window.history.back();" ?>">ย้อนกลับ</button>
    </div>
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="submit" class="btn btn-style w-100">ดำเนินการต่อ</button>
    </div>
  </div>
</form>