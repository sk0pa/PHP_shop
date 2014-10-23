<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BucketRowModel;

/**
 * BucketRowModelCrud represents the model behind the search form about `app\models\BucketRowModel`.
 */
class BucketRowModelCrud extends BucketRowModel
{
    public function rules()
    {
        return [
            [['Id_Bucket_Part', 'Id_Bucket', 'Id_Goods', 'Number'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = BucketRowModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Bucket_Part' => $this->Id_Bucket_Part,
            'Id_Bucket' => $this->Id_Bucket,
            'Id_Goods' => $this->Id_Goods,
            'Number' => $this->Number,
        ]);

        return $dataProvider;
    }
}
