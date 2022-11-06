<?php
class Diagram extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function graph()
    {
        $data = $this->db->query("SELECT * from product");
        return $data->result();
    }
}

?>