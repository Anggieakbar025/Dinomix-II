<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class penjual extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjual_model');
    }

    public function index()
    {
        $data['header'] = 'Dashboard';
        $data['judul'] = 'Dashboard';
        $data['penjual'] = $this->Penjual_model->getPenjual();
        $data['konten'] = 'penjual/v_home';
        $this->load->view('template_penjual', $data);
    }

    public function transaksi()
    {
        $data['header'] = 'Transaksi';
        $data['judul'] = 'Transaksi';
        $data['konten'] = 'penjual/v_transaksi';
        $this->load->view('template_penjual', $data);
    }
    public function barang()
    {
        $data['header'] = 'Barang';
        $data['barang'] = $this->Penjual_model->getBarang();
        $data['kategori'] = $this->Penjual_model->getKategori();
        $data['judul'] = 'Barang';
        $data['konten'] = 'penjual/v_barang';
        $this->load->view('template_penjual', $data);
    }

    public function addBarang()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('stok', 'stok', 'trim|required');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
        $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->Penjual_model->tambahBarang();
            $this->session->set_flashdata('tambah', 'Berhasil Tambah Barang');
            redirect('barang','refresh');
        } else {
            $this->session->set_flashdata('tambah', 'Gagal Tambah Barang');
            redirect('barang','refresh');
        }
        
    }

}

/* End of file penjual.php */
