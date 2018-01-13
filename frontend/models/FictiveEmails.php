<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "fictive_emails".
 *
 * @property integer $id
 * @property string $email
 * @property integer $phone
 * @property string $name
 */
class FictiveEmails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fictive_emails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'phone', 'name'], 'required'],
            [['phone'], 'integer'],
            [['email'], 'string', 'max' => 256],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'name' => 'Name',
        ];
    }
}
