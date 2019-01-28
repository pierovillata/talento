<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "microciclo".
 *
 * @property integer $id_microciclo
 * @property integer $mesociclo_id
 * @property string $tipo_microciclo
 * @property string $nombre_microciclo
 * @property integer $semana
 * @property integer $duracion_dias
 * @property string $objetivos_microciclo
 * @property integer $volumen
 * @property string $intensidad
 * @property double $resistencia_aerobica
 * @property double $resistencia_mixta
 * @property double $resistencia_anaerobica
 * @property double $velocidad
 * @property double $fuerza_maxima
 * @property double $fuerza_explosiva
 * @property double $fuerza_resistencia
 * @property double $tecnica
 * @property double $tactica
 *
 * @property Mesociclo $mesociclo
 * @property Sesion[] $sesions
 */
class Microciclo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'microciclo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mesociclo_id'], 'required'],
            [['mesociclo_id', 'semana', 'duracion_dias', 'volumen'], 'integer'],
            [['tipo_microciclo'], 'string'],
            [['resistencia_aerobica', 'resistencia_mixta', 'resistencia_anaerobica', 'velocidad', 'fuerza_maxima', 'fuerza_explosiva', 'fuerza_resistencia', 'tecnica', 'tactica'], 'number'],
            [['nombre_microciclo', 'objetivos_microciclo', 'intensidad'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_microciclo' => Yii::t('app', 'Id Microciclo'),
            'mesociclo_id' => Yii::t('app', 'Mesociclo ID'),
            'tipo_microciclo' => Yii::t('app', 'Tipo Microciclo'),
            'nombre_microciclo' => Yii::t('app', 'Nombre Microciclo'),
            'semana' => Yii::t('app', 'Semana'),
            'duracion_dias' => Yii::t('app', 'Duracion Dias'),
            'objetivos_microciclo' => Yii::t('app', 'Objetivos Microciclo'),
            'volumen' => Yii::t('app', 'Volumen'),
            'intensidad' => Yii::t('app', 'Intensidad'),
            'resistencia_aerobica' => Yii::t('app', 'Resistencia Aerobica'),
            'resistencia_mixta' => Yii::t('app', 'Resistencia Mixta'),
            'resistencia_anaerobica' => Yii::t('app', 'Resistencia Anaerobica'),
            'velocidad' => Yii::t('app', 'Velocidad'),
            'fuerza_maxima' => Yii::t('app', 'Fuerza Maxima'),
            'fuerza_explosiva' => Yii::t('app', 'Fuerza Explosiva'),
            'fuerza_resistencia' => Yii::t('app', 'Fuerza Resistencia'),
            'tecnica' => Yii::t('app', 'Tecnica'),
            'tactica' => Yii::t('app', 'Tactica'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMesociclo()
    {
        return $this->hasOne(Mesociclo::className(), ['id_mesociclo' => 'mesociclo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesions()
    {
        return $this->hasMany(Sesion::className(), ['microciclo_id' => 'id_microciclo']);
    }
}
