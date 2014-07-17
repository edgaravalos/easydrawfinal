<?php
/* @var $this SorteoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sorteos',
);

$this->menu=array(
	array('label'=>'Crear Sorteo', 'url'=>array('create')),
	array('label'=>'Administrar Sorteo', 'url'=>array('admin')),
);
?>

<h1>Sorteos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
