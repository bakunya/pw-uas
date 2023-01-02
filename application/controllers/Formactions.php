<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');


class Formactions extends CI_Controller
{
    use forController;

    public UIForm $uiform;

    private function autofill(string $ref, array $data, array $blacklists)
    {
        foreach ($blacklists as $k => $v) {
            if (str_contains($v, 'id_')) {
                $data[$v] = $ref;
            }
        }

        return $data;
    }

    public function __construct()
    {
        parent::__construct();
        load_types('RpsEmail', 'RpsPassword', 'RpsDate');
        $this->load->model('ModelData', 'model_data');
    }

    public function store()
    {
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('post');
        $this->should_auth();
        $ref = @$_GET['ref'];
        $types = @$_GET['types'];

        load_types($types);
        $instance = new $types($_POST);
        $obj = unset_blacklists($instance);
        $obj = $this->autofill($ref, $obj, $instance->blacklists);
        $obj = $obj;

        $this->model_data->store(to_snakecase($types), $obj);

        $this->session->set_flashdata('message', 'Data Berhasil dibuat');
        return redirect(base_url('dashboard'));
    }

    public function update()
    {
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('post');
        $this->should_auth();
        $types = @$_GET['types'];
        $curr_id = @$_GET['curr_id'];
        $_POST['id'] = $curr_id;

        load_types($types);

        $instance = new $types($_POST);
        $obj = unset_blacklists($instance);

        $this->model_data->update(to_snakecase($types), $obj, $curr_id);

        $this->session->set_flashdata('message', 'Data Berhasil dibuat');
        return redirect(base_url('dashboard'));
    }

    public function store_rps()
    {
        load_types('Rps');
        $obj = new Rps($_POST);
        $this->model_data->store('rps', unset_blacklists($obj));
        $this->session->set_flashdata('message', 'RPS Berhasil dibuat');
        return redirect(base_url('dashboard'));
    }

    public function update_rps()
    {
        load_types('Rps');
        $_POST['id'] = $_GET['curr_id'];
        $obj = new Rps($_POST);
        $this->model_data->update('rps', unset_blacklists($obj));
        $this->session->set_flashdata('message', 'RPS Berhasil diupdate');
        return redirect(base_url('dashboard'));
    }
}
