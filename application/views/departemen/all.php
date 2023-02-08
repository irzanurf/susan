<div class="chit-chat-layer1">
    <div class="col-md-12 chit-chat-layer1">
        <div class="work-progres">
            <?php if($this->session->flashdata('info')){echo $this->session->flashdata('info');}?>
            <a class="btn btn-primary" href="<?= base_url("departemen/pengajuan_sk") ?>">Tambah</a>
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align:center">Tanggal</th>
                            <th style="text-align:center">Judul</th>
                            <th style="text-align:center">Departemen</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                        </tr>
                    </tfoot>

                    <tbody>
                        <?php 
                                   foreach($view as $v){
                                    $tgl = date('d-m-Y', strtotime($v->tgl));
                              ?>
                        <tr>
                            <td style="text-align:center; width:10%"><?= $tgl ?></td>
                            <td><?= $v->judul ?></td>
                            <td><?= $v->departemen ?></td>
                            <td style="text-align:center; width:26%">
                                <form style="display:inline-block;" method="post"
                                    action="<?= base_url('common/detail') ?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Preview">
                                        <i class="fa fa-eye" style="font-size: 20px; color: blue"> </i>
                                    </button>
                                </form>

                                <!-- Edit SK -->
                                <?php if(($v->status)=="draft") { ?>
                                <form style="display:inline-block;" method="post"
                                    action="<?= base_url('departemen/edit_sk') ?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Edit">
                                        <i class="fa fa-pencil" style="font-size: 20px; color: #400040"> </i>
                                    </button>
                                </form>
                                <form style="display:inline-block;" method="post"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Mengajukan Draft?');"
                                    action="<?= base_url('departemen/ajukan');?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Ajukan Draft">
                                        <i class="fa fa-check-square-o" style="font-size: 20px; color: #008040"> </i>
                                    </button>
                                </form>
                                <?php } else {?>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Edit">
                                    <i class="fa fa-pencil" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Ajukan Draft">
                                    <i class="fa fa-check-square-o" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <?php } ?>

                                <!-- Hapus SK -->
                                <?php if(($v->status)=="draft") { ?>
                                <form style="display:inline-block;" method="post"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');"
                                    action="<?= base_url('departemen/delete_pengajuan');?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Hapus">
                                        <i class="fa fa-trash" style="font-size: 20px; color: red"> </i>
                                    </button>
                                </form>
                                <?php } else {?>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Hapus">
                                    <i class="fa fa-trash" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <?php } ?>


                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    <?php if(($v->status)=="draft") { ?> title="Draft">
                                    <img src="<?= base_url('assets/10.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="0") { ?> title="Ketua Departemen">
                                    <img src="<?= base_url('assets/20.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="1") { ?> title="Verifikator">
                                    <img src="<?= base_url('assets/30.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="2") { ?> title="Supervisor 1">
                                    <img src="<?= base_url('assets/40.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="3") { ?> title="Supervisor 2">
                                    <img src="<?= base_url('assets/50.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="4") { ?> title="Manager">
                                    <img src="<?= base_url('assets/60.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="5") { ?> title="Wadek 1">
                                    <img src="<?= base_url('assets/70.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="6") { ?> title="Wadek 2">
                                    <img src="<?= base_url('assets/80.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)=="7") { ?> title="Dekan">
                                    <img src="<?= base_url('assets/90.png');?>" alt="trash" width="20" height="20" />
                                    <?php } elseif(($v->status)>="8") { ?> title="Finish">
                                    <img src="<?= base_url('assets/100.png');?>" alt="trash" width="20" height="20" />
                                    <?php } ?>
                                </button>

                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>