<?php

namespace application\traits;

defined('BASEPATH') or exit('No direct script access allowed');

trait forController
{
    public function guard_dynamic_creation($types)
    {
        if (strtolower($types ?? '') === 'dosen' || strtolower($types ?? '') === 'user' || strtolower($types ?? '') === 'rps') return show_error('Unauthorize for this actions', 403);
        return true;
    }

    public function guess_method($should_be)
    {
        if ($this->input->method() !== $should_be) return show_error('Method not allowed', 405, 'Method not allowed');
        return true;
    }

    public function guard_empty($v)
    {
        if (empty($v)) return show_error("Page not found.", 404, 'Not found.');
        return true;
    }

    public function should_guess()
    {
        if (!empty($this->session->userdata('id')) && !empty($this->session->userdata('email'))) return redirect('dashboard');
    }

    public function should_auth()
    {
        if (empty($this->session->userdata('id')) && empty($this->session->userdata('email'))) return redirect('login');
    }
}
