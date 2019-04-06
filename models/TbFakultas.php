<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_fakultas".
 *
 * @property int $id
 * @property string $nama_fakultas
 *
 * @property TbJurusan[] $tbJurusans
 */
class TbFakultas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_fakultas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_fakultas'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbJurusans()
    {
        return $this->hasMany(TbJurusan::className(), ['id_fakultas' => 'id']);
    }
}
