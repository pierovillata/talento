<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Atleta;

/**
 * AtletaSearch represents the model behind the search form about `app\models\Atleta`.
 */
class AtletaSearch extends Atleta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula_atleta', 'curso_id', 'deporte_id', 'cedula_entrenador', 'ranking', 'seleccionado'], 'integer'],
            [['estado', 'nivel', 'escuela_procedencia'], 'safe'],
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
        $query = Atleta::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'cedula_atleta' => $this->cedula_atleta,
            'curso_id' => $this->curso_id,
            'deporte_id' => $this->deporte_id,
            'cedula_entrenador' => $this->cedula_entrenador,
            'ranking' => $this->ranking,
            'seleccionado' => $this->seleccionado,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'nivel', $this->nivel])
            ->andFilterWhere(['like', 'escuela_procedencia', $this->escuela_procedencia]);

        return $dataProvider;
    }
}
