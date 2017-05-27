<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'username'); ?>
		<?php
/*
        $us=Yii::app()->user->id;
        echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45,'value'=>$us));
        ?>
		<?php echo $form->error($model,'username'); */?>
	</div>
-->
    <?php
    //$model,'username',array('size'=>45,'maxlength'=>45,'value'=>$us);
    //$model->username=Yii::app()->user->id;
    ?>






	<div class="row">
		<?php echo $form->labelEx($model,'entry'); ?>
		<?php echo $form->textField($model,'entry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->timeField($model,'time',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>


    <div class="row">
        <?php echo $form->labelEx($model,'date');

        // Date Entry

        $this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
                'attribute'=>'date',
                'name'=>'Date',
                'value'=>$model->date,
                'model'=>$model,
                'options'=>array(
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'dateFormat'=>'yy-m-d'
                ),
                'htmlOptions'=>array('style'=>''),
            ));

        //    end

        ?>


        <?php echo $form->error($model,'date'); ?>
    </div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->