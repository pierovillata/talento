<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Competencia;

/**
 * CompetenciaSearch represents the model behind the search form about `app\models\Competencia`.
 */
class CompetenciaSearch extends Competencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcompetencia'], 'integer'],
            [['nombre_competencia', 'lugar_competencia', 'fecha_inicio', 'fecha_final', 'deporte'], 'safe'],
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
        $query = Competencia::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idcompetencia' => $this->idcompetencia,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
        ]);

        $query->andFilterWhere(['like', 'nombre_competencia', $this->nombre_competencia])
            ->andFilterWhere(['like', 'lugar_competencia', $this->lugar_competencia])
            ->andFilterWhere(['like', 'deporte', $this->deporte]);

        return $dataProvider;
    }
}
