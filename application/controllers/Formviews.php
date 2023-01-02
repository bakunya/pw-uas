<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');


class Formviews extends CI_Controller
{
    use forController;

    public UIForm $uiform;

    public function __construct()
    {
        parent::__construct();
        load_types('RpsEmail', 'RpsPassword', 'RpsDate');
        $this->load->model('ModelData', 'model_data');
    }

    public function store()
    {
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('get');
        $this->should_auth();
        $ref = @$_GET['ref'];
        $types = @$_GET['types'];

        load_types($types);

        wrapper(
            $this->load,
            'head',
            function () use ($types, $ref) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($types, $ref) {
                        wrapper(
                            $this->load,
                            'form',
                            function ()  use ($types, $ref) {
                                $this->uiform->set_class(new $types, $ref)->build($this->load);
                            },
                            [
                                [
                                    'action' => base_url('formactions/store?types=' . $types . '&ref=' . $ref),
                                    'title' => 'Buat ' . to_titlecase($types),
                                ]
                            ]
                        );
                    }
                );
            },
            [
                [],
                [
                    'js' => ['pass.js']
                ]
            ]
        );
    }

    public function update()
    {
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('get');
        $this->should_auth();
        $types = @$_GET['types'];
        $curr_id = @$_GET['curr_id'];

        $curr_data = ((array)$this->model_data->get(to_snakecase($types), ['id' => $curr_id])?->row()) ?? null;

        load_types($types);

        wrapper(
            $this->load,
            'head',
            function () use ($types, $curr_data) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($types, $curr_data) {
                        wrapper(
                            $this->load,
                            'form',
                            function ()  use ($types, $curr_data) {
                                $this->uiform->set_class(new $types($curr_data))->build($this->load);
                            },
                            [
                                [
                                    'action' => base_url('formactions/update?types=' . $types . '&curr_id=' . $curr_data['id']),
                                    'title' => 'Buat ' . to_titlecase($types),
                                ]
                            ]
                        );
                    }
                );
            },
            [
                [],
                [
                    'js' => ['pass.js']
                ]
            ]
        );
    }

    public function store_rps()
    {
        $this->session->sess_destroy();
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('get');
        $this->should_auth();

        $dosen = $this->model_data->get('dosen');
        $dosen = $dosen->num_rows() > 0 ? $dosen->result_array() : null;

        load_types('Rps');

        wrapper(
            $this->load,
            'head',
            function () use ($dosen) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($dosen) {
                        wrapper(
                            $this->load,
                            'form',
                            function () use ($dosen) {

                                $this->load->view('_partials/select', [
                                    'name' => 'id_dosen',
                                    'title' => 'Dosen',
                                    'values' => $dosen,
                                    'selected_id' => $this->session->userdata('id_dosen')
                                ]);

                                $this->load->view('_partials/select', [
                                    'name' => 'id_penyusun',
                                    'title' => 'Penyusun',
                                    'values' => $dosen,
                                    'selected_id' => $this->session->userdata('id_dosen')
                                ]);

                                $this->uiform->set_class(new Rps())->build($this->load);
                            },
                            [
                                [
                                    'action' => base_url('formactions/store_rps'),
                                    'title' => 'Buat RPS',
                                ]
                            ]
                        );
                    }
                );
            },
            [
                [],
                [
                    'js' => ['pass.js']
                ]
            ]
        );
    }

    public function update_rps()
    {
        $this->guad_dynamic_creation(@$_POST['types']);
        $this->guess_method('get');
        $this->should_auth();

        $curr_id = @$_GET['curr_id'];

        $curr_rps = ((array)$this->model_data->get('rps', ['id' => $curr_id])?->row()) ?? null;

        $dosen = $this->model_data->get('dosen');
        $dosen = $dosen->num_rows() > 0 ? $dosen->result_array() : null;

        load_types('Rps');

        wrapper(
            $this->load,
            'head',
            function () use ($dosen, $curr_rps) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($dosen, $curr_rps) {
                        wrapper(
                            $this->load,
                            'form',
                            function () use ($dosen, $curr_rps) {

                                $this->load->view('_partials/select', [
                                    'name' => 'id_dosen',
                                    'title' => 'Dosen',
                                    'values' => $dosen,
                                    'selected_id' => $curr_rps['id_dosen']
                                ]);

                                $this->load->view('_partials/select', [
                                    'name' => 'id_penyusun',
                                    'title' => 'Penyusun',
                                    'values' => $dosen,
                                    'selected_id' => $curr_rps['id_penyusun']
                                ]);

                                $this->uiform->set_class(new Rps($curr_rps))->build($this->load);
                            },
                            [
                                [
                                    'action' => base_url('formactions/update_rps?curr_id=' . $curr_rps['id']),
                                    'title' => 'Update RPS',
                                ]
                            ]
                        );
                    }
                );
            },
            [
                [],
                [
                    'js' => ['pass.js']
                ]
            ]
        );
    }
}
