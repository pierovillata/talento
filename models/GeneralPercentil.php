<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_percentil".
 *
 * @property integer $id_prueba_general
 * @property integer $cedula_atleta
 * @property integer $year
 * @property string $tipo_prueba
 * @property double $velocidad
 * @property double $lanzamiento_balon
 * @property double $carrera_distancia
 * @property double $salto_horizontal
 * @property double $salto_vertical
 * @property double $agilidad
 * @property double $flexibilidad
 *
 * @property General $idPruebaGeneral
 * @property Seleccionados $seleccionados
 */
class GeneralPercentil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_percentil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prueba_general', 'cedula_atleta', 'year', 'tipo_prueba'], 'required'],
            [['id_prueba_general', 'cedula_atleta', 'year'], 'integer'],
            [['velocidad', 'lanzamiento_balon', 'carrera_distancia', 'salto_horizontal', 'salto_vertical', 'agilidad', 'flexibilidad'], 'number'],
            [['tipo_prueba'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prueba_general' => Yii::t('app', 'Id Prueba General'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'year' => Yii::t('app', 'Year'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'velocidad' => Yii::t('app', 'Velocidad'),
            'lanzamiento_balon' => Yii::t('app', 'Lanzamiento Balon'),
            'carrera_distancia' => Yii::t('app', 'Carrera Distancia'),
            'salto_horizontal' => Yii::t('app', 'Salto Horizontal'),
            'salto_vertical' => Yii::t('app', 'Salto Vertical'),
            'agilidad' => Yii::t('app', 'Agilidad'),
            'flexibilidad' => Yii::t('app', 'Flexibilidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPruebaGeneral()
    {
        return $this->hasOne(General::className(), ['id_general' => 'id_prueba_general']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeleccionados()
    {
        return $this->hasOne(Seleccionados::className(), ['id_seleccion' => 'id_prueba_general']);
    }
}
