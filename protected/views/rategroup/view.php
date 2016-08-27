<?php
/* @var $this RategroupController */
/* @var $model Rategroup */

$this->breadcrumbs=array(
	'Rategroups'=>array('index'),
	$model->rate_group_id,
);

$this->menu=array(
	array('label'=>'List Rategroup', 'url'=>array('index')),
	array('label'=>'Create Rategroup', 'url'=>array('create')),
	array('label'=>'Update Rategroup', 'url'=>array('update', 'id'=>$model->rate_group_id)),
	array('label'=>'Delete Rategroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rate_group_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rategroup', 'url'=>array('admin')),
);
?>

<h1>View Rategroup #<?php echo $model->rate_group_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rate_group_id',
		'rate_group_name',
		'rate_group_description',
		'rategroup_status',
		'rate_group_type',
	),
)); ?>
