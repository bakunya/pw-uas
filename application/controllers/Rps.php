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
        
        $rps = $this->model_data->get('rps', ['id' => $id])->result_array();
        $rps_prasyarat = $this->model_data->get('rps_prasyarat', ['id_rps' => $id])->result_array();
        $rps_identitas = $this->model_data->get('rps_identitas', ['id_rps' => $id])->result_array();
        $rps_referensi = $this->model_data->get('rps_referensi', ['id_rps' => $id])->result_array();
        $rps_gambaran_umum = $this->model_data->get('rps_gambaran_umum', ['id_rps' => $id])->result_array();
        $rps_unit_pembelajaran = $this->model_data->get('rps_unit_pembelajaran', ['id_rps' => $id])->result_array();
        $rps_capaian_pembelajaran = $this->model_data->get('rps_capaian_pembelajaran', ['id_rps' => $id])->result_array();
        $rps_pelaksanaan_pembelajaran = $this->model_data->get('rps_pelaksanaan_pembelajaran', ['id_rps' => $id]);

        $rps_tugas_aktivitas = $this->model_data->get('rps_tugas_aktivitas', ['id_rps' => $id])->result_array();
    }
}
