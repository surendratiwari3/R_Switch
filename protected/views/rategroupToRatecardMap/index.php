<?php
/* @var $this RategroupToRatecardMapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rategroup To Ratecard Maps',
);

$this->menu=array(
	array('label'=>'Create RategroupToRatecardMap', 'url'=>array('create')),
	array('label'=>'Manage RategroupToRatecardMap', 'url'=>array('admin')),
);
?>

<h1>Rategroup To Ratecard Maps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
