<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GeneralPercentil;

/**
 * GeneralPercentilSearch represents the model behind the search form about `app\models\GeneralPercentil`.
 */
class GeneralPercentilSearch extends GeneralPercentil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prueba_general', 'cedula_atleta', 'year'], 'integer'],
            [['tipo_prueba'], 'safe'],
            [['velocidad', 'lanzamiento_balon', 'carrera_distancia', 'salto_horizontal', 'salto_vertical', 'agilidad', 'flexibilidad'], 'number'],
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
        $query = GeneralPercentil::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_prueba_general' => $this->id_prueba_general,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'velocidad' => $this->velocidad,
            'lanzamiento_balon' => $this->lanzamiento_balon,
            'carrera_distancia' => $this->carrera_distancia,
            'salto_horizontal' => $this->salto_horizontal,
            'salto_vertical' => $this->salto_vertical,
            'agilidad' => $this->agilidad,
            'flexibilidad' => $this->flexibilidad,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba]);

        return $dataProvider;
    }
}
