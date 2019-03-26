<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_angkatan".
 *
 * @property int $id
 * @property int $angkatan
 *
 * @property TbMahasiswa[] $tbMahasiswas
 */
class TbAngkatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_angkatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['angkatan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'angkatan' => 'Angkatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(TbMahasiswa::className(), ['angkatan' => 'angkatan']);
    }
}
