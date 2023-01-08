<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');


// $rps_tugas_aktivitas_bobot_kriteria = count($rps_tugas_aktivitas) > 0 ? ;
// $rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian = null;

// if($rps_tugas_aktivitas->num_rows() > 0) {
//     $rps_tugas_aktivitas_bobot_kriteria = $this->model_data->get('rps_tugas_aktivitas_bobot_kriteria', ['id_rps_tugas_aktivitas' => $id]);

//     if($rps_tugas_aktivitas_bobot_kriteria->num_rows() > 0) {
//         $rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian = $this->model_data->get('rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian', ['id_rps_tugas_aktivitas_bobot_kriteria' => $id]);
//     }
// }

class Rps extends CI_Controller
{
    use forController;

    public ModelData $model_data;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelData', 'model_data');
    }

    public function index()
    {
        $this->guess_method('get');
        $this->should_auth();

        $id = @$_GET['curr_id'];
        $this->guard_empty($id);

        $data['rps'] = $this->model_data->get('rps', ['id' => $id])->result_array();
        $data['referensi'] = $this->model_data->get('rps_referensi', ['id_rps' => $id])->result_array();
        $data['identitas'] = $this->model_data->get('rps_identitas', ['id_rps' => $id])->result_array();
        $data['gambaran_umum'] = $this->model_data->get('rps_gambaran_umum', ['id_rps' => $id])->result_array();
        $data['dosen'] = $this->model_data->get('dosen', ['id' => ($data['rps'][0]['id_dosen'] ?? 0)])->result_array();
        $data['rps_tugas_aktivitas'] = $this->model_data->get('rps_tugas_aktivitas', ['id_rps' => $id])->result_array();
        $data['prasyarat_dan_pengetahuan_awal'] = $this->model_data->get('rps_prasyarat', ['id_rps' => $id])->result_array();
        $data['capaian_pembelajaran'] = $this->model_data->get('rps_capaian_pembelajaran', ['id_rps' => $id])->result_array();
        $data['pembelajaran_secara_spesifik'] = $this->model_data->get('rps_unit_pembelajaran', ['id_rps' => $id])->result_array();
        $data['rencana_pelaksanaan_pembelajaran'] = $this->model_data->get('rps_pelaksanaan_pembelajaran', ['id_rps' => $id])->result_array();

        wrapper(
            $this->load,
            'head',
            function () use ($data) {
                wrapper(
                    $this->load,
                    'container',
                    function () use ($data) {
                        $this->load->view('_partials/button_print');
                        $this->load->view('_partials/rps_table_sampul', $data);
                        wrapper(
                            $this->load,
                            'rps_table_main',
                            function () use ($data) {
                                $this->load->view('_partials/rps_table_sub', ['title' => '1. Identitas']);
                                $this->load->view('_partials/rps_table_identitas', $data);
                                $this->load->view('_partials/rps_table_sub', ['title' => '2. Gambaran Umum']);
                                foreach ($data['gambaran_umum'] as $value) {
                                    $this->load->view('_partials/rps_list', ['body' => $value['body'] ?? '.']);
                                }
                                $this->load->view('_partials/rps_table_sub', ['title' => '3. Capaian Pembelajaran']);
                                foreach ($data['capaian_pembelajaran'] as $value) {
                                    $this->load->view('_partials/rps_list', ['body' => $value['body'] ?? '.']);
                                }
                                $this->load->view('_partials/rps_table_sub', ['title' => '4. Prasyarat dan Pengetahuan Awal (Prior Knowledge)']);
                                foreach ($data['prasyarat_dan_pengetahuan_awal'] as $value) {
                                    $this->load->view('_partials/rps_list', ['body' => $value['body'] ?? '.']);
                                }
                                $this->load->view('_partials/rps_table_sub', ['title' => '5. Unit-Unit Pembelajaran secara Spesifik']);
                                $this->load->view('_partials/rps_table_unit_pembelajaran', $data);
                                $this->load->view('_partials/rps_table_sub', ['title' => '6. Tugas/Aktivitas dan Penilaian']);
                                $this->load->view('_partials/rps_table_tugas_aktivitas', $data);
                                $this->load->view('_partials/rps_table_sub', ['title' => '7. Referensi']);
                                foreach ($data['referensi'] as $value) {
                                    $this->load->view('_partials/rps_list', ['body' => $value['body'] ?? '.']);
                                }
                                $this->load->view('_partials/rps_table_sub', ['title' => '8. Rencana Pelaksanaan Pembelajaran']);
                                $this->load->view('_partials/rps_table_pelaksanaan_pembelajaran', $data);
                            }
                        );
                    },
                    [['classname' => 'w-a4-landscape']]
                );
            },
        );
    }
}
