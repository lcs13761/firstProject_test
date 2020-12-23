<?php

namespace config;
class formt
{
    public function str_test($value)
    {
       
        if (!is_string($value)) {
            return false;
        }
        if (preg_match("/[0-9]/", $value)) {
            return false;
        }
        return true;
    }
}