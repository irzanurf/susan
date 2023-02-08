<!-- Progress Bar -->
<div class="md-stepper-horizontal green">
    <?php if($sk->status == "draft") { $sk->status = -1; } ?>
    <?php if(0>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>1</span></div>
        <div class="md-step-title">Operator</div>
        <?php if (!empty($log_dep)) { 
                      foreach ($log_dep as $v) {
                      $tgl_dep = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_dep ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_dep ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(0>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>1</span></div>
        <div class="md-step-title">Operator</div>
        <?php if (!empty($log_dep)) { 
                      foreach ($log_dep as $v) {
                      $tgl_dep = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_dep ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_dep ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if(1>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>2</span></div>
        <div class="md-step-title">Kadep</div>
        <?php if (!empty($log_kadep)) { 
                      foreach ($log_kadep as $v) {
                      $tgl_kadep = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_kadep ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_kadep ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(1>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>2</span></div>
        <div class="md-step-title">Kadep</div>
        <?php if (!empty($log_kadep)) { 
                      foreach ($log_kadep as $v) {
                      $tgl_kadep = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_kadep ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_kadep ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(1<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>2</span></div>
        <div class="md-step-title">Kadep</div>
        <?php if (!empty($log_kadep)) { 
                      foreach ($log_kadep as $v) {
                      $tgl_kadep = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_kadep ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_kadep ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if(2>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>3</span></div>
        <div class="md-step-title">Verifikator</div>
        <?php if (!empty($log_verifikator)) { 
                      foreach ($log_verifikator as $v) {
                      $tgl_verifikator = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_verifikator ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_verifikator ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(2<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>3</span></div>
        <div class="md-step-title">Verifikator</div>
        <?php if (!empty($log_verifikator)) { 
                      foreach ($log_verifikator as $v) {
                      $tgl_verifikator = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_verifikator ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_verifikator ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if(($sk->spv)!="s2") { ?>
    <?php if(3>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>4</span></div>
        <div class="md-step-title">SPV 1</div>
        <?php if (!empty($log_supervisor)) { 
                      foreach ($log_supervisor as $v) {
                      $tgl_supervisor = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_supervisor ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_supervisor ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(3<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>4</span></div>
        <div class="md-step-title">SPV 1</div>
        <?php if (!empty($log_supervisor)) { 
                      foreach ($log_supervisor as $v) {
                      $tgl_supervisor = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_supervisor ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_supervisor ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } else{} ?>
    <?php } if(4>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>5</span></div>
        <div class="md-step-title">SPV 2</div>
        <?php if (!empty($log_supervisor2)) { 
                    
                      foreach ($log_supervisor2 as $v) {
                      $tgl_supervisor2 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_supervisor2 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_supervisor2 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(4<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>5</span></div>
        <div class="md-step-title">SPV 2</div>
        <?php if (!empty($log_supervisor2)) { 
                      foreach ($log_supervisor2 as $v) {
                      $tgl_supervisor2 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_supervisor2 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_supervisor2 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if(5>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>6</span></div>
        <div class="md-step-title">Manager</div>
        <?php if (!empty($log_manager)) { 
                      foreach ($log_manager as $v) {
                      $tgl_manager = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_manager ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_manager ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(5<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>6</span></div>
        <div class="md-step-title">Manager</div>
        <?php if (!empty($log_manager)) { 
                      foreach ($log_manager as $v) {
                      $tgl_manager = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_manager ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_manager ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if($sk->wd!="wd2") { ?>
    <?php if(6>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>7</span></div>
        <div class="md-step-title">Wadek 1</div>
        <?php if (!empty($log_wadek1)) { 
                      foreach ($log_wadek1 as $v) {
                      $tgl_wadek1 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_wadek1 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_wadek1 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(6<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>7</span></div>
        <div class="md-step-title">Wadek 1</div>
        <?php if (!empty($log_wadek1)) { 
                      foreach ($log_wadek1 as $v) {
                      $tgl_wadek1 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_wadek1 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_wadek1 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } else{} ?>
    <?php } if(7>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>8</span></div>
        <div class="md-step-title">Wadek 2</div>
        <?php if (!empty($log_wadek2)) { 
                      foreach ($log_wadek2 as $v) {
                      $tgl_wadek2 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_wadek2 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_wadek2 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(7<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>8</span></div>
        <div class="md-step-title">Wadek 2</div>
        <?php if (!empty($log_wadek2)) { 
                      foreach ($log_wadek2 as $v) {
                      $tgl_wadek2 = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_wadek2 ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_wadek2 ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } if(8>$sk->status){ ?>
    <div class="md-step">
        <div class="md-step-circle"><span>9</span></div>
        <div class="md-step-title">Dekan</div>
        <?php if (!empty($log_dekan)) { 
                      foreach ($log_dekan as $v) {
                      $tgl_dekan = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_dekan ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_dekan ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(8<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>9</span></div>
        <div class="md-step-title">Dekan</div>
        <?php if (!empty($log_dekan)) { 
                      foreach ($log_dekan as $v) {
                      $tgl_dekan = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_dekan ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_dekan ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } ?>
    <?php if(9>$sk->status){ ?>
    <div class="md-step done">
        <div class="md-step-circle"><span>10</span></div>
        <div class="md-step-title">Finish</div>
        <?php if(!empty($log_finish)) {
                    foreach ($log_finish as $v) {
                      $tgl_finish = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_finish ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_finish ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } elseif(9<=$sk->status) { ?>
    <div class="md-step active done">
        <div class="md-step-circle"><span>9</span></div>
        <div class="md-step-title">Finish</div>
        <?php if(!empty($log_finish)) {
                     foreach ($log_finish as $v) {
                      $tgl_finish = date('d-m-Y', strtotime($v->tgl)); 
                      if (($v->round)%2==0) {?>
        <div class="md-step-optional" style="color: green"><?= $tgl_finish ?></div>
        <?php } else{ ?>
        <div class="md-step-optional" style="color: blue"><?= $tgl_finish ?></div>
        <?php }}} ?>
        <div class="md-step-bar-left"></div>
        <div class="md-step-bar-right"></div>
    </div>
    <?php } ?>
</div>
<!-- End Progress Bar -->