<?php
/**
 * Created by PhpStorm.
 * User: Rauan
 * Date: 02.09.2016
 * Time: 11:52
 */

namespace app\components\remOnlineApi;


class RemOnlineApi
{
    const API_KEY = 'fb4504d443da452390a1a6cb4946abf9';

    public static function getToken()
    {
        $request = curl_init('https://api.remonline.ru/token/new');

        // send a file
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt(
            $request,
            CURLOPT_POSTFIELDS,
            array(
                'api_key' => self::API_KEY
            ));
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, true);
        // output the response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($request);
        curl_close($request);
        if($result == false)
            return curl_error($request);
        return json_decode($result)->token;
    }

    public static function getOrderById($id){
        $token = self::getToken();
        $request = curl_init('https://api.remonline.ru/order/?token='.$token.'&id_labels[]='.$id);
        // send a file
        curl_setopt($request, CURLOPT_HTTPGET, true);
        curl_setopt($request, CURLOPT_AUTOREFERER, true);
        // output the response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($request);
        if($result == false)
            $result = curl_error($request);
        // close the session
        curl_close($request);
        return json_decode($result);
    }

    public static function getOrderByPhone($phone){
        $token = self::getToken();
        $request = curl_init('https://api.remonline.ru/order/?token='.$token.'&client_phones[]='.$phone);
        // send a file
        curl_setopt($request, CURLOPT_HTTPGET, true);
        curl_setopt($request, CURLOPT_AUTOREFERER, true);
        // output the response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($request);
        if($result == false)
            $result = curl_error($request);
        // close the session
        curl_close($request);
        return json_decode($result);
    }

    /**
     * @param \stdClass $status
     * @return string
     */
    public static function orderStatusDecorator($status){
        if($status->group == 1) {
            return 'в ожидание ремонта';
        }
        if($status->group == 2) {
            return 'в работе';
        }
        if($status->group == 3) {
            return $status->name;
        }
        if($status->group == 4) {
            return 'готов, можете забрать устройство';
        }
        if($status->group == 6) {
            return $status->name;
        }
    }
}

