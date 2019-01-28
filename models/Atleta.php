<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atleta".
 *
 * @property integer $cedula_atleta
 * @property integer $curso_id
 * @property integer $deporte_id
 * @property integer $cedula_entrenador
 * @property string $estado
 * @property string $nivel
 * @property integer $ranking
 * @property string $escuela_procedencia
 * @property integer $seleccionado
 *
 * @property Persona $cedulaAtleta
 * @property Entrenador $cedulaEntrenador
 * @property Curso $curso
 * @property Deporte $deporte
 * @property Presenta[] $presentas
 * @property Resultado[] $resultados
 */
class Atleta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atleta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'curso_id', 'deporte_id', 'cedula_entrenador', 'ranking', 'escuela_procedencia'], 'required'],
            [['cedula_atleta'], 'unique','message'=>'El atleta ya fue registrado'],
            [['cedula_atleta', 'curso_id', 'deporte_id', 'cedula_entrenador', 'ranking', 'seleccionado'], 'integer'],
            [['estado', 'nivel', 'escuela_procedencia'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cedula_atleta' => Yii::t('app', 'Cedula Atleta'),
            'curso_id' => Yii::t('app', 'Curso ID'),
            'deporte_id' => Yii::t('app', 'Deporte ID'),
            'cedula_entrenador' => Yii::t('app', 'Cedula Entrenador'),
            'estado' => Yii::t('app', 'Estado'),
            'nivel' => Yii::t('app', 'Nivel'),
            'ranking' => Yii::t('app', 'Ranking'),
            'escuela_procedencia' => Yii::t('app', 'Escuela Procedencia'),
            'seleccionado' => Yii::t('app', 'Seleccionado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaAtleta()
    {
        return $this->hasOne(Persona::className(), ['cedula' => 'cedula_atleta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaEntrenador()
    {
        return $this->hasOne(Entrenador::className(), ['cedula_entrenador' => 'cedula_entrenador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'curso_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeporte()
    {
        return $this->hasOne(Deporte::className(), ['id' => 'deporte_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresentas()
    {
        return $this->hasMany(Presenta::className(), ['cedula_atleta' => 'cedula_atleta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultados()
    {
        return $this->hasMany(Resultado::className(), ['cedula_atleta' => 'cedula_atleta']);
    }
}
