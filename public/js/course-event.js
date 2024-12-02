$(document).ready(function () {
  submitForm2();
  participantTypes();

  // เช็คค่า ประเภทผู้เข้าร่วม*
  $("#form-course2 [name^=input_participantTypes]").on("change", function () {
    if($(this).is(":checked")) {
      $('#form-course3 [data-type="'+$(this).attr('id')+'"]').show()
    }else{
      $('#form-course3 [data-type="'+$(this).attr('id')+'"]').hide()
      $('#form-course3 [data-type="'+$(this).attr('id')+'"] input').val('');
    }
  });

  // เช็คค่า ค่าอาหารว่าง
  $("#Snack_cost").on("change", function () {
    const isChecked = $(this).is(":checked");
    $("#box-Snack_cost").toggleClass("disabled", isChecked);
    $("#box-Snack_cost .form-control")
      .val(isChecked ? "" : null)
      .prop("disabled", isChecked)
      .trigger("change");
  });

  // เช็คค่า switch_food
  $("#switch_food").on("change", function () {
    const isChecked = $(this).is(":checked");
    $("#box-switch_food")
      .toggleClass("disabled", isChecked)
      .removeClass("has-error")
      .find(".box-form-check input")
      .prop("disabled", true)
      .prop("checked", false)
      .filter('[type="number"]')
      .val("");
    $("#form-course2 #box-switch_food>.form-check>.form-check-input")
      .prop("checked", false)
      .prop("disabled", isChecked);
  });

  // เช็คค่า input_food
  $("#form-course2 #box-switch_food>.form-check>.form-check-input").on(
    "change",
    function () {
      const isChecked = $(this).is(":checked");
      // ลบ disabled ออกจาก input_foodMenu และ input_foodQuantity ทั้งหมด
      $('#form-course2 [name^="input_foodMenu"]').prop("checked", false);
      $('#form-course2 [name="input_foodQuantity"]')
        .prop("disabled", false)
        .val("");
      $(this)
        .closest(".form-check")
        .find(".box-form-check input")
        .prop("disabled", !isChecked)
        .prop("checked", false)
        .filter('[type="number"]')
        .val("");
      $("#box-switch_food").removeClass("has-error");
    }
  );

    // เช็คค่า ค่าอาหารว่าง
    // $("#form-course2 #box-switch_food>.form-check>.form-check-input").on("change", function () {
    //   if($(this).is(":checked")) {
    //     $('#form-course3 [data-type="'+$(this).attr('id')+'"]').show()
    //   }else{
    //     $('#form-course3 [data-type="'+$(this).attr('id')+'"]').hide()
    //     $('#form-course3 [data-type="'+$(this).attr('id')+'"] input').val('');
    //   }
    // });
});

// ฟังก์ชันตรวจสอบและส่งฟอร์มสำหรับฟอร์มที่สอง
let submitForm2 = () => {
  $(document).on("submit", "#form-course2", function (e) {
    e.preventDefault();

    var isValid = true;
    $(".templatingSelect2[required]:not([disabled])").each(function () {
      var $select = $(this);
      var selectedValue = $select.val();
      if (selectedValue === "" || selectedValue === null) {
        $select.next(".select2").addClass("is-invalid");
        isValid = false;
      } else {
        $select.next(".select2").removeClass("is-invalid");
      }
    });

    // ไม่รับอาหารว่าง
    if ($("#Snack_cost").is(":checked")) {
      $('#form-course3 [name="input_snackCost"]').val("ไม่รับ");
      updateSpan(
        $('#form-course3 .input-width-auto [name="input_snackCost"]'),
        "ไม่รับ"
      );
      $('#form-course3 [name="input_snackCostQuantity"]').val(0);
      updateSpan(
        $('#form-course3 .input-width-auto [name="input_snackCostQuantity"]'),
        0
      );
    }

    // ไม่รับอาหาร
    if ($("#switch_food").is(":checked")) {
      $("#inputFood").show().text("ไม่รับ").find("+ol").hide();
      $('#form-course3 [name^="input_foodQuantity"]').val(0);
      updateSpan(
        $('#form-course3 .input-width-auto [name^="input_foodQuantity"]'),
        ""
      );
    } else {
      $("#inputFood").hide().text("").find("+ol").show();
      if (
        $(
          "#form-course2 #box-switch_food>.form-check>.form-check-input:not([disabled]):checked"
        ).length == 0
      ) {
        ScrollTop("#box-switch_food");
        $("#box-switch_food").addClass("has-error");
        isValid = false;
      } else {
        if (
          $('#form-course2 [name^="input_foodMenu"]:not(disabled):checked')
            .length == 0
        ) {
          alert("กรุณาเลือกเมนูอาหาร");
          ScrollTop("#box-switch_food");
          isValid = false;
        }
      }
    }

    if (isValid) {
      $("#join-project .box-status").attr("data-status", "4");
      scrollToTop();

      var formData = $(this).serializeArray();
      // ส่งข้อมูลไปยังฟอร์มสุดท้าย
      formData.forEach((field) => {
        const $target = $(`#form-course3 [name="${field.name}"]`);
        $target.val(field.value);

        // ค้นหา input ที่อยู่ภายใน div ที่มีคลาส .input-width-auto และใช้ updateSpan
        const $inputWithAuto = $(
          `#form-course3 .input-width-auto [name="${field.name}"]`
        );
        updateSpan($inputWithAuto, field.value); // ใช้ฟังก์ชัน updateSpan กับ input ที่อยู่ภายใน .input-width-auto
      });
    }
  });
};

// ฟังก์ชันเลื่อนไปยังตำแหน่งบนสุดของฟอร์ม
let scrollToTop = () => {
  setTimeout(function () {
    ScrollTop("#join-project");
    $("body").addClass("down");
  }, 1000);
};

// ฟังก์ชันสำหรับตรวจสอบและสร้าง <span> ถ้าไม่มี, ทำงานเฉพาะกับ input ที่มี .input-width-auto
function updateSpan($element, value) {
  const $parent = $element.closest(".input-width-auto"); // ตรวจสอบว่า input อยู่ภายใน div .input-width-auto
  if ($parent.length) {
    // ถ้า input อยู่ภายใน .input-width-auto
    let $span = $element.next("span");
    if (!$span.length) {
      $element.after(`<span>${value}</span>`);
      $span = $element.next("span");
    }
    $span.text(value);
  }
}

const participantTypes = () => {
  // เช็คค่า ประเภทผู้เข้าร่วม*
  const Checkbox = $('#form-course2 [name^="input_participantTypes"]');
  Checkbox.on("change", function () {
    // เช็คว่า checkbox ถูกเลือกหรือไม่
    Checkbox.prop("required", !Checkbox.filter(":checked").length);
    const isChecked = $(this).is(":checked");
    // ปรับค่าและการตั้งค่า required สำหรับ element ถัดไปที่เกี่ยวข้อง
    $(this)
      .closest(".form-check")
      .find(".box-form-check select")
      .val("")
      .prop("disabled", !isChecked)
      .trigger("change");
    $(this)
      .closest(".form-check")
      .find(".box-form-check .form-control")
      .prop("disabled", !isChecked)
      .prop("required", isChecked)
      .val("");
  });
};

function updateTotal(Quantity, menQuantity, femaleQuantity) {
  // เมื่อมีการเปลี่ยนค่าในช่องเพศชายหรือเพศหญิง
  $("#" + menQuantity + ", #" + femaleQuantity).on("change", function () {
    const menValue = parseInt($("#" + menQuantity).val()) || 0; // ดึงค่าจากช่องเพศชาย
    const femaleValue = parseInt($("#" + femaleQuantity).val()) || 0; // ดึงค่าจากช่องเพศหญิง

    // คำนวณผลรวมและใส่ค่าในช่องจำนวน
    $("#" + Quantity).val(menValue + femaleValue);
  });
}
