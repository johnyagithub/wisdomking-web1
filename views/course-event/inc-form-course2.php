<form id="form-course2" class="my-4">
  <div class="box-form-course">
    <div class="form-container">
      <div class="form-group">
        <label for="input1">ชื่อ (หน่วยงาน/สถาบันการศึกษา)*</label>
        <input type="text" class="form-control bg-white" name="Agency" id="input1" placeholder="กรุณาระบุชื่อ"
          required="">
      </div>
      <div class="form-group">
        <label for="input2">ที่อยู่*</label>
        <input type="text" class="form-control bg-white" name="address" id="input2" placeholder="กรุณาระบุที่อยู่"
          required="">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">จังหวัด*</label>
          <select class="templatingSelect2" name="province" required>
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
          <label for="input3">ไปรษณีย์*</label>
          <input type="text" class="form-control bg-white" name="post" id="input3" placeholder="กรุณาระบุรหัสไปรษณีย์"
            required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input4">เบอร์โทร*</label>
          <input type="tel" class="form-control bg-white" name="tel" id="input4" placeholder="กรุณาระบุเบอร์โทร"
            required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input5">โทรสาร*</label>
          <input type="text" class="form-control bg-white" name="fax" id="input5" placeholder="กรุณาระบุเบอร์โทรสาร"
            required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input6">วันที่เข้าร่วมโครงการ*</label>
          <input type="date" class="form-control bg-white" name="date" id="input6" placeholder="กรุณาระบุชื่อ"
            value="<?= date('Y-m-d'); ?>" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="">ระยะเวลาเรียนรู้*</label>
          <select class="templatingSelect2" name="learningPeriod" required>
            <option value="">ช่วงเวลา.....</option>
            <option value="1 ชั่วโมง">1 ชั่วโมง</option>
            <option value="2 ชั่วโมง">2 ชั่วโมง</option>
            <option value="3 ชั่วโมง">3 ชั่วโมง</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input7">ชื่อผู้ประสานงาน*</label>
          <input type="text" class="form-control bg-white" name="nameCoordinator" id="input7"
            placeholder="กรุณาระบุชื่อผู้ประสานงาน" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input8">ตำแหน่ง*</label>
          <input type="text" class="form-control bg-white" name="positionCoordinator" id="input8"
            placeholder="กรุณาระบุตำแหน่งผู้ประสานงาน" required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="input9">เบอร์โทรผู้ประสานงาน*</label>
          <input type="tel" class="form-control bg-white" name="telCoordinator" id="input9"
            placeholder="กรุณาระบุเบอร์โทรผู้ประสานงาน" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input10">E-mail ผู้ประสานงาน*</label>
          <input type="email" class="form-control bg-white" name="emailCoordinator" id="input10"
            placeholder="กรุณาระบุ E-mail ผู้ประสานงาน" required="">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-12 group-choose1">
          <label for="">ประเภทผู้เข้าร่วม*</label>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="นักเรียน" name="participantTypes" id="type-1"
                required="">
              <label class="form-check-label ml-1 mb-1" for="type-1">นักเรียน</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="ครู/อาจารย์" name="participantTypes" id="type-2"
                required="">
              <label class="form-check-label ml-1 mb-1" for="type-2">ครู/อาจารย์</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="นักศึกษา" name="participantTypes" id="type-3"
                required="">
              <label class="form-check-label ml-1 mb-1" for="type-3">นักศึกษา</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="อื่นๆ" name="participantTypes" id="type-4"
                required="">
              <label class="form-check-label ml-1 mb-1" for="type-4">อื่นๆ</label>
            </div>
          </div>
        </div>
        <div class="form-row px-4 col-12">
          <div class="form-group col-md-4">
            <label for="">ระดับอายุ ตั้งแต่*</label>
            <select class="templatingSelect2" name="ageRange" required>
              <option value="">อายุ.....</option>
              <option value="18 - 22 ปี">18 - 22 ปี</option>
              <option value="23 - 27 ปี">23 - 27 ปี</option>
              <option value="18+ ปี">28+ ปี</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="input11">จำนวน*</label>
            <input type="number" class="form-control bg-white" name="Quantity" id="input11" required="">
          </div>
        </div>
      </div>
      <div class="form-row">
        <h6 class="col-12">เพศ*</h6>
        <div class="form-group col-md-6">
          <label for="input12">ชาย</label>
          <input type="number" class="form-control bg-white" name="menQuantity" id="input12" required="">
        </div>
        <div class="form-group col-md-6">
          <label for="input13">หญิง</label>
          <input type="number" class="form-control bg-white" name="femaleQuantity" id="input13" required="">
        </div>
        <div
          class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
          รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span><br>
          <p class="w-100 m-0">ราคาดังกล่าวรวมค่าวิทยาการตลอดหลักสูตร, ค่าอุปกรณ์การเรียนรู้ และค่าห้องประชุม</p>
        </div>
      </div>

      <hr class="mt-3 mb-4">
      <div class="form-group group-choose1">
        <label for="">ค่าอาหาร*</label>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="ชุดละ 35 บาท" name="food" id="food-1" required="">
            <label class="form-check-label ml-1 mb-1" for="food-1">ชุดละ 35 บาท</label>

            <div class="box-form-check">
              <div class="form-group">
                <label for="inputfood-1">จำนวน*</label>
                <input type="number" class="form-control bg-white" name="foodQuantity-1" id="inputfood-1">
              </div>
              <div
                class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
                รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="ชุดละ 50 บาท" name="food" id="food-2" required="">
            <label class="form-check-label ml-1 mb-1" for="food-2">ชุดละ 50 บาท</label>

            <div class="box-form-check">
              <div class="form-group">
                <label for="inputfood-2">จำนวน*</label>
                <input type="number" class="form-control bg-white" name="foodQuantity-2" id="inputfood-2">
              </div>
              <div
                class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
                รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="บุฟเฟต์" name="food" id="food-3" required="">
            <label class="form-check-label ml-1 mb-1" for="food-3">บุฟเฟต์</label>

            <div class="box-form-check">
              <div class="form-group">
                <label for="inputfood-3">จำนวน*</label>
                <input type="number" class="form-control bg-white" name="foodQuantity-3" id="inputfood-3">
              </div>
              <div
                class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
                รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr class="mt-3 mb-4">
      <div class="form-row">
        <h6 class="col-12">ค่าอาหารว่าง*</h6>
        <div class="form-group col-md-6">
          <label for="">ประเภทอาหารว่างและเครื่องดื่ม*</label>
          <select class="templatingSelect2" name="snackCost" required>
            <option value="">กรุณาเลือกชุดอาหารว่าง</option>
            <option value="ขนมไทย + ชา,กาแฟ,โอวัลติน">ขนมไทย + ชา, กาแฟ, โอวัลติน</option>
            <option value="เบเกอรี่ + ชา, กาแฟ, โอวัลติน">เบเกอรี่ + ชา, กาแฟ, โอวัลติน</option>
            <option value="เครื่องดื่ม (น้ำสมุนไพร)">เครื่องดื่ม (น้ำสมุนไพร)</option>
            <option value="SNACK BOX">SNACK BOX</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="input14">จำนวน*</label>
          <input type="number" class="form-control bg-white" name="snackCostQuantity" id="input14" required="">
        </div>
        <div
          class="bg-muted3 p-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap">
          รวมเป็นเงิน <span class="text-gradient h2 mb-0 ml-2">฿ 00</span>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row justify-content-center mt-4 border-top pt-4">
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="button" class="btn btn-light border bg-white rounded-pill w-100"
        onclick="$('#join-project').attr('data-status', '2');">ย้อนกลับ</button>
    </div>
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="submit" class="btn btn-style w-100">ดำเนินการต่อ</button>
    </div>
  </div>
</form>