<?php
/* @var $this UserBalanceDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Balance Details',
);

$this->menu=array(
	array('label'=>'Create UserBalanceDetails', 'url'=>array('create')),
	array('label'=>'Manage UserBalanceDetails', 'url'=>array('admin')),
);
?>

<h1>User Balance Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
