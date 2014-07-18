<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Ver Cliente', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cliente <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>