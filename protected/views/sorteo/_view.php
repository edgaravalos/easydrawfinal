<?php
/* @var $this SorteoController */
/* @var $data Sorteo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_sorteo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->num_sorteo), array('view', 'id'=>$data->num_sorteo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>