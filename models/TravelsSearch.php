<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Travels;

/**
 * TravelsSearch represents the model behind the search form of `app\models\Travels`.
 */
class TravelsSearch extends Travels
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'reyting', 'star', 'summa', 'count'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'day_uz', 'day_ru', 'day_en', 'img'], 'safe'],
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
        $query = Travels::find();

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
            'reyting' => $this->reyting,
            'star' => $this->star,
            'summa' => $this->summa,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'day_uz', $this->day_uz])
            ->andFilterWhere(['like', 'day_ru', $this->day_ru])
            ->andFilterWhere(['like', 'day_en', $this->day_en])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
