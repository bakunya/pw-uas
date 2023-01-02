<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('hashing')) {
    function hashing(string $plain)
    {
        $options = [
            'cost' => 12
        ];
        return password_hash($plain, PASSWORD_BCRYPT, $options);
    }
}
