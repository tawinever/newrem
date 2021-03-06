<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 3/27/17
 * Time: 11:35 AM
 */

namespace app\components\parents;


use app\models\Swd;
use kartik\base\Widget;
use yii\base\UserException;
use yii\helpers\ArrayHelper;

class PageWidget extends Widget
{
    public $page;
    public $simpleData;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(!is_null($this->page))
            $this->simpleData = ArrayHelper::map($this->getSimpleData(),'key','value');
    }

    /**
     * @return string
     *  Here we modify namespace into format in BD
     */
    public function getNameSpace(){
        return '\\'.get_class($this);
    }

    /**
     * @return bool
     * @throws UserException
     */
    public function validateData(){
        if(get_class($this->page) !== 'app\\models\\Page')
            throw new UserException('Page Argument for widget ' . $this->getNameSpace(). ' is not Page object');
        else return true;
    }

    public function getSimpleData(){
        if($this->validateData())
        {
            //trying to get simple widget data
            $swd = Swd::find()->where(['widget_namespace' => $this->getNameSpace(), 'page_id' => $this->page->id])->all();


            //Making rollback if there is empty to get for older versions
            //like going to parent parent parent page ...
            $parentPage = null;
            if(!is_null($this->page->parent_id)) $parentPage = $this->page->parent;
            while(count($swd) == 0){
                if(!is_null($parentPage)) {
                    $swd = Swd::find()->where(['widget_namespace' => $this->getNameSpace(), 'page_id' => $parentPage->id])->all();
                    if(!is_null($parentPage->parent_id)) $parentPage = $parentPage->parent;
                    else $parentPage = null;
                }
                else
                    break;
            }
            return $swd;
        }
    }

}