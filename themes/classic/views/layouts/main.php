<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 8/13/2016
 * Time: 11:26 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Class Switchs">
        <meta name="author" content="Riderss">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewportF" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Yii variable declaration -->
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $baserootUrl = Yii::app()->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>

        <!-- start: CSS -->
        <?php
        $cs->registerCssFile($baseUrl . '/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl . '/css/bootstrap-responsive.min.css');
        $cs->registerCssFile($baseUrl . '/css/style.css');
        $cs->registerCssFile($baseUrl . '/css/style-responsive.css');
        ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->

<!--        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
        <?php
        /*
         * The HTML5 shim, for IE6-8 support of HTML5 elements
         * [if lt IE 9]
         */
        $cs->registerCssFile($baseUrl . '/css/ie.css');
        /*
         * [endif]
         * [if IE 9]
         */
        $cs->registerCssFile($baseUrl . '/css/ie9.css');

        /*
         * [endif]
         */
        ?>
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="../../img/favicon.ico">
        <!-- end: Favicon -->

    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <?php require_once ('tpl_header.php') ?>
        </div>
        <!-- end: Header -->

        <!-- start: Container Content -->
        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu Navigation -->
                <div id="sidebar-left" class="span2">
                    <?php require_once ('tpl_navigation.php'); ?>
                </div>
                <!-- end: Main Menu Navigation-->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">
                    <?php echo $content; ?>
                </div>
                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        <!-- end: Container Content -->

        <!-- start: Model Sample Code -->
        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- end: Model Sample Code -->

        <div class="clearfix"></div>

        <!-- start: Footer -->
        <footer>
            <?php require_once ('tpl_footer.php') ?>
        </footer>
        <!-- end: Footer -->

        <!-- start: JavaScript-->
        <?php
        //$cs->registerScriptFile($baseUrl . '/js/jquery-1.9.1.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery-migrate-1.0.0.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery-ui-1.10.0.custom.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.ui.touch-punch.js');
        $cs->registerScriptFile($baseUrl . '/js/modernizr.js');
        $cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.cookie.js');
        $cs->registerScriptFile($baseUrl . '/js/fullcalendar.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.dataTables.min.js');
        $cs->registerScriptFile($baseUrl . '/js/excanvas.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.flot.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.flot.pie.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.flot.stack.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.flot.resize.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.chosen.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.uniform.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.cleditor.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.noty.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.elfinder.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.raty.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.iphone.toggle.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.uploadify-3.1.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.gritter.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.imagesloaded.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.masonry.min.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.knob.modified.js');
        $cs->registerScriptFile($baseUrl . '/js/jquery.sparkline.min.js');
        $cs->registerScriptFile($baseUrl . '/js/counter.js');
        $cs->registerScriptFile($baseUrl . '/js/retina.js');
        $cs->registerScriptFile($baseUrl . '/js/custom.js');
        ?>

        <!-- end: JavaScript-->

    </body>
</html>
