<?php

namespace vendor\mmyildizs\gaminglaptops\models;

use Yii;

/**
 * This is the model class for table "markalars".
 *
 * @property int $id
 * @property string $markadi
 * @property int|null $modeladedi
 */
class Markalars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'markalars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'markadi'], 'required'],
            [['id', 'modeladedi'], 'integer'],
            [['markadi'], 'string', 'max' => 15],
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
            'markadi' => 'Markadi',
            'modeladedi' => 'Modeladedi',
        ];
    }
    public function getS()
    {
        return $this->hasMany(Modellers::className(), ['modellers.MarkaAdi' => 'markadi']);
    }


}
