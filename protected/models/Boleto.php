<?php

/**
 * This is the model class for table "boleto".
 *
 * The followings are the available columns in table 'boleto':
 * @property integer $id_boleto
 * @property integer $numsorteo
 * @property string $cedcli
 * @property integer $numvendedor
 * @property double $valor
 * @property integer $estado
 * @property integer $numboleto
 * @property string $fecha_venta
 *
 * The followings are the available model relations:
 * @property Cliente $cedcli0
 * @property Sorteo $numsorteo0
 * @property Vendedor $numvendedor0
 */
class Boleto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boleto';
	}
          public function mayorque($attribute,$params)
{
        if (date("Y-m-d", strtotime($this->fecha_venta)) < date("Y-m-d", strtotime(date("Y-m-d")))) {
            $this->addError('fecha_venta', 'fecha no puede ser menor a actual');
        }
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('numsorteo, cedcli, numvendedor, valor, numboleto, fecha_venta', 'required'),
//			array('numsorteo, numvendedor, estado, numboleto', 'numerical', 'integerOnly'=>true),
//			array('valor', 'numerical'),
//			array('cedcli', 'length', 'max'=>10),
//			// The following rule is used by search().
//			// @todo Please remove those attributes that should not be searched.
//			array('id_boleto, numsorteo, cedcli, numvendedor, valor, estado, numboleto, fecha_venta', 'safe', 'on'=>'search'),
                        array('numsorteo, cedcli, numvendedor, valor, numboleto, fecha_venta', 'required'),
			array('numsorteo,numvendedor,estado, numboleto', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
                   // floatRegex = /[-+]?([0-9]*\.[0-9]+|[0-9]+)/; 
			array('cedcli, estado', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_boleto, numsorteo, cedcli, numvendedor, valor,estado, numboleto, fecha_venta', 'safe', 'on'=>'search'),
		        array('numsorteo','numerical', 'integerOnly'=>true,'max'=>99999,'min'=>0),
                        array('cedcli','numerical', 'integerOnly'=>true,'max'=>9999999999,'min'=>100000000),
                      array('fecha_venta','date', 'format' => 'yyyy-M-d', 'message' => 'La fecha parece inválida ingrese año(xxxx)-mes(xx)-dia(xx).'),
		     array('fecha_venta','mayorque'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cedcli0' => array(self::BELONGS_TO, 'Cliente', 'cedcli'),
			'numsorteo0' => array(self::BELONGS_TO, 'Sorteo', 'numsorteo'),
			'numvendedor0' => array(self::BELONGS_TO, 'Vendedor', 'numvendedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_boleto' => 'Id Boleto',
			'numsorteo' => 'Numsorteo',
			'cedcli' => 'Cedcli',
			'numvendedor' => 'Numvendedor',
			'valor' => 'Valor',
			'estado' => 'Estado',
			'numboleto' => 'Numboleto',
			'fecha_venta' => 'Fecha Venta',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_boleto',$this->id_boleto);
		$criteria->compare('numsorteo',$this->numsorteo);
		$criteria->compare('cedcli',$this->cedcli,true);
		$criteria->compare('numvendedor',$this->numvendedor);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('numboleto',$this->numboleto);
		$criteria->compare('fecha_venta',$this->fecha_venta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Boleto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
