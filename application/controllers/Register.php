<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    use forController;

    public UIForm $uiform;
    public ModelUser $model_user;
    public ModelDosen $model_dosen;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelDosen', 'model_dosen');
        $this->load->model('ModelUser', 'model_user');
    }

    public function index()
    {
        $this->guess_method('get');

        load_types('User', 'Dosen', 'RpsEmail', 'RpsDate', 'RpsEmail', 'RpsPassword');

        wrapper(
            $this->load,
            'head',
            function () {
                wrapper(
                    $this->load,
                    'container',
                    function () {
                        wrapper(
                            $this->load,
                            'form',
                            function () {
                                $this->uiform->set_class(new Dosen())->build($this->load);
                                $this->uiform->set_class(new User())->build($this->load);
                            },
                            [
                                [
                                    'action' => 'register/post',
                                    'title' => 'Daftar Dosen'
                                ]
                            ]
                        );
                        $this->load->view('_partials/register_footer_form');
                    },
                );
            },
            [
                [],
                ['js' => ['pass.js']]
            ]
        );
    }

    public function post()
    {
        $this->guess_method('post');
        load_types('User', 'Dosen', 'RpsEmail', 'RpsDate', 'RpsEmail', 'RpsPassword');

        $user = new User($_POST);
        $dosen = new Dosen($_POST);

        $user->password->value = hashing($user->password->value);

        try {
            $this->model_dosen->create_dosen_and_user($dosen, $user);
            $this->session->set_flashdata('message', 'Berhasil mendaftar');
            return redirect(base_url('login'));
        } catch (\Throwable $th) {
            return show_error('Something went wrong', 500, 'Something went wrong');
        }
    }
}
