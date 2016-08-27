<div id="flash-message">
    <?php
    foreach (Yii::app()->user->getFlashes() as $class => $message) {
        echo common::getMessage($class, $message) . "\n";
    }
    ?>
</div>
<div class="indicator" id="ajaxLoader"><span class="spinner spinner7"></span></div>
<?php
Yii::app()->clientScript->registerScript(
        'myHideEffect', '$(".alert").animate({opacity: 1.0}, 1000000000000000).fadeOut("slow");', CClientScript::POS_READY
);
?>