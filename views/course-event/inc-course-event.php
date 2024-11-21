<script>
  // วันที่มีข้อมูล
  window.invalidDate = [
    { date: new Date("2024-11-29").toDateString(), morning: ['a', 'b'], evening: ['a', 'b', 'c'] },
    { date: new Date("2024-11-30").toDateString(), morning: ['a', 'b'], evening: ['a'] },
    { date: new Date("2024-12-21").toDateString(), morning: ['นานา สิ', 'จอน จอน'], evening: ['a', 'b', 'c', 'd'] },
    { date: new Date("2024-12-23").toDateString(), morning: ['a', 'b'], evening: ['a'] },
    { date: new Date("2024-12-24").toDateString(), morning: ['a', 'b', 'c'], evening: ['a'] },
    { date: new Date("2024-12-25").toDateString(), morning: ['a', 'b', 'c', 'd'], evening: ['a', 'b', 'c', 'd'] },
    { date: new Date("2024-12-26").toDateString(), evening: ['a'] },
    { date: new Date("2024-12-27").toDateString(), morning: ['a'] },
    { date: new Date("2024-12-30").toDateString(), morning: ['a'], evening: ['a'] },
  ];
</script>

<div class="box-calendar-style">
  <h5 class="text-center">วันที่เข้าร่วมหลักสูตร</h5>
  <div class="dateParent" data-click="doNot">
    <input type="hidden" id="datepicker" value="" readonly>
  </div>

  <div class="box-note">
    <h6>หมายเหตุ : คลิกที่วันเพื่อแสดงกิจกรรมต่างๆ ที่มีในวันนั้น</h6>
    <ul class="-note">
      <li>เต็ม</li>
      <li>น้อยกว่า 50%</li>
      <li>มากกว่า 50%</li>
    </ul>
  </div>
</div>