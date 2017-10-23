<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "routes".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $route_name
 *
 * @property Countryes $country
 */
class Routes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'routes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'route_name'], 'required'],
            [['country_id'], 'integer'],
            [['route_name'], 'string', 'max' => 64],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Countryes::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'route_name' => 'Route Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countryes::className(), ['id' => 'country_id']);
    }
}
