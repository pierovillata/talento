<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contenido;

/**
 * ContenidoSearch represents the model behind the search form about `app\models\Contenido`.
 */
class ContenidoSearch extends Contenido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcontenido', 'sesion_id'], 'integer'],
            [['calentamiento', 'parte_principal', 'parte_final', 'observaciones'], 'safe'],
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
        $query = Contenido::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idcontenido' => $this->idcontenido,
            'sesion_id' => $this->sesion_id,
        ]);

        $query->andFilterWhere(['like', 'calentamiento', $this->calentamiento])
            ->andFilterWhere(['like', 'parte_principal', $this->parte_principal])
            ->andFilterWhere(['like', 'parte_final', $this->parte_final])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
