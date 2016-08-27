<?php
/* @var $this UserDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Details',
);

$this->menu=array(
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>User Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
