<?php
/* @var $this PackageMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Package Masters',
);

$this->menu=array(
	array('label'=>'Create PackageMaster', 'url'=>array('create')),
	array('label'=>'Manage PackageMaster', 'url'=>array('admin')),
);
?>

<h1>Package Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
