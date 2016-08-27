<?php
/* @var $this RategroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rategroups',
);

$this->menu=array(
	array('label'=>'Create Rategroup', 'url'=>array('create')),
	array('label'=>'Manage Rategroup', 'url'=>array('admin')),
);
?>

<h1>Rategroups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
