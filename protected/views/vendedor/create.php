<?php
/* @var $this VendedorController */
/* @var $model Vendedor */

$this->breadcrumbs=array(
	'Vendedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Vendedor', 'url'=>array('index')),
	array('label'=>'Administrar Vendedor', 'url'=>array('admin')),
);
?>

<h1>Create Vendedor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>