<?php
/* @var $this UserBalanceDetailsController */
/* @var $model UserBalanceDetails */

$this->breadcrumbs=array(
	'User Balance Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserBalanceDetails', 'url'=>array('index')),
	array('label'=>'Manage UserBalanceDetails', 'url'=>array('admin')),
);
?>

<h1>Create UserBalanceDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>