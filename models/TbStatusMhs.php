<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_status_mhs".
 *
 * @property int $id
 * @property string $status
 *
 * @property TbMahasiswa[] $tbMahasiswas
 */
class TbStatusMhs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_status_mhs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(TbMahasiswa::className(), ['status' => 'status']);
    }
}
