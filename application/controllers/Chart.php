<?php
class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('diagram');
    }

    public function index()
    {
        $data['graph'] = $this->diagram->graph();
        $this->load->view('view_chart', $data);
    }
}
?>