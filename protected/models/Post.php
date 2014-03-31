<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $idpost
 * @property string $titulo
 * @property string $cuerpo
 * @property integer $ranking
 * @property integer $estado
 * @property string $fecha
 * @property integer $link_idlink
 * @property integer $usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Comentario[] $comentarios
 * @property Link $linkIdlink
 * @property Usuario $usuarioIdUsuario
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, cuerpo, fecha, link_idlink, usuario_idUsuario', 'required'),
			array('ranking, estado, link_idlink, usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpost, titulo, cuerpo, ranking, estado, fecha, link_idlink, usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'post_idpost'),
			'linkIdlink' => array(self::BELONGS_TO, 'Link', 'link_idlink'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpost' => 'Idpost',
			'titulo' => 'Titulo',
			'cuerpo' => 'Cuerpo',
			'ranking' => 'Ranking',
			'estado' => 'Estado',
			'fecha' => 'Fecha',
			'link_idlink' => 'Link Idlink',
			'usuario_idUsuario' => 'Usuario Id Usuario',
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

		$criteria->compare('idpost',$this->idpost);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('cuerpo',$this->cuerpo,true);
		$criteria->compare('ranking',$this->ranking);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('link_idlink',$this->link_idlink);
		$criteria->compare('usuario_idUsuario',$this->usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}