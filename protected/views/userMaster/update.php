<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */

$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	$model->user_master_id=>array('view','id'=>$model->user_master_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserMaster', 'url'=>array('index')),
	array('label'=>'Create UserMaster', 'url'=>array('create')),
	array('label'=>'View UserMaster', 'url'=>array('view', 'id'=>$model->user_master_id)),
	array('label'=>'Manage UserMaster', 'url'=>array('admin')),
);
?>

<h1>Update UserMaster <?php echo $model->user_master_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>