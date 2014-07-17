<?php
/* @var $this BoletoController */
/* @var $model Boleto */

$this->breadcrumbs=array(
	'Boletos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Boleto', 'url'=>array('index')),
	array('label'=>'Create Boleto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#boleto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Boletos</h1>

<p>
Puede usar los siguientes operadores logicos (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)para realizar busquedas avanzadas.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boleto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_boleto',
		'numsorteo',
		'cedcli',
		'numvendedor',
		'valor',
		'estado',
		/*
		'numboleto',
		'fecha_venta',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
