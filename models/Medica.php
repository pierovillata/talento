<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medica".
 *
 * @property integer $id_medica
 * @property integer $cedula_atleta
 * @property string $tipo_prueba
 * @property integer $year
 * @property double $hemoglobina
 * @property double $vcm
 * @property double $globulos_rojos
 * @property double $globulos_blancos
 * @property double $glucosa
 * @property double $urea
 * @property double $creatinina
 * @property double $colesterol
 * @property double $hdl
 * @property double $ldl
 * @property double $trigliceridos
 * @property integer $frecuencia_cardiaca_reposo
 * @property integer $frecuencia_cardiaca_maxima
 * @property double $porcentaje_fibras_blancas
 * @property double $porcentaje_fibras_rojas
 * @property string $reflejos
 * @property string $estado_general
 *
 * @property Atleta $cedulaAtleta
 */
class Medica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta'], 'required'],
            [['cedula_atleta', 'year', 'frecuencia_cardiaca_reposo', 'frecuencia_cardiaca_maxima'], 'integer'],
            [['hemoglobina', 'vcm', 'globulos_rojos', 'globulos_blancos', 'glucosa', 'urea', 'creatinina', 'colesterol', 'hdl', 'ldl', 'trigliceridos', 'porcentaje_fibras_blancas', 'porcentaje_fibras_rojas'], 'number'],
            [['tipo_prueba', 'estado_general'], 'string', 'max' => 45],
            [['reflejos'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_medica' => Yii::t('app', 'Id Medica'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'year' => Yii::t('app', 'Year'),
            'hemoglobina' => Yii::t('app', 'Hemoglobina'),
            'vcm' => Yii::t('app', 'Vcm'),
            'globulos_rojos' => Yii::t('app', 'Globulos Rojos'),
            'globulos_blancos' => Yii::t('app', 'Globulos Blancos'),
            'glucosa' => Yii::t('app', 'Glucosa'),
            'urea' => Yii::t('app', 'Urea'),
            'creatinina' => Yii::t('app', 'Creatinina'),
            'colesterol' => Yii::t('app', 'Colesterol'),
            'hdl' => Yii::t('app', 'Hdl'),
            'ldl' => Yii::t('app', 'Ldl'),
            'trigliceridos' => Yii::t('app', 'Trigliceridos'),
            'frecuencia_cardiaca_reposo' => Yii::t('app', 'Frecuencia Cardiaca Reposo'),
            'frecuencia_cardiaca_maxima' => Yii::t('app', 'Frecuencia Cardiaca Maxima'),
            'porcentaje_fibras_blancas' => Yii::t('app', 'Porcentaje Fibras Blancas'),
            'porcentaje_fibras_rojas' => Yii::t('app', 'Porcentaje Fibras Rojas'),
            'reflejos' => Yii::t('app', 'Reflejos'),
            'estado_general' => Yii::t('app', 'Estado General'),
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
