<?php
/* @var $this PackageMasterController */
/* @var $data PackageMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->package_id), array('view', 'id'=>$data->package_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_name')); ?>:</b>
	<?php echo CHtml::encode($data->package_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_description')); ?>:</b>
	<?php echo CHtml::encode($data->package_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_rategroup_id')); ?>:</b>
	<?php echo CHtml::encode($data->call_rategroup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_rategroup_id')); ?>:</b>
	<?php echo CHtml::encode($data->sms_rategroup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('package_status')); ?>:</b>
	<?php echo CHtml::encode($data->package_status); ?>
	<br />

	*/ ?>

</div>