<?php
/* @var $this UsersController */
/* @var $model Users */
/*
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
*/
?>
<div class="container" align="center">
    <h1>New User Registration</h1>

    <?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
