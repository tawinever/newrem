<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property integer $status
 *
 * @property Category $parent
 * @property Category[] $categories
 * @property Device[] $devices
 */
class Category extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'status'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['title'], 'unique'],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent Category',
            'title' => 'Title',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevices()
    {
        return $this->hasMany(Device::className(), ['category_id' => 'id']);
    }

    public static function getParentCategory($key=null, $value=null){
        $ans = ArrayHelper::map(Category::find()->all(),'id','title');
        if($value != null)
            return [$key => $value] + $ans;
        return $ans;
    }

    public static function getStatus(){
        return [1 => 'Active', 0 => 'Inactive'];
    }

    public function getStringParent()
    {
        if(is_null($this->parent))
            return 'No Parent';
        else
            return $this->parent->title;
    }
    
    public function getStringStatus()
    {
        $ans = \app\models\Category::getStatus();
        return $ans[$this->status];
    }
}
