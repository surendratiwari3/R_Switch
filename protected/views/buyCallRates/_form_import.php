
<div class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Import Buy Rates</h3>
            </div>
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'import-form',
                'enableAjaxValidation' => true,
                'enableClientValidation' => true,
                'htmlOptions' => array(
                    "class" => "form-horizontal",
                    'enctype' => 'multipart/form-data'
                ))
            );
            ?>
            <div class="modal-body">
                <fieldset>
                    <div class="control-group">
                        <?php echo $form->labelEx($model, 'file', array("class" => "control-label")); ?>
                        <div class="controls">
                            <?php echo $form->fileField($model, 'file'); ?>
                            <?php echo $form->error($model, 'file'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <?php echo $form->labelEx($model, 'rate_status', array("class" => "control-label")); ?>
                        <div class="controls">
                           <?php echo $form->dropDownList($model,'rate_status',array('1' => 'ACTIVE', '0' => 'INACTIVE'),array('prompt' => 'Select Rate Status'));?>
                            <?php echo $form->error($model, 'file'); ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <?php echo $form->labelEx($model, 'rate_status', array("class" => "control-label")); ?>
                        <div class="controls">
                           <?php echo $form->dropDownList($model,'rate_status',array('1' => 'ACTIVE', '0' => 'INACTIVE'),array('prompt' => 'Select Rate Status'));?>
                            <?php echo $form->error($model, 'file'); ?>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div> 
