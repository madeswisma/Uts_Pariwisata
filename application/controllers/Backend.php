<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('Backend/dashboard', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('template_backend/footer', $data);
    }
    //daftar Wisata-----------------------
    function daftar_wisata()
    {
        $data['title'] = "Daftar Wisata";
        $config['base_url'] = site_url('Backend/data_wisata');
        $data['daftar_wisata'] = $this->M_data->data_wisata();

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('backend/data_wisata', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('template_backend/footer');
    }
    function register_wisata()
    {
        $data['title'] = "Register Data Wisata";

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('backend/register_data_wisata', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('template_backend/footer');
    }

    public function update_register_wisata($id_wisata)
    {
        $data['title'] = "Registrasi";
        $this->db->where('md5(id_wisata)', $id_wisata);
        $data['id_wisata'] = $this->db->get('daftar_wisata')->row_array();
        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('Backend/register_data_wisata', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('template_backend/footer');
    }

    public function delete_wisata()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_wisata', $key);
        $query = $this->db->get('daftar_wisata');
        if ($query->num_rows() > 0) {
            $this->M_data->delete_wisata($key);
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">
        <div class="text-center">Data berhasil dihapus !</div>
      </div>'
        );
        redirect('Backend/daftar_wisata');
    }

    public function save_register_wisata()
    {
        if ($_POST['id_wisata'] != '') {
            $this->M_data->save_update_register_wisata($_POST);
        } else {
            $this->M_data->save_register_wisata($_POST);
        }
        redirect('Backend/daftar_wisata');
    }

    public function search_wisata()
    { //search lokasi
        $keyword = $this->input->post('keyword');
        $data['daftar_wisata'] = $this->M_data->get_data_wisata_keyword($keyword);
        $data['dashboard'] = "index";
        $data['title'] = "Data Wisata";

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('backend/data_wisata', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('template_backend/footer');
    }
}
