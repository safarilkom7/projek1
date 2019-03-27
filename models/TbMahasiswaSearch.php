<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMahasiswa;

/**
 * TbMahasiswaSearch represents the model behind the search form of `app\models\TbMahasiswa`.
 */
class TbMahasiswaSearch extends TbMahasiswa
{
    public $globalSearch;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'angkatan'], 'integer'],
            [['nim','globalSearch','nama_lengkap', 'jenis_kelamin', 'ttl', 'agama', 'alamat', 'email', 'status', 'foto'], 'safe'],
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
        $query = TbMahasiswa::find();

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
        $query->OrFilterWhere([
            'id' => $this->globalSearch,
            'angkatan' => $this->globalSearch,
        ]);

        $query->OrFilterWhere(['like', 'nim', $this->globalSearch])
            ->OrFilterWhere(['like', 'nama_lengkap', $this->globalSearch])
            ->OrFilterWhere(['like', 'jenis_kelamin', $this->globalSearch])
            ->OrFilterWhere(['like', 'ttl', $this->globalSearch])
            ->OrFilterWhere(['like', 'agama', $this->globalSearch])
            ->OrFilterWhere(['like', 'alamat', $this->globalSearch])
            ->OrFilterWhere(['like', 'email', $this->globalSearch])
            ->OrFilterWhere(['like', 'status', $this->globalSearch])
            ->OrFilterWhere(['like', 'foto', $this->globalSearch]);

        return $dataProvider;
    }
}
