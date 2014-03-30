<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuerpo'); ?>
		<?php echo $form->textArea($model,'cuerpo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cuerpo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ranking'); ?>
		<?php echo $form->textField($model,'ranking'); ?>
		<?php echo $form->error($model,'ranking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_idlink'); ?>
		<?php echo $form->textField($model,'link_idlink'); ?>
		<?php echo $form->error($model,'link_idlink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'usuario_idUsuario'); ?>
		<?php echo $form->error($model,'usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->