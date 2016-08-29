<?php
/* @var $this UserBalanceDetailsController */
/* @var $data UserBalanceDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('balance_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->balance_id), array('view', 'id'=>$data->balance_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prepaid_balance')); ?>:</b>
	<?php echo CHtml::encode($data->prepaid_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postpaid_credit')); ?>:</b>
	<?php echo CHtml::encode($data->postpaid_credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>