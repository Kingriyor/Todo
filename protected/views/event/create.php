<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'List'=>array('index'),
	'New Task',
);

$this->menu=array(
	array('label'=>'Task List', 'url'=>array('index')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);

?>

<h1>Create Event</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>