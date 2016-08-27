
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-master-form',
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
        <?php echo $form->labelEx($model, 'user_ip', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_ip'); ?>
            <?php echo $form->error($model, 'user_ip'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'username', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'account_type', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'account_type'); ?>
            <?php echo $form->error($model, 'account_type'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'user_type', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_type'); ?>
            <?php echo $form->error($model, 'user_type'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'outbound_concurrent_call', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'outbound_concurrent_call'); ?>
            <?php echo $form->error($model, 'outbound_concurrent_call'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'user_cps', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_cps'); ?>
            <?php echo $form->error($model, 'user_cps'); ?>
        </div>
    </div>
    <div class="control-group">
        <?php echo $form->labelEx($model, 'user_package_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_package_id'); ?>
            <?php echo $form->error($model, 'user_package_id'); ?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="index.php?r=userMaster/admin" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>