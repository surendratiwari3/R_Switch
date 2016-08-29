<?php
/* @var $this RategroupController */
/* @var $data Rategroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_group_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rate_group_id), array('view', 'id'=>$data->rate_group_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_group_name')); ?>:</b>
	<?php echo CHtml::encode($data->rate_group_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_group_description')); ?>:</b>
	<?php echo CHtml::encode($data->rate_group_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rategroup_status')); ?>:</b>
	<?php echo CHtml::encode($data->rategroup_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_group_type')); ?>:</b>
	<?php echo CHtml::encode($data->rate_group_type); ?>
	<br />


</div>