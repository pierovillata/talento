<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Entrenador;

/**
 * EntrenadorSearch represents the model behind the search form about `app\models\Entrenador`.
 */
class EntrenadorSearch extends Entrenador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_entrenador'], 'integer'],
            [['nivel', 'tipo_entrenador', 'lugar_trabajo', 'dias_trabajo', 'hora_inicio_am', 'hora_final_am', 'hora_inicio_tarde', 'hora_final_tarde'], 'safe'],
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
        $query = Entrenador::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cedula_entrenador' => $this->cedula_entrenador,
            'hora_inicio_am' => $this->hora_inicio_am,
            'hora_final_am' => $this->hora_final_am,
            'hora_inicio_tarde' => $this->hora_inicio_tarde,
            'hora_final_tarde' => $this->hora_final_tarde,
        ]);

        $query->andFilterWhere(['like', 'nivel', $this->nivel])
            ->andFilterWhere(['like', 'tipo_entrenador', $this->tipo_entrenador])
            ->andFilterWhere(['like', 'lugar_trabajo', $this->lugar_trabajo])
            ->andFilterWhere(['like', 'dias_trabajo', $this->dias_trabajo]);

        return $dataProvider;
    }
}
