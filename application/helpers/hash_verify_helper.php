<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('hash_verify')) {
    function hash_verify(string $plain, string $hashed)
    {
        return password_verify($plain, $hashed);
    }
}
