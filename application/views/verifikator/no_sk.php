<div class="container-fluid">
    <div class="chit-chat-layer1">
        <!-- Progress Bar -->
        <?php $this->load->view('progress_bar') ?>
        <!-- End Progress Bar -->
        <div class="row">
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
                        <form method="post" action="<?php echo base_url()?>verifikator/update_no_sk">
                            <h2 style="text-align: center;">Nomor SK Dekan</h2>
                            <hr>
                            <input type="hidden" name="id" value="<?=$id?>" />
                            <label style="font-size: 20px">Judul</label><br>
                            <textarea name="judul" type="text" placeholder="Write here..." class="form-control"
                                readonly=""><?= $sk->judul ?></textarea>
                            <hr>
                            <iframe
                                src="https://docs.google.com/viewer?url=<?= base_url('assets/file');?>/<?=$sk->file?>&embedded=true"
                                frameborder='0' width="100%" height="700px">
                            </iframe>
                            <hr>
                            <!-- Lampiran -->

                            <?php if (!empty($sk->lamp)) : ?>
                            <div class="form-group">
                                <label style="font-size: 20px">File Lampiran</label><br>
                                <div class="form-group">
                                    <button method="post"
                                        onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp?>', '_blank'); return false;"
                                        class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                            alt="attach" width="50" height="50" /></button>
                                </div>
                            </div>
                            <hr>
                            <?php else : ?>

                            <?php endif; ?>
                            <label style="font-size: 20px">Nomor SK</label><br>
                            <textarea name="no_sk" type="text" placeholder="Write here..." required=""
                                class="form-control"=""></textarea>
                            <hr>
                            <label style="font-size: 20px">Tanggal SK</label><br>
                            <input name="tgl_sk" type="date" required="" class="form-control"="">
                            <hr>
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
        <div class="clearfix"> </div>
    </div>
</div>