<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $id_plan
 * @property integer $ano_plan
 * @property integer $cedula_entrenador
 * @property string $deporte
 * @property string $objetivos_generales
 * @property string $objetivos_especificos
 *
 * @property Macrociclo[] $macrociclos
 * @property Entrenador $cedulaEntrenador
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ano_plan', 'cedula_entrenador', 'deporte'], 'required'],
            [['ano_plan', 'cedula_entrenador'], 'integer'],
            [['deporte'], 'string', 'max' => 40],
            [['objetivos_generales', 'objetivos_especificos'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_plan' => Yii::t('app', 'Id Plan'),
            'ano_plan' => Yii::t('app', 'Ano Plan'),
            'cedula_entrenador' => Yii::t('app', 'Cedula Entrenador'),
            'deporte' => Yii::t('app', 'Deporte'),
            'objetivos_generales' => Yii::t('app', 'Objetivos Generales'),
            'objetivos_especificos' => Yii::t('app', 'Objetivos Especificos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMacrociclos()
    {
        return $this->hasMany(Macrociclo::className(), ['id_plan' => 'id_plan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaEntrenador()
    {
        return $this->hasOne(Entrenador::className(), ['cedula_entrenador' => 'cedula_entrenador']);
    }
}
