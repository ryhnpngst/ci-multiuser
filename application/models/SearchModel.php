<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SearchModel extends CI_Model
{

    public function ambil_data($keyword = null)
    {
        $this->db->select('*');
        $this->db->from('product');
        if (!empty($keyword)) {
            $this->db->like('produk', $keyword);
        }
        return $this->db->get()->result_array();
    }
}
