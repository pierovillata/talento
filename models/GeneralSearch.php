<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\General;

/**
 * GeneralSearch represents the model behind the search form about `app\models\General`.
 */
class GeneralSearch extends General
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_general', 'cedula_atleta', 'year'], 'integer'],
            [['tipo_prueba', 'observaciones_generales'], 'safe'],
            [['velocidad', 'lanzamiento_balon', 'carrera_distancia', 'salto_vertical', 'salto_horizontal', 'agilidad', 'flexibilidad'], 'number'],
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
        $query = General::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_general' => $this->id_general,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'velocidad' => $this->velocidad,
            'lanzamiento_balon' => $this->lanzamiento_balon,
            'carrera_distancia' => $this->carrera_distancia,
            'salto_vertical' => $this->salto_vertical,
            'salto_horizontal' => $this->salto_horizontal,
            'agilidad' => $this->agilidad,
            'flexibilidad' => $this->flexibilidad,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'observaciones_generales', $this->observaciones_generales]);

        return $dataProvider;
    }
}
