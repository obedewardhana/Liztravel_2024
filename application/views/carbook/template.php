<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $pageTitle; ?> -
        <?= $this->company_info->get_company_name(); ?>
    </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo base_url('img/favicon.png'); ?>">

    <!-- CSS
    ============================================ -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/animate.css">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/aos.css">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/ionicons.min.css">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/jquery.timepicker.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/video.js@8.10.0/dist/video-js.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/css/style.css">
</head>

<body class="px-0">

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

    <div class="main-wrapper">

        <?php include "header.php"; ?>

        <div id="content">
            <?php echo $contents; ?>
        </div>

        <?php include "footer.php"; ?>

        <!--Back To Start-->
        <a role="button" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.min.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.easing.1.3.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/video.js@8.10.0/dist/video.min.js"></script>

    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/owl.carousel.min.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/stripe-gradient.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.animateNumber.min.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/moment.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/bootstrap-datepicker.js"></script>
    <script
        src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/scrollax.min.js"></script>
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/assets/js/main.js"></script>

</body>

</html>