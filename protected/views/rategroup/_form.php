<?php
/* @var $this RategroupController */
/* @var $model Rategroup */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rategroup-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_group_name'); ?>
		<?php echo $form->textField($model,'rate_group_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rate_group_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_group_description'); ?>
		<?php echo $form->textField($model,'rate_group_description',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rate_group_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rategroup_status'); ?>
		<?php echo $form->textField($model,'rategroup_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'rategroup_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_group_type'); ?>
		<?php echo $form->textField($model,'rate_group_type',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'rate_group_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->