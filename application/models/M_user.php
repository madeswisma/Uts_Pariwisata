<?php
class M_user extends CI_Model
{

    function get_wisata()
    {
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
    function get_informasi()
    {
        $data = $this->db->get('tb_informasi')->result_array();
        return $data;
    }
}
