<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $nombre_curso
 * @property string $seccion
 * @property string $turno
 * @property integer $cupos
 *
 * @property Atleta[] $atletas
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cupos'], 'integer'],
            [['cupos'], 'integer','max'=>30],
            [['nombre_curso', 'seccion', 'turno'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre_curso' => Yii::t('app', 'Nombre Curso'),
            'seccion' => Yii::t('app', 'Seccion'),
            'turno' => Yii::t('app', 'Turno'),
            'cupos' => Yii::t('app', 'Cupos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtletas()
    {
        return $this->hasMany(Atleta::className(), ['curso_id' => 'id']);
    }
}
