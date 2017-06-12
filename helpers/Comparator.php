<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 10/11/16
 * Time: 2:23 PM
 */

namespace app\helpers;


class Comparator
{

    private static function priceNameCompare($a, $b)
    {
        if ($a->device->category->title == $b->device->category->title) {
            if($a->device->title == $b->device->title) return 0;
            return ($a->device->title > $b->device->title) ? 1 : -1;
        }
        return ($a->device->category->title < $b->device->category->title) ? 1 : -1;
    }
    public static function sortSimplePrice($prices)
    {
        usort($prices, "self::priceNameCompare");
        return $prices;
    }
}