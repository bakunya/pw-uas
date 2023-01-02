<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');

// var_dump((new ReflectionClass(nepw User([])))->getProperties()[3]->getType()->getName());


class Login extends CI_Controller
{
    use forController;

    public UIForm $uiform;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData', 'model_data');
        $this->load->model('ModelUser', 'model_user');
    }

    public function index()
    {
        $this->guess_method('get');
        $this->should_guess();

        load_types('User', 'RpsEmail', 'RpsPassword');

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
                                $this->uiform->set_class(new User())->build($this->load);
                            },
                            [
                                [
                                    'action' => base_url('login/post'),
                                    'title' => 'Login'
                                ]
                            ]
                        );
                        $this->load->view('_partials/login_footer_form');
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

    public function post()
    {
        $this->should_guess();
        $this->guess_method('post');
        load_types('User', 'RpsPassword', 'RpsEmail');
        $user = new User($_POST);
        $user_db = $this->model_user->get_with_dosen(['email' => $user->email->value]);
        $user_db = $user_db->num_rows() > 0 ? $user_db->row_array() : show_error('Incorrect password or email', 403, 'Login fails.');
        $compare = hash_verify($user->password->value, $user_db['password'] ?? '');
        if (!$compare) return show_error('Incorrect password or email', 403, 'Login fails.');
        $this->session->set_userdata([
            'id' => $user_db['id'],
            'email' => $user_db['email'],
            'id_dosen' => $user_db['id_dosen'],
        ]);
        $this->session->set_flashdata('message', 'Berhasil masuk');
        return redirect('dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect(base_url('login'));
    }
}
