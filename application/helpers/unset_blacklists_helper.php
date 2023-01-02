<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('unset_blacklists')) {
    function unset_blacklists($obj)
    {
        $tmp = (array)$obj;
        unset($tmp['blacklists']);
        $tmp = get_value($tmp);
        return $tmp;
    }
}
