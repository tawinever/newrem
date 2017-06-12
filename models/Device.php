<?php

namespace app\models;

use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "device".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property integer $status
 * @property integer $poryadok
 * @property integer $is_root
 * @property string $add_children
 *
 * @property Device $parent
 * @property Device[] $devices
 * @property Price[] $prices
 */
class Device extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'status','poryadok','is_root'], 'integer'],
            [['title','poryadok'], 'required'],
            [['title','add_children'], 'string', 'max' => 100],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Device::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
            'status' => 'Status',
            'poryadok' => 'Poryadok',
            'is_root' => 'Is Root',
            'add_children' => 'Additional Children',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Device::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevices()
    {
        return $this->hasMany(Device::className(), ['parent_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['device_id' => 'id']);
    }

    public static function getStatuses()
    {
        return [self::STATUS_ACTIVE => 'Active', self::STATUS_INACTIVE => 'Inactive'];
    }

    public function getStatus(){
        $ans = $this->getStatuses();
        return $ans[$this->status];
    }
    
    public static function getDeviceMap()
    {
        return ArrayHelper::map(Device::find()->all(),'id','title');
    }

    public static function getDeviceDictionary()
    {
        return ArrayHelper::index(Device::find()->all(),'id');
    }

    public static function getDeviceDictionaryAsArray()
    {
        return ArrayHelper::index(Device::find()->asArray()->all(),'id');
    }

}
