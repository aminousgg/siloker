<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Page title -->
    <title><?= APP_NAME ?> | <?= $judul ?></title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/dist/css/bootstrap.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/styles/style.css">
</head>
<body>
<!-- Simple splash screen-->
<?php $this->load->view('perusahaan/komponen/loading'); ?>
<!--[if lt IE 7]>
<![endif]-->

<!-- Header -->
<?php $this->load->view('perusahaan/komponen/header'); ?>

<!-- Navigation -->
<?php $this->load->view('perusahaan/komponen/menu'); ?>

<!-- Main Wrapper -->
<div id="wrapper">
  <!-- pannel -->
  <?php $this->load->view('perusahaan/komponen/panel'); ?>
  <!--  -->
  <div class="content animate-panel">
    <?php $this->load->view($file); ?>
  </div>
  <!--  -->
  <?php $this->load->view('perusahaan/komponen/footer'); ?>

</div>

<!-- Vendor scripts -->
<script src="<?= base_url() ?>asset/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery-flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="<?= base_url() ?>asset/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery.flot.spline/index.js"></script>
<script src="<?= base_url() ?>asset/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/iCheck/icheck.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?= base_url() ?>asset/scripts/homer.js"></script>
<script src="<?= base_url() ?>asset/scripts/charts.js"></script>

<script>

    $(function () {

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });

</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>

</body>
</html>