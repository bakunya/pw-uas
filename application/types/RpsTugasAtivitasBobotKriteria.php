<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsTugasAtivitasBobotKriteria
{
    public int $id;
    public int $id_rps_tugas_aktivitas;
    public string $bobot;
    public string $kriteria_penilaian;

    public array $blacklists = ['id', 'id_rps_tugas_aktivitas', 'blacklists'];


    public function __construct(array $val = [])
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
