<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "swd".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $widget_namespace
 * @property string $key
 * @property string $value
 *
 * @property Page $page
 */
class Swd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'swd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'widget_namespace', 'key', 'value'], 'required'],
            [['page_id'], 'integer'],
            [['value'], 'string'],
            [['widget_namespace', 'key'], 'string', 'max' => 100],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'widget_namespace' => 'Widget Namespace',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }
}
