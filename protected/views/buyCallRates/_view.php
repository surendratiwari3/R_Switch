<?php
/* @var $this BuyCallRatesController */
/* @var $data BuyCallRates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('buy_call_rates_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->buy_call_rates_id), array('view', 'id'=>$data->buy_call_rates_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefix')); ?>:</b>
	<?php echo CHtml::encode($data->prefix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination')); ?>:</b>
	<?php echo CHtml::encode($data->destination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('connection_cost')); ?>:</b>
	<?php echo CHtml::encode($data->connection_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disconnection_cost')); ?>:</b>
	<?php echo CHtml::encode($data->disconnection_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grace_duration')); ?>:</b>
	<?php echo CHtml::encode($data->grace_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_duration')); ?>:</b>
	<?php echo CHtml::encode($data->min_duration); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('per_second_charge')); ?>:</b>
	<?php echo CHtml::encode($data->per_second_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pulse_rate')); ?>:</b>
	<?php echo CHtml::encode($data->pulse_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pulse_duration')); ?>:</b>
	<?php echo CHtml::encode($data->pulse_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_card_id')); ?>:</b>
	<?php echo CHtml::encode($data->rate_card_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_status')); ?>:</b>
	<?php echo CHtml::encode($data->rate_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	*/ ?>

</div>