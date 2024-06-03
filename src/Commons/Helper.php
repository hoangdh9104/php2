<?php

namespace Hoang9104\Setup\Commons;

class Helper{
    public static function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}