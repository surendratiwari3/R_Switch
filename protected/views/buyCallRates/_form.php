
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'buy-call-rates-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        "class" => "form-horizontal")
    )
);
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php //echo $form->errorSummary($model); ?>
<fieldset>
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'prefix', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'prefix'); ?>
            <?php echo $form->error($model, 'prefix'); ?>
        </div>
    </div>
      <div class="control-group span5">
        <?php echo $form->labelEx($model, 'destination', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'destination'); ?>
            <?php echo $form->error($model, 'destination'); ?>
        </div>
    </div>
    </div>
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'connection_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'connection_cost'); ?>
            <?php echo $form->error($model, 'connection_cost'); ?>
        </div>
    </div>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'disconnection_cost', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'disconnection_cost'); ?>
            <?php echo $form->error($model, 'disconnection_cost'); ?>
        </div>
    </div>
    </div>
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'grace_duration', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'grace_duration'); ?>
            <?php echo $form->error($model, 'grace_duration'); ?>
        </div>
    </div>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'min_duration', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'min_duration'); ?>
            <?php echo $form->error($model, 'min_duration'); ?>
        </div>
    </div>
        </div>
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'pulse_rate', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'pulse_rate'); ?>
            <?php echo $form->error($model, 'pulse_rate'); ?>
        </div>
    </div>
        <div class="control-group span5">
        <?php echo $form->labelEx($model, 'pulse_duration', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'pulse_duration'); ?>
            <?php echo $form->error($model, 'pulse_duration'); ?>
        </div>
    </div>
    </div>
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'rate_card_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo CHtml::activeDropDownList($model,'rate_card_id', $model->getRatecard(),array('prompt' => 'Select Rate Card')); ?>
            <?php echo $form->error($model, 'rate_card_id'); ?>
        </div>
    </div>
    
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'rate_status', array("class" => "control-label")); ?>
        <div class="controls">
                <?php echo $form->dropDownList($model,'rate_status', 
              array('1' => 'ACTIVE', '0' => 'INACTIVE'));?>
            <?php echo $form->error($model, 'rate_status'); ?>
        </div>
    </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="<?php echo Yii::app()->createUrl("buyCallRates/admin"); ?>" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>
