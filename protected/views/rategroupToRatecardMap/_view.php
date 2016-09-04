<?php
/* @var $this RategroupToRatecardMapController */
/* @var $data RategroupToRatecardMap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rategroup_to_ratecard_map_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rategroup_to_ratecard_map_id), array('view', 'id'=>$data->rategroup_to_ratecard_map_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_group_id')); ?>:</b>
	<?php echo CHtml::encode($data->rate_group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratecard_id')); ?>:</b>
	<?php echo CHtml::encode($data->ratecard_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gateway_id')); ?>:</b>
	<?php echo CHtml::encode($data->gateway_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gateway_priority')); ?>:</b>
	<?php echo CHtml::encode($data->gateway_priority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gateway_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->gateway_percentage); ?>
	<br />

	*/ ?>

</div>