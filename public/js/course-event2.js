$(document).ready(function () {

  groupChoose1();
  groupChoose3();
  submitForm1();
  submitForm2();

  $("#form-course2 input[name='input_food']").on('change', function () {
    $('#form-course2 .form-check').each(function () {
      const isChecked = $(this).find('input[name="input_food"]').is(':checked');
      const foodQuantityInput = $(this).find('input[name="input_foodQuantity"]');

      if (isChecked) {
        // ถ้าถูกเลือก ให้คง input[name='input_foodQuantity']
        if (foodQuantityInput.length === 0) {
          const div = $(this).find('div[name="input_foodQuantity"]');
          div.replaceWith(`<input type="text" name="input_foodQuantity" class="form-control" required>`);
        }
      } else {
        $('input[name="input_foodMenu"]').prop('checked', false);
        // ถ้าไม่ถูกเลือก ให้เปลี่ยน input[name='input_foodQuantity'] เป็น div
        if (foodQuantityInput.length > 0) {
          foodQuantityInput.replaceWith(`<div name="input_foodQuantity">${foodQuantityInput.val()}</div>`);
        }
      }
    });
  });

});

let groupChoose1 = () => {
  $(".group-choose1").each(function () {
    $(this).find('.form-check-input[type="checkbox"]').on('change', function () {
      // ยกเลิกการเลือก checkbox อื่นในกลุ่มเดียวกัน
      $(this).closest(".group-choose1")
        .find('.form-check-input[type="checkbox"]')
        .not(this)
        .prop('checked', false);

      // ตรวจสอบว่ามี checkbox ใดในกลุ่มถูกเลือกหรือไม่
      var $group = $(this).closest(".group-choose1");
      if ($group.find('.form-check-input:checked').length > 0) {
        $group.removeClass('has-error').find('.form-check-input').prop('required', false); // ลบ required เมื่อมีการเลือก
      } else {
        $group.addClass('has-error').find('.form-check-input').prop('required', true); // เพิ่ม required เมื่อไม่มีการเลือก
      }
    });
  });
}

let groupChoose3 = () => {
  $(".group-choose3 .form-check-input[type='checkbox']").on('change', function () {
    setTimeout(() => {
      // ค้นหา row ที่ checkbox นี้อยู่
      var $currentRow = $(this).closest('.row');

      // นับ checkbox ที่ถูกเลือกใน row ปัจจุบัน
      var selectedCount = $currentRow.find(".form-check-input:checked").length;

      // ตรวจสอบและตั้งค่า
      if (selectedCount >= 3) {
        $currentRow.find('.form-check-input:not(:checked)').prop('disabled', true); // disable checkbox อื่นใน row เดียวกัน
        $(".group-choose3").removeClass('has-error').find(".form-check-input").prop('required', false); // ลบ required ถ้ามีการเลือกแล้ว
      } else {
        $currentRow.find('.form-check-input').prop('disabled', false); // enable checkbox ทั้งหมดใน row เดียวกัน
        $currentRow.find(".form-check-input").prop('required', true); // เพิ่ม required ถ้าไม่มีการเลือก
      }

      // ยกเลิก checkbox ที่ถูกเลือกใน row อื่น
      $(".group-choose3 .row").not($currentRow).find('.form-check-input:checked').prop('checked', false);
      $(".group-choose3 .row").not($currentRow).find('.form-check-input').prop('disabled', false);
    }, 0);
  });
}

let submitForm1 = () => {
  $("#form-course .box-form-course .form-check-input").prop('required', true);
  $(document).on("submit", "#form-course", function (e) {
    let isValid = true; // ตัวแปรสถานะการตรวจสอบ
    $("#form-course [class*=group-choose]").each(function () {
      const $group = $(this); // อ้างถึงกลุ่มปัจจุบัน
      const hasUnselectedRequired = $group.find('.form-check-input:required').length > 0;

      if (hasUnselectedRequired) {
        isValid = false; // ถ้ามีกลุ่มไหน required
        $group.addClass("has-error"); // เพิ่มคลาสแสดงข้อผิดพลาด
        scrollToFirstError();
      } else {
        $group.removeClass("has-error"); // ลบคลาสข้อผิดพลาดหากเลือกแล้ว
      }
    });

    // ถ้ามีกลุ่มไหนยังไม่ได้เลือก ให้หยุดการ submit
    if (!isValid) {
      e.preventDefault(); // ป้องกันการ submit
    } else {
      e.preventDefault(); // ป้องกันการ submit
      $('#join-project').attr('data-status', '3');
      scrollToTop();
    }
  });
}

let submitForm2 = () => {
  $("#form-course2 .form-check > input[type=checkbox]").prop('required', true);
  $(document).on("submit", "#form-course2", function (e) {
    // ตรวจสอบว่ามี radio ที่ถูกเลือกหรือไม่
    if (!$('#form-course2 input[name="input_foodMenu"]:checked').length) {
      $('#form-course2 .box-form-course .box-form-check > label').addClass('has-error');
      ScrollTop('#input_food-1');
      event.preventDefault(); // ป้องกันการส่งฟอร์ม
    } else {
      event.preventDefault(); // ป้องกันการส่งฟอร์ม
      $('#join-project').attr('data-status', '4');
      scrollToTop();
      var formData = $(this).serializeArray();

      // ใส่ค่าลงในฟอร์ม #form-course2
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

  $('#form-course2 input[name="input_foodMenu"]').on('change', function () {
    $('#form-course2 .box-form-course .box-form-check > label').removeClass('has-error');
  });
}

let scrollToTop = () => {
  ScrollTop('#join-project'); // เลื่อนไปด้านบน
  $('body').addClass("down");
}

const scrollToFirstError = () => {
  const $firstErrorElement = $('.has-error').first();

  if ($firstErrorElement.length) {
    // เลื่อนไปที่ตำแหน่งขององค์ประกอบ .has-error อันแรก
    $('html, body').animate({
      scrollTop: $firstErrorElement.offset().top - 100 // เลื่อนขึ้นเล็กน้อยเพื่อให้เห็นชัด
    }, 100); // ใช้เวลา 500ms ในการเลื่อน
  }
};
