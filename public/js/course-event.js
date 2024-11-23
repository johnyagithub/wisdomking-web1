$(document).ready(function () {
  groupChoose1();
  groupChoose3();
  submitForm1();
  submitForm2();

  // ฟังก์ชันจัดการเมื่อมีการเปลี่ยนแปลงการเลือกอาหารในฟอร์ม
  $("#form-course2 input[name='input_food']").on('change', function () {
    $('#form-course2 .form-check').each(function () {
      const isChecked = $(this).find('input[name="input_food"]').is(':checked');
      const foodQuantityInput = $(this).find('input[name="input_foodQuantity"]');

      if (isChecked) {
        if (foodQuantityInput.length === 0) {
          // เพิ่ม input field ถ้ายังไม่มี
          const div = $(this).find('div[name="input_foodQuantity"]');
          div.replaceWith(`<input type="number" name="input_foodQuantity" class="form-control" required>`);
        }
      } else {
        // หากไม่เลือก จะเปลี่ยน input_foodQuantity เป็น div
        $('input[name="input_foodMenu"]').prop('checked', false);
        if (foodQuantityInput.length > 0) {
          foodQuantityInput.replaceWith(`<div name="input_foodQuantity">${foodQuantityInput.val()}</div>`);
        }
      }
    });
  });
});

// ฟังก์ชันจัดการการเลือกในกลุ่มที่ต้อง 1 ข้อ (group-choose1)
let groupChoose1 = () => {
  $(".group-choose1").each(function () {
    $(this).find('.form-check-input[type="checkbox"]').on('change', function () {
      // ยกเลิกการเลือก checkbox อื่นในกลุ่มเดียวกัน
      $(this).closest(".group-choose1")
        .find('.form-check-input[type="checkbox"]')
        .not(this)
        .prop('checked', false);

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
  $("#form-course2 .form-check > input[type=checkbox]").prop('required', true); // ตั้งค่า required ให้กับ checkbox
  $(document).on("submit", "#form-course2", function (e) {
    if (!$('#form-course2 input[name="input_foodMenu"]:checked').length) {
      // ถ้าไม่ได้เลือกอาหาร ให้แสดงข้อผิดพลาด
      $('#form-course2 .box-form-course .box-form-check > label').addClass('has-error');
      ScrollTop('#input_food-1');
      event.preventDefault(); // ป้องกันการส่งฟอร์ม
    } else {
      event.preventDefault();
      $('#join-project').attr('data-status', '4');
      scrollToTop();

      var formData = $(this).serializeArray();
      // ส่งข้อมูลไปยังฟอร์มอสุดท้าย
      formData.forEach(field => {
        const $target = $(`#form-course3 [name="${field.name}"]`);
        $target.val(field.value);

        const $inputWithAuto = $(`#form-course3 .input-width-auto [name="${field.name}"]`);
        const $existingSpan = $inputWithAuto.next('span');
        if ($existingSpan.length) {
          $existingSpan.text(field.value);
        } else {
          $inputWithAuto.after(`<span>${field.value}</span>`);
        }
      });
    }
  });

  // ลบข้อผิดพลาดเมื่อมีการเลือกเมนูอาหาร
  $('#form-course2 input[name="input_foodMenu"]').on('change', function () {
    $('#form-course2 .box-form-course .box-form-check > label').removeClass('has-error');
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
      : updateSpan(FormTo.find(`input[name='${group}']`).val(text), text); // ถ้าไม่ใช่ ให้ใส่ค่าใน input และอัปเดต <span>
  });

  // จัดการค่าใน input_head3 (textarea)
  const input_head3Text = Object.entries(selectedMuseums) // แปลง selectedMuseums เป็นข้อความที่ต้องแสดง
    .map(([h, v]) => `${h}\n${v.join("\n")}`) // สำหรับ textarea ใช้ `\n` แทนการขึ้นบรรทัดใหม่
    .join("\n\n");
  updateSpan(
    FormTo.find("textarea[name='input_head3']").val(input_head3Text), // ใส่ค่าใน textarea
    Object.entries(selectedMuseums) // สำหรับ <span> ใช้ `<br>` แทนการขึ้นบรรทัดใหม่
      .map(([h, v]) => `${h}<br>${v.join("<br>")}`)
      .join("<br><br>")
  );

  // ฟังก์ชันอัปเดต/เพิ่ม <span> ถัดจาก <input> หรือ <textarea>
  function updateSpan($input, text) {
    const $span = $input.next('span'); // หาส่วน <span> ถัดจาก input
    $span.length ? $span.html(text) : $input.after(`<span>${text}</span>`); // ถ้ามี <span> อยู่แล้วให้แก้ไข ถ้าไม่มีก็เพิ่มใหม่
  }
};