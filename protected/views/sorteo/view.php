<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->num_sorteo,
);

$this->menu=array(
	array('label'=>'Listar Sorteo', 'url'=>array('index')),
	array('label'=>'Crear Sorteo', 'url'=>array('create')),
	array('label'=>'Actualizar Sorteo', 'url'=>array('update', 'id'=>$model->num_sorteo)),
	array('label'=>'Borrar Sorteo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->num_sorteo),'confirm'=>'¿ Seguro que desea borrar este item ?')),
	array('label'=>'Administrar Sorteo', 'url'=>array('admin')),
);
?>

<h1>View Sorteo #<?php echo $model->num_sorteo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'num_sorteo',
		'fecha',
		'descripcion',
		'valor',
		'estado',
	),
)); ?>
