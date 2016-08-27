<div class="row-fluid">
    <?php
    Yii::app()->clientScript->registerScript('search', "
        $('#PackageMaster_package_id').keyup(function(){
            search();
        });
        $('#PackageMaster_pageSize').change(function(){
            search();
        });
        
        function search(){
            $.fn.yiiGridView.update('package-grid', {
                data: $('#search_form').serialize()
            });
            return false;
        }
    ");
    $form = $this->beginWidget('CActiveForm', array("method" => "GET", "id" => "search_form", "htmlOptions" => array("onSubmit" => "return false")));
    ?>
    <div class="span5">
        <div id="DataTables_Table_0_length" class="dataTables_length"><label>
                <?php
                echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList);
                ?>
        </div>
    </div>
    <div class = "span5">
        <div class = "dataTables_filter" id = "DataTables_Table_0_filter">
            <label>Search: <?php echo $form->textField($model, "package_id", array("class" => "form-control"))
                ?></label>
        </div>
    </div>
    <div class="spa24">
        <div id="DataTables_Table_0_length" class="dataTables_length"><label>
                <a class="btn btn-primary" href="index.php?r=packageMaster/create">Create Package</a>
        </div>
    </div>               
    <?php $this->endWidget(); ?>
</div>