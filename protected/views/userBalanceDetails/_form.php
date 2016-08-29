<?php
/* @var $this UserBalanceDetailsController */
/* @var $model UserBalanceDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-balance-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prepaid_balance'); ?>
		<?php echo $form->textField($model,'prepaid_balance'); ?>
		<?php echo $form->error($model,'prepaid_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postpaid_credit'); ?>
		<?php echo $form->textField($model,'postpaid_credit'); ?>
		<?php echo $form->error($model,'postpaid_credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->