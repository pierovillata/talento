<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Microciclo;

/**
 * MicrocicloSearch represents the model behind the search form about `app\models\Microciclo`.
 */
class MicrocicloSearch extends Microciclo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_microciclo', 'mesociclo_id', 'semana', 'duracion_dias', 'volumen'], 'integer'],
            [['tipo_microciclo', 'nombre_microciclo', 'objetivos_microciclo', 'intensidad'], 'safe'],
            [['resistencia_aerobica', 'resistencia_mixta', 'resistencia_anaerobica', 'velocidad', 'fuerza_maxima', 'fuerza_explosiva', 'fuerza_resistencia', 'tecnica', 'tactica'], 'number'],
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
        $query = Microciclo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_microciclo' => $this->id_microciclo,
            'mesociclo_id' => $this->mesociclo_id,
            'semana' => $this->semana,
            'duracion_dias' => $this->duracion_dias,
            'volumen' => $this->volumen,
            'resistencia_aerobica' => $this->resistencia_aerobica,
            'resistencia_mixta' => $this->resistencia_mixta,
            'resistencia_anaerobica' => $this->resistencia_anaerobica,
            'velocidad' => $this->velocidad,
            'fuerza_maxima' => $this->fuerza_maxima,
            'fuerza_explosiva' => $this->fuerza_explosiva,
            'fuerza_resistencia' => $this->fuerza_resistencia,
            'tecnica' => $this->tecnica,
            'tactica' => $this->tactica,
        ]);

        $query->andFilterWhere(['like', 'tipo_microciclo', $this->tipo_microciclo])
            ->andFilterWhere(['like', 'nombre_microciclo', $this->nombre_microciclo])
            ->andFilterWhere(['like', 'objetivos_microciclo', $this->objetivos_microciclo])
            ->andFilterWhere(['like', 'intensidad', $this->intensidad]);

        return $dataProvider;
    }
}
