<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AntropometricaPercentil;

/**
 * AntropometricaPercentilSearch represents the model behind the search form about `app\models\AntropometricaPercentil`.
 */
class AntropometricaPercentilSearch extends AntropometricaPercentil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prueba_antropometrica', 'cedula_atleta', 'year'], 'integer'],
            [['tipo_prueba'], 'safe'],
            [['peso', 'altura_pie', 'altura_sentado', 'abertura', 'porcentaje_grasa'], 'number'],
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
        $query = AntropometricaPercentil::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_prueba_antropometrica' => $this->id_prueba_antropometrica,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'peso' => $this->peso,
            'altura_pie' => $this->altura_pie,
            'altura_sentado' => $this->altura_sentado,
            'abertura' => $this->abertura,
            'porcentaje_grasa' => $this->porcentaje_grasa,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba]);

        return $dataProvider;
    }
}
