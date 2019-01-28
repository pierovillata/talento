<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Medica;

/**
 * MedicaSearch represents the model behind the search form about `app\models\Medica`.
 */
class MedicaSearch extends Medica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_medica', 'cedula_atleta', 'year', 'frecuencia_cardiaca_reposo', 'frecuencia_cardiaca_maxima'], 'integer'],
            [['tipo_prueba', 'reflejos', 'estado_general'], 'safe'],
            [['hemoglobina', 'vcm', 'globulos_rojos', 'globulos_blancos', 'glucosa', 'urea', 'creatinina', 'colesterol', 'hdl', 'ldl', 'trigliceridos', 'porcentaje_fibras_blancas', 'porcentaje_fibras_rojas'], 'number'],
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
        $query = Medica::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_medica' => $this->id_medica,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'hemoglobina' => $this->hemoglobina,
            'vcm' => $this->vcm,
            'globulos_rojos' => $this->globulos_rojos,
            'globulos_blancos' => $this->globulos_blancos,
            'glucosa' => $this->glucosa,
            'urea' => $this->urea,
            'creatinina' => $this->creatinina,
            'colesterol' => $this->colesterol,
            'hdl' => $this->hdl,
            'ldl' => $this->ldl,
            'trigliceridos' => $this->trigliceridos,
            'frecuencia_cardiaca_reposo' => $this->frecuencia_cardiaca_reposo,
            'frecuencia_cardiaca_maxima' => $this->frecuencia_cardiaca_maxima,
            'porcentaje_fibras_blancas' => $this->porcentaje_fibras_blancas,
            'porcentaje_fibras_rojas' => $this->porcentaje_fibras_rojas,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'reflejos', $this->reflejos])
            ->andFilterWhere(['like', 'estado_general', $this->estado_general]);

        return $dataProvider;
    }
}
