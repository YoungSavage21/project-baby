<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="<?= base_url('assets/'); ?>" data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $title ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Vendor -->
    <link rel="stylesheet"
        href="<?= base_url('assets/'); ?>vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?= base_url('assets/'); ?>vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url('assets/'); ?>vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/'); ?>js/config.js"></script>
</head>

<body>

    <!-- CONTENT START -->
    <?php $this->load->view($content); ?>
    <!-- CONTENT END -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/'); ?>vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url('assets/'); ?>vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- <script src="<?= base_url('assets/'); ?>vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script> -->
    <script src="<?= base_url('assets/'); ?>vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/'); ?>js/pages-auth.js"></script>
</body>

</html>