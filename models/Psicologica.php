<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "psicologica".
 *
 * @property integer $id_psicologia
 * @property integer $cedula_atleta
 * @property integer $year
 * @property string $tipo_prueba
 * @property integer $motivacion
 * @property string $descripcion_motivacion
 * @property integer $personalidad
 * @property string $descripcion_personalidad
 * @property integer $actitud
 * @property string $descripcion_actitud
 * @property string $observaciones_psicologicas
 *
 * @property Atleta $cedulaAtleta
 */
class Psicologica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'psicologica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'motivacion', 'descripcion_motivacion', 'personalidad', 'descripcion_personalidad', 'actitud', 'descripcion_actitud', 'observaciones_psicologicas'], 'required'],
            [['cedula_atleta', 'year', 'motivacion', 'personalidad', 'actitud'], 'integer'],
            [['tipo_prueba', 'descripcion_motivacion', 'descripcion_personalidad', 'descripcion_actitud'], 'string', 'max' => 45],
            [['observaciones_psicologicas'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_psicologia' => Yii::t('app', 'Id Psicologia'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'year' => Yii::t('app', 'Year'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'motivacion' => Yii::t('app', 'Motivacion'),
            'descripcion_motivacion' => Yii::t('app', 'Descripcion Motivacion'),
            'personalidad' => Yii::t('app', 'Personalidad'),
            'descripcion_personalidad' => Yii::t('app', 'Descripcion Personalidad'),
            'actitud' => Yii::t('app', 'Actitud'),
            'descripcion_actitud' => Yii::t('app', 'Descripcion Actitud'),
            'observaciones_psicologicas' => Yii::t('app', 'Observaciones Psicologicas'),
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
