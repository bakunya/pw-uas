<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
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
        load_types('User', 'Dosen', 'RpsEmail', 'RpsDate', 'RpsEmail', 'RpsPassword');
        
        $this->model_dosen->create_dosen_and_user(
            new Dosen([
                'nik' => 123123123123,
                'name' => 'Miku chan'
            ]), 
            new User([
                'enail' => 'miku@email.com',
                'password' => 'loremipsum',
            ])
        );

        wrapper(
            $this->load,
            'head',
            function() {
                wrapper(
                    $this->load,
                    'container',
                    function() {
                        wrapper(
                            $this->load,
                            'form',
                            function() {
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
        $this->load->view('welcome_message');
    }
}
