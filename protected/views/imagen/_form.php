<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ancho'); ?>
		<?php echo $form->textField($model,'ancho'); ?>
		<?php echo $form->error($model,'ancho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alto'); ?>
		<?php echo $form->textField($model,'alto'); ?>
		<?php echo $form->error($model,'alto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pie'); ?>
		<?php echo $form->textField($model,'pie',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seccion_idseccion'); ?>
		<?php echo $form->textField($model,'seccion_idseccion'); ?>
		<?php echo $form->error($model,'seccion_idseccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->