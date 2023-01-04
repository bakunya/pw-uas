<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_types_level_one')) {
    function get_types_level_one()
    {
        return [
            'RpsPrasyarat',
            'RpsCapaianPembelajaran',
            'RpsReferensi',
            'RpsGambaranUmum',
            'RpsTugasAktivitas',
            'RpsIdentitas',
            'RpsUnitPembelajaran',
            'RpsPelaksanaanPembelajaran',
        ];
    }
}
