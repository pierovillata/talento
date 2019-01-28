<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Especifica;

/**
 * EspecificaSearch represents the model behind the search form about `app\models\Especifica`.
 */
class EspecificaSearch extends Especifica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_especifica', 'cedula_atleta', 'year', 'resistencia', 'fuerza', 'tecnica', 'velocidad', 'tactica'], 'integer'],
            [['tipo_prueba', 'observaciones_especificas'], 'safe'],
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
        $query = Especifica::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_especifica' => $this->id_especifica,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'resistencia' => $this->resistencia,
            'fuerza' => $this->fuerza,
            'tecnica' => $this->tecnica,
            'velocidad' => $this->velocidad,
            'tactica' => $this->tactica,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'observaciones_especificas', $this->observaciones_especificas]);

        return $dataProvider;
    }
}
