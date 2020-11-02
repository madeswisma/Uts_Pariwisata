<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

    public function beranda()
    {
        $data['title'] = 'Desa Mayong';
        $this->load->view('template_frontend/beranda', $data);
    }
}
