<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $this->load->view('home/index');
    }
}
