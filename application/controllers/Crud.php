<?php
class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('info_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['product'] = $this->info_data->tampil_data()->result();
        $this->load->view('info_tampil', $data);
    }
    function tambah()
    {
        $this->load->view('info_input');
    }
    function tambah_aksi()
    {
        $produk = $this->input->post('produk');
        $hargaBeli = $this->input->post('hargaBeli');
        $hargaJual = $this->input->post('hargaJual');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'produk' => $produk,
            'hargaBeli' => $hargaBeli,
            'hargaJual' => $hargaJual,
            'jumlah' => $jumlah
        );
        $this->info_data->input_data($data, 'product');
        redirect('crud/index');
    }
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->info_data->hapus_data($where, 'product');
        redirect('crud/index');
    }
    function edit($id)
    {
        $where = array('id' => $id);
        $data['product'] = $this->info_data->edit_data($where, 'product')->result();
        $this->load->view('info_edit', $data);
    }
    function update()
    {
        $id = $this->input->post('id');
        $produk = $this->input->post('produk');
        $hargaBeli = $this->input->post('hargaBeli');
        $hargaJual = $this->input->post('hargaJual');
        $jumlah = $this->input->post('jumlah');
        $data = array(
            'produk' => $produk,
            'hargaBeli' => $hargaBeli,
            'hargaJual' => $hargaJual,
            'jumlah' => $jumlah
        );
        $where = array(
            'id' => $id
        );
        $this->info_data->update_data($where, $data, 'product');
        redirect('crud/index');
    }
    function search()
    {
        $this->load->model('SearchModel');
        $keyword = $this->input->get('keyword');
        $data = $this->SearchModel->ambil_data($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data
        );
        $this->load->view('view-search', $data);
    }
}
?>