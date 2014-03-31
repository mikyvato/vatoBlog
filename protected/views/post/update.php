<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->idpost=>array('view','id'=>$model->idpost),
	'Update',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->idpost)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Update Post <?php echo $model->idpost; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>