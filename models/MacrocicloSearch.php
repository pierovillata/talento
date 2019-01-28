<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Macrociclo;

/**
 * MacrocicloSearch represents the model behind the search form about `app\models\Macrociclo`.
 */
class MacrocicloSearch extends Macrociclo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_macrociclo', 'id_plan', 'numero_semanas', 'horas_totales'], 'integer'],
            [['tipo_macrociclo', 'fecha_inicio', 'fecha_final', 'objetivos', 'competiciones', 'estado_macrociclo'], 'safe'],
            [['preparacion_fisica', 'preparacion_tecnica', 'preparacion_tactica', 'preparacion_psicologica'], 'number'],
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
        $query = Macrociclo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_macrociclo' => $this->id_macrociclo,
            'id_plan' => $this->id_plan,
            'numero_semanas' => $this->numero_semanas,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
            'horas_totales' => $this->horas_totales,
            'preparacion_fisica' => $this->preparacion_fisica,
            'preparacion_tecnica' => $this->preparacion_tecnica,
            'preparacion_tactica' => $this->preparacion_tactica,
            'preparacion_psicologica' => $this->preparacion_psicologica,
        ]);

        $query->andFilterWhere(['like', 'tipo_macrociclo', $this->tipo_macrociclo])
            ->andFilterWhere(['like', 'objetivos', $this->objetivos])
            ->andFilterWhere(['like', 'competiciones', $this->competiciones])
            ->andFilterWhere(['like', 'estado_macrociclo', $this->estado_macrociclo]);

        return $dataProvider;
    }
}
