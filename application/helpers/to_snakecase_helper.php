<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('to_snakecase')) {
    function to_snakecase(string $s)
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $s));
    }
}
