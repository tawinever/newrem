<?php

namespace app\models;


/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property integer $device_id
 * @property integer $repair_id
 * @property integer $price
 * @property string $info
 * @property integer $status
 *
 * @property Device $device
 * @property Repair $repair
 */
class Price extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_id', 'repair_id', 'price', 'info'], 'required'],
            [['device_id', 'repair_id', 'price', 'status'], 'integer'],
            [['info'], 'string', 'max' => 255],
            [['device_id'], 'exist', 'skipOnError' => true, 'targetClass' => Device::className(), 'targetAttribute' => ['device_id' => 'id']],
            [['repair_id'], 'exist', 'skipOnError' => true, 'targetClass' => Repair::className(), 'targetAttribute' => ['repair_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'device_id' => 'Device Title',
            'repair_id' => 'Repair Title',
            'price' => 'Price',
            'info' => 'Info',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevice()
    {
        return $this->hasOne(Device::className(), ['id' => 'device_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRepair()
    {
        return $this->hasOne(Repair::className(), ['id' => 'repair_id']);
    }

    public static function getStatuses()
    {
        return [self::STATUS_ACTIVE => 'Active', self::STATUS_INACTIVE => 'Inactive'];
    }

    public function getStatus(){
        $ans = $this->getStatuses();
        return $ans[$this->status];
    }
}
