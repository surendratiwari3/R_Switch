<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->users_id=>array('view','id'=>$model->users_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserDetails', 'url'=>array('index')),
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'View UserDetails', 'url'=>array('view', 'id'=>$model->users_id)),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>Update UserDetails <?php echo $model->users_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>