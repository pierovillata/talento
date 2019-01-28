<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Psicologica;

/**
 * PsicologicaSearch represents the model behind the search form about `app\models\Psicologica`.
 */
class PsicologicaSearch extends Psicologica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_psicologia', 'cedula_atleta', 'year', 'motivacion', 'personalidad', 'actitud'], 'integer'],
            [['tipo_prueba', 'descripcion_motivacion', 'descripcion_personalidad', 'descripcion_actitud', 'observaciones_psicologicas'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Psicologica::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_psicologia' => $this->id_psicologia,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'motivacion' => $this->motivacion,
            'personalidad' => $this->personalidad,
            'actitud' => $this->actitud,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'descripcion_motivacion', $this->descripcion_motivacion])
            ->andFilterWhere(['like', 'descripcion_personalidad', $this->descripcion_personalidad])
            ->andFilterWhere(['like', 'descripcion_actitud', $this->descripcion_actitud])
            ->andFilterWhere(['like', 'observaciones_psicologicas', $this->observaciones_psicologicas]);

        return $dataProvider;
    }
}
