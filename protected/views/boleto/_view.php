<?php
/* @var $this BoletoController */
/* @var $data Boleto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_boleto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_boleto), array('view', 'id'=>$data->id_boleto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numsorteo')); ?>:</b>
	<?php echo CHtml::encode($data->numsorteo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedcli')); ?>:</b>
	<?php echo CHtml::encode($data->cedcli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numvendedor')); ?>:</b>
	<?php echo CHtml::encode($data->numvendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numboleto')); ?>:</b>
	<?php echo CHtml::encode($data->numboleto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_venta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_venta); ?>
	<br />

	*/ ?>

</div>