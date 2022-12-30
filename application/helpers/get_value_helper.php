<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_value')) {
    function get_value($obj)
    {
        $tmp = [];

        foreach ($obj as $k => $v) {
            if (isset($v?->value) && $v?->value !== null) {
                $tmp[$k] = $v->value;
            } else {
                $tmp[$k] = $v;
            }
        }

        return $tmp;
    }
}
