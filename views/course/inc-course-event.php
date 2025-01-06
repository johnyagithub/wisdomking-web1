<script>
  // วันที่มีข้อมูล
  // หมายเหตุ red = เต็ม , orange = น้อยกว่า 50% , green = มากกว่า 50%
  window.invalidDate = [
    { date: new Date("2025-1-20").toDateString(), morning: {number: 8, color: 'orange'}, evening: {number: 20, color: 'green'} },
    { date: new Date("2025-1-30").toDateString(), morning: {number: 50, color: 'red'}, evening: {number: 18, color: 'orange'} },
    { date: new Date("2025-2-21").toDateString(), morning: {number: 5, color: 'orange'}, evening: {number: 40, color: 'red'} },
    { date: new Date("2025-2-22").toDateString(), morning: {number: 35, color: 'green'}, evening: {number: 10, color: 'green'} },
    { date: new Date("2025-2-24").toDateString(), morning: {number: 17, color: 'orange'}, evening: {number: 29, color: 'green'} },
    { date: new Date("2025-2-25").toDateString(), morning: {number: 28, color: 'green'}, evening: {number: 4, color: 'green'} },
    { date: new Date("2025-2-26").toDateString(), evening: {number: 24, color: 'green'} },
    { date: new Date("2025-2-27").toDateString(), morning: {number: 5, color: 'orange'} },
    { date: new Date("2025-2-28").toDateString(), morning: {number: 1, color: 'orange'}, evening: {number: 12, color: 'green'} },
  ];
</script>

<div class="mx-auto" style="max-width: 1000px;">
  <h4 class="head mb-4 text-center">โครงการส่งเสริมการเรียนรู้เกษตรเศรษฐกิจพอเพียง</h4>
  <p class="text-center">กิจกรรมการเรียนรู้เกษตรเศรษฐกิจพอเพียง สำหรับนักเรียน นักศึกษา หรือหน่วยงานต่างๆ
    กระบวนการเรียนรู้เกษตรเศรษฐกิจพอเพียงที่มุ่งเน้นผู้เรียนเป็นสำคัญ
    สัมผัสประสบการณ์ สุข สนุก เรียนรู้ชัด ปฏิบัติได้จริง
    เพื่อให้เกิดความเข้าใจและสนุกกับกิจกรรมการเรียนรู้ตามหลักปรัชญาของเศรษฐกิจพอเพียง ในรูปแบบทัศนศึกษา
    และค่ายการเรียนรู้ตั้งแต่ 2 ชั่วโมง 3 ชั่วโมง 5 ชั่วโมง 2 วัน 1 คืน และ 3 วัน 2 คืน ครบจบในที่เดียว “One
    stop service”</p>
  <div class="list-download">
    <div class="list justify-content-center">
      <h6>โครงการส่งเสริมการเรียนรู้เกษตรเศรษฐกิจพอเพียง</h6>
      <a class="btn btn-style ml-0" href="#" download>ดาวน์โหลดใบสมัครเข้าร่วม</a>
    </div>
  </div>
</div>
<div class="box-calendar-style">
  <h5 class="text-center">วันที่เข้าร่วมหลักสูตร</h5>
  <div class="dateParent" data-click="doNot">
    <input type="hidden" id="datepicker" value="" readonly>
  </div>

  <div class="box-note">
    <b class="mr-1">หมายเหตุ : </b>คลิกที่วันเพื่อแสดงกิจกรรมต่างๆ ที่มีในวันนั้น
    <ul class="-note">
      <li>เต็ม</li>
      <li>น้อยกว่า 50%</li>
      <li>มากกว่า 50%</li>
    </ul>
  </div>
</div>

<!--  begin popup -->
<div id="popup" style="display: none;width: 550px;">
  <div class="-popup">
    <h4 class="text-gradient my-3">จำนวนผู้จองการเข้าชม</h4>
    <h5 class="my-3">
      ช่วง <span class="--time"></span> ของวันที่ <span class="--day"></span><br>
      <!-- จำนวน <span class="--quantity"></span> ท่าน -->
    </h5>
    <div class="box-list-popup">
      <div class="-list-popup" data-color="orange">
        <h6>หลักสูตร : ตามรอยพ่อ</h6>
        <div class="-b-amount">
          <span class="border-right text-secondary">จำนวน 10 ท่าน</span>
          <span class="text-secondary">ว่าง 20 ท่าน</span>
        </div>
      </div>
      <div class="-list-popup" data-color="green">
        <h6>หลักสูตร : B</h6>
        <div class="-b-amount">
          <span class="border-right text-secondary">จำนวน 0 ท่าน</span>
          <span class="text-secondary">ว่าง 30 ท่าน</span>
        </div>
      </div>
      <div class="-list-popup" data-color="red">
        <h6>กิจกรรม</h6>
        <div class="-b-amount">
          <span class="border-right text-secondary">จำนวน 50 ท่าน</span>
          <span class="text-secondary">ว่าง 0 ท่าน</span>
        </div>
      </div>
    </div>
    <button type="button" data-fancybox-close="" class="btn btn-style d-block mx-auto mt-4 mb-3"
      style="width: 230px;">ตกลง</button>
  </div>
</div>
<!-- end popup -->