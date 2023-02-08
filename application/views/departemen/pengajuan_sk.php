<div class="container-fluid">
    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1">
            <div class="work-progres" style="background-color: #eef0fd">
            <button class="btn btn-info" type="button" data-toggle="modal" data-target="#tambah"
                    style="color:white; font-weight:bold"><i class="mdi me-2 mdi-plus-circle-outline"
                        style="font-weight: bold;"></i>Duplicate dari SK yang sudah ada</button>
                <div class="row" style="margin-left: 5px; margin-right: 5px;">
                    <form method="post" enctype="multipart/form-data"
                        action="<?php echo base_url()?>departemen/insert_pengajuan">
                        <h2 style="text-align: center;">Pengajuan SK Dekan</h2>
                        <hr>
                        <label style="font-size: 20px">Judul</label><label style="color:red; font-size:12px;">
                            (*Wajib
                            diisi)</label><br>
                        <textarea rows="5" name="judul" id="judul" type="text" placeholder="Write here..."
                            class="form-control" required=""></textarea>
                        <hr>
                        <div class="form-group">
                            <label style="font-size: 20px">Menimbang</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-menimbang" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <!-- <div class="control-group after-add-menimbang">
                                <textarea rows="7" name="menimbang[]" id="editor-menimbang" type="text"
                                    placeholder="Write here..." class="form-control"></textarea>
                            </div> -->
                            <div class="before-add-menimbang">
                            </div>
                            <div class="copy-menimbang hide">
                                <div class="control-group input-group">
                                    <br><span id="label_menimbang"></span>
                                    <textarea rows="7" name="menimbang[]" id="editor-copy-menimbang" type="text"
                                        placeholder="Write here..." class="form-control"></textarea><br>
                                    <div class="input-group-btn">
                                        <button class="btn-sm btn-danger remove-menimbang" type="button"><i
                                                class="fa fa-remove"></i> <br>Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 20px">Mengingat</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-mengingat" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <!-- <div class="control-group after-add-mengingat">
                                <textarea rows="7" name="mengingat[]" id="editor-mengingat" type="text"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                            </div> -->
                            <div class="before-add-mengingat">
                            </div>
                        </div>
                        <div class="copy-mengingat hide">
                            <div class="control-group input-group">
                                <textarea rows="7" name="mengingat[]" id="editor-copy-mengingat" type="text"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                                <div class="input-group-btn">
                                    <button class="btn-sm btn-danger remove-mengingat" type="button"><i
                                            class="fa fa-remove"></i> <br>Remove</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-size: 20px">Menetapkan</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-menetapkan" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <!-- <div class="control-group after-add-menetapkan">
                                <textarea rows="7" name="menetapkan[]" id="editor-menetapkan" type="text"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                            </div> -->
                            <div class="before-add-menetapkan">
                            </div>
                        </div>
                        <div class="copy-menetapkan hide">
                            <div class="control-group input-group">
                                <textarea rows="7" name="menetapkan[]" id="editor-copy-menetapkan"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                                <div class="input-group-btn">
                                    <button class="btn-sm btn-danger remove-menetapkan" type="button"><i
                                            class="fa fa-remove"></i> <br>Remove</button>
                                </div>
                            </div>
                        </div><br>
                        <!-- Lampiran -->
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 1</label><br>
                            <input type="file" name="file"> <br>
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 2</label><br>
                            <input type="file" name="file2"> <br>
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 3</label><br>
                            <input type="file" name="file3"> <br>
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>
                        <div class="form-group">
                            <label style="font-size: 20px">Catatan dari departemen</label><br>
                            <div class="control-group after-add-mengingat">
                                <textarea rows="5" name="catatan" type="text" placeholder="Write here..."
                                    class="form-control"></textarea><br>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="status" class="btn btn-info" value="draft">
                                Simpan Draft
                            </button>
                            <button type="submit" name="status" value="0"
                                onclick="return confirm('Apakah Anda yakin dengan pilihan Anda?');"
                                class="btn btn-success">
                                Simpan & Kirim Draft
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tambah Modal -->
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-weight:bold">
                                    Duplicate dari SK lain</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form role="form" method="post" action="<?= base_url('departemen/duplicate_sk');?>"
                                enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Duplicate dari SK</label><label style="color:red; font-size:12px;"> (*Wajib diisi)</label>
                                        <select class="form-control" name="id_sk"  required="">
                                        <option value="">Please Select</option>
                                        <?php
                                        foreach ($sk as $s) {
                                            $tgl = date('d-m-Y', strtotime($s->tgl));
                                            ?>
                                            <option value="<?php echo $s->id; ?>"><?php echo $s->judul ?> (<?php echo $tgl ?>)</option>
                                            <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        <div class="clearfix"> </div>
    </div>
</div>

<!-- <script type="text/javascript">
$(document).ready(function() {
    var k = 0;
    $(".add-mengingat").click(function() {
        k = k + 1;
        var html = $(".copy-mengingat").html();
        $(".before-add-mengingat").before(html);
        $("#editor-copy-mengingat").attr("id", "editor-copy-mengingat" + k);
        // CKEDITOR.replace('editor-copy-mengingat' + k);
    });
    $("body").on("click", ".remove-mengingat", function() {
        $(this).parents(".control-group").remove();
    });
});
</script> -->

<!-- <script type="text/javascript">
$(document).ready(function() {
    var j = 0;
    $(".add-menimbang").click(function() {
        j = j + 1;
        var html = $(".copy-menimbang").html();
        $(".before-add-menimbang").before(html);
        // $("#editor-copy-menimbang").attr("id", "editor-copy-menimbang" + j);
        // $("#editor-copy-menimbang").attr("id", "editor-copy-menimbang" + panjang);
        // $("#label_menimbang").attr("id", "label_menimbang_ok" + j);
        var cek = $("#label_menimbang");
        console.log(cek.length)
        for (var i = 0; i < cek.length; ++i) {
            $(this).html('Menimbang' + i);
        }
        // $("#label_menimbang").html("Menimbang " + cek);

        // CKEDITOR.replace('editor-copy-menimbang' + j);
        // $('[id^=editor-copy-menimbang]').each(function(j) {
        //     $(this).find('#label_menimbang').html('Menimbang ' + (j + 1));
        // });
    });
    $("body").on("click", ".remove-menimbang", function() {
        $(this).parents(".control-group").remove();
        var cek = $('[id^=label_menimbang_ok]').length
        console.log(cek)
        $('.copy-menimbang').each(function(i) {
            $(this).parents(".copy-menimbang").find('span').html('Menimbang' + (i + 1));
            console.log('Menimbang ' + (i + 1))
        });
    });
});
</script> -->

<!-- <script type="text/javascript">
$(document).ready(function() {
    reload_editor()
})
</script> -->
<script>
$(".add-menimbang").click(function() {
    var cek = $('.editor_menimbang').length + 1;
    $('<div class="control-group input-group editor_menimbang"><span class="a"> Menimbang ' + ($(
            '.editor_menimbang').length + 1) +
        '</span> <br> <textarea rows="7" name="menimbang[]" id="editor-copy-menimbang' + ($(
                '.editor_menimbang')
            .length + 1) +
        '" type="text" placeholder="Write here..." class="form-control"></textarea><br> <div class="input-group-btn"><button class="btn-sm btn-danger remove-menimbang" type="button" id="removeItem-' +
        ($('.editor_menimbang').length + 1) +
        '" action="javascript:;"><i class="fa fa-remove"></i></div></br></div>'
    ).appendTo('.before-add-menimbang');
    var cek1 = "editor-copy-menimbang" + cek;
    console.log(cek1);
    var editor = document.querySelector('[id="' + cek1 + '"]');
    ClassicEditor.create(editor).then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
    // reload_editor()
});

jQuery(document).on('click', '.remove-menimbang', function() {
    jQuery(this).closest('.editor_menimbang').remove();
    $('.editor_menimbang').each(function(i) {
        $(this).find('.a').html('Menimbang ' + (i + 1));
        $(this).find('a').attr('id', 'removeItem-' + (i + 1));
        $(this).find('textarea').attr('id', 'editor-copy-menimbang' + (i + 1));
    });
})
</script>

<script>
$(".add-mengingat").click(function() {
    var cek = $('.editor_mengingat').length + 1;
    $('<div class="control-group input-group editor_mengingat"><span class="a"> Mengingat ' + ($(
            '.editor_mengingat').length + 1) +
        '</span> <br> <textarea rows="7" name="mengingat[]" id="editor-copy-mengingat' + ($(
                '.editor_mengingat')
            .length + 1) +
        '" type="text" placeholder="Write here..." class="form-control"></textarea><br> <div class="input-group-btn"><button class="btn-sm btn-danger remove-mengingat" type="button" id="removeItem-' +
        ($('.editor_mengingat').length + 1) +
        '" action="javascript:;"><i class="fa fa-remove"></i></div></br></div>'
    ).appendTo('.before-add-mengingat');
    var cek1 = "editor-copy-mengingat" + cek;
    console.log(cek1);
    var editor = document.querySelector('[id="' + cek1 + '"]');
    ClassicEditor.create(editor).then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
    // reload_editor()
});

jQuery(document).on('click', '.remove-mengingat', function() {
    jQuery(this).closest('.editor_mengingat').remove();
    $('.editor_mengingat').each(function(i) {
        $(this).find('.a').html('Mengingat ' + (i + 1));
        $(this).find('a').attr('id', 'removeItem-' + (i + 1));
        $(this).find('textarea').attr('id', 'editor-copy-mengingat' + (i + 1));
    });
})
</script>

<script>
$(".add-menetapkan").click(function() {
    var cek = $('.editor_menetapkan').length + 1;
    $('<div class="control-group input-group editor_menetapkan"><span class="a"> Menetapkan ' + ($(
            '.editor_menetapkan').length + 1) +
        '</span> <br> <textarea rows="7" name="menetapkan[]" id="editor-copy-menetapkan' + ($(
                '.editor_menetapkan')
            .length + 1) +
        '" type="text" placeholder="Write here..." class="form-control"></textarea><br> <div class="input-group-btn"><button class="btn-sm btn-danger remove-menetapkan" type="button" id="removeItem-' +
        ($('.editor_menetapkan').length + 1) +
        '" action="javascript:;"><i class="fa fa-remove"></i></div></br></div>'
    ).appendTo('.before-add-menetapkan');
    var cek1 = "editor-copy-menetapkan" + cek;
    console.log(cek1);
    var editor = document.querySelector('[id="' + cek1 + '"]');
    ClassicEditor.create(editor).then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
    // reload_editor()
});

jQuery(document).on('click', '.remove-menetapkan', function() {
    jQuery(this).closest('.editor_menetapkan').remove();
    $('.editor_menetapkan').each(function(i) {
        $(this).find('.a').html('Menetapkan ' + (i + 1));
        $(this).find('a').attr('id', 'removeItem-' + (i + 1));
        $(this).find('textarea').attr('id', 'editor-copy-menetapkan' + (i + 1));
    });
})
</script>

<!-- <script type="text/javascript">
$(document).ready(function() {
    var i = 0;
    $(".add-menetapkan").click(function() {
        i = i + 1;
        var html = $(".copy-menetapkan").html();
        $(".before-add-menetapkan").before(html);
        $("#editor-copy-menetapkan").attr("id", "editor-copy-menetapkan" + i);
        // CKEDITOR.replace('editor-copy-menetapkan' + i);
    });
    $("body").on("click", ".remove-menetapkan", function() {
        $(this).parents(".control-group").remove();
    });
});
</script> -->