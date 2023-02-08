<div class="container-fluid">
    <div class="chit-chat-layer1">
        <!-- Progress Bar -->
        <?php $this->load->view('progress_bar') ?>
        <hr>
        <div class="text-center">
            <a href="" data-toggle="modal" data-target="#force">
                <button class="btn btn-danger btn-lg" type="button"><i class="fa fa-send"></i> Force Action</button>
            </a>
        </div>
        <!-- Modal force review -->
        <div class="modal fade" id="force" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Force Action</h3>
                    </div>
                    <div class="modal-body">
                        <div>
                            <span style="color: red; text-align:center"> Force Action akan melewati review atau
                                mengembalikan SK ke pihak tertentu </span>
                        </div><br>
                        <div class=" md-stepper-horizontal green">
                            <?php if(0>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="1-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="draft" />
                                    <div class="submit" onClick="document.forms['1-form'].submit();">
                                        <div class="md-step-circle"><span>1</span></div>
                                        <div class="md-step-title">Operator</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="1-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="draft" />
                                    <div class="submit" onClick="document.forms['1-form'].submit();">
                                        <div class="md-step-circle"><span>1</span></div>
                                        <div class="md-step-title">Operator</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(1>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="2-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="0" />
                                    <div class="submit" onClick="document.forms['2-form'].submit();">
                                        <div class="md-step-circle"><span>2</span></div>
                                        <div class="md-step-title">Kadep</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="2-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="0" />
                                    <div class="submit" onClick="document.forms['2-form'].submit();">
                                        <div class="md-step-circle"><span>2</span></div>
                                        <div class="md-step-title">Kadep</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(2>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="3-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="1" />
                                    <div class="submit" onClick="document.forms['3-form'].submit();">
                                        <div class="md-step-circle"><span>3</span></div>
                                        <div class="md-step-title">Verifikator</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="3-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="1" />
                                    <div class="submit" onClick="document.forms['3-form'].submit();">
                                        <div class="md-step-circle"><span>3</span></div>
                                        <div class="md-step-title">Verifikator</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(3>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="4-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="2" />
                                    <div class="submit" onClick="document.forms['4-form'].submit();">
                                        <div class="md-step-circle"><span>4</span></div>
                                        <div class="md-step-title">SPV 1</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="4-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="2" />
                                    <div class="submit" onClick="document.forms['4-form'].submit();">
                                        <div class="md-step-circle"><span>4</span></div>
                                        <div class="md-step-title">SPV 1</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(4>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="5-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="3" />
                                    <div class="submit" onClick="document.forms['5-form'].submit();">
                                        <div class="md-step-circle"><span>5</span></div>
                                        <div class="md-step-title">SPV 2</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="5-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="3" />
                                    <div class="submit" onClick="document.forms['5-form'].submit();">
                                        <div class="md-step-circle"><span>5</span></div>
                                        <div class="md-step-title">SPV 2</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(4>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="6-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="4" />
                                    <div class="submit" onClick="document.forms['6-form'].submit();">
                                        <div class="md-step-circle"><span>6</span></div>
                                        <div class="md-step-title">Manager</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="6-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="4" />
                                    <div class="submit" onClick="document.forms['6-form'].submit();">
                                        <div class="md-step-circle"><span>6</span></div>
                                        <div class="md-step-title">Manager</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(5>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="7-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="5" />
                                    <div class="submit" onClick="document.forms['7-form'].submit();">
                                        <div class="md-step-circle"><span>7</span></div>
                                        <div class="md-step-title">Wadek 1</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="7-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="5" />
                                    <div class="submit" onClick="document.forms['7-form'].submit();">
                                        <div class="md-step-circle"><span>7</span></div>
                                        <div class="md-step-title">Wadek 1</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(6>=$sk->status) { ?>
                            <div class="md-step active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="8-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="6" />
                                    <div class="submit" onClick="document.forms['8-form'].submit();">
                                        <div class="md-step-circle"><span>8</span></div>
                                        <div class="md-step-title">Wadek 2</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="8-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="6" />
                                    <div class="submit" onClick="document.forms['8-form'].submit();">
                                        <div class="md-step-circle"><span>8</span></div>
                                        <div class="md-step-title">Wadek 2</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } if(7>=$sk->status) { ?>
                            <div class="md-step orange active">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="9-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="7" />
                                    <div class="submit" onClick="document.forms['9-form'].submit();">
                                        <div class="md-step-circle"><span>9</span></div>
                                        <div class="md-step-title">Dekan</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } else { ?>
                            <div class="md-step active done">
                                <form action="<?= base_url('Verifikator/update_status') ?>" method="post" name="9-form">
                                    <input type="hidden" name="id" value="<?=$id?>" />
                                    <input type="hidden" name="status" value="7" />
                                    <div class="submit" onClick="document.forms['9-form'].submit();">
                                        <div class="md-step-circle"><span>9</span></div>
                                        <div class="md-step-title">Dekan</div>
                                        <div class="md-step-bar-left"></div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Progress Bar -->
        <div class="col-md-3 chit-chat-layer1">
            <div class="panel-primary">
                <div class="row" style="background-color:#337AB7; padding:15px; color: white">
                    <div style="width: 20%; float:left">
                        <i style="font-size: 55px;" class="fa fa-clock-o"></i>
                    </div>
                    <div style="width: 80%; float:right">
                        <?= $sk->departemen ?><span style="text-align: right; font-size:15px"><br>
                            <?php   if (empty($dekan->tgl)){
                                        $now = date("Y-m-d");
                                        }
                                        else {
                                        $now = $dekan->tgl;
                                        }
                                        $tgl1 = new DateTime("$sk->tgl");
                                        $tgl2 = new DateTime("$now");
                                        $jarak = $tgl2->diff($tgl1)->days + 1; ?>
                            <span style="font-size:10px">
                                Rentang waktu pengajuan <b style="font-size:12px"><?= $jarak ?>
                                    hari</b><br>sampai
                                finish
                                draft
                            </span>
                    </div>
                </div>
                <?php $this->load->view('catatan') ?>
            </div>
        </div>
        <div class="col-md-9 chit-chat-layer1">
            <div class="work-progres" style="background-color: #eef0fd">
                <div class="row" style="margin-left: 5px; margin-right: 5px;">
                    <form method="post" enctype="multipart/form-data"
                        action="<?php echo base_url()?>departemen/update_pengajuan">
                        <h2 style="text-align: center;">Edit SK Dekan</h2>
                        <hr>
                        <input type="hidden" name="id" value="<?=$id?>" />
                        <label style="font-size: 20px">Judul</label><br>
                        <textarea rows="5" name="judul" type="text" placeholder="Write here..."
                            class="form-control"><?= $sk->judul ?></textarea>
                        <hr>

                        <!-- Menimbang Input -->
                        <div class="form-group">
                            <label style="font-size: 20px">Menimbang</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-menimbang" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <div class="control-group after-add-menimbang">
                                <?php $index_menimbang=1; foreach($menimbang as $v) { ?>
                                <script src="<?= base_url('assets/ckeditor/build/ckeditor.js');?>"></script>
                                <div class="control-group input-group editor_menimbang"><span class="a"> Menimbang
                                        <?=$index_menimbang?></span> <br> <textarea rows="7" name="menimbang[]"
                                        id="editor-copy-menimbang<?=$index_menimbang?>" type="text"
                                        placeholder="Write here..."
                                        class="form-control"><?=$v->menimbang?></textarea><br>
                                    <div class="input-group-btn"><button class="btn-sm btn-danger remove-menimbang"
                                            type="button" id="removeItem<?=$index_menimbang?>" action="javascript:;"><i
                                                class="fa fa-remove"></i></div></br>
                                </div>
                                <script>
                                var cek1 = "editor-copy-menimbang<?=$index_menimbang?>";
                                console.log(cek1);
                                var editor = document.querySelector('[id="' + cek1 + '"]');
                                ClassicEditor.create(editor).then(editor => {
                                        editor.editing.view.change(writer => {
                                            writer.setStyle('height', '300px', editor.editing.view.document
                                                .getRoot());
                                        });
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                                </script>
                                <?php $index_menimbang++; } ?>
                            </div>
                        </div>
                        <div class="before-add-menimbang">
                        </div>
                        <div class="copy-menimbang hide">
                            <div class="control-group input-group">
                                <textarea rows="7" name="menimbang[]" id="editor-copy-menimbang" type="text"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                                <div class="input-group-btn">
                                    <button class="btn-sm btn-danger remove-menimbang"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" type="button"><i
                                            class="fa fa-remove"></i> <br>Remove</button>
                                </div>
                            </div>
                        </div>

                        <!-- Mengingat input -->
                        <div class="form-group">
                            <label style="font-size: 20px">Mengingat</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-mengingat" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <div class="control-group after-add-mengingat">
                                <?php $index_mengingat=1; foreach($mengingat as $v) { ?>
                                <script src="<?= base_url('assets/ckeditor/build/ckeditor.js');?>"></script>
                                <div class="control-group input-group editor_mengingat"><span class="a"> Mengingat
                                        <?=$index_mengingat?></span> <br> <textarea rows="7" name="mengingat[]"
                                        id="editor-copy-mengingat<?=$index_mengingat?>" type="text"
                                        placeholder="Write here..."
                                        class="form-control"><?=$v->mengingat?></textarea><br>
                                    <div class="input-group-btn"><button class="btn-sm btn-danger remove-mengingat"
                                            type="button" id="removeItem<?=$index_mengingat?>" action="javascript:;"><i
                                                class="fa fa-remove"></i></div></br>
                                </div>
                                <script>
                                var cek1 = "editor-copy-mengingat<?=$index_mengingat?>";
                                console.log(cek1);
                                var editor = document.querySelector('[id="' + cek1 + '"]');
                                ClassicEditor.create(editor).then(editor => {
                                        editor.editing.view.change(writer => {
                                            writer.setStyle('height', '300px', editor.editing.view.document
                                                .getRoot());
                                        });
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                                </script>
                                <?php $index_mengingat++; } ?>
                            </div>
                        </div>
                        <div class="before-add-mengingat">
                        </div>
                        <div class="copy-mengingat hide">
                            <div class="control-group input-group">
                                <textarea rows="7" name="mengingat[]" id="editor-copy-mengingat" type="text"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                                <div class="input-group-btn">
                                    <button class="btn-sm btn-danger remove-mengingat"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" type="button"><i
                                            class="fa fa-remove"></i> <br>Remove</button>
                                </div>
                            </div>
                        </div>

                        <!-- Menetapkan input -->
                        <div class="form-group">
                            <label style="font-size: 20px">Menetapkan</label><br>
                            <label style="color:red; font-size:12px;">*Isikan tanpa menggunakan nomor urut</label>
                            <div class="input-group-btn">
                                <button class="btn btn-success add-menetapkan" type="button"><i class="fa fa-plus"></i>
                                    Add</button>
                            </div>
                            <div class="control-group after-add-menetapkan">
                                <?php $index_menetapkan=1; foreach($menetapkan as $v) { ?>
                                <script src="<?= base_url('assets/ckeditor/build/ckeditor.js');?>"></script>
                                <div class="control-group input-group editor_menetapkan"><span class="a"> Menetapkan
                                        <?=$index_menetapkan?></span> <br> <textarea rows="7" name="menetapkan[]"
                                        id="editor-copy-menetapkan<?=$index_menetapkan?>" type="text"
                                        placeholder="Write here..."
                                        class="form-control"><?=$v->menetapkan?></textarea><br>
                                    <div class="input-group-btn"><button class="btn-sm btn-danger remove-menetapkan"
                                            type="button" id="removeItem<?=$index_menetapkan?>" action="javascript:;"><i
                                                class="fa fa-remove"></i></div></br>
                                </div>
                                <script>
                                var cek1 = "editor-copy-menetapkan<?=$index_menetapkan?>";
                                console.log(cek1);
                                var editor = document.querySelector('[id="' + cek1 + '"]');
                                ClassicEditor.create(editor).then(editor => {
                                        editor.editing.view.change(writer => {
                                            writer.setStyle('height', '300px', editor.editing.view
                                                .document
                                                .getRoot());
                                        });
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                                </script>
                                <?php $index_menetapkan++; } ?>
                            </div>
                        </div>
                        <div class="before-add-menetapkan">
                        </div>
                        <div class="copy-menetapkan hide">
                            <div class="control-group input-group">
                                <textarea rows="7" name="menetapkan[]" id="editor-copy-menetapkan"
                                    placeholder="Write here..." class="form-control"></textarea><br>
                                <div class="input-group-btn">
                                    <button class="btn-sm btn-danger remove-menetapkan"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');" type="button"><i
                                            class="fa fa-remove"></i> <br>Remove</button>
                                </div>
                            </div>
                        </div>

                        <!-- Lampiran -->
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 1</label><br>
                            <?php if (!empty($sk->lamp)) : ?>
                            <div class="form-group">
                                <button method="post"
                                    onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp?>', '_blank'); return false;"
                                    class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                        alt="attach" width="50" height="50" /></button>
                            </div>

                            <?php else : ?>

                            <?php endif; ?>
                            <input type="file" name="file">
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>

                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 2</label><br>
                            <?php if (!empty($sk->lamp2)) : ?>
                            <div class="form-group">
                                <button method="post"
                                    onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp2?>', '_blank'); return false;"
                                    class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                        alt="attach" width="50" height="50" /></button>
                            </div>

                            <?php else : ?>

                            <?php endif; ?>
                            <input type="file" name="file2">
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>

                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 3</label><br>
                            <?php if (!empty($sk->lamp3)) : ?>
                            <div class="form-group">
                                <button method="post"
                                    onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp3?>', '_blank'); return false;"
                                    class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                        alt="attach" width="50" height="50" /></button>
                            </div>

                            <?php else : ?>

                            <?php endif; ?>
                            <input type="file" name="file3">
                            <label style="color:red; font-size:12px;">maks 10mb</label>
                        </div><br>

                        <div class="form-group">
                            <label style="font-size: 20px">Catatan dari departemen</label><br>
                            <div>
                                <?php if(empty($dep)){ ?>
                                <textarea rows="5" name="catatan" type="text" placeholder="Write here..."
                                    class="form-control"></textarea><br>
                                <?php } else { ?>
                                <textarea rows="5" name="catatan" type="text" placeholder="Write here..."
                                    class="form-control"><?=$dep->catatan?></textarea><br>
                                <?php } ?>
                            </div>
                        </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
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
    $(".add-mengingat").click(function() {
        var html = $(".copy-mengingat").html();
        $(".after-add-mengingat").after(html);
        // CKEDITOR.replace('editor-copy-mengingat');
    });
    $("body").on("click", ".remove-mengingat1", function() {
        $(this).closest(".control-group").remove();
    });
    $("body").on("click", ".remove-mengingat", function() {
        $(this).closest(".control-group").remove();
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $(".add-menimbang").click(function() {
        var html = $(".copy-menimbang").html();
        $(".after-add-menimbang").after(html);
        // // CKEDITOR.replace('editor-copy-menimbang');
    });
    $("body").on("click", ".remove-menimbang1", function() {
        $(this).closest(".control-group").remove();
    });
    $("body").on("click", ".remove-menimbang", function() {
        $(this).closest(".control-group").remove();
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $(".add-menetapkan").click(function() {
        var html = $(".copy-menetapkan").html();
        $(".after-add-menetapkan").after(html);
        // // CKEDITOR.replace('editor-copy-menetapkan');
    });
    $("body").on("click", ".remove-menetapkan1", function() {
        $(this).closest(".control-group").remove();
    });
    $("body").on("click", ".remove-menetapkan", function() {
        $(this).closest(".control-group").remove();
    });
});
</script> -->