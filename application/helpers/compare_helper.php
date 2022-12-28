<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('compare')) {
    function hash_verify(string $plain, string $hashed)
    {
        return password_verify($plain, $hashed);
    }
}
