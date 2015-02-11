
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
        <title><?php echo $this->pageTitle; ?></title>

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/londinium-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/charts/sparkline.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/select2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/inputmask.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/autosize.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/inputlimit.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/listbox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/multiselect.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/validate.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/tags.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/switch.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/uploader/plupload.full.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/uploader/plupload.queue.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/forms/wysihtml5/toolbar.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/fancybox.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/moment.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/jgrowl.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/fullcalendar.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/plugins/interface/timepicker.min.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/application.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.js"></script>

    </head>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Get current url
            // Select an a element that has the matching href and apply a class of 'active'. Also prepend a - to the content of the link

            var url = window.location.href;
            $('a[href="' + url + '"]').parent().addClass('active');


        });
    </script>
    <body>

        <!-- Navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Quản trị hệ thống</a>
                <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle navbar</span>
                    <i class="icon-grid3"></i>
                </button>
                <button type="button" class="navbar-toggle offcanvas">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-paragraph-justify2"></i>
                </button>
            </div>

            <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
                <li class="user">
                    <a>
                        <span>Quản trị viên</span>
                    </a>

                </li>
            </ul>
        </div>
        <!-- /navbar -->
        <!-- Page container -->
        <div class="page-container">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="sidebar-content">
                    <!-- Main navigation -->
                    <ul class="navigation">
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin') ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>

                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/document') ?>">Quản lý sách</a></li>
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/user') ?>">Quản lý người dùng</a></li>
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/copy') ?>">Quản lý các bản copy của sách</a></li>
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/lend') ?>">Quản lý việc cho mượn</a></li>
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/booktype') ?>">Quản lý Book Type</a></li>
                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admin/branch') ?>">Quản lý Branch</a></li>
                    </ul>
                    <!-- /main navigation -->
                </div>
            </div>
            <!-- /sidebar -->
            <!-- Page content -->
            <div class="page-content">
                <!-- Page header -->
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <!-- /page header -->
                <?php echo $content; ?>


                <!-- Footer -->
                <div class="footer clearfix">
                    <div class="pull-left">Copyright 2014 - UETLib. All Rights Reserved. Developed by <a href="https://www.facebook.com/zhu.gheliang.5">Nguyễn Thế Huy</a> - K57CA UET - VNU - <a href="https://bluebee-uet.com">Bluebee UET Team</a></div>

                </div>
                <!-- /footer -->
            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

    </body>
</html>