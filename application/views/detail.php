<div class="container-fluid">
    <div class="chit-chat-layer1">
        <?php $this->load->view('progress_bar') ?>
        <div class="row">
            <div class="col-md-3 chit-chat-layer1">
                <div class="panel-primary">
                    <div class="row" style="background-color:#337AB7; padding:15px; color: white">
                        <div style="width: 20%; float:left">
                            <i style="font-size: 55px;" class="fa fa-clock-o"></i>
                        </div>
                        <div style="width: 80%; float:right">
                            <?= $sk->departemen ?><br>
                            <label style="text-align: right; font-size:10px;"><?= $sk->nama ?></label>
                            <span style="text-align: right; font-size:15px"><br>
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
                        <h2 style="text-align: center;">Review SK Dekan</h2>
                        <hr>
                        <label style="font-size: 20px">Departemen</label><br>
                        <input value="<?= $sk->departemen ?>" class="form-control" readonly="">
                        <hr>
                        <label style="font-size: 20px">Judul</label><br>
                        <textarea name="judul" type="text" placeholder="Write here..." class="form-control"
                            readonly=""><?= $sk->judul ?></textarea>
                        <hr>
                        <!-- <iframe
                            src="https://docs.google.com/viewer?url=<?= base_url('assets/file');?>/<?=$sk->file?>&embedded=true"
                            frameborder='0' width="100%" height="700px">
                        </iframe> -->
                        <iframe
                            src="http://view.officeapps.live.com/op/view.aspx?src=<?= base_url('assets/file');?>/<?=$sk->file?>"
                            width='100%' height='650px' frameborder='0'>
                        </iframe>
                        <hr>
                        <!-- Lampiran -->

                        <?php if (!empty($sk->lamp)) : ?>
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 1</label><br>
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

                        <?php if (!empty($sk->lamp2)) : ?>
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 2</label><br>
                            <div class="form-group">
                                <button method="post"
                                    onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp2?>', '_blank'); return false;"
                                    class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                        alt="attach" width="50" height="50" /></button>
                            </div>
                        </div>
                        <hr>
                        <?php else : ?>

                        <?php endif; ?>

                        <?php if (!empty($sk->lamp3)) : ?>
                        <div class="form-group">
                            <label style="font-size: 20px">File Lampiran 3</label><br>
                            <div class="form-group">
                                <button method="post"
                                    onclick=" window.open('<?= base_url('assets/lampiran');?>/<?=$sk->lamp3?>', '_blank'); return false;"
                                    class="btn btn-primary-outline"><img src="<?= base_url('assets/attach.png');?>"
                                        alt="attach" width="50" height="50" /></button>
                            </div>
                        </div>
                        <hr>
                        <?php else : ?>

                        <?php endif; ?>
                        <!-- <iframe
                            src="http://view.officeapps.live.com/op/view.aspx?src=<?= base_url('assets/file');?>/<?=$sk->file?>"
                            width='100%' height='650px' frameborder='0'>
                        </iframe> -->
                        <!-- <iframe
                            src="https://docs.google.com/viewer?url=<?= base_url('assets/file');?>/<?=$sk->file?>&embedded=true">
                        </iframe> -->
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>