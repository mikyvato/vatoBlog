<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idimagen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idimagen), array('view', 'id'=>$data->idimagen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ancho')); ?>:</b>
	<?php echo CHtml::encode($data->ancho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alto')); ?>:</b>
	<?php echo CHtml::encode($data->alto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pie')); ?>:</b>
	<?php echo CHtml::encode($data->pie); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seccion_idseccion')); ?>:</b>
	<?php echo CHtml::encode($data->seccion_idseccion); ?>
	<br />

	*/ ?>

</div>