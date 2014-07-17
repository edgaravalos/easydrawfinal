<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->num_sorteo=>array('view','id'=>$model->num_sorteo),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Sorteo', 'url'=>array('index')),
	array('label'=>'Crear Sorteo', 'url'=>array('create')),
	array('label'=>'Ver Sorteo', 'url'=>array('view', 'id'=>$model->num_sorteo)),
	array('label'=>'Administrar Sorteo', 'url'=>array('admin')),
);
?>

<h1>Update Sorteo <?php echo $model->num_sorteo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>