<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mesociclo;

/**
 * MesocicloSearch represents the model behind the search form about `app\models\Mesociclo`.
 */
class MesocicloSearch extends Mesociclo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mesociclo', 'macrociclo_id', 'volumen'], 'integer'],
            [['nombre_mesociclo', 'tipo_mesociclo', 'fecha_inicio', 'fecha_final', 'objetivos', 'intensidad'], 'safe'],
            [['porcentaje_resistencia_aerobica', 'porcentaje_resistencia_anaerobica', 'porcentaje_velocidad', 'porcentaje_tecnica', 'porcentaje_agilidad', 'porcentaje_fuerza'], 'number'],
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
        $query = Mesociclo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_mesociclo' => $this->id_mesociclo,
            'macrociclo_id' => $this->macrociclo_id,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
            'volumen' => $this->volumen,
            'porcentaje_resistencia_aerobica' => $this->porcentaje_resistencia_aerobica,
            'porcentaje_resistencia_anaerobica' => $this->porcentaje_resistencia_anaerobica,
            'porcentaje_velocidad' => $this->porcentaje_velocidad,
            'porcentaje_tecnica' => $this->porcentaje_tecnica,
            'porcentaje_agilidad' => $this->porcentaje_agilidad,
            'porcentaje_fuerza' => $this->porcentaje_fuerza,
        ]);

        $query->andFilterWhere(['like', 'nombre_mesociclo', $this->nombre_mesociclo])
            ->andFilterWhere(['like', 'tipo_mesociclo', $this->tipo_mesociclo])
            ->andFilterWhere(['like', 'objetivos', $this->objetivos])
            ->andFilterWhere(['like', 'intensidad', $this->intensidad]);

        return $dataProvider;
    }
}
