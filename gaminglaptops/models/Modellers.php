<?php

namespace vendor\mmyildizs\gaminglaptops\models;

use Yii;

/**
 * This is the model class for table "modellers".
 *
 * @property int $id
 * @property string $MarkaAdi
 * @property string $ModelAdi
 * @property string $GPU
 * @property string $CPU
 * @property int $RAM_GB
 * @property int $SSD_GB
 * @property int $Fiyat_TL
 */
class Modellers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modellers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'MarkaAdi', 'ModelAdi', 'GPU', 'CPU', 'RAM_GB', 'SSD_GB', 'Fiyat_TL'], 'required'],
            [['id', 'RAM_GB', 'SSD_GB', 'Fiyat_TL'], 'integer'],
            [['MarkaAdi'], 'string', 'max' => 15],
            [['ModelAdi', 'GPU', 'CPU'], 'string', 'max' => 20],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'MarkaAdi' => 'Marka Adi',
            'ModelAdi' => 'Model Adi',
            'GPU' => 'Gpu',
            'CPU' => 'Cpu',
            'RAM_GB' => 'Ram Gb',
            'SSD_GB' => 'Ssd Gb',
            'Fiyat_TL' => 'Fiyat Tl',
        ];
    }
}
