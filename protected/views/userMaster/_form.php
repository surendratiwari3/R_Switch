<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'user_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_type'); ?>
		<?php echo $form->textField($model,'account_type',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'account_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outbound_concurrent_call'); ?>
		<?php echo $form->textField($model,'outbound_concurrent_call'); ?>
		<?php echo $form->error($model,'outbound_concurrent_call'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_cps'); ?>
		<?php echo $form->textField($model,'user_cps'); ?>
		<?php echo $form->error($model,'user_cps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_package_id'); ?>
		<?php echo $form->textField($model,'user_package_id'); ?>
		<?php echo $form->error($model,'user_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_created_date'); ?>
		<?php echo $form->textField($model,'user_created_date'); ?>
		<?php echo $form->error($model,'user_created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_updated_date'); ?>
		<?php echo $form->textField($model,'user_updated_date'); ?>
		<?php echo $form->error($model,'user_updated_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->