<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsUnitPembelajaran
{
    public int $id;
    public int $id_rps;
    public string $kemampuan_akhir;
    public string $indikator;
    public string $bahan_kajian;
    public string $metode_pembelajaran;
    public string $waktu;
    public string $metode_penilaian;
    public string $bahan_ajar;

    public array $blacklists = ['id', 'id_rps', 'blacklists'];


    public function __construct(array $val = [])
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
