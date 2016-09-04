
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
   
    <?php 
    if(!$model->isNewRecord)
   {
	$model->last_name = $model->user_details->last_name;
	$model->first_name = $model->user_details->first_name;
	$model->invoice_email_address = $model->user_details->invoice_email_address;
	$model->user_email_address = $model->user_details->user_email_address;
	if($model->account_type=="PREPAID")
	{
	  $model->credit = $model->user_balance->prepaid_balance;
	}
	else
	{
	  $model->credit = $model->user_balance->postpaid_credit;
	}
    }
    ?>
<fieldset>
       
        <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'credit', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'credit',array('readOnly'=>"readonly")); ?>
            <?php echo $form->error($model, 'credit'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'outbound_concurrent_call', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'outbound_concurrent_call',array('readOnly'=>"readonly")); ?>
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
	                  <?php echo $form->dropDownList($model,'invoice_type', 
              array('daily' => 'DAILY', 'weekly' => 'WEEKLY','monthly' => 'MONTHLY','quartly' => 'QUARTLY','half_yearly' => 'HALF_YEARLY','yearly' => 'YEARLY'),array('readOnly'=>"readonly"));?>
            <?php echo $form->error($model, 'invoice_type'); ?>
        </div>
    </div>
   
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_status', array("class" => "control-label")); ?>
        <div class="controls">
                <?php echo $form->dropDownList($model,'user_status', 
              array('1' => 'ACTIVE', '0' => 'INACTIVE'),array('readOnly'=>"readonly"));?>
            <?php echo $form->error($model, 'user_status'); ?>
        </div>
    </div>
    </div>
    
    
    <div class="row">
    <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_cps', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_cps',array('readOnly'=>"readonly")); ?>
            <?php echo $form->error($model, 'user_cps'); ?>
        </div>
    </div>
        <div class="control-group span5">
        <?php echo $form->labelEx($model, 'user_ip', array("class" => "control-label")); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'user_ip',array('readOnly'=>"readonly")); ?>
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

