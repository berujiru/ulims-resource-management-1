<?php
/* @var $this EquipmentmaintenanceController */
/* @var $model Equipmentmaintenance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipmentmaintenance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipmentID'); ?>
		<?php echo $form->textField($model,'equipmentID',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'equipmentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isdone'); ?>
		<?php echo $form->textField($model,'isdone'); ?>
		<?php echo $form->error($model,'isdone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintenancedata'); ?>
		<?php echo $form->textArea($model,'maintenancedata',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'maintenancedata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->