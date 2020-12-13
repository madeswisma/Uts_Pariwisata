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
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('backend/dashboard', $data);
        $this->load->view('template_backend/footer');
    }
    //daftar Wisata-----------------------
    function daftar_wisata()
    {
        $data['title'] = "Daftar Wisata";
        $config['base_url'] = site_url('Backend/data_wisata');
        $data['daftar_wisata'] = $this->M_data->data_wisata();

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('backend/data_wisata', $data);
        $this->load->view('template_backend/footer');
    }
    function register_wisata()
    {
        $data['title'] = "Register Data Wisata";

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('backend/register_data_wisata', $data);
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

    //Daftar Infomasi
    function daftar_informasi()
    {
        $data['title'] = "Daftar Wisata";
        $data['tb_informasi'] = $this->M_data->data_infromasi();

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('backend/data_informasi', $data);
        $this->load->view('template_backend/footer');
    }
    function register_informasi()
    {
        $data['title'] = "Register Data Wisata";

        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('template_backend/topbar', $data);
        $this->load->view('backend/register_informasi', $data);
        $this->load->view('template_backend/footer');
    }
    public function update_informasi($id_informasi)
    {
        $data['title'] = "Update Informasi";
        $this->db->where('md5(id_informasi)', $id_informasi);
        $data['id_informasi'] = $this->db->get('tb_informasi')->row_array();
        $this->load->view('template_backend/header', $data);
        $this->load->view('template_backend/sidebar', $data);
        $this->load->view('Backend/register_informasi', $data);
        $this->load->view('template_backend/footer');
    }
    public function save_infomasi()
    {
        if ($_POST['id_informasi'] != '') {
            $this->M_data->save_update_informasi($_POST);
        } else {
            $this->M_data->save_update_informasi($_POST);
        }
        redirect('Backend/daftar_informasi');
    }
}
