<div class="row" style="padding: 15px; background: #eef0fd">
    <div class="justify-content-center">
        <?php if(!empty($dep)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".dep">
                <div class="market-update-block clr-block-2" style="background: #808000">
                    <h4 style="font-size:17px"><i style="color: white" class="fa fa-file-text"></i> Catatan
                        Departemen</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade dep" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Departemen</h3>
                    </div>
                    <div class="modal-body">
                        <?= $dep->catatan ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($kadep)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".kadep">
                <div class="market-update-block clr-block-1">
                    <h4><i style="color: white" class="fa fa-file-text"></i> Catatan
                        Kadep</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade kadep" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Kadep</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($kadep as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($verifikator)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".verifikator">
                <div class="market-update-block clr-block-2">
                    <h4 style="font-size:17px"><i style="color: white" class="fa fa-file-text"></i> Catatan
                        Verifikator</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade verifikator" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Verifikator</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($verifikator as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($supervisor)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".supervisor">
                <div class="market-update-block clr-block-2" style="background: #641111">
                    <h4><i style="color: white" class="fa fa-file-text"></i> Catatan
                        SPV 1</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade supervisor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan SPV 1</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($supervisor as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($supervisor2)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".supervisor2">
                <div class="market-update-block clr-block-2" style="background: #13660f">
                    <h4><i style="color: white" class="fa fa-file-text"></i> Catatan
                        SPV 2</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade supervisor2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan SPV 2</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($supervisor2 as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($manager)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".manager">
                <div class="market-update-block clr-block-1" style="background: #0CB8B8F6">
                    <h4><i style="color: white" class="fa fa-file-text"></i> Catatan
                        Manager</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade manager" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Manager</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($manager as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($wadek1)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".wadek1">
                <div class="market-update-block clr-block-2" style="background: #0F52A0F6">
                    <h4><i style=" color: white" class="fa fa-file-text"></i> Catatan
                        Wadek 1</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade wadek1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Wadek 1</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($wadek1 as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($wadek2)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".wadek2">
                <div class="market-update-block clr-block-2" style="background: #8C22E2F6">
                    <h4><i style=" color: white" class="fa fa-file-text"></i> Catatan
                        Wadek 2</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade wadek2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Wadek 2</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($wadek2 as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($dekan)) { ?>
        <div class="col-md-12 market-update-gd text-center" style="padding-top: 10px;">
            <a href="" data-toggle="modal" data-target=".kadep">
                <div class="market-update-block clr-block-1" style="background: #D82626F6">
                    <h4><i style=" color: white" class="fa fa-file-text"></i> Catatan
                        Dekan</h4>
                </div>
            </a>
        </div>
        <!-- Modal Cat -->
        <div class="modal fade dekan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content text-left" style="margin-left:5px; margin-right:5px;">
                    <div class="modal-header">
                        <h3>Catatan Dekan</h3>
                    </div>
                    <div class="modal-body">
                        <?php foreach($dekan as $v) { 
                            $tgl = date('d-m-Y', strtotime($v->tgl));?>
                        <label style="color:#641111"><?= $tgl ?></label><br>
                        <label><?= $v->catatan ?></label>
                        <hr>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>