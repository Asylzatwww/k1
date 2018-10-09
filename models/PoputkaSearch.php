<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Poputka;

/**
 * PoputkaSearch represents the model behind the search form about `app\models\Poputka`.
 */
class PoputkaSearch extends Poputka
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'seats', 'timeToLive', 'fromLocation', 'toLocation'], 'integer'],
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
        $query = Poputka::find();

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
            'seats' => $this->seats,
            'timeToLive' => $this->timeToLive,
            'fromLocation' => $this->fromLocation,
            'toLocation' => $this->toLocation,
        ]);

        return $dataProvider;
    }
}
