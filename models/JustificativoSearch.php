<?php

namespace app\models;
use Yii;
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
            [['id'], 'integer'],
            [['Estado', 'FechaEnvio', 'FechaFaltaStart', 'FechaFaltaEnd', 'ActivdadJustificar', 'Motivo', 'rut'], 'safe'],
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
        $query = Justificativo::find()->where(['rut'=> Yii::$app->user->identity->rut]);

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
            'id' => $this->id,
            //'FechaEnvio' => $this->FechaEnvio,
            //'FechaFaltaStart' => $this->FechaFaltaStart,
            //'FechaFaltaEnd' => $this->FechaFaltaEnd,
        ]);


        $query->andFilterWhere(['like', 'Estado', $this->Estado])
            ->andFilterWhere(['like', 'ActivdadJustificar', $this->ActivdadJustificar])
            ->andFilterWhere(['like', 'FechaFaltaStart',$this->FechaFaltaStart])
            ->andFilterWhere(['like', 'FechaFaltaEnd', $this->FechaFaltaEnd])
            ->andFilterWhere(['like', 'FechaEnvio', $this->FechaEnvio]);

        return $dataProvider;
    }

    
   
}
