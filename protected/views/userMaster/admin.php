<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */

$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserMaster', 'url'=>array('index')),
	array('label'=>'Create UserMaster', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Masters</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-master-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'username',
		'user_ip',
		'account_type',
		'user_type',
		/*
		'outbound_concurrent_call',
		'user_cps',
		'user_package_id',
		'user_created_date',
		'user_updated_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
