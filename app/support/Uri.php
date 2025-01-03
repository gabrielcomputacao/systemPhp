<?php

namespace app\support;

class Uri
{

    public static function staticUri()
    {

        $result = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $result = explode('/system_php/public', $result);
        return $result[1];
    }
}
