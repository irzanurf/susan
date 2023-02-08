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
<?php $this->load->view('layout/sidemenu'); ?>
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
<!-- <script>
CKEDITOR.replace('judul');
CKEDITOR.replace('tentang');
CKEDITOR.replace('editor-mengingat');
CKEDITOR.replace('editor-menimbang');
CKEDITOR.replace('editor-menetapkan');
</script> -->
<!--scrolling js-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="<?= base_url('assets/main/js/jquery.nicescroll.js');?>"></script>
<script src="<?= base_url('assets/main/js/scripts.js');?>"></script>
<!--//scrolling js-->
<script src="<?= base_url('assets/main/js/bootstrap.js');?>"> </script>

<script src="<?= base_url('assets/searchable/chosen.jquery.js');?>" type="text/javascript"></script>
<script src="<?= base_url('assets/searchable/docsupport/prism.js');?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= base_url('assets/searchable/docsupport/init.js');?>" type="text/javascript" charset="utf-8"></script>
<!-- <script src="js/wysihtml5-0.3.0.js"></script> -->
<!-- mother grid end here-->
<!-- <script src="//cdn.ckeditor.com/4.17.2/basic/ckeditor.js"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
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

<?php if(empty($val_stat)) { ?>
<!-- Loading Modal-->
<div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header text-center">
            </div>
            <div class="modal-body"><img id="loading_gif" src="<?= base_url('assets/loading.gif');?>" width="100%" />
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("form").on('submit', function() {
        // e.preventDefault();
        $('#loading').modal('show');
    });
});
</script>
<?php } ?> 
<script src="<?= base_url('assets/ckeditor/build/ckeditor.js');?>"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script> -->
</body>

</html>