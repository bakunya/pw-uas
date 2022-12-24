<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function query_validasi_email($email)
    {
        return $this->db->query("SELECT * FROM tb_users WHERE email = '" . $email . "' LIMIT 1");
    }

    public function query_validasi_password($email, $password)
    {
        return $this->db->query("SELECT * FROM tb_users WHERE email = '" . $email . "' and password = SHA2('" . $password . "', 224) LIMIT 1 ");
    }
}
