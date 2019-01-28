<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contenido".
 *
 * @property integer $idcontenido
 * @property integer $sesion_id
 * @property string $calentamiento
 * @property string $parte_principal
 * @property string $parte_final
 * @property string $observaciones
 *
 * @property Sesion $sesion
 */
class Contenido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contenido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sesion_id'], 'required'],
            [['sesion_id'], 'integer'],
            [['calentamiento', 'parte_principal', 'parte_final'], 'string', 'max' => 255],
            [['observaciones'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcontenido' => Yii::t('app', 'Idcontenido'),
            'sesion_id' => Yii::t('app', 'Sesion ID'),
            'calentamiento' => Yii::t('app', 'Calentamiento'),
            'parte_principal' => Yii::t('app', 'Parte Principal'),
            'parte_final' => Yii::t('app', 'Parte Final'),
            'observaciones' => Yii::t('app', 'Observaciones'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesion()
    {
        return $this->hasOne(Sesion::className(), ['id_sesion' => 'sesion_id']);
    }
}
