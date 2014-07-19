<?php

/**
 * This is the model class for table "sorteo".
 *
 * The followings are the available columns in table 'sorteo':
 * @property integer $num_sorteo
 * @property string $fecha
 * @property string $descripcion
 * @property double $valor
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Boleto[] $boletos
 */
class Sorteo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sorteo';
	}

                public static function getFechaHoraActualDateTime() {
                                       date_default_timezone_set(self::ZONA_HORARIA);
                                       return date("Y-m-d");
                                                                    }
            public function mayorque($attribute,$params)
            {
        if (date("Y-m-d", strtotime($this->fecha)) < date("Y-m-d", strtotime(date("Y-m-d")))) 
                   {
            $this->addError('fecha', 'fecha no puede ser menor a actual');
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
			array('fecha, descripcion', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical','integerOnly'=>true),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('num_sorteo, fecha, descripcion, valor, estado', 'safe', 'on'=>'search'),
                    array('fecha','date', 'format' => 'yyyy-M-d', 'message' => 'La fecha parece inválida ingrese año(xxxx)-mes(xx)-dia(xx).'),
		     array('fecha','mayorque'),
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
			'boletos' => array(self::HAS_MANY, 'Boleto', 'numsorteo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'num_sorteo' => 'Num Sorteo',
			'fecha' => 'Fecha',
			'descripcion' => 'Descripcion',
			'valor' => 'Valor',
			'estado' => 'Estado',
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

		$criteria->compare('num_sorteo',$this->num_sorteo);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sorteo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
