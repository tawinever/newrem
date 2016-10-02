<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 03.09.2016
 * Time: 8:00
 */

namespace app\models;


use yii\base\Model;

class RemOrder extends Model
{
    const SCENARIO_ID = 'byId';
    const SCENARIO_PHONE = 'byPhone';

    public $idNumber;
    public $phoneNumber;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['idNumber', 'phoneNumber'], 'required'],
            // email has to be a valid email address
            ['idNumber', 'integer'],
            ['phoneNumber', 'string'],
            ['phoneNumber', 'match', 'pattern' => '/^\+7\(\d{3}\)\-\d{3}\-\d{2}\-\d{2}$/'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'idNumber' => 'Номер Заказа',
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_ID => ['idNumber'],
            self::SCENARIO_PHONE => ['phoneNumber'],
        ];
    }
}