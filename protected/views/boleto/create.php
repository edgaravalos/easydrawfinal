<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Boleto', 'url'=>array('index')),
	array('label'=>'Administrar Boleto', 'url'=>array('admin')),
);
?>

<h1>Crear Boleto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>