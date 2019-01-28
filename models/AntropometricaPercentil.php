<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "antropometrica_percentil".
 *
 * @property integer $id_prueba_antropometrica
 * @property integer $cedula_atleta
 * @property integer $year
 * @property string $tipo_prueba
 * @property double $peso
 * @property double $altura_pie
 * @property double $altura_sentado
 * @property double $abertura
 * @property double $porcentaje_grasa
 *
 * @property Antropometrica $idPruebaAntropometrica
 */
class AntropometricaPercentil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'antropometrica_percentil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prueba_antropometrica', 'cedula_atleta', 'year', 'tipo_prueba'], 'required'],
            [['id_prueba_antropometrica', 'cedula_atleta', 'year'], 'integer'],
            [['peso', 'altura_pie', 'altura_sentado', 'abertura', 'porcentaje_grasa'], 'number'],
            [['tipo_prueba'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prueba_antropometrica' => Yii::t('app', 'Id Prueba Antropometrica'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'year' => Yii::t('app', 'Year'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'peso' => Yii::t('app', 'Peso'),
            'altura_pie' => Yii::t('app', 'Altura Pie'),
            'altura_sentado' => Yii::t('app', 'Altura Sentado'),
            'abertura' => Yii::t('app', 'Abertura'),
            'porcentaje_grasa' => Yii::t('app', 'Porcentaje Grasa'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPruebaAntropometrica()
    {
        return $this->hasOne(Antropometrica::className(), ['id_antropometrica' => 'id_prueba_antropometrica']);
    }
}
