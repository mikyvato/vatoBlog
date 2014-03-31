<?php

/**
 * This is the model class for table "imagen".
 *
 * The followings are the available columns in table 'imagen':
 * @property integer $idimagen
 * @property string $nombre
 * @property string $direccion
 * @property string $link
 * @property integer $ancho
 * @property integer $alto
 * @property string $pie
 * @property integer $estado
 * @property integer $seccion_idseccion
 *
 * The followings are the available model relations:
 * @property Seccion $seccionIdseccion
 */
class Imagen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Imagen the static model class
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
		return 'imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, link, seccion_idseccion', 'required'),
			array('ancho, alto, estado, seccion_idseccion', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>90),
			array('direccion, link, pie', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idimagen, nombre, direccion, link, ancho, alto, pie, estado, seccion_idseccion', 'safe', 'on'=>'search'),
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
			'seccionIdseccion' => array(self::BELONGS_TO, 'Seccion', 'seccion_idseccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idimagen' => 'Idimagen',
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'link' => 'Link',
			'ancho' => 'Ancho',
			'alto' => 'Alto',
			'pie' => 'Pie',
			'estado' => 'Estado',
			'seccion_idseccion' => 'Seccion Idseccion',
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

		$criteria->compare('idimagen',$this->idimagen);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('ancho',$this->ancho);
		$criteria->compare('alto',$this->alto);
		$criteria->compare('pie',$this->pie,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('seccion_idseccion',$this->seccion_idseccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}