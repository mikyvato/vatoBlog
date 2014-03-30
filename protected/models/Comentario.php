<?php

/**
 * This is the model class for table "comentario".
 *
 * The followings are the available columns in table 'comentario':
 * @property integer $idcomentario
 * @property string $nombre
 * @property string $email
 * @property string $web
 * @property string $comentario
 * @property integer $post_idpost
 *
 * The followings are the available model relations:
 * @property Post $postIdpost
 */
class Comentario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentario the static model class
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
		return 'comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, email, comentario, post_idpost', 'required'),
			array('post_idpost', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>90),
			array('email, web', 'length', 'max'=>250),
			array('comentario', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcomentario, nombre, email, web, comentario, post_idpost', 'safe', 'on'=>'search'),
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
			'postIdpost' => array(self::BELONGS_TO, 'Post', 'post_idpost'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcomentario' => 'Idcomentario',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'web' => 'Web',
			'comentario' => 'Comentario',
			'post_idpost' => 'Post Idpost',
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

		$criteria->compare('idcomentario',$this->idcomentario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('post_idpost',$this->post_idpost);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}