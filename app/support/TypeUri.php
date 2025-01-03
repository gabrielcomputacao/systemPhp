<?php

namespace app\support;

class TypeUri
{

    public static function get()
    {

        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
