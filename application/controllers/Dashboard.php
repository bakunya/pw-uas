<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    use forController;

    public ModelData $model_data;
    public ModelRps $model_rps;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData', 'model_data');
        $this->load->model('ModelRps', 'model_rps');
    }

    public function index()
    {
        $this->guess_method('get');
        $this->should_auth();
        $rps = $this->model_rps->get_by_dosen_or_penyusun($this->session->userdata('id_dosen'))->result_array();

        wrapper(
            $this->load,
            'head',
            function () use ($rps) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($rps) {
                        $this->load->view('_partials/navbar');
                        $this->load->view('_partials/tablerps-less', ['rps' => $rps]);
                    }
                );
            }
        );
    }

    public function update_rps()
    {
        $this->guess_method('get');
        $this->should_auth();

        $curr_id = @$_GET['curr_id'];

        $this->guard_empty($curr_id);

        wrapper(
            $this->load,
            'head',
            function () use ($curr_id) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($curr_id) {
                        $this->load->view('_partials/navbar-update');

                        foreach (get_types_level_one() as $value) {
                            $data = $this->model_data->get(to_snakecase($value), ['id_rps' => $curr_id])->result_array();
                            $this->load->view('_partials/header_section', ['title' => to_titlecase($value), 'types' => $value, 'ref' => $curr_id]);
                            $this->load->view('_partials/table-less', ['data' => $data, 'types' => $value, 'ref' => $curr_id]);
                            $this->load->view('_partials/divider');
                        }
                    }
                );
            }
        );
    }
}
