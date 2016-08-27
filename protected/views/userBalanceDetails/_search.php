<?php
/* @var $this UserBalanceDetailsController */
/* @var $model UserBalanceDetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'balance_id'); ?>
		<?php echo $form->textField($model,'balance_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prepaid_balance'); ?>
		<?php echo $form->textField($model,'prepaid_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postpaid_credit'); ?>
		<?php echo $form->textField($model,'postpaid_credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->