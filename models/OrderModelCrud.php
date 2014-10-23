<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderModel;

/**
 * OrderModelCrud represents the model behind the search form about `app\models\OrderModel`.
 */
class OrderModelCrud extends OrderModel
{
    public function rules()
    {
        return [
            [['Id_Order', 'Id_User', 'AllPrice'], 'integer'],
            [['Date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OrderModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Order' => $this->Id_Order,
            'Id_User' => $this->Id_User,
            'Date' => $this->Date,
            'AllPrice' => $this->AllPrice,
        ]);

        return $dataProvider;
    }
}
