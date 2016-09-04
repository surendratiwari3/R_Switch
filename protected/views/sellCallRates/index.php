<?php
/* @var $this SellCallRatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sell Call Rates',
);

$this->menu=array(
	array('label'=>'Create SellCallRates', 'url'=>array('create')),
	array('label'=>'Manage SellCallRates', 'url'=>array('admin')),
);
?>

<h1>Sell Call Rates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
