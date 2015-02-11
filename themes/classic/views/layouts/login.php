
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

</script>
<body class="full-width page-condensed">  
    <!-- Page header -->

    <!-- /page header -->
    <?php echo $content; ?>


    <!-- Footer -->
    <div class="footer clearfix">
        <div class="pull-left">Copyright 2014 - UETLib. All Rights Reserved. Developed by <a href="https://www.facebook.com/zhu.gheliang.5">Nguyễn Thế Huy</a> - K57CA UET - VNU - <a href="https://bluebee-uet.com">Bluebee UET Team</a></div>

    </div>
    <!-- /footer -->

    <!-- /page content -->

    <!-- /page container -->

</body>
</html>