<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpost')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpost), array('view', 'id'=>$data->idpost)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuerpo')); ?>:</b>
	<?php echo CHtml::encode($data->cuerpo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ranking')); ?>:</b>
	<?php echo CHtml::encode($data->ranking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_idlink')); ?>:</b>
	<?php echo CHtml::encode($data->link_idlink); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idUsuario); ?>
	<br />

	*/ ?>

</div>