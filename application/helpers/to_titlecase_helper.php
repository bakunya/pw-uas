<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('to_titlecase')) {
    function to_titlecase(string $s)
    {
        return ucwords(preg_replace('/(?<!^)[A-Z]/', ' $0', $s));
    }
}
