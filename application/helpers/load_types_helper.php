<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('load_types')) {
    function load_types(...$files)
    {
        foreach ($files as $file) {
            try {
                require_once FCPATH . 'application/types/' . $file . '.php';
            } catch (\Throwable $th) {
                show_error('Types not found.', 404);
                die();
                break;
            }
        }
    }
}
