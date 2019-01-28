<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mesociclo".
 *
 * @property integer $id_mesociclo
 * @property integer $macrociclo_id
 * @property string $nombre_mesociclo
 * @property string $tipo_mesociclo
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $objetivos
 * @property integer $volumen
 * @property string $intensidad
 * @property double $porcentaje_resistencia_aerobica
 * @property double $porcentaje_resistencia_anaerobica
 * @property double $porcentaje_velocidad
 * @property double $porcentaje_tecnica
 * @property double $porcentaje_agilidad
 * @property double $porcentaje_fuerza
 *
 * @property Macrociclo $macrociclo
 * @property Microciclo[] $microciclos
 */
class Mesociclo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mesociclo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['macrociclo_id', 'nombre_mesociclo'], 'required'],
            [['macrociclo_id', 'volumen'], 'integer'],
            [['tipo_mesociclo'], 'string'],
            [['fecha_inicio', 'fecha_final'], 'safe'],
            [['porcentaje_resistencia_aerobica', 'porcentaje_resistencia_anaerobica', 'porcentaje_velocidad', 'porcentaje_tecnica', 'porcentaje_agilidad', 'porcentaje_fuerza'], 'number'],
            [['nombre_mesociclo', 'objetivos', 'intensidad'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mesociclo' => Yii::t('app', 'Id Mesociclo'),
            'macrociclo_id' => Yii::t('app', 'Macrociclo ID'),
            'nombre_mesociclo' => Yii::t('app', 'Nombre Mesociclo'),
            'tipo_mesociclo' => Yii::t('app', 'Tipo Mesociclo'),
            'fecha_inicio' => Yii::t('app', 'Fecha Inicio'),
            'fecha_final' => Yii::t('app', 'Fecha Final'),
            'objetivos' => Yii::t('app', 'Objetivos'),
            'volumen' => Yii::t('app', 'Volumen'),
            'intensidad' => Yii::t('app', 'Intensidad'),
            'porcentaje_resistencia_aerobica' => Yii::t('app', 'Porcentaje Resistencia Aerobica'),
            'porcentaje_resistencia_anaerobica' => Yii::t('app', 'Porcentaje Resistencia Anaerobica'),
            'porcentaje_velocidad' => Yii::t('app', 'Porcentaje Velocidad'),
            'porcentaje_tecnica' => Yii::t('app', 'Porcentaje Tecnica'),
            'porcentaje_agilidad' => Yii::t('app', 'Porcentaje Agilidad'),
            'porcentaje_fuerza' => Yii::t('app', 'Porcentaje Fuerza'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMacrociclo()
    {
        return $this->hasOne(Macrociclo::className(), ['id_macrociclo' => 'macrociclo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMicrociclos()
    {
        return $this->hasMany(Microciclo::className(), ['mesociclo_id' => 'id_mesociclo']);
    }
}
