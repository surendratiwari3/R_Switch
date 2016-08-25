<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_master_id'); ?>
		<?php echo $form->textField($model,'user_master_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_ip'); ?>
		<?php echo $form->textField($model,'user_ip',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_type'); ?>
		<?php echo $form->textField($model,'account_type',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outbound_concurrent_call'); ?>
		<?php echo $form->textField($model,'outbound_concurrent_call'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_cps'); ?>
		<?php echo $form->textField($model,'user_cps'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_package_id'); ?>
		<?php echo $form->textField($model,'user_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_created_date'); ?>
		<?php echo $form->textField($model,'user_created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_updated_date'); ?>
		<?php echo $form->textField($model,'user_updated_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->