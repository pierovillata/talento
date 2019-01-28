<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "evento".
 *
 * @property integer $idevento
 * @property integer $id_competencia
 * @property string $nombre_evento
 * @property string $fecha
 * @property string $categoria
 * @property string $participantes
 *
 * @property Competencia $idCompetencia
 * @property Resultado[] $resultados
 */
class Evento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'evento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_competencia'], 'integer'],
            [['fecha'], 'safe'],
            [['nombre_evento', 'categoria', 'participantes'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idevento' => Yii::t('app', 'Id Evento'),
            'id_competencia' => Yii::t('app', 'Id Competencia'),
            'nombre_evento' => Yii::t('app', 'Nombre Evento'),
            'fecha' => Yii::t('app', 'Fecha'),
            'categoria' => Yii::t('app', 'Categoria'),
            'participantes' => Yii::t('app', 'Participantes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCompetencia()
    {
        return $this->hasOne(Competencia::className(), ['idcompetencia' => 'id_competencia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::className(), ['idevento' => 'idevento']);
    }
}
