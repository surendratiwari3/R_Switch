<?php
/* @var $this RategroupToRatecardMapController */
/* @var $model RategroupToRatecardMap */

$this->breadcrumbs=array(
	'Rategroup To Ratecard Maps'=>array('index'),
	$model->rategroup_to_ratecard_map_id,
);

$this->menu=array(
	array('label'=>'List RategroupToRatecardMap', 'url'=>array('index')),
	array('label'=>'Create RategroupToRatecardMap', 'url'=>array('create')),
	array('label'=>'Update RategroupToRatecardMap', 'url'=>array('update', 'id'=>$model->rategroup_to_ratecard_map_id)),
	array('label'=>'Delete RategroupToRatecardMap', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rategroup_to_ratecard_map_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RategroupToRatecardMap', 'url'=>array('admin')),
);
?>

<h1>View RategroupToRatecardMap #<?php echo $model->rategroup_to_ratecard_map_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rategroup_to_ratecard_map_id',
		'rate_group_id',
		'ratecard_id',
		'start_date',
		'end_date',
		'start_time',
		'end_time',
		'gateway_id',
		'gateway_priority',
		'gateway_percentage',
	),
)); ?>
