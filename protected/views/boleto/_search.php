<?php
/* @var $this BoletoController */
/* @var $model Boleto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_boleto'); ?>
		<?php echo $form->textField($model,'id_boleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numsorteo'); ?>
		<?php echo $form->textField($model,'numsorteo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedcli'); ?>
		<?php echo $form->textField($model,'cedcli',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numvendedor'); ?>
		<?php echo $form->textField($model,'numvendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numboleto'); ?>
		<?php echo $form->textField($model,'numboleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_venta'); ?>
		<?php echo $form->textField($model,'fecha_venta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->