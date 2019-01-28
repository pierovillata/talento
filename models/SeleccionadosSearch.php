<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seleccionados;

/**
 * SeleccionadosSearch represents the model behind the search form about `app\models\Seleccionados`.
 */
class SeleccionadosSearch extends Seleccionados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'year', 'puntuacion'], 'integer'],
            [['tipo_prueba', 'seleccionado', 'recomendacion'], 'safe'],
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
        $query = Seleccionados::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'puntuacion' => $this->puntuacion,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'seleccionado', $this->seleccionado])
            ->andFilterWhere(['like', 'recomendacion', $this->recomendacion]);

        return $dataProvider;
    }
}
