<?php
/* @var $this VendedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vendedors',
);

$this->menu=array(
	array('label'=>'Crear Vendedor', 'url'=>array('create')),
	array('label'=>'Administrar Vendedor', 'url'=>array('admin')),
);
?>

<h1>Vendedors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
