<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($table, array $filters = [])
    {
        $raw = "SELECT * FROM `" . $table . "`";
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

    public function store($table, $value)
    {
        return $this->db->insert($table, $value);
    }

    public function delete($table, $filters)
    {
        return $this->db->delete($table, $filters);
    }

    public function update($table, $value)
    {
        $this->db->where('id', $value['id']);
        unset($value['id']);
        return $this->db->update($table, $value);
    }
}
