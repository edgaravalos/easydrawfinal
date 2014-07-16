<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	$model->id_boleto=>array('view','id'=>$model->id_boleto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boleto', 'url'=>array('index')),
	array('label'=>'Create Boleto', 'url'=>array('create')),
	array('label'=>'View Boleto', 'url'=>array('view', 'id'=>$model->id_boleto)),
	array('label'=>'Manage Boleto', 'url'=>array('admin')),
);
?>

<h1>Update Boleto <?php echo $model->id_boleto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>