<!-- ================== BEGIN BASE JS ================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/script.js"></script>
<script src="../../plugins/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!-- owl.carousel -->
<script type="text/javascript" src="../../plugins/owlcarousel/owl.carousel.js"></script>
<!-- fancybox3 -->
<script src="../../plugins/fancyBox3/dist/jquery.fancybox.min.js"></script>
<!-- datepicker -->
<script type="text/javascript">
  var datefield = document.createElement("input")
  datefield.setAttribute("type", "date")
  if (datefield.type != "date") { //if browser doesn't support input type="date", load files for jQuery UI Date Picker
    document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
  }
  if (datefield.type != "date") { //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($) { //on document.ready
      $('input[type="date"]').datepicker({
        dateFormat: 'dd/mm/yy'
      });
    })
  }
</script>