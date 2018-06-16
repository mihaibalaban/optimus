<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vouchers".
 *
 * @property integer $id
 * @property string $date
 * @property string $truck
 * @property string $truck_length
 * @property string $route
 * @property string $reference
 * @property string $price
 * @property string $owner
 * @property string $total
 * @property string $baf
 * @property string $voucher
 * @property string $invoice
 * @property string $temporization
 */
class Vouchers extends \yii\db\ActiveRecord
{
    public $completed_voucher;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vouchers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'temporization','completed_voucher', 'owner', 'total','goods','drivers'], 'safe'],
            [['voucher'], 'required'],
            [['truck', 'truck_length', 'route', 'reference', 'price', 'baf', 'voucher', 'invoice'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner' => 'Owner',
            'total' => 'Total',
            'date' => 'Date',
            'truck' => 'Truck',
            'truck_length' => 'Truck Length',
            'route' => 'Route',
            'reference' => 'Reference',
            'price' => 'Price',
            'baf' => 'Baf',
            'voucher' => 'Voucher',
            'invoice' => 'Invoice',
            'temporization' => 'Temporization',
            'completed_voucher' => 'completed_voucher',
            'goods' => 'Goods',
            'drivers' => 'Drivers',
        ];
    }
}
