<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Justificativo;

/**
 * JustificativoSearch represents the model behind the search form of `app\models\Justificativo`.
 */
class JustificativoSearch extends Justificativo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idJustificativo'], 'integer'],
            [['fechaFalta', 'motivoInasistencia', 'actividadJusticar', 'nombre_academico', 'asignatura', 'estado', 'fechaEnvio'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Justificativo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idJustificativo' => $this->idJustificativo,
            'fechaFalta' => $this->fechaFalta,
            'fechaEnvio' => $this->fechaEnvio,
        ]);

        $query->andFilterWhere(['like', 'motivoInasistencia', $this->motivoInasistencia])
            ->andFilterWhere(['like', 'actividadJusticar', $this->actividadJusticar])
            ->andFilterWhere(['like', 'nombre_academico', $this->nombre_academico])
            ->andFilterWhere(['like', 'asignatura', $this->asignatura])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
