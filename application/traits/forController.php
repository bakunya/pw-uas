<?php

namespace application\traits;

defined('BASEPATH') or exit('No direct script access allowed');

trait forController
{
    public function guess_method($should_be)
    {
        if ($this->input->method() !== $should_be) return show_error('Method not allowed', 405, 'Method not allowed');
        return true;
    }
}
