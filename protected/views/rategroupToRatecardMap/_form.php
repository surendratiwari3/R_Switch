
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
        <?php echo $form->labelEx($model, 'rate_group_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'rate_group_id'); ?>
            <?php echo $form->error($model, 'rate_group_id'); ?>
        </div>
    </div>
      <div class="control-group">
        <?php echo $form->labelEx($model, 'ratecard_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'ratecard_id'); ?>
            <?php echo $form->error($model, 'ratecard_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'start_date', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'start_date'); ?>
            <?php echo $form->error($model, 'start_date'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'end_date', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'end_date'); ?>
            <?php echo $form->error($model, 'end_date'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'start_time', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'start_time'); ?>
            <?php echo $form->error($model, 'start_time'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'end_time', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'end_time'); ?>
            <?php echo $form->error($model, 'end_time'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'gateway_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'gateway_id'); ?>
            <?php echo $form->error($model, 'gateway_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'gateway_priority', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'gateway_priority'); ?>
            <?php echo $form->error($model, 'gateway_priority'); ?>
        </div>
    </div>
     <div class="control-group">
        <?php echo $form->labelEx($model, 'gateway_percentage', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'gateway_percentage'); ?>
            <?php echo $form->error($model, 'gateway_percentage'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id); ?>" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>
