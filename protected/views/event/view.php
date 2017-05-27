<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	//$model->id,
);

$this->menu=array(
	array('label'=>'To-Do List', 'url'=>array('index')),
	array('label'=>'Add Task', 'url'=>array('create')),
	array('label'=>'Edit Task', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Task', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>View Task</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'username',
		'entry',
		'time',
		'date',

	),
)); ?>
