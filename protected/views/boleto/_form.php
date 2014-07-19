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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numsorteo'); ?>
                <?php echo $form->error($model,'numsorteo'); ?>
                     <?php echo $form->dropDownList($model,'numsorteo',CHtml::listData(Sorteo::model()->findAll(), 'num_sorteo', 'num_sorteo'),array ('prompt'=>  'Seleccione...'));?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedcli'); ?>
		<?php echo $form->error($model,'cedcli'); ?>
                   <?php echo $form->dropDownList($model,'cedcli',CHtml::listData(Cliente::model()->findAll(), 'cedula', 'cedula', 'apellidos','nombres','nombres'),array ('prompt'=>  'Seleccione...'));?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numvendedor'); ?>
		<?php echo $form->error($model,'numvendedor'); ?>
                      <?php echo $form->dropDownList($model,'numvendedor',CHtml::listData(Vendedor::model()->findAll(), 'id_vendedor', 'id_vendedor', 'apellidos','nombres','nombres'),array ('prompt'=>  'Seleccione...'));?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
                       <?php echo $form->dropDownList($model,'estado',array('1'=>'Pagado','0'=>'No Pagado'), array('options' => array('1'=>array('selected'=>true)))) ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->