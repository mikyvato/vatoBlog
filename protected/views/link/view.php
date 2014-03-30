<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->idlink,
);

$this->menu=array(
	array('label'=>'List Link', 'url'=>array('index')),
	array('label'=>'Create Link', 'url'=>array('create')),
	array('label'=>'Update Link', 'url'=>array('update', 'id'=>$model->idlink)),
	array('label'=>'Delete Link', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idlink),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Link', 'url'=>array('admin')),
);
?>

<h1>View Link #<?php echo $model->idlink; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idlink',
		'nombre',
		'direccion',
		'estado',
		'seccion_idseccion',
	),
)); ?>
