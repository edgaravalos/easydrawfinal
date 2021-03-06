<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	$model->id_boleto,
);

$this->menu=array(
	array('label'=>'Listar Boleto', 'url'=>array('index')),
	array('label'=>'Crear Boleto', 'url'=>array('create')),
	array('label'=>'Actualizar Boleto', 'url'=>array('update', 'id'=>$model->id_boleto)),
	array('label'=>'Borrar Boleto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_boleto),'confirm'=>'¿ Seguro que desea borrar este item ?')),
	array('label'=>'Administrar Boleto', 'url'=>array('admin')),
);
?>

<h1>Boleto #<?php echo $model->id_boleto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numsorteo',
		'cedcli',
		'valor',
		'estado',
		'numboleto',
		'fecha_venta',
	),
)); ?>
