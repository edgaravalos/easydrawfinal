<?php
/* @var $this BoletoController */
/* @var $model Boleto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boleto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numsorteo'); ?>
		<?php echo $form->textField($model,'numsorteo'); ?>
		<?php echo $form->error($model,'numsorteo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedcli'); ?>
		<?php echo $form->textField($model,'cedcli',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cedcli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numvendedor'); ?>
		<?php echo $form->textField($model,'numvendedor'); ?>
		<?php echo $form->error($model,'numvendedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numboleto'); ?>
		<?php echo $form->textField($model,'numboleto'); ?>
		<?php echo $form->error($model,'numboleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta'); ?>
		<?php echo $form->textField($model,'fecha_venta'); ?>
		<?php echo $form->error($model,'fecha_venta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->