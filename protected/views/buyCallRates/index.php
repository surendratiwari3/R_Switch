<?php
/* @var $this BuyCallRatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buy Call Rates',
);

$this->menu=array(
	array('label'=>'Create BuyCallRates', 'url'=>array('create')),
	array('label'=>'Manage BuyCallRates', 'url'=>array('admin')),
);
?>

<h1>Buy Call Rates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
