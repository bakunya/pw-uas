<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsPassword
{
    public string $value;
    public string $type;

    public function __construct($value)
    {
        $this->value = $value;
        $this->type = "password";
    }
}
