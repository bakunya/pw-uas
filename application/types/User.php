<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User
{
    public int $id;
    public int $email;
    public string $password;

    public array $blacklists = ['id', 'blacklists'];

    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
