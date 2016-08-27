
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'data-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        "class" => "form-horizontal")
        )
);
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php //echo $form->errorSummary($model); ?>
<fieldset>    
    <div class="control-group">
        <?php echo $form->labelEx($model, 'user_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'user_id', UserMaster::model()->getUserList(), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'user_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'did_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'did_id', DidMaster::model()->getDidList(DidMaster::ACTIVE), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'did_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'subcription_status', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'subcription_status', $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'subcription_status'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'subscription_type', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'subscription_type'); ?>
            <?php echo $form->error($model, 'subscription_type'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id); ?>" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>