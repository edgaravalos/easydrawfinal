<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sorteo', 'url'=>array('index')),
	array('label'=>'Administrar Sorteo', 'url'=>array('admin')),
);
?>

<h1>Crear Sorteo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>