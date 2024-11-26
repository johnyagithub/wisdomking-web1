$(document).ready(function () {
  groupChoose1();
  groupChoose3();
  submitForm1();
  submitForm2();
  participantTypes();

  // เช็คค่า ค่าอาหารว่าง
  $('#Snack_cost').on('change', function () {
    const isChecked = $(this).is(':checked');
    $('#box-Snack_cost').toggleClass('disabled', isChecked);
    $('#form-course2 .form-control').val(isChecked ? '' : null).prop('disabled', isChecked).trigger('change');
  });

  // เช็คค่า switch_food
  $('#switch_food').on('change', function () {
    const isChecked = $(this).is(':checked');
    $('#box-switch_food').toggleClass('disabled', isChecked);
    $('#box-switch_food').removeClass('has-error');
    $('#box-switch_food .box-form-check input').val('').prop('disabled', true);
  });

  // เช็คค่า input_food
  $('#form-course2 [name="input_food"]').on('change', function () {
    const isChecked = $(this).is(':checked');
    // ลบ required ออกจาก input_foodMenu และ input_foodQuantity ทั้งหมด
    // $('#form-course2 [name="input_foodMenu"]').prop('checked', false);
    // $('#form-course2 [name="input_foodQuantity"]').prop('disabled', false).val('');

    $('#box-switch_food .box-form-check input').prop('disabled', false);
    $(this).closest('.form-check').find('.box-form-check input').prop('disabled', isChecked);
  });

});

// ฟังก์ชันจัดการการเลือกในกลุ่มที่ต้อง 1 ข้อ (group-choose1)
let groupChoose1 = () => {
  $(".group-choose1").each(function () {
    $(this).find('.form-check-input[type="checkbox"]').on('change', function () {
      // ยกเลิกการเลือก checkbox อื่นในกลุ่มเดียวกัน
      $(this).closest(".group-choose1").find('.form-check-input[type="checkbox"]').not(this).prop('checked', false);

      const $group = $(this).closest(".group-choose1");
      if ($group.find('.form-check-input:checked').length > 0) {
        // ถ้ามีการเลือก ลบ error และ required
        $group.removeClass('has-error').find('.form-check-input').prop('required', false);
      } else {
        // ถ้าไม่มีการเลือก เพิ่ม error และ required
        $group.addClass('has-error').find('.form-check-input').prop('required', true);
      }
    });
  });
}

// ฟังก์ชันจัดการการเลือกในกลุ่มที่ต้อง 3 ข้อ (group-choose3)
let groupChoose3 = () => {
  $(".group-choose3 .form-check-input[type='checkbox']").on('change', function () {
    setTimeout(() => {
      const $currentRow = $(this).closest('.row');
      const selectedCount = $currentRow.find(".form-check-input:checked").length;

      if (selectedCount >= 3) {
        // ถ้าเลือกครบ 3 ตัวให้ปิดการเลือก checkbox อื่นๆ
        $currentRow.find('.form-check-input:not(:checked)').prop('disabled', true);
        $(".group-choose3").removeClass('has-error').find(".form-check-input").prop('required', false);
      } else {
        // ถ้าไม่ครบ 3 ตัว เปิดให้เลือกใหม่
        $currentRow.find('.form-check-input').prop('disabled', false);
        $currentRow.find(".form-check-input").prop('required', true);
      }

      // ยกเลิกการเลือก checkbox ใน row อื่นๆ
      $(".group-choose3 .row").not($currentRow).find('.form-check-input:checked').prop('checked', false);
      $(".group-choose3 .row").not($currentRow).find('.form-check-input').prop('disabled', false);
    }, 0);
  });
}

// ฟังก์ชันตรวจสอบและส่งฟอร์มสำหรับฟอร์มแรก
let submitForm1 = () => {
  $("#form-course .box-form-course .form-check-input").prop('required', true); // ตั้งค่า required ให้กับ checkbox
  $(document).on("submit", "#form-course", function (e) {
    let isValid = true; // ตัวแปรเช็คความถูกต้องของฟอร์ม
    $("#form-course [class*=group-choose]").each(function () {
      const $group = $(this);
      const hasUnselectedRequired = $group.find('.form-check-input:required').length > 0;

      if (hasUnselectedRequired) {
        isValid = false; // ถ้ามีกลุ่มที่ยังไม่ได้เลือก จะไม่ให้ submit
        $group.addClass("has-error");
        scrollToFirstError(); // เลื่อนไปยังข้อผิดพลาดแรก
      } else {
        $group.removeClass("has-error");
      }
    });

    if (!isValid) {
      e.preventDefault(); // ป้องกันการ submit ถ้าฟอร์มไม่ถูกต้อง
    } else {
      e.preventDefault();
      $('#join-project').attr('data-status', '3');
      scrollToTop(); // เลื่อนไปด้านบน
      checkboxToForm3(); // ย้ายไปฟอร์มสุดท้าย
    }
  });
}

// ฟังก์ชันตรวจสอบและส่งฟอร์มสำหรับฟอร์มที่สอง
let submitForm2 = () => {
  // $("#form-course2 .form-check > input[type=checkbox]").prop('required', true); // ตั้งค่า required ให้กับ checkbox
  $(document).on("submit", "#form-course2", function (e) {
    e.preventDefault();
      $('#join-project').attr('data-status', '4');
      scrollToTop();

    // var formData = $(this).serializeArray();
    // // ส่งข้อมูลไปยังฟอร์มสุดท้าย
    // formData.forEach(field => {
    //   const $target = $(`#form-course3 [name="${field.name}"]`);
    //   $target.val(field.value);

    //   // ค้นหา input ที่อยู่ภายใน div ที่มีคลาส .input-width-auto และใช้ updateSpan
    //   const $inputWithAuto = $(`#form-course3 .input-width-auto [name="${field.name}"]`);
    //   updateSpan($inputWithAuto, field.value); // ใช้ฟังก์ชัน updateSpan กับ input ที่อยู่ภายใน .input-width-auto
    // });

    // // ตรวจสอบประเภทผู้เข้าร่วม แสดงเฉพาะ ที่เลือก
    // for (let i = 1; i <= 4; i++) {
    //   const isChecked = $(`#form-course2 input[name="input_participantTypes${i}"]`).is(':checked');
    //   $(`#form-course3 li:has(input[name="input_participantTypes${i}"])`).toggle(isChecked);
    // }

    // // ไม่รับอาหารว่าง
    // if ($('#Snack_cost').is(':checked')) {
    //   $('#form-course3 [name="input_snackCost"]').val('ไม่รับ');
    //   updateSpan($('#form-course3 .input-width-auto [name="input_snackCost"]'), 'ไม่รับ');
    //   $('#form-course3 [name="input_snackCostQuantity"]').val(0);
    //   updateSpan($('#form-course3 .input-width-auto [name="input_snackCostQuantity"]'), 0);
    // }

    // // ไม่รับอาหาร
    // if ($('#switch_food').is(':checked')) {
    //   $('#form-course3 [name="input_food"], #form-course3 [name="input_foodMenu"]').val('ไม่รับ');
    //   updateSpan($('#form-course3 .input-width-auto [name="input_food"], #form-course3 .input-width-auto [name="input_foodMenu"]'), 'ไม่รับ');
    //   $('#form-course3 [name="input_foodQuantity"]').val(0);
    //   updateSpan($('#form-course3 .input-width-auto [name="input_foodQuantity"]'), 0);
    // } else {
    //   // ยังไม่เลือกเมนูอาหาร
    //   const radioGroup = $('#form-course2 input[name="input_foodMenu"]:checked');
    //   if (radioGroup.length == 0) {
    //     $('#join-project').attr('data-status', '3');
    //     alert("กรุณาเลือกเมนูอาหาร");
    //     ScrollTop('#' + $('#form-course2 [name="input_food"]:checked').attr('id'));
    //   }
    // }
  });
}

// ฟังก์ชันเลื่อนไปยังตำแหน่งบนสุดของฟอร์ม
let scrollToTop = () => {
  ScrollTop('#join-project');
  $('body').addClass("down");
}

// ฟังก์ชันเลื่อนไปยังข้อผิดพลาดแรก
const scrollToFirstError = () => {
  const $firstErrorElement = $('.has-error').first();
  if ($firstErrorElement.length) {
    $('html, body').animate({
      scrollTop: $firstErrorElement.offset().top - 100
    }, 100); // เลื่อนภายใน 100ms
  }
};

// ฟังก์ชันสำหรับตรวจสอบและสร้าง <span> ถ้าไม่มี, ทำงานเฉพาะกับ input ที่มี .input-width-auto
function updateSpan($element, value) {
  const $parent = $element.closest('.input-width-auto'); // ตรวจสอบว่า input อยู่ภายใน div .input-width-auto
  if ($parent.length) { // ถ้า input อยู่ภายใน .input-width-auto
    let $span = $element.next('span');
    if (!$span.length) {
      $element.after(`<span>${value}</span>`);
      $span = $element.next('span');
    }
    $span.text(value);
  }
}

const checkboxToForm3 = () => {
  const Form = $('#form-course'), FormTo = $('#form-course3'); // กำหนดตัวแปรสำหรับฟอร์มต้นทางและฟอร์มปลายทาง
  FormTo.find('[name^="input_head"]').val(''); // ล้างค่าของ input และ textarea ในฟอร์มปลายทาง
  const selectedMuseums = {}; // เก็บข้อมูลสำหรับ input_head3

  // วนลูป checkbox ที่ถูกเลือก
  Form.find('.form-check-input[type="checkbox"]:checked').each(function () {
    const group = $(this).closest('[data-type]').data('type'); // ดึงประเภทของ group (input_head1, input_head2, input_head3)
    const head = $(this).closest('.--group').find('.head-group').text().trim(); // หัวข้อของกลุ่ม
    const value = $(this).next('label').text().trim(); // ค่าของ checkbox (ข้อความจาก label)
    const text = `${value}${head ? ` (${head})` : ''}`; // จัดรูปแบบข้อความสำหรับ input_head1 หรือ input_head2

    // ตรวจสอบว่าข้อมูลเป็นของ input_head3 หรือมี checkbox หลายตัวในกลุ่ม
    group === 'input_head3' || $(this).closest('.--group').find('.form-check-input:checked').length > 1
      ? (selectedMuseums[head] ||= []).push(` • ${value}`) // ถ้าเป็น input_head3 หรือมีหลายค่าในกลุ่ม ให้เก็บใน selectedMuseums
      : updateSpan2(FormTo.find(`input[name='${group}']`).val(text), text); // ถ้าไม่ใช่ ให้ใส่ค่าใน input และอัปเดต <span>
  });

  // จัดการค่าใน input_head3 (textarea)
  const input_head3Text = Object.entries(selectedMuseums) // แปลง selectedMuseums เป็นข้อความที่ต้องแสดง
    .map(([h, v]) => `${h}\n${v.join("\n")}`) // สำหรับ textarea ใช้ `\n` แทนการขึ้นบรรทัดใหม่
    .join("\n\n");
  updateSpan2(
    FormTo.find("textarea[name='input_head3']").val(input_head3Text), // ใส่ค่าใน textarea
    Object.entries(selectedMuseums) // สำหรับ <span> ใช้ `<br>` แทนการขึ้นบรรทัดใหม่
      .map(([h, v]) => `${h}<br>${v.join("<br>")}`)
      .join("<br><br>")
  );

  // ฟังก์ชันอัปเดต/เพิ่ม <span> ถัดจาก <input> หรือ <textarea>
  function updateSpan2($input, text) {
    const $span = $input.next('span'); // หาส่วน <span> ถัดจาก input
    $span.length ? $span.html(text) : $input.after(`<span>${text}</span>`); // ถ้ามี <span> อยู่แล้วให้แก้ไข ถ้าไม่มีก็เพิ่มใหม่
  }
};

const participantTypes = () => {
  // เช็คค่า ประเภทผู้เข้าร่วม*
  // const Checkbox = $('#form-course2 [name^="input_participantTypes"]');
  // Checkbox.on('change', function () {
  //   // เช็คว่า checkbox ถูกเลือกหรือไม่
  //   Checkbox.prop('required', !Checkbox.filter(':checked').length);
  //   const isChecked = $(this).is(':checked');
  //   // ปรับค่าและการตั้งค่า required สำหรับ element ถัดไปที่เกี่ยวข้อง
  //   $(this).closest('.form-check').find('.box-form-check select').val('').prop('required', isChecked).trigger('change');
  //   // ปรับ required ของ input[name^="input_Quantity"]
  //   $(this).closest('.form-check').find('.box-form-check input[name^="input_Quantity"]').prop('required', isChecked).val('');
  // });
};
