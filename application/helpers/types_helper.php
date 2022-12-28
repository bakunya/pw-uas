<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('types')) {
    function load_types(...$files)
    {
        foreach ($files as $file) {
            require_once FCPATH . 'application/types/' . $file . '.php';
        }
    }
}
