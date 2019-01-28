<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deporte".
 *
 * @property integer $id
 * @property string $nombre_deporte
 * @property string $representante
 * @property string $descripcion
 * @property string $tipo_deporte
 *
 * @property Atleta[] $atletas
 */
class Deporte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deporte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_deporte', 'representante', 'descripcion'], 'required'],
            [['nombre_deporte'],'unique','message'=>'El deporte ya fue registrado'],
            [['nombre_deporte', 'representante', 'descripcion'], 'string', 'max' => 45],
            [['tipo_deporte'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_deporte' => Yii::t('app', 'Nombre Deporte'),
            'representante' => Yii::t('app', 'Representante'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'tipo_deporte' => Yii::t('app', 'Tipo Deporte'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtletas()
    {
        return $this->hasMany(Atleta::className(), ['deporte_id' => 'id']);
    }
}
