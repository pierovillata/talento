<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultado".
 *
 * @property integer $idresultado
 * @property integer $cedula_atleta
 * @property integer $idevento
 * @property integer $posicion
 * @property string $resultado
 *
 * @property Atleta $cedulaAtleta
 * @property Evento $idevento0
 */
class Resultado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resultado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'idevento'], 'required'],
            [['cedula_atleta', 'idevento', 'posicion'], 'integer'],
            [['resultado'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idresultado' => Yii::t('app', 'Idresultado'),
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'idevento' => Yii::t('app', 'Idvento'),
            'posicion' => Yii::t('app', 'Posicion'),
            'resultado' => Yii::t('app', 'Resultado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaAtleta()
    {
        return $this->hasOne(Atleta::className(), ['cedula_atleta' => 'cedula_atleta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdevento0()
    {
        return $this->hasOne(Evento::className(), ['idevento' => 'idevento']);
    }
}
