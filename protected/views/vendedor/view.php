<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedores'=>array('index'),
	$model->id_vendedor,
);

$this->menu=array(
	array('label'=>'Listar Vendedor', 'url'=>array('index')),
	array('label'=>'Crear Vendedor', 'url'=>array('create')),
	array('label'=>'Actualizar Vendedor', 'url'=>array('update', 'id'=>$model->id_vendedor)),
	array('label'=>'Borrar Vendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vendedor),'confirm'=>'¿ Seguro que desea borrar este item ?')),
	array('label'=>'Administrador Vendedor', 'url'=>array('admin')),
);
?>

<h1>Vendedor #<?php echo $model->id_vendedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vendedor',
		'nombres',
		'apellidos',
		'email',
		'password',
		'telefono',
	),
)); ?>
