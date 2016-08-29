<?php
/* @var $this RategroupController */
/* @var $model Rategroup */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rate_group_id'); ?>
		<?php echo $form->textField($model,'rate_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_group_name'); ?>
		<?php echo $form->textField($model,'rate_group_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_group_description'); ?>
		<?php echo $form->textField($model,'rate_group_description',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rategroup_status'); ?>
		<?php echo $form->textField($model,'rategroup_status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_group_type'); ?>
		<?php echo $form->textField($model,'rate_group_type',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->