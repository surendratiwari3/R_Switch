<?php
/* @var $this PackageMasterController */
/* @var $model PackageMaster */

$this->breadcrumbs=array(
	'Package Masters'=>array('index'),
	$model->package_id,
);

$this->menu=array(
	array('label'=>'List PackageMaster', 'url'=>array('index')),
	array('label'=>'Create PackageMaster', 'url'=>array('create')),
	array('label'=>'Update PackageMaster', 'url'=>array('update', 'id'=>$model->package_id)),
	array('label'=>'Delete PackageMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->package_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PackageMaster', 'url'=>array('admin')),
);
?>

<h1>View PackageMaster #<?php echo $model->package_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'package_id',
		'package_name',
		'package_description',
		'call_rategroup_id',
		'sms_rategroup_id',
		'created_date',
		'updated_date',
		'package_status',
	),
)); ?>
