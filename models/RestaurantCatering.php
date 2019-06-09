<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_restaurant_catering".
 *
 * @property string $rc_id
 * @property string $rc_name
 * @property string $rc_cuisine
 * @property string $rc_currency
 * @property int $rc_average_cost
 * @property string $rc_telp
 * @property string $rc_address
 * @property string $rc_city
 */
class RestaurantCatering extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_restaurant_catering';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rc_name', 'rc_cuisine', 'rc_currency', 'rc_average_cost', 'rc_telp', 'rc_address', 'rc_city'], 'required'],
            [['rc_average_cost'], 'integer'],
            [['rc_name', 'rc_address'], 'string', 'max' => 50],
            [['rc_cuisine', 'rc_city'], 'string', 'max' => 30],
            [['rc_currency'], 'string', 'max' => 5],
            [['rc_telp'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rc_id' => 'Rc ID',
            'rc_name' => 'Rc Name',
            'rc_cuisine' => 'Rc Cuisine',
            'rc_currency' => 'Rc Currency',
            'rc_average_cost' => 'Rc Average Cost',
            'rc_telp' => 'Rc Telp',
            'rc_address' => 'Rc Address',
            'rc_city' => 'Rc City',
        ];
    }
}
