<div class="row-fluid">
    <?php
    Yii::app()->clientScript->registerScript('search', "
        $('#UserMaster_user_master_id').keyup(function(){
            search();
        });
        $('#UserMaster_pageSize').change(function(){
            search();
        });
        
        function search(){
            $.fn.yiiGridView.update('users-grid', {
                data: $('#search_form').serialize()
            });
            return false;
        }
    ");
    $form = $this->beginWidget('CActiveForm', array("method" => "GET", "id" => "search_form", "htmlOptions" => array("onSubmit" => "return false")));
    ?>
    <div class="span5">
        <label>Records per page : </label>
        <?php echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList); ?>
    </div>
    <div class="span5">
        <label>Search : </label>
        <?php echo $form->textField($model, "user_master_id", array("class" => "form-control")); ?>
    </div>
    <div class="span1 pull-right">
        <label>&nbsp;</label>
        <a class="btn btn-primary" title="Create User" href="<?php echo Yii::app()->createUrl("userMaster/create"); ?>">
            <i class="icon-plus-sign"></i>
        </a>
    </div>
</div>               
<?php $this->endWidget(); ?>
</div>