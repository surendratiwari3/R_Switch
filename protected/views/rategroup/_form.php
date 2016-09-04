
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'rate_group-form',
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
        <?php echo $form->labelEx($model, 'rate_group_name', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'rate_group_name'); ?>
            <?php echo $form->error($model, 'rate_group_name'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'rate_group_description', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'rate_group_description'); ?>
            <?php echo $form->error($model, 'rate_group_description'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'rate_group_type', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'rate_group_type'); ?>
            <?php echo $form->error($model, 'rate_group_type'); ?>
        </div>
    </div>
    <div class="control-group">
    
        <?php echo $form->labelEx($model, 'rategroup_status', array("class" => "control-label")); ?>
        <div class="controls">
    <?php echo $form->dropDownList($model,'rategroup_status', 
              array('1' => 'ACTIVE', '0' => 'INACTIVE'));?>
            <?php echo $form->error($model, 'rategroup_status'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="index.php?r=packageMaster/admin" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>



















