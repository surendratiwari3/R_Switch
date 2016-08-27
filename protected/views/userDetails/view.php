<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->users_id,
);

$this->menu=array(
	array('label'=>'List UserDetails', 'url'=>array('index')),
	array('label'=>'Create UserDetails', 'url'=>array('create')),
	array('label'=>'Update UserDetails', 'url'=>array('update', 'id'=>$model->users_id)),
	array('label'=>'Delete UserDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->users_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDetails', 'url'=>array('admin')),
);
?>

<h1>View UserDetails #<?php echo $model->users_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'users_id',
		'first_name',
		'last_name',
		'country_id',
		'user_address',
		'phone_number',
		'invoice_email_address',
		'user_email_address',
		'invoice_start_date',
		'invoice_type',
		'user_status',
	),
)); ?>
