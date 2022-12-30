<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User
{
    public int $id;
    public RpsEmail $email;
    public RpsPassword $password;

    public array $blacklists = ['id', 'blacklists'];

    public function __construct(array $val = [])
    {
        foreach ($val as $k => $d) {
            switch ($k) {
                case 'email':
                    $this->{$k} = new RpsEmail($d);
                    break;
                case 'password':
                    $this->{$k} = new RpsPassword($d);
                    break;
                default:
                    $this->{$k} = $d;
                    break;
            }
        }
        return $this;
    }
}
