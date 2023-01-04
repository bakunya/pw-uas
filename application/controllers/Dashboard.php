<?php

use application\traits\forController;

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    use forController;

    public function index()
    {
        $this->guess_method('get');
        $this->should_auth();
        
        wrapper(
            $this->load,
            'head',
            function ()
            {
                wrapper(
                    $this->load,
                    'container',
                    function ()
                    {
                        $this->load->view('_partials/navbar');
                    }
                );
            }
        );
    }
}
