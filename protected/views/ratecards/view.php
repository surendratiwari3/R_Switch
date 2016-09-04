<?php
/* @var $this RatecardsController */
/* @var $model Ratecards */

$this->breadcrumbs=array(
	'Ratecards'=>array('index'),
	$model->ratecard_id,
);

$this->menu=array(
	array('label'=>'List Ratecards', 'url'=>array('index')),
	array('label'=>'Create Ratecards', 'url'=>array('create')),
	array('label'=>'Update Ratecards', 'url'=>array('update', 'id'=>$model->ratecard_id)),
	array('label'=>'Delete Ratecards', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ratecard_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ratecards', 'url'=>array('admin')),
);
?>

<h1>View Ratecards #<?php echo $model->ratecard_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ratecard_id',
		'ratecard_name',
		'ratecard_description',
		'created_date',
		'updated_date',
		'ratecard_status',
	),
)); ?>
