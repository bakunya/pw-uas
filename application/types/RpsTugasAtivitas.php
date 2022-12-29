<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsTugasAktivitas
{
    public int $id;
    public int $id_rps;
    public string $tugas_aktivitas;
    public string $kemampuan_akhir;
    public string $waktu;

    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
