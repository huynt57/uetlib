
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
        <title>Londinium - premium responsive admin template by Eugene Kopyov</title>

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

    <body class="full-width">

        <!-- Navbar -->
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
                    <span class="sr-only">Toggle right icons</span>
                    <i class="icon-grid"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="sr-only">Toggle menu</span>
                    <i class="icon-paragraph-justify2"></i>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('document'); ?>">Thư viện hội sinh viên UET - VNU</a>
            </div>

            <ul class="nav navbar-nav collapse" id="navbar-menu">
                <li><a href="<?php echo Yii::app()->createUrl('document'); ?>"><i class="icon-screen2"></i> <span>Trang chủ</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book2"></i> <span>Loại sách</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php $bookTypes = Booktype::model()->findAll(); ?>
                        <?php foreach ($bookTypes as $bookType): ?>
                            <li><a href="<?php echo $this->createUrl('document/booktype', array('book_type' => $bookType->bookTypeID, 'book_type_name' => $bookType->bookTypeName)) ?>"><?php echo $bookType->bookTypeName; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-notebook"></i> <span>Chuyên mục</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php $branchTypes = Branchbook::model()->findAll(); ?>
                        <?php foreach ($branchTypes as $branchType): ?>
                            <li><a href="<?php echo $this->createUrl('document/branchtype', array('branch_type' => $branchType->branchID, 'branch_type_name' => $branchType->branchName)) ?>"><?php echo $branchType->branchName; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Tìm kiếm</span> <b class="caret"></b></a>
                    <div class="popup dropdown-menu dropdown-menu-right" style="display: none;">
                        <div class="popup-header">
                            <a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
                            <span>Tìm kiếm</span>
                            <a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
                        </div>
                        <form action="<?php echo Yii::app()->createUrl("search") ?>" class="breadcrumb-search" method="get">
                            <input type="text" placeholder="Gõ và nhấn Enter...." name="query" class="form-control" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <div class="row">
                                <div class="col-xs-6">
                                    <label class="radio">
                                        <div class="choice"><span class=""><input type="radio" name="search-option" class="styled" checked="checked" value="everything"></span></div>
                                        Mọi thứ
                                    </label>
                                    <label class="radio">
                                        <div class="choice"><span class=""><input type="radio" name="search-option" class="styled" value="books"></span></div>
                                        Sách
                                    </label>
                                </div>

                                <div class="col-xs-6">
                                    <label class="radio">
                                        <div class="choice"><span class=""><input type="radio" name="search-option" class="styled" value="users"></span></div>
                                        Người dùng
                                    </label>

                                </div>
                            </div>

                            <input type="submit" class="btn btn-block btn-success" value="Tìm kiém">
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /navbar -->
        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Page header -->
                <div class="page-header">
                    <div class="page-title">
                        <h3><?php echo CHtml::encode($this->headerTitle); ?><small>Horizontal navigation layout example</small></h3>
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