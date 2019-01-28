<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "especifica".
 *
 * @property integer $id_especifica
 * @property integer $cedula_atleta
 * @property string $tipo_prueba
 * @property integer $year
 * @property integer $resistencia
 * @property integer $fuerza
 * @property integer $tecnica
 * @property integer $velocidad
 * @property integer $tactica
 * @property string $observaciones_especificas
 *
 * @property Atleta $cedulaAtleta
 */
class Especifica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'especifica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'resistencia', 'fuerza', 'tecnica', 'velocidad', 'tactica', 'observaciones_especificas'], 'required'],
            [['cedula_atleta', 'year', 'resistencia', 'fuerza', 'tecnica', 'velocidad', 'tactica'], 'integer'],
            [['tipo_prueba'], 'string', 'max' => 45],
            [['observaciones_especificas'], 'string', 'max' => 70]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_especifica' => Yii::t('app', 'Id Especifica'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'year' => Yii::t('app', 'Year'),
            'resistencia' => Yii::t('app', 'Resistencia'),
            'fuerza' => Yii::t('app', 'Fuerza'),
            'tecnica' => Yii::t('app', 'Tecnica'),
            'velocidad' => Yii::t('app', 'Velocidad'),
            'tactica' => Yii::t('app', 'Tactica'),
            'observaciones_especificas' => Yii::t('app', 'Observaciones Especificas'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaAtleta()
    {
        return $this->hasOne(Atleta::className(), ['cedula_atleta' => 'cedula_atleta']);
    }
}
