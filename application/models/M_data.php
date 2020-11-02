<?php
class M_data extends CI_Model
{
    //Funcition wisata Start---------------------------------------------------------------------

    function data_wisata()
    {
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
    public function delete_wisata($key)
    {
        $this->db->where('id_wisata', $key);
        $this->db->delete('daftar_wisata');
    }
    public function save_register_wisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(
            'nama_wisata' => $post['nama_wisata'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'deskripsi' => $post['deskripsi'],
            'harga_tiket' => $post['harga_tiket'],
            'foto' => $_FILES['foto']['name'],

        );
        $this->db->insert('daftar_wisata', $data);
    }
    public function save_update_register_wisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(
            'nama_wisata' => $post['nama_wisata'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'deskripsi' => $post['deskripsi'],
            'harga_tiket' => $post['harga_tiket'],
            'foto' => $_FILES['foto']['name'],

        );
        $this->db->where('md5(id_wisata)', $post['id_wisata']);
        $this->db->update('daftar_wisata', $data);
    }

    public function get_data_wisata_keyword($keyword)
    { //search lokasi

        $this->db->from('daftar_wisata');
        $this->db->like('nama_wisata', $keyword);
        $this->db->or_like('harga_tiket', $keyword);
        return $this->db->get()->result_array();
    }
}
