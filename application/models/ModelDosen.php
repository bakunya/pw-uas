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
        
        $this->db->trans_start();
        die(json_encode($user));
        $this->db->insert('user', $user);

        $id_user = $this->db->insert_id();

        $this->db->insert('dosen', new Dosen([
            ...$dosen,
            'id_user' => $id_user,
        ]));

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }


        die();
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
