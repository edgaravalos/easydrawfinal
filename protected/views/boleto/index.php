<?php
/* @var $this BoletoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Boletos',
);

$this->menu=array(
	array('label'=>'Crear Boleto', 'url'=>array('create')),
	array('label'=>'Administrar Boleto', 'url'=>array('admin')),
);
?>

<h1>Boletos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
