<?php
class ChartDua extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('diagramDua');
    }

    public function index()
    {
        $data['graph'] = $this->diagramDua->graph();
        $this->load->view('view_chartDua', $data);
    }
}
?>