<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competencia".
 *
 * @property integer $idcompetencia
 * @property string $nombre_competencia
 * @property string $lugar_competencia
 * @property string $fecha_inicio
 * @property string $fecha_final
 * @property string $deporte
 *
 * @property Evento[] $eventos
 */
class Competencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'competencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_final'], 'safe'],
            [['nombre_competencia', 'lugar_competencia', 'deporte'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcompetencia' => Yii::t('app', 'Id Competencia'),
            'nombre_competencia' => Yii::t('app', 'Nombre Competencia'),
            'lugar_competencia' => Yii::t('app', 'Lugar Competencia'),
            'fecha_inicio' => Yii::t('app', 'Fecha Inicio'),
            'fecha_final' => Yii::t('app', 'Fecha Final'),
            'deporte' => Yii::t('app', 'Deporte'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Evento::className(), ['id_competencia' => 'idcompetencia']);
    }
}
