<?php
/* @var $this RategroupController */
/* @var $model Rategroup */

$this->breadcrumbs=array(
	'Rategroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rategroup', 'url'=>array('index')),
	array('label'=>'Manage Rategroup', 'url'=>array('admin')),
);
?>

<h1>Create Rategroup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>