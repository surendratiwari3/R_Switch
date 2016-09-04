<?php
/* @var $this SellCallRatesController */
/* @var $model SellCallRates */

$this->breadcrumbs=array(
	'Sell Call Rates'=>array('index'),
	$model->sell_call_rates_id,
);

$this->menu=array(
	array('label'=>'List SellCallRates', 'url'=>array('index')),
	array('label'=>'Create SellCallRates', 'url'=>array('create')),
	array('label'=>'Update SellCallRates', 'url'=>array('update', 'id'=>$model->sell_call_rates_id)),
	array('label'=>'Delete SellCallRates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sell_call_rates_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SellCallRates', 'url'=>array('admin')),
);
?>

<h1>View SellCallRates #<?php echo $model->sell_call_rates_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sell_call_rates_id',
		'prefix',
		'destination',
		'connection_cost',
		'disconnection_cost',
		'grace_duration',
		'min_duration',
		'min_charge',
		'pulse_duration',
		'pulse_rate',
		'rate_card_id',
		'rate_status',
		'created_date',
		'updated_date',
	),
)); ?>
