<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'To-Do List', 'url'=>array('index')),
	array('label'=>'Add Task', 'url'=>array('create')),
	array('label'=>'View Tasks', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage List', 'url'=>array('admin')),
);
?>

<h1>Update Event <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>