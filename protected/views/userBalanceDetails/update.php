<?php
/* @var $this UserBalanceDetailsController */
/* @var $model UserBalanceDetails */

$this->breadcrumbs=array(
	'User Balance Details'=>array('index'),
	$model->balance_id=>array('view','id'=>$model->balance_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserBalanceDetails', 'url'=>array('index')),
	array('label'=>'Create UserBalanceDetails', 'url'=>array('create')),
	array('label'=>'View UserBalanceDetails', 'url'=>array('view', 'id'=>$model->balance_id)),
	array('label'=>'Manage UserBalanceDetails', 'url'=>array('admin')),
);
?>

<h1>Update UserBalanceDetails <?php echo $model->balance_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>