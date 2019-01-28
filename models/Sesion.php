<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sesion".
 *
 * @property integer $id_sesion
 * @property integer $microciclo_id
 * @property string $nombre
 * @property string $hora
 * @property string $fecha
 * @property integer $tiempo_duracion
 * @property string $intensidad_media
 * @property string $objetivos_sesion
 *
 * @property Contenido[] $contenidos
 * @property Microciclo $microciclo
 */
class Sesion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sesion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['microciclo_id'], 'required'],
            [['microciclo_id', 'tiempo_duracion'], 'integer'],
            [['hora', 'fecha'], 'safe'],
            [['nombre', 'intensidad_media', 'objetivos_sesion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sesion' => Yii::t('app', 'Id Sesion'),
            'microciclo_id' => Yii::t('app', 'Microciclo ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'hora' => Yii::t('app', 'Hora'),
            'fecha' => Yii::t('app', 'Fecha'),
            'tiempo_duracion' => Yii::t('app', 'Tiempo Duracion'),
            'intensidad_media' => Yii::t('app', 'Intensidad Media'),
            'objetivos_sesion' => Yii::t('app', 'Objetivos Sesion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContenidos()
    {
        return $this->hasMany(Contenido::className(), ['sesion_id' => 'id_sesion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMicrociclo()
    {
        return $this->hasOne(Microciclo::className(), ['id_microciclo' => 'microciclo_id']);
    }
}
