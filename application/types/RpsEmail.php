<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsEmail
{
    public string $value;
    public string $type;

    public function __construct($value)
    {
        $this->value = $value;
        $this->type = "email";
    }
}
