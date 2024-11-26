<form id="form-course3" action="#" class="my-4">
  <div class="box-form-course">
    <div class="form-container">
      <h5 class="text-center mb-4">สรุปรายละเอียดการจอง</h5>
      <?php if ($page !== 'Asyouwish') { ?>
        <div class="w-100">
          <h4 class="text-gradient mb-3">หลักสูตร "ตามรอยพ่อ"</h4>
          <div class="d-lg-flex">
            <b class="mr-1">ระยะเวลาเรียน :</b>
            <p>2 ชั่วโมง เวลา 09:00 - 11:00 น. หรือ เวลา 13:00 - 15:00 น.</p>
          </div>
          <div class="d-lg-flex form-group">
            <b class="mr-1">เลือกชมภาพยนตร์ 3 มิติ :</b>
            <div class="input-width-auto">
              <input type="text" name="input_head1" required="">
            </div>
          </div>
          <div class="d-lg-flex form-group">
            <b class="mr-1">เลือกกิจกรรมสร้างสรรค์ความคิด :</b>
            <div class="input-width-auto">
              <input type="text" name="input_head2" required="">
            </div>
          </div>
          <div class="d-lg-flex form-group">
            <b class="mr-1">เลือกเรียนรู้พิพิธภัณฑ์ภายในอาคาร :</b>
            <div class="input-width-auto">
              <textarea name="input_head3" required=""></textarea>
            </div>
          </div>
        </div>
        <hr class="mt-3 mb-4">
      <?php } ?>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>ชื่อ (หน่วยงาน/สถาบันการศึกษา)*</label>
          <div class="input-width-auto">
            <input type="text" name="input_Agency" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>ที่อยู่*</label>
          <div class="input-width-auto">
            <input type="text" name="input_address" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>จังหวัด*</label>
          <div class="input-width-auto">
            <input type="text" name="input_province" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>ไปรษณีย์*</label>
          <input type="text" name="input_post" required="">
        </div>
        <div class="form-group col-md-6">
          <label>เบอร์โทร*</label>
          <input type="tel" name="input_tel" required="">
        </div>
        <div class="form-group col-md-6">
          <label>โทรสาร</label>
          <input type="text" name="input_fax">
        </div>
        <div class="form-group col-md-6">
          <label>วันที่เข้าร่วมโครงการ*</label>
          <input type="text" name="input_date" required="">
        </div>
        <div class="form-group col-md-6">
          <label>ระยะเวลาเรียนรู้*</label>
          <input type="text" name="input_learningPeriod" required="">
        </div>
        <div class="form-group col-md-6">
          <label>ชื่อผู้ประสานงาน*</label>
          <div class="input-width-auto">
            <input type="text" name="input_nameCoordinator" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>ตำแหน่ง*</label>
          <div class="input-width-auto">
            <input type="text" name="input_positionCoordinator" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>เบอร์โทรผู้ประสานงาน*</label>
          <input type="text" name="input_telCoordinator" required="">
        </div>
        <div class="form-group col-md-6">
          <label>E-mail ผู้ประสานงาน*</label>
          <div class="input-width-auto">
            <input type="text" name="input_emailCoordinator" required="">
          </div>
        </div>
        <div class="form-group col-12">
          <label>ประเภทผู้เข้าร่วม*</label>
          <ol class="mb-0 pl-4">
            <!-- นักเรียน -->
            <li>
              <div class="d-flex flex-wrap">
                <div class="input-width-auto mr-2">
                  <input type="text" name="input_participantTypes1">
                </div>
                <div class="input-width-auto mr-2">
                  อายุ
                  <input type="text" name="input_ageRange1">
                </div>
                <div class="input-width-auto">
                  จำนวน
                  <input type="text" name="input_Quantity1">
                  คน
                </div>
              </div>
            </li>
            <!-- ครู/อาจารย์ -->
            <li>
              <div class="d-flex flex-wrap">
                <div class="input-width-auto mr-2">
                  <input type="text" name="input_participantTypes2">
                </div>
                <div class="input-width-auto mr-2">
                  อายุ
                  <input type="text" name="input_ageRange2">
                </div>
                <div class="input-width-auto">
                  จำนวน
                  <input type="text" name="input_Quantity2">
                  คน
                </div>
              </div>
            </li>
            <!-- นักศึกษา -->
            <li>
              <div class="d-flex flex-wrap">
                <div class="input-width-auto mr-2">
                  <input type="text" name="input_participantTypes3">
                </div>
                <div class="input-width-auto mr-2">
                  อายุ
                  <input type="text" name="input_ageRange3">
                </div>
                <div class="input-width-auto">
                  จำนวน
                  <input type="text" name="input_Quantity3">
                  คน
                </div>
              </div>
            </li>
            <!-- อื่นๆ -->
            <li>
              <div class="d-flex flex-wrap">
                <div class="input-width-auto mr-2">
                  <input type="text" name="input_participantTypes4">
                </div>
                <div class="input-width-auto mr-2">
                  อายุ
                  <input type="text" name="input_ageRange4">
                </div>
                <div class="input-width-auto">
                  จำนวน
                  <input type="text" name="input_Quantity4">
                  คน
                </div>
              </div>
            </li>
          </ol>
        </div>

        <hr class="col-12 mt-3 mb-4">
        <div class="form-group col-md-6">
          <label>อาหารว่าง</label>
          <div class="input-width-auto">
            <input type="text" name="input_snackCost" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>จำนวน</label>
          <div class="input-width-auto">
            <input type="text" name="input_snackCostQuantity" required=""> ชุด
          </div>
        </div>

        <hr class="col-12 mt-3 mb-4">
        <div class="form-group col-md-6">
          <label>ค่าอาหาร</label>
          <input type="text" name="input_food" required="">
        </div>
        <div class="form-group col-md-6">
          <label>เมนูอาหาร</label>
          <div class="input-width-auto">
            <input type="text" name="input_foodMenu" required="">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>จำนวน</label>
          <div class="input-width-auto">
            <input type="text" name="input_foodQuantity" required=""> ชุด
          </div>
        </div>

        <div
          class="bg-muted3 p-3 mt-3 w-100 rounded-lg text-center d-flex align-items-center justify-content-center flex-wrap"
          style="border: 1px dashed #DEDEDE;">
          ค่าใช้จ่ายทั้งหมด <span class="text-gradient h2 mb-0 ml-2">฿ 16,607</span><br>
          <p class="w-100 m-0">ราคาดังกล่าวรวมค่าวิทยาการตลอดหลักสูตร, ค่าอุปกรณ์การเรียนรู้ และค่าห้องประชุม</p>
        </div>
      </div>

    </div>
  </div>
  <div class="form-row justify-content-center mt-4 border-top pt-4">
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="button" class="btn btn-light border bg-white rounded-pill w-100"
        onclick="$('#join-project').attr('data-status', '3');">ย้อนกลับ</button>
    </div>
    <div class="col-6 col-md-4 col-lg-3 px-1">
      <button type="submit" class="btn btn-style w-100">ดำเนินการต่อ</button>
    </div>
  </div>
</form>