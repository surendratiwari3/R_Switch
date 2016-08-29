<?php
/* @var $this RategroupController */
/* @var $model Rategroup */

$this->breadcrumbs=array(
	'Rategroups'=>array('index'),
	$model->rate_group_id=>array('view','id'=>$model->rate_group_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rategroup', 'url'=>array('index')),
	array('label'=>'Create Rategroup', 'url'=>array('create')),
	array('label'=>'View Rategroup', 'url'=>array('view', 'id'=>$model->rate_group_id)),
	array('label'=>'Manage Rategroup', 'url'=>array('admin')),
);
?>

<h1>Update Rategroup <?php echo $model->rate_group_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>