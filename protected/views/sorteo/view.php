<?php
/* @var $this SorteoController */
/* @var $model Sorteo */

$this->breadcrumbs=array(
	'Sorteos'=>array('index'),
	$model->num_sorteo,
);

$this->menu=array(
	array('label'=>'Listar Sorteo', 'url'=>array('index')),
	array('label'=>'Crear Sorteo', 'url'=>array('create')),
	array('label'=>'Actualizar Sorteo', 'url'=>array('update', 'id'=>$model->num_sorteo)),
	array('label'=>'Borrar Sorteo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->num_sorteo),'confirm'=>'¿ Seguro que desea borrar este item ?')),
	array('label'=>'Administrar Sorteo', 'url'=>array('admin')),
);
?>

<h1>Ver Sorteo #<?php echo $model->num_sorteo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'num_sorteo',
		'fecha',
		'descripcion',
		'valor',
		'estado',
	),
    
));
?>

<br>
<label> <?php
    $mode=$model->num_sorteo;
    $v=($model->num_sorteo);
    $con=mysql_connect('localhost', 'root');
    if ($con == TRUE) {
        mysql_select_db('draw',$con); 
        
       $v1 = mysql_query('truncate juegan',$con);
      
       $v2=  mysql_query('insert into juegan(id_boleto,numboleto)SELECT id_boleto, numboleto FROM boleto WHERE numsorteo ='.$mode.' and estado=1;',$con);
        
       $result1 = mysql_query('select * from juegan order by rand()',$con);
       if ($row = mysql_fetch_array($result1)) 
       {
          $v21 = $row["numboleto"];
          echo "EL GANADOR ES $v21" ;
          
       }
        else {
           echo "no hay ganador";
       }
     
    } else {
        echo "Conexion no establecida";
    }
    ?> </label>