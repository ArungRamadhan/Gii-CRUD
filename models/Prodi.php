<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property string $prodi
 * @property string $keterangan
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prodi', 'keterangan'], 'required'],
            [['prodi'], 'string', 'max' => 20],
            [['keterangan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'prodi' => 'Prodi',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_prodi' => 'id_prodi']);
    }
}
