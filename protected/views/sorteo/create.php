<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sorteo', 'url'=>array('index')),
	array('label'=>'Manage Sorteo', 'url'=>array('admin')),
);
?>

<h1>Create Sorteo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>