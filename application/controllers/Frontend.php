<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function beranda()
    {
        $data['title'] = 'Desa Mayong';
        $data['daftar_wisata'] = $this->M_user->get_wisata();
        $data['informasi'] = $this->M_user->get_informasi();
        $this->load->view('template_frontend/beranda', $data);
    }
    public function detail_pariwisata()
    {
        $data['title'] = 'Desa Mayong';
        $this->load->view('template_frontend/detail_pariwisata');
    }
}
