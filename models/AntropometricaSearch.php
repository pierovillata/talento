<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Antropometrica;

/**
 * AntropometricaSearch represents the model behind the search form about `app\models\Antropometrica`.
 */
class AntropometricaSearch extends Antropometrica
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_antropometrica', 'cedula_atleta', 'year'], 'integer'],
            [['tipo_prueba', 'somatotipo', 'observaciones_antropometricas'], 'safe'],
            [['peso', 'altura_pie', 'altura_sentado', 'indice_cormico', 'diametro_cintura', 'porcentaje_grasa', 'peso_magro', 'circunferencias_cadera', 'circunferencia_brazo', 'circunferencia_pectoral', 'abertura', 'longitud_pie', 'longitud_mano'], 'number'],
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
        $query = Antropometrica::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_antropometrica' => $this->id_antropometrica,
            'cedula_atleta' => $this->cedula_atleta,
            'year' => $this->year,
            'peso' => $this->peso,
            'altura_pie' => $this->altura_pie,
            'altura_sentado' => $this->altura_sentado,
            'indice_cormico' => $this->indice_cormico,
            'diametro_cintura' => $this->diametro_cintura,
            'porcentaje_grasa' => $this->porcentaje_grasa,
            'peso_magro' => $this->peso_magro,
            'circunferencias_cadera' => $this->circunferencias_cadera,
            'circunferencia_brazo' => $this->circunferencia_brazo,
            'circunferencia_pectoral' => $this->circunferencia_pectoral,
            'abertura' => $this->abertura,
            'longitud_pie' => $this->longitud_pie,
            'longitud_mano' => $this->longitud_mano,
        ]);

        $query->andFilterWhere(['like', 'tipo_prueba', $this->tipo_prueba])
            ->andFilterWhere(['like', 'somatotipo', $this->somatotipo])
            ->andFilterWhere(['like', 'observaciones_antropometricas', $this->observaciones_antropometricas]);

        return $dataProvider;
    }
}
