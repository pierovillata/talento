<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrenador".
 *
 * @property integer $cedula_entrenador
 * @property string $nivel
 * @property string $tipo_entrenador
 * @property string $lugar_trabajo
 * @property string $dias_trabajo
 * @property string $hora_inicio_am
 * @property string $hora_final_am
 * @property string $hora_inicio_tarde
 * @property string $hora_final_tarde
 *
 * @property Atleta[] $atletas
 * @property Persona $cedulaEntrenador
 * @property Plan[] $plans
 */
class Entrenador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entrenador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_entrenador'], 'required'],
            [['cedula_entrenador'], 'integer'],
             [['cedula_entrenador'], 'unique','message'=>'El entrenador ya fue registrado'],
            [['hora_inicio_am', 'hora_final_am', 'hora_inicio_tarde', 'hora_final_tarde'], 'safe'],
            [['nivel', 'tipo_entrenador', 'lugar_trabajo', 'dias_trabajo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cedula_entrenador' => Yii::t('app', 'Cedula Entrenador'),
            'nivel' => Yii::t('app', 'Nivel'),
            'tipo_entrenador' => Yii::t('app', 'Tipo Entrenador'),
            'lugar_trabajo' => Yii::t('app', 'Lugar Trabajo'),
            'dias_trabajo' => Yii::t('app', 'Dias Trabajo'),
            'hora_inicio_am' => Yii::t('app', 'Hora Inicio Am'),
            'hora_final_am' => Yii::t('app', 'Hora Final Am'),
            'hora_inicio_tarde' => Yii::t('app', 'Hora Inicio Tarde'),
            'hora_final_tarde' => Yii::t('app', 'Hora Final Tarde'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtletas()
    {
        return $this->hasMany(Atleta::className(), ['cedula_entrenador' => 'cedula_entrenador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaEntrenador()
    {
        return $this->hasOne(Persona::className(), ['cedula' => 'cedula_entrenador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['cedula_entrenador' => 'cedula_entrenador']);
    }
}
