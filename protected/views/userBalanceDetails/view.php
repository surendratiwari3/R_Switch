<?php
/* @var $this UserBalanceDetailsController */
/* @var $model UserBalanceDetails */

$this->breadcrumbs=array(
	'User Balance Details'=>array('index'),
	$model->balance_id,
);

$this->menu=array(
	array('label'=>'List UserBalanceDetails', 'url'=>array('index')),
	array('label'=>'Create UserBalanceDetails', 'url'=>array('create')),
	array('label'=>'Update UserBalanceDetails', 'url'=>array('update', 'id'=>$model->balance_id)),
	array('label'=>'Delete UserBalanceDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->balance_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserBalanceDetails', 'url'=>array('admin')),
);
?>

<h1>View UserBalanceDetails #<?php echo $model->balance_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'balance_id',
		'prepaid_balance',
		'postpaid_credit',
		'user_id',
	),
)); ?>
