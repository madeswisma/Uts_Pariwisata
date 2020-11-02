<?php
class M_user extends CI_Model
{

    function get_wisata()
    {
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
}
