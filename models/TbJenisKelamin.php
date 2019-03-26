<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_jenis_kelamin".
 *
 * @property int $id
 * @property string $jenis_kelamin
 *
 * @property TbMahasiswa[] $tbMahasiswas
 */
class TbJenisKelamin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_jenis_kelamin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_kelamin'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMahasiswas()
    {
        return $this->hasMany(TbMahasiswa::className(), ['jenis_kelamin' => 'jenis_kelamin']);
    }
}
