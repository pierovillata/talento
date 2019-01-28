<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resultado;

/**
 * ResultadoSearch represents the model behind the search form about `app\models\Resultado`.
 */
class ResultadoSearch extends Resultado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idresultado', 'cedula_atleta', 'idevento', 'posicion'], 'integer'],
            [['resultado'], 'safe'],
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
        $query = Resultado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idresultado' => $this->idresultado,
            'cedula_atleta' => $this->cedula_atleta,
            'idevento' => $this->idevento,
            'posicion' => $this->posicion,
        ]);

        $query->andFilterWhere(['like', 'resultado', $this->resultado]);

        return $dataProvider;
    }
}
