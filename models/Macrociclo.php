<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macrociclo".
 *
 * @property integer $id_macrociclo
 * @property integer $id_plan
 * @property string $tipo_macrociclo
 * @property integer $numero_semanas
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $objetivos
 * @property string $competiciones
 * @property integer $horas_totales
 * @property double $preparacion_fisica
 * @property double $preparacion_tecnica
 * @property double $preparacion_tactica
 * @property double $preparacion_psicologica
 * @property string $estado_macrociclo
 *
 * @property Plan $idPlan
 * @property Mesociclo[] $mesociclos
 */
class Macrociclo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'macrociclo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_plan', 'numero_semanas', 'fecha_inicio', 'fecha_final', 'objetivos', 'competiciones', 'horas_totales', 'preparacion_fisica', 'preparacion_tecnica', 'preparacion_tactica', 'preparacion_psicologica'], 'required'],
            [['id_plan', 'numero_semanas', 'horas_totales'], 'integer'],
            [['fecha_inicio', 'fecha_final'], 'safe'],
            [['preparacion_fisica', 'preparacion_tecnica', 'preparacion_tactica', 'preparacion_psicologica'], 'number'],
            [['tipo_macrociclo', 'objetivos', 'estado_macrociclo'], 'string', 'max' => 45],
            [['competiciones'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_macrociclo' => Yii::t('app', 'Id Macrociclo'),
            'id_plan' => Yii::t('app', 'Id Plan'),
            'tipo_macrociclo' => Yii::t('app', 'Tipo Macrociclo'),
            'numero_semanas' => Yii::t('app', 'Numero Semanas'),
            'fecha_inicio' => Yii::t('app', 'Fecha Inicio'),
            'fecha_final' => Yii::t('app', 'Fecha Final'),
            'objetivos' => Yii::t('app', 'Objetivos'),
            'competiciones' => Yii::t('app', 'Competiciones'),
            'horas_totales' => Yii::t('app', 'Horas Totales'),
            'preparacion_fisica' => Yii::t('app', 'Preparacion Fisica'),
            'preparacion_tecnica' => Yii::t('app', 'Preparacion Tecnica'),
            'preparacion_tactica' => Yii::t('app', 'Preparacion Tactica'),
            'preparacion_psicologica' => Yii::t('app', 'Preparacion Psicologica'),
            'estado_macrociclo' => Yii::t('app', 'Estado Macrociclo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPlan()
    {
        return $this->hasOne(Plan::className(), ['id_plan' => 'id_plan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMesociclos()
    {
        return $this->hasMany(Mesociclo::className(), ['macrociclo_id' => 'id_macrociclo']);
    }
}
