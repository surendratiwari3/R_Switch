<?php
/* @var $this BuyCallRatesController */
/* @var $model BuyCallRates */

$this->breadcrumbs=array(
	'Buy Call Rates'=>array('index'),
	$model->buy_call_rates_id,
);

$this->menu=array(
	array('label'=>'List BuyCallRates', 'url'=>array('index')),
	array('label'=>'Create BuyCallRates', 'url'=>array('create')),
	array('label'=>'Update BuyCallRates', 'url'=>array('update', 'id'=>$model->buy_call_rates_id)),
	array('label'=>'Delete BuyCallRates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->buy_call_rates_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BuyCallRates', 'url'=>array('admin')),
);
?>

<h1>View BuyCallRates #<?php echo $model->buy_call_rates_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'buy_call_rates_id',
		'prefix',
		'destination',
		'connection_cost',
		'disconnection_cost',
		'grace_duration',
		'min_duration',
		'per_second_charge',
		'pulse_rate',
		'pulse_duration',
		'rate_card_id',
		'rate_status',
		'created_date',
		'updated_date',
	),
)); ?>
