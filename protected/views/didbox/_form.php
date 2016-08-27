
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
        <?php echo $form->labelEx($model, 'did_number', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'did_number'); ?>
            <?php echo $form->error($model, 'did_number'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'provider_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'provider_id', UserMaster::model()->getProviderList(), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'provider_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'status', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'status', $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'status'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'did_availability', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->dropDownList($model, 'did_availability', $model->availabilityArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
            <?php echo $form->error($model, 'did_availability'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'provider_monthly_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'provider_monthly_cost'); ?>
            <?php echo $form->error($model, 'provider_monthly_cost'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'provider_per_minute_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'provider_per_minute_cost'); ?>
            <?php echo $form->error($model, 'provider_per_minute_cost'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'customer_monthly_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'customer_monthly_cost'); ?>
            <?php echo $form->error($model, 'customer_monthly_cost'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'customer_per_minute_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'customer_per_minute_cost'); ?>
            <?php echo $form->error($model, 'customer_per_minute_cost'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id); ?>" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>