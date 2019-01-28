<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seleccionados".
 *
 * @property integer $cedula_atleta
 * @property integer $year
 * @property string $tipo_prueba
 * @property integer $puntuacion
 * @property string $seleccionado
 * @property string $recomendacion
 *
 * @property Atleta $cedulaAtleta
 */
class Seleccionados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seleccionados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'year', 'tipo_prueba', 'puntuacion', 'seleccionado', 'recomendacion'], 'required'],
            [['cedula_atleta', 'year', 'puntuacion'], 'integer'],
            [['seleccionado', 'recomendacion'], 'string'],
            [['tipo_prueba'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'year' => Yii::t('app', 'Year'),
            'tipo_prueba' => Yii::t('app', 'Tipo Prueba'),
            'puntuacion' => Yii::t('app', 'Puntuacion'),
            'seleccionado' => Yii::t('app', 'Seleccionado'),
            'recomendacion' => Yii::t('app', 'Recomendacion'),
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
