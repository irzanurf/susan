<!DOCTYPE HTML>
<html>

<head>
    <title>Susan | FT UNDIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="//cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script> -->
    <link href="<?= base_url('assets/main/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="<?= base_url('assets/main/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />

    
    <link rel="stylesheet" href="<?= base_url('assets/searchable/docsupport/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/searchable/docsupport/prism.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/searchable/chosen.css');?>">
    <!--js-->
    <script src="<?= base_url('assets/main/js/jquery-2.1.1.min.js');?>"></script>
    <!--icons-css-->
    <link href="<?= base_url('assets/main/css/font-awesome.css');?>" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="<?= base_url('assets/main/js/Chart.min.js');?>"></script>
    <!--charts-->
    <!--skycons-icons-->
    <script src="<?= base_url('assets/main/js/skycons.js');?>"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <link href="<?= base_url('assets/pg.css');?>" rel="stylesheet">
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>
    <!--//skycons-icons-->
    <style>
    body {
        font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
    }

    .form-control[readonly] {
        background-color: white;
    }

    .input-disabled {
        background-color: #FFF !important;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

</head>

<body>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="#">
                                <h1 style="color: #68ae00">Susan</h1>
                                <!--<img id="logo" src="" alt="Logo"/>-->
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details_left">
                            <!--notifications of menu start -->
                            <div class="clearfix"> </div>
                        </div>
                        <!--notification menu end -->
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img
                                                    src="<?= base_url('assets/main/images/user.png'); ?>" alt="">
                                            </span>
                                            <div class="user-name">
                                                <p><?= $username ?></p>
                                                <span><?= $nama ?></span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li> <a href="<?= base_url('welcome/changePass') ?>"><i class="fa fa-lock"></i>
                                                Ganti Password</a> </li>
                                        <li> <a href="<?= base_url('welcome/logout') ?>"><i class="fa fa-sign-out"></i>
                                                Logout</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <!-- script-for sticky-nav -->
                <script>
                $(document).ready(function() {
                    var navoffeset = $(".header-main").offset().top;
                    $(window).scroll(function() {
                        var scrollpos = $(window).scrollTop();
                        if (scrollpos >= navoffeset) {
                            $(".header-main").addClass("fixed");
                        } else {
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
                </script>
                <!-- /script-for sticky-nav -->
                <!--inner block start here-->
                <div class="inner-block">
                    <!--market updates updates-->
                    <?php if (empty($cek)) { ?>
                    <div class="market-updates">
                        <div class="col-md-4 market-update-gd">
                            <a href="<?= base_url("$one3") ?>">
                                <div class="market-update-block clr-block-2">
                                    <div class="col-md-8 market-update-left">
                                        <h3><?= $one1 ?></h3>
                                        <h4><?= $one2 ?></h4>
                                        <p><?= $nama ?></p>
                                    </div>
                                    <div class="col-md-4 market-update-right">
                                        <i class="fa fa-file-text-o" style="color: #FC8213"> </i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 market-update-gd">
                            <a href="<?= base_url("/") ?>">
                                <div class="market-update-block clr-block-3">
                                    <div class="col-md-8 market-update-left">
                                        <h3><?= $two1 ?></h3>
                                        <h4><?= $two2 ?></h4>
                                        <p><?= $nama ?></p>
                                    </div>
                                    <div class="col-md-4 market-update-right">
                                        <i class="fa fa-eye" style="color: #337AB7"> </i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 market-update-gd">
                            <a href="<?= base_url("$three3") ?>">
                                <div class="market-update-block clr-block-1">
                                    <div class="col-md-8 market-update-left">
                                        <h3><?= $three1 ?></h3>
                                        <h4><?= $three2 ?></h4>
                                        <p><?= $nama ?></p>
                                    </div>
                                    <div class="col-md-4 market-update-right">
                                        <i class="fa fa-envelope-o" style="color: #68AE00"> </i>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--market updates end here-->
                    <?php } ?>