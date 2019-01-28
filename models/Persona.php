<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property string $cedula
 * @property string $apellidos
 * @property string $nombres
 * @property string $fecha_nacimiento
 * @property integer $edad
 * @property string $sexo
 * @property string $direccion
 * @property string $telefono
 * @property string $tipo
 *
 * @property Atleta $atleta
 * @property Entrenador $entrenador
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula', 'apellidos', 'nombres', 'fecha_nacimiento', 'edad', 'direccion', 'telefono'], 'required'],
            [['cedula', 'edad', 'telefono'], 'integer'],
            [['cedula'], 'unique','message'=>'El usuario ya esta registrado'],
            [['fecha_nacimiento'], 'safe'],
            [['apellidos', 'nombres', 'sexo', 'tipo'], 'string', 'max' => 45],
            [['direccion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cedula' => Yii::t('app', 'Cedula'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'nombres' => Yii::t('app', 'Nombres'),
            'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
            'edad' => Yii::t('app', 'Edad'),
            'sexo' => Yii::t('app', 'Sexo'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtleta()
    {
        return $this->hasOne(Atleta::className(), ['cedula_atleta' => 'cedula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntrenador()
    {
        return $this->hasOne(Entrenador::className(), ['cedula_entrenador' => 'cedula']);
    }
}
