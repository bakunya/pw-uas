<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('unset_blacklists')) {
    function unset_blacklists($obj)
    {
        $obj = (array)$obj;
        unset($obj['blacklists']);
        return $obj;
    }
}
