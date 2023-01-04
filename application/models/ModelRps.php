<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelRps extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_by_dosen_or_penyusun($id_penyusun_or_dosen)
    {
        $raw = "SELECT * FROM rps WHERE id_penyusun = " . $id_penyusun_or_dosen . " OR id_dosen = " . $id_penyusun_or_dosen;
        return $this->db->query($raw);
    }
}
