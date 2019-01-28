<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sesion;

/**
 * SesionSearch represents the model behind the search form about `app\models\Sesion`.
 */
class SesionSearch extends Sesion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sesion', 'microciclo_id', 'tiempo_duracion'], 'integer'],
            [['nombre', 'hora', 'fecha', 'intensidad_media', 'objetivos_sesion'], 'safe'],
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
        $query = Sesion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_sesion' => $this->id_sesion,
            'microciclo_id' => $this->microciclo_id,
            'hora' => $this->hora,
            'fecha' => $this->fecha,
            'tiempo_duracion' => $this->tiempo_duracion,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'intensidad_media', $this->intensidad_media])
            ->andFilterWhere(['like', 'objetivos_sesion', $this->objetivos_sesion]);

        return $dataProvider;
    }
}
