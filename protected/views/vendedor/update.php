<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	$model->id_vendedor=>array('view','id'=>$model->id_vendedor),
	'Actualizar ',
);

$this->menu=array(
	array('label'=>'Listar Vendedor', 'url'=>array('index')),
	array('label'=>'Crear Vendedor', 'url'=>array('create')),
	array('label'=>'Ver Vendedor', 'url'=>array('view', 'id'=>$model->id_vendedor)),
	array('label'=>'Administrar Vendedor', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vendedor <?php echo $model->id_vendedor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>