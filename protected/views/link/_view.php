<?php
/* @var $this LinkController */
/* @var $data Link */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idlink')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idlink), array('view', 'id'=>$data->idlink)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seccion_idseccion')); ?>:</b>
	<?php echo CHtml::encode($data->seccion_idseccion); ?>
	<br />


</div>