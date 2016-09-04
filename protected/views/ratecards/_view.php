<?php
/* @var $this RatecardsController */
/* @var $data Ratecards */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratecard_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ratecard_id), array('view', 'id'=>$data->ratecard_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratecard_name')); ?>:</b>
	<?php echo CHtml::encode($data->ratecard_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratecard_description')); ?>:</b>
	<?php echo CHtml::encode($data->ratecard_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratecard_status')); ?>:</b>
	<?php echo CHtml::encode($data->ratecard_status); ?>
	<br />


</div>