<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_agama".
 *
 * @property int $id
 * @property string $agama
 *
 * @property TbMahasiswa[] $tbMahasiswas
 */
class TbAgama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_agama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agama'], 'required'],
            [['agama'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agama' => 'Agama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(TbMahasiswa::className(), ['agama' => 'agama']);
    }
}
