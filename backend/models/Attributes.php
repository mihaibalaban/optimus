<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "attributes".
 *
 * @property integer $id
 * @property string $attribute_name
 * @property integer $parrent_id
 *
 * @property AttributeValue[] $attributeValues
 * @property Attributes $parrent
 * @property Attributes[] $attributes
 */
class Attributes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attributes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attribute_name'], 'required'],
            [['parrent_id'], 'integer'],
            [['attribute_name'], 'string', 'max' => 32],
            [['parrent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attributes::className(), 'targetAttribute' => ['parrent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attribute_name' => 'Attribute Name',
            'parrent_id' => 'Parrent ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributeValues()
    {
        return $this->hasMany(AttributeValue::className(), ['id_attribute' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParrent()
    {
        return $this->hasOne(Attributes::className(), ['id' => 'parrent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttributess()
    {
        return $this->hasMany(Attributes::className(), ['parrent_id' => 'id']);
    }
}
