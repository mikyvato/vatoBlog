<?php
/* @var $this SeccionController */
/* @var $data Seccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idseccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idseccion), array('view', 'id'=>$data->idseccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>