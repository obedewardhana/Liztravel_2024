<?php
if (!isset($authPage)) {
    $authPage = FALSE;
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $pageTitle; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/sufee/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/sufee/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="<?= base_url(); ?>assets/sufee/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/pace-style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/sufee/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/summernote/summernote.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dmuploader/jquery.dm-uploader.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
        #dataTable_filter input {
            margin-left: -17px;
        }
    </style>


</head>

<body<?php if ($authPage) {
    echo " class='bg-light'";
} ?>>

    <script src="<?= base_url(); ?>assets/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/sufee/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/sufee/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/dmuploader/jquery.dm-uploader.min.js"></script>
    <script src="<?= base_url(); ?>assets/dmuploader/demo-config.js"></script>
    <script src="<?= base_url(); ?>assets/dmuploader/demo-ui.js"></script>
    <script src="<?= base_url(); ?>assets/summernote/summernote.min.js"></script>
    <script src="<?= base_url(); ?>assets/sufee/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/sufee/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/select2/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/jqueryvalidate/jquery.validate.js"></script>
    <script src="<?= base_url(); ?>assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url(); ?>assets/sufee/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url(); ?>assets/fullcalendar/index.global.min.js"></script>
    <script src="<?= base_url(); ?>assets/dropify/js/dropify.min.js"></script>
    <script src="<?= base_url(); ?>assets/pdfextractor/pdf.js"></script>
    <script src="<?= base_url(); ?>assets/pdfextractor/pdf-table-extractor.js"></script>
    <script src="<?= base_url(); ?>assets/docx2html/docx2html.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        paceOptions = {
            restartOnRequestAfter: 5,
            ajax: {
                trackMethods: ['GET', 'POST', 'PUT', 'DELETE', 'REMOVE']
            }
        }

        $(document).ready(function () {
            $('.js-select2-single').select2();
            $('.js-select2-multiple').select2();
            $('.js-select2-multiple-tags').select2({
                tags: true
            });

            $('.submenu-title .btn-dropdown').on('click', function (event) {
                event.preventDefault();
                $(this).parent('.submenu-title').toggleClass('active');
            });

            if ($('.submenu > li').hasClass('active')) {
                $('.submenu > li.active').closest('.submenu-title').toggleClass('active');
            }

        });
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script type="text/javascript" id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/mml-chtml.js">
        </script>
    <script src="<?= base_url(); ?>assets/pace.min.js"></script>

    <?php
    if (!$authPage) {
        ?>

        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">
                        <?= $this->company_info->get_company_name(); ?>
                    </a>
                    <a class="navbar-brand hidden" href="<?= base_url(); ?>">B</a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($pageTitle == 'Dashboard') ? "class='active'" : ""; ?>>
                            <a href="<?= base_url("dashboard"); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <li class="submenu-title">
                            <a type="button" class="btn-dropdown" data-href="#dropdown-data"><i
                                    class="menu-icon fa fa-laptop-file"></i>Master Data<i
                                    class="ml-3 fa fa-arrow-right"></i></a>
                            <ul class="submenu" id="dropdown-data">
                                <?php foreach ($modulcek as $m): ?>
                                    <?php if ($m->moduls == 4): ?>
                                        <li <?php echo ($pageTitle == 'Products') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("products"); ?>"> <i class="menu-icon fa fa-car"></i>Products
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 8): ?>
                                        <li <?php echo ($pageTitle == 'Orders') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("orders"); ?>"> <i class="menu-icon fa fa-dollar"></i>Orders
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 5): ?>
                                        <li <?php echo ($pageTitle == 'Clients') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("partners"); ?>"> <i class="menu-icon fa fa-users"></i>Clients
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 6): ?>
                                        <li <?php echo ($pageTitle == 'Partnership') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("partnership"); ?>"> <i class="menu-icon fa fa-user-group"></i>Partnership
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 7): ?>
                                        <li <?php echo ($pageTitle == 'Banners') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("banners"); ?>"> <i
                                                    class="menu-icon fa fa-image"></i>Banners
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="submenu-title">
                            <a type="button" class="btn-dropdown" data-href="#dropdown-laporan"><i
                                    class="menu-icon fa fa-gear"></i>Pengaturan<i class="ml-3 fa fa-arrow-right"></i></a>
                            <ul class="submenu" id="dropdown-laporan">
                                <?php foreach ($modulcek as $m): ?>
                                    <?php if ($m->moduls == 2): ?>
                                        <li <?php echo ($pageTitle == 'Role') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("role"); ?>"> <i class="menu-icon fa fa-suitcase"></i>Role </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 1): ?>
                                        <li <?php echo ($pageTitle == 'Users') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("users"); ?>"> <i class="menu-icon fa fa-user"></i>Operator </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($m->moduls == 3): ?>
                                        <li <?php echo ($pageTitle == 'General settings') ? "class='active'" : ""; ?>>
                                            <a href="<?= base_url("setting/general"); ?>"> <i
                                                    class="menu-icon fa fa-gear"></i>General
                                                Setting </a>
                                        </li>
                                    <?php endif; endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">


                    <div class="col-sm-7">
                        <div class="header-left">
                            <div style="height:41px; display:flex; align-items:center;">
                                <h5></h5>
                                <p>
                                    <?php echo get_role($dataAdmin->role); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <?php if ($dataAdmin->photo == '') { ?>
                                    <img class="user-avatar rounded-circle" src="<?= base_url("assets/avatar-1.png"); ?>"
                                        alt="User Avatar">
                                <?php } else { ?>
                                    <img class="user-avatar rounded-circle" src="<?= base_url('img/' . $dataAdmin->photo); ?>"
                                        alt="User Avatar">
                                <?php } ?>
                            </a>

                            <div class="user-menu dropdown-menu">

                                <a class="nav-link" href="<?= base_url("setting/change_password"); ?>"><i
                                        class="fa fa-key mr-1"></i>Ganti Password</a>
                                <?php if ($dataAdmin->role == 'admin') { ?>
                                    <a class="nav-link" href="<?= base_url("setting/company_info"); ?>"><i
                                            class="fa fa-cog mr-1"></i>Pengaturan</a>
                                <?php } else { ?>
                                    <a class="nav-link" href="<?= base_url("setting/profile"); ?>"><i
                                            class="fa fa-user mr-1"></i>Profil</a>
                                <?php } ?>
                                <a class="nav-link" href="<?= base_url("auth/logout"); ?>"><i
                                        class="fa fa-power-off mr-1"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

        <?php } ?>