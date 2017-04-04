<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "griditem".
 *
 * @property integer $id
 * @property integer $parent_page_id
 * @property integer $page_id
 * @property string $title
 * @property string $subtitle
 * @property string $info
 * @property integer $order
 * @property integer $type
 * @property integer $color
 * @property string $image
 *
 * @property Page $page
 * @property Page $parentPage
 */
class Griditem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'griditem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_page_id', 'page_id', 'title', 'subtitle', 'info', 'order', 'type', 'color', 'image'], 'required'],
            [['parent_page_id', 'page_id', 'order', 'type', 'color'], 'integer'],
            [['title', 'subtitle', 'info', 'image'], 'string'],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
            [['parent_page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['parent_page_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_page_id' => 'Parent Page ID',
            'page_id' => 'Page ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'info' => 'Info',
            'order' => 'Order',
            'type' => 'Type',
            'color' => 'Color',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'parent_page_id']);
    }
}
