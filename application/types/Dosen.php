<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen
{
    public int $id;
    public int $nik;
    public int $id_user;
    public string $nama;

    public array $blacklists = ['id', 'id_user', 'blacklists'];

    public function __construct(array $val = [])
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
