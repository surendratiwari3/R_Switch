<?php
/* @var $this RatecardsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ratecards',
);

$this->menu=array(
	array('label'=>'Create Ratecards', 'url'=>array('create')),
	array('label'=>'Manage Ratecards', 'url'=>array('admin')),
);
?>

<h1>Ratecards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
