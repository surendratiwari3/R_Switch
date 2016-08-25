<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */

$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserMaster', 'url'=>array('index')),
	array('label'=>'Manage UserMaster', 'url'=>array('admin')),
);
?>

<h1>Create UserMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>