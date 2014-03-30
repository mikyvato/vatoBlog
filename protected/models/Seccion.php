<?php

/**
 * This is the model class for table "seccion".
 *
 * The followings are the available columns in table 'seccion':
 * @property integer $idseccion
 * @property string $nombre
 * @property string $descripcion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Imagen[] $imagens
 * @property Link[] $links
 */
class Seccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Seccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estado', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>450),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idseccion, nombre, descripcion, estado', 'safe', 'on'=>'search'),
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
			'imagens' => array(self::HAS_MANY, 'Imagen', 'seccion_idseccion'),
			'links' => array(self::HAS_MANY, 'Link', 'seccion_idseccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idseccion' => 'Idseccion',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idseccion',$this->idseccion);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}