
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
<?php //echo $form->errorSummary($model); ?>
<fieldset>
    <div class="row">
    <?php if($model->isNewRecord){?>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'username', array("class" => "control-label")); ?>
        <div class="controls">
	    <?php $model->username=uniqid()?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
    </div>
    <?php } ?>
    <?php if($model->isNewRecord){?>
   <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_type', array("class" => "control-label")); ?>
        <div class="controls">
        <?php echo $form->dropDownList($model,'user_type', 
              array('subadmin' => 'SUBADMIN','provider' => 'PROVIDER','customer' => 'CUSTOMER','finance user' => 'FINANCE USER','rate admin' => 'RATE ADMIN'));?>
            <?php echo $form->error($model, 'user_type'); ?>
        </div>
    </div>
    <?php } ?>
    </div>
    <div class="row">
    <?php if($model->isNewRecord){?>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'password', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
    </div>
    <?php } ?>
     <?php if($model->isNewRecord){?>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'account_type', array("class" => "control-label")); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'account_type', 
              array('PREPAID' => 'PREPAID', 'POSTPAID' => 'POSTPAID'));?>
            <?php echo $form->error($model, 'account_type'); ?>
        </div>
    </div>
    </div>
    <?php }?>
    
        <div class="row">
    
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'credit', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'credit'); ?>
            <?php echo $form->error($model, 'credit'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'outbound_concurrent_call', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'outbound_concurrent_call'); ?>
            <?php echo $form->error($model, 'outbound_concurrent_call'); ?>
        </div>
    </div>
    </div>
    
    
    
    <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'first_name', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'first_name'); ?>
            <?php echo $form->error($model, 'first_name'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'last_name', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'last_name'); ?>
            <?php echo $form->error($model, 'last_name'); ?>
        </div>
    </div>
    </div>
    
    <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_email_address', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_email_address'); ?>
            <?php echo $form->error($model, 'user_email_address'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'invoice_email_address', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'invoice_email_address'); ?>
            <?php echo $form->error($model, 'invoice_email_address'); ?>
        </div>
    </div>
    </div>
    
    
      
    <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'invoice_type', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'invoice_type'); ?>
            <?php echo $form->error($model, 'invoice_type'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_status', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_status'); ?>
            <?php echo $form->error($model, 'user_status'); ?>
        </div>
    </div>
    </div>
    
    
    <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_cps', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_cps'); ?>
            <?php echo $form->error($model, 'user_cps'); ?>
        </div>
    </div>
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_package_id', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_package_id'); ?>
            <?php echo $form->error($model, 'user_package_id'); ?>
        </div>
    </div>
        </div>
    <div class="row">
        <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_ip', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_ip'); ?>
            <?php echo $form->error($model, 'user_ip'); ?>
        </div>
    </div>

    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="index.php?r=userMaster/admin" class="btn">Cancel</a>
    </div>
</fieldset>
<?php $this->endWidget(); ?>
