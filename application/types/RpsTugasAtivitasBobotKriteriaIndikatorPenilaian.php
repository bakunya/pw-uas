<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RpsTugasAtivitasBobotKriteriaIndikatorPenilaian
{
    public int $id;
    public int $id_rps_tugas_aktivitas_bobot_kriteria;
    public string $body;
    public string $nilai;


    public function __construct(array $val)
    {
        foreach ($val as $k => $d) {
            $this->{$k} = $d;
        }
        return $this;
    }
}
