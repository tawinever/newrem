<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "repair".
 *
 * @property integer $id
 * @property string $title
 * @property integer $status
 * @property integer $place
 *
 * @property Price[] $prices
 */
class Repair extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repair';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title','place'], 'required'],
            [['status','place'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'status' => 'Status',
            'place' => 'Place',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['repair_id' => 'id']);
    }

    public static function getStatuses()
    {
        return [self::STATUS_ACTIVE => 'Active', self::STATUS_INACTIVE => 'Inactive'];
    }

    public function getStatus(){
        $ans = $this->getStatuses();
        return $ans[$this->status];
    }

    public static function getRepairMap()
    {
        return ArrayHelper::map(Repair::find()->all(),'id','title');
    }

    public static function getRepairDictionary()
    {
        return ArrayHelper::index(Repair::find()->all(),'id');
    }
}
