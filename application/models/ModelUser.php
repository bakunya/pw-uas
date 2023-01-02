<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_with_dosen(array $filters = [])
    {
        $raw = "SELECT *, dosen.id as id_dosen FROM `user` join dosen on dosen.id_user = user.id";
        $i = 0;

        foreach ($filters as $k => $v) {
            if ($i === 0) {
                $raw = $raw . " WHERE " . $k . " = '" . $v . "'";
            } else {
                $raw = $raw . " AND " . $k . " = '" . $v . "'";
            }
            $i += 1;
        }

        return $this->db->query($raw);
    }
}
