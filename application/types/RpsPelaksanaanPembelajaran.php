<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsPelaksanaanPembelajaran
{
    public int $id;
    public int $id_rps;
    public int $waktu;
    public int $minggu;
    public string $kemampuan_akhir;
    public string $indikator;
    public string $penilaian;
    public string $topik;
    public string $strategi_belajar;

    private array $blacklists = ['id', 'id_rps', 'blacklists'];


    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
