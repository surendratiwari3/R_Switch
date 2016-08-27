<div class="row-fluid">
    <div class="span12">
        <?php
        Yii::app()->clientScript->registerScript('search', "
        $('#DidMaster_did_id').keyup(function(){
            search();
        });
        $('#DidMaster_pageSize').change(function(){
            search();
        });
        
        var search = function(){
            $.fn.yiiGridView.update('data-grid', {
                data: $('#search_form').serialize()
            });
            return false;
        }
    ");
        $form = $this->beginWidget('CActiveForm', array("method" => "GET", "id" => "search_form", "htmlOptions" => array("onSubmit" => "return false")));
        ?>
        <div class="span4">
            <label>Records per page :</label> <?php echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList); ?>
        </div>
        <div class="span3">
            <label>Search :</label><?php echo $form->textField($model, "did_id", array("class" => "form-control")); ?>
        </div>
        <div class="span2">
            <label>Action :</label> <?php echo $form->dropDownList($model, "status", $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"), "class" => "multipleDelete", "data-href" => Yii::app()->createUrl(Yii::app()->controller->id . "/delete", array("status" => "SETSTATUS")))); ?>
        </div>
        <div class="span2 pull-right">
            <label>&nbsp;</label>
            <a class="btn btn-primary" title="Create Didbox" href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id . "/create"); ?>">
                <i class="icon-plus-sign"></i>
            </a>            
            <?php
            echo CHtml::Link('<i class="icon-download"></i>', array("didbox/import"), array(
                "title" => "Import",
                "class" => "btn btn-success importRecord"
            ));
            ?>
        </div>
    </div>               
    <?php $this->endWidget(); ?>
</div>
</div>