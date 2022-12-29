<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps
{
    public int $id;
    public int $id_dosen;
    public int $id_penyusun;
    public string $matkul;
    public string $kode_matkul;
    public RpsDate $tgl_berlaku;
    public RpsDate $tgl_disusun;

    public array $blacklists = ['id', 'id_dosen', 'id_penyusun', 'blacklists'];

    public function __construct(array $val = [])
    {
        foreach ($val as $k => $d) {
            if ($k === 'tgl_berlaku' || $k === 'tgl_disusun') {
                $this->{$k} = new RpsDate($d);
            } else {
                $this->{$k} = $d;
            }
        }
    }
}
