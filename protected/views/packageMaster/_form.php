
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
        <?php echo $form->labelEx($model, 'package_name', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'package_name'); ?>
            <?php echo $form->error($model, 'package_name'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'package_description', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'package_description'); ?>
            <?php echo $form->error($model, 'package_description'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'call_rategroup_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'call_rategroup_id'); ?>
            <?php echo $form->error($model, 'call_rategroup_id'); ?>
        </div>
    </div>
    <div class="control-group">
    
        <?php echo $form->labelEx($model, 'package_status', array("class" => "control-label")); ?>
        <div class="controls">
    <?php echo $form->dropDownList($model,'package_status', 
              array('1' => 'ACTIVE', '0' => 'INACTIVE'));?>
            <?php echo $form->error($model, 'package_status'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="index.php?r=packageMaster/admin" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>