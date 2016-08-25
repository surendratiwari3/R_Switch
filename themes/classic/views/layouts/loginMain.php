<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 8/20/2016
 * Time: 5:37 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="Login Page">
    <meta name="author" content="Login">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

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


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    <?php
    /*
     * [if IE 9]>
     */
    $cs->registerCssFile($baseUrl . '/css/ie9.css');
    /*
     * <![endif]
     */
    ?>

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url(img/bg-login.jpg) !important; }
    </style>
</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid"> 
        <?php echo $content; ?>
   </div><!--/.fluid-container-->

</div><!--/fluid-row-->

<!-- start: JavaScript-->

<?php

$cs->registerScriptFile($baseUrl . '/js/jquery-1.9.1.min.js');
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
