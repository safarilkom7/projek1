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
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'angkatan'], 'integer'],
            [['nim', 'nama_lengkap', 'jenis_kelamin', 'ttl', 'agama', 'alamat', 'email', 'status', 'foto'], 'safe'],
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
        $query->andFilterWhere([
            'id' => $this->id,
            'angkatan' => $this->angkatan,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'ttl', $this->ttl])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
