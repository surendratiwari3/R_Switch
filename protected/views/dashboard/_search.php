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
        <div class="dataTables_length">
            <label>Records per page: </label>
            <?php
            echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList);
            ?>
        </div>
    </div>
    <div class = "span5">
        <div class = "dataTables_filter">
            <label>Search: </label>
            <?php echo $form->textField($model, "user_master_id", array("class" => "form-control")); ?>
        </div>
    </div>
    <div class="spa24">
        <div class="dataTables_length">
            <label>&nbsp;</label>
            <a class="btn btn-primary" href="index.php?r=userMaster/create">Create User</a>
        </div>
    </div>               
    <?php $this->endWidget(); ?>
</div>