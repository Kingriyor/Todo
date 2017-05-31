<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->

<h3>Application Details</h3>

<h3>Users</h3>
<ul>
    <li>Register as a new user</li>
    <li>Login to your to-do list</li>
    <li>Add,Delete and Edit your lists</li>
</ul>
<h3>Admin</h3>
<p>If Logged in as Admin</p>
<ul>
    <li>You have access to the admin tab</li>
    <li>You can add, delete and edit users details</li>
    <li>You can maintain your own To-Do list</li>
    <li>You CANNOT access other users tasks</li>
</ul>