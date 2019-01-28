<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plan;

/**
 * PlanSearch represents the model behind the search form about `app\models\Plan`.
 */
class PlanSearch extends Plan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_plan', 'ano_plan', 'cedula_entrenador'], 'integer'],
            [['deporte', 'objetivos_generales', 'objetivos_especificos'], 'safe'],
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
        $query = Plan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_plan' => $this->id_plan,
            'ano_plan' => $this->ano_plan,
            'cedula_entrenador' => $this->cedula_entrenador,
        ]);

        $query->andFilterWhere(['like', 'deporte', $this->deporte])
            ->andFilterWhere(['like', 'objetivos_generales', $this->objetivos_generales])
            ->andFilterWhere(['like', 'objetivos_especificos', $this->objetivos_especificos]);

        return $dataProvider;
    }
}
