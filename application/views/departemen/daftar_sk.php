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
                            <td style="text-align:center; width:20%">
                                <form style="display:inline-block;" method="post"
                                    action="<?= base_url('common/detail') ?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Preview">
                                        <i class="fa fa-eye" style="font-size: 20px; color: blue"> </i>
                                    </button>
                                </form>
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
                                <form style="display:inline-block;" method="post"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');"
                                    action="<?= base_url('departemen/delete_pengajuan');?>">
                                    <input type='hidden' name="id" value="<?= $v->id ?>">
                                    <button type="submit" class="btn btn-primary-outline" data-toggle="tooltip"
                                        data-placement="top" title="Hapus">
                                        <i class="fa fa-trash" style="font-size: 20px; color: red"> </i>
                                    </button>
                                </form>
                                <?php }  
                                else { ?>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Edit">
                                    <i class="fa fa-pencil" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Ajukan Draft">
                                    <i class="fa fa-check-square-o" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <button class="btn btn-primary-outline" data-toggle="tooltip" data-placement="top"
                                    title="Ajukan Draft">
                                    <i class="fa fa-trash" style="font-size: 20px; color: grey"> </i>
                                </button>
                                <?php } ?>

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