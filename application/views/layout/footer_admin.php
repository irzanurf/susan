</div>
<!--inner block end here-->
<!--copy rights start here-->
<hr>
<div class="copyrights">
    <p>© 2022 Universitas Diponegoro. All Rights Reserved</p>
</div>
<!--COPY rights end here-->
</div>
</div>
<?php $this->load->view('layout/sidemenu_admin'); ?>
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
    if (toggle) {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({
            "position": "absolute"
        });
    } else {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
            $("#menu span").css({
                "position": "relative"
            });
        }, 400);
    }
    toggle = !toggle;
});
</script>
<script>
CKEDITOR.replace('judul');
CKEDITOR.replace('tentang');
CKEDITOR.replace('editor-mengingat');
CKEDITOR.replace('editor-menimbang');
CKEDITOR.replace('editor-menetapkan');
</script>
<!--scrolling js-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="<?= base_url('assets/main/js/jquery.nicescroll.js');?>"></script>
<script src="<?= base_url('assets/main/js/scripts.js');?>"></script>
<!--//scrolling js-->
<script src="<?= base_url('assets/main/js/bootstrap.js');?>"> </script>
<!-- <script src="js/wysihtml5-0.3.0.js"></script> -->
<!-- mother grid end here-->
<script src="//cdn.ckeditor.com/4.17.2/basic/ckeditor.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js">
</script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "deferRender": true,
        "processing": true,
    });
});
</script>
</body>

</html>