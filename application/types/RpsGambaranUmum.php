<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsGambaranUmum
{
    public int $id;
    public int $id_rps;
    public string $body;

    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
