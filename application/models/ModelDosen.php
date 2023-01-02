<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDosen extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_dosen_and_user(Dosen $dosen, User $user)
    {
        $dosen = unset_blacklists($dosen);
        $user = unset_blacklists($user);

        $this->db->query("begin;");
        $this->db->query("INSERT INTO user (`email`, `password`) VALUES ('" . $user['email'] . "', '" . $user['password'] . "');");
        $this->db->query("INSERT INTO dosen (`id_user`, `nik`, `nama`) VALUES ((select LAST_INSERT_ID()), '" . $dosen['nik'] . "', '" . $dosen['nama'] . "');");
        $this->db->query("commit;");
    }

    public function query_validasi_email($email)
    {
        return $this->db->query("SELECT * FROM tb_users WHERE email = '" . $email . "' LIMIT 1");
    }

    public function query_validasi_password($email, $password)
    {
        return $this->db->query("SELECT * FROM tb_users WHERE email = '" . $email . "' and password = SHA2('" . $password . "', 224) LIMIT 1 ");
    }
}
