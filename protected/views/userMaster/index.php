<?php
/* @var $this UserMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Masters',
);

$this->menu=array(
	array('label'=>'Create UserMaster', 'url'=>array('create')),
	array('label'=>'Manage UserMaster', 'url'=>array('admin')),
);
?>

<h1>User Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
