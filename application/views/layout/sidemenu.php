<!--slider menu-->
<div class="sidebar-menu" style="background-color: #337AB7;">
    <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span
                id="logo"></span>
            <!--<img id="logo" src="" alt="Logo"/>-->
        </a> </div>
    <div class="menu">
        <ul id="menu">
            <li id="menu-home"><a href="<?= base_url('/') ?>"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
            </li>
            <li id="menu-comunicacao"><a href="<?= base_url('/') ?>"><i class="fa fa-book nav_icon"></i><span>Daftar
                        SK</span></a></li>
            <?php if($role==4){ ?>
            <li id="menu-comunicacao"><a href="<?= base_url('verifikator/user') ?>"><i
                        class="fa fa-user nav_icon"></i><span>Akun</span></a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->