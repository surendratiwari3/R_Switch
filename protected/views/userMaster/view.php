<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */

$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	$model->user_master_id,
);

$this->menu=array(
	array('label'=>'List UserMaster', 'url'=>array('index')),
	array('label'=>'Create UserMaster', 'url'=>array('create')),
	array('label'=>'Update UserMaster', 'url'=>array('update', 'id'=>$model->user_master_id)),
	array('label'=>'Delete UserMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_master_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserMaster', 'url'=>array('admin')),
);
?>

<h1>View UserMaster #<?php echo $model->user_master_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_master_id',
		'username',
		'password',
		'user_ip',
		'account_type',
		'user_type',
		'outbound_concurrent_call',
		'user_cps',
		'user_package_id',
		'user_created_date',
		'user_updated_date',
	),
)); ?>
