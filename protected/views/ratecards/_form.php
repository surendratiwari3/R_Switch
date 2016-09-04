
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'package-master-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        "class" => "form-horizontal")
        ));
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>
<fieldset>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'ratecard_name', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'ratecard_name'); ?>
            <?php echo $form->error($model, 'ratecard_name'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'ratecard_description', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'ratecard_description'); ?>
            <?php echo $form->error($model, 'ratecard_description'); ?>
        </div>
    </div>
    <div class="control-group">
    
        <?php echo $form->labelEx($model, 'ratecard_status', array("class" => "control-label")); ?>
        <div class="controls">
    <?php echo $form->dropDownList($model,'ratecard_status', 
              array('1' => 'ACTIVE', '0' => 'INACTIVE'));?>
            <?php echo $form->error($model, 'ratecard_status'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="index.php?r=ratecards/admin" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>
	