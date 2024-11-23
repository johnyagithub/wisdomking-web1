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

      $('#form-course2 input[name="ss1"], #form-course2 input[name="ss2"], #form-course2 textarea[name="ss3"]').val('');

      ['movie', 'activity'].forEach(type => {
        $(`input[id^="${type}"]:checked`).each(function () {
          const Head = $(this).closest('.--group').find('.head-group').text();
          const checkboxValue = $(this).next('label').text();
          $(`#form-course2 input[name='ss${type === 'movie' ? 1 : 2}']`).val(`${checkboxValue}(${Head})`);
        });
      });

      const selectedMuseums = {};
      $('input[id^="museum"]:checked').each(function () {
        const Head = $(this).closest('.--group').find('.head-group').text().trim();
        const checkboxValue = $(this).next('label').text().trim();
        (selectedMuseums[Head] ||= []).push(` - ${checkboxValue}`);
      });

      $("#form-course2 textarea[name='ss3']").val(
        Object.entries(selectedMuseums)
          .map(([Head, values]) => `${Head}\n${values.join("\n")}`)
          .join("\n\n")
      );

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
