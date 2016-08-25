<?php
/* @var $this UserMasterController */
/* @var $data UserMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_master_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_master_id), array('view', 'id'=>$data->user_master_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_ip')); ?>:</b>
	<?php echo CHtml::encode($data->user_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_type')); ?>:</b>
	<?php echo CHtml::encode($data->account_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outbound_concurrent_call')); ?>:</b>
	<?php echo CHtml::encode($data->outbound_concurrent_call); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_cps')); ?>:</b>
	<?php echo CHtml::encode($data->user_cps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_package_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_package_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_created_date')); ?>:</b>
	<?php echo CHtml::encode($data->user_created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->user_updated_date); ?>
	<br />

	*/ ?>

</div>