<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('wrapper')) {
    function wrapper($load, string $wrapper_name,  $cb, $wrapper_dependencies = [[], []])
    {
        if (!is_callable($cb, false)) return;
        $load->view('_partials/' . $wrapper_name, $wrapper_dependencies[0] ?? []);
        $cb();
        $load->view('_partials/end' . $wrapper_name, $wrapper_dependencies[1] ?? []);
    }
}
