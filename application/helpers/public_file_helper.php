<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('public_file')) {
    function public_file(string $path)
    {
        // return $_SERVER['REQUEST_SCHEME'] . '://' . base_url('public/' . $path);
        return base_url('public/' . $path);
    }
}
