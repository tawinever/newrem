<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property string $sender_name
 * @property string $sender_number
 * @property string $info
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status
 */
class Notification extends \yii\db\ActiveRecord
{
    const STATUS_READ = 1;
    const STATUS_NEW = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['sender_name', 'required', 'message' => 'Введите свое имя'],
            ['sender_number', 'required', 'message' => 'Введите ваш номер (мы хотим вам позвонить)'],
            [['info'], 'string'],
            [['status'], 'integer'],
            [['sender_name'], 'string', 'max' => 255],
            ['sender_number', 'string','min' => 16, 'tooShort' => 'Такой номер не существует'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender_name' => 'Sender Name',
            'sender_number' => 'Sender Number',
            'info' => 'Info',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    public static function getStatuses()
    {
        return [self::STATUS_NEW => 'New', self::STATUS_READ => 'Read'];
    }

    public function getStatus(){
        $ans = $this->getStatuses();
        return $ans[$this->status];
    }
}
