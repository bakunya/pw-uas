<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('snakecase_to_titlecase')) {
    function snakecase_to_titlecase(string $s)
    {
        return ucwords(str_replace('_', ' ', $s));
    }
}
