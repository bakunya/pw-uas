<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsIdentitas
{
    public int $id;
    public int $id_rps;
    public string $semester;
    public string $bobot_sks;
    public string $detail_penilaian;


    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
