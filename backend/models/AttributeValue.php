<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "attribute_value".
 *
 * @property integer $id
 * @property integer $id_attribute
 * @property string $value
 * @property string $from
 * @property string $to
 *
 * @property Attributes $idAttribute
 */
class AttributeValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attribute_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_attribute'], 'integer'],
            [['value', 'from', 'to'], 'required'],
            [['from', 'to'], 'safe'],
            [['value'], 'string', 'max' => 32],
            [['id_attribute'], 'exist', 'skipOnError' => true, 'targetClass' => Attributes::className(), 'targetAttribute' => ['id_attribute' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_attribute' => 'Id Attribute',
            'value' => 'Value',
            'from' => 'From',
            'to' => 'To',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAttribute()
    {
        return $this->hasOne(Attributes::className(), ['id' => 'id_attribute']);
    }
}
