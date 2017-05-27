<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'List',
);

$this->menu=array(
	array('label'=>'Add Task', 'url'=>array('create')),
	array('label'=>'Edit Tasks', 'url'=>array('admin')),
);
?>

<h1>To-Do List</h1>
<?php
//echo $user->username;

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
