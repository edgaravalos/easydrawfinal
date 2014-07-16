<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->num_sorteo,
);

$this->menu=array(
	array('label'=>'List Sorteo', 'url'=>array('index')),
	array('label'=>'Create Sorteo', 'url'=>array('create')),
	array('label'=>'Update Sorteo', 'url'=>array('update', 'id'=>$model->num_sorteo)),
	array('label'=>'Delete Sorteo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->num_sorteo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sorteo', 'url'=>array('admin')),
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
