<?php
/* @var $this UserDetailsController */
/* @var $data UserDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->users_id), array('view', 'id'=>$data->users_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::encode($data->country_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_email_address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_start_date')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_type')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_status')); ?>:</b>
	<?php echo CHtml::encode($data->user_status); ?>
	<br />

	*/ ?>

</div>