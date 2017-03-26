<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wps".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $widget_namespace
 * @property integer $status
 * @property string $position
 *
 * @property Page $page
 */
class Wps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'widget_namespace', 'position'], 'required'],
            [['page_id', 'status'], 'integer'],
            [['widget_namespace', 'position'], 'string', 'max' => 100],
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
            'status' => 'Status',
            'position' => 'Position',
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
