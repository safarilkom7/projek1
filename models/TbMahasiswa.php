<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_mahasiswa".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama_lengkap
 * @property string $jenis_kelamin
 * @property string $ttl
 * @property string $agama
 * @property string $alamat
 * @property string $email
 * @property int $angkatan
 * @property string $status
 * @property string $foto
 *
 * @property TbAgama $agama0
 * @property TbAngkatan $angkatan0
 * @property TbJenisKelamin $jenisKelamin
 * @property TbStatusMhs $status0
 */
class TbMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['angkatan'], 'integer'],
            [['nim'], 'string', 'max' => 14],
            [['nama_lengkap', 'email'], 'string', 'max' => 100],
            [['jenis_kelamin'], 'string', 'max' => 20],
            [['ttl'], 'string', 'max' => 50],
            [['agama'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 10],
            [['foto'], 'string', 'max' => 2],
            [['agama'], 'exist', 'skipOnError' => true, 'targetClass' => TbAgama::className(), 'targetAttribute' => ['agama' => 'agama']],
            [['angkatan'], 'exist', 'skipOnError' => true, 'targetClass' => TbAngkatan::className(), 'targetAttribute' => ['angkatan' => 'angkatan']],
            [['jenis_kelamin'], 'exist', 'skipOnError' => true, 'targetClass' => TbJenisKelamin::className(), 'targetAttribute' => ['jenis_kelamin' => 'jenis_kelamin']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => TbStatusMhs::className(), 'targetAttribute' => ['status' => 'status']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama_lengkap' => 'Nama Lengkap',
            'jenis_kelamin' => 'Jenis Kelamin',
            'ttl' => 'Tempat Tanggal Lahir',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'angkatan' => 'Angkatan',
            'status' => 'Status',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgama0()
    {
        return $this->hasOne(TbAgama::className(), ['agama' => 'agama']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAngkatan0()
    {
        return $this->hasOne(TbAngkatan::className(), ['angkatan' => 'angkatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisKelamin()
    {
        return $this->hasOne(TbJenisKelamin::className(), ['jenis_kelamin' => 'jenis_kelamin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(TbStatusMhs::className(), ['status' => 'status']);
    }
}
