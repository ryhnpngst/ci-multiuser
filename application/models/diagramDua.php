<?php
class DiagramDua extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function graph()
    {
        $data = $this->db->query("SELECT * from product2");
        return $data->result();
    }
}

?>