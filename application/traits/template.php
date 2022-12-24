<?php

namespace application\traits;

defined('BASEPATH') or exit('No direct script access allowed');

trait template
{
    public function load(array $files): void
    {
        foreach ($files as $f) {
            $this->load->view($f);
        }
    }
}
