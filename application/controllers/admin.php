<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Admin_model');
    }

    public function index()
    {
        if($_SESSION['kelas'] == 'admin'){
            $data['judul'] = 'Dashboard';
            $data['header'] = 'Dashboard';
            $data['konten'] = 'main/v_dashboard';
        } elseif ($_SESSION['kelas'] == 'penjual') {
            $data['judul'] = 'Dashboard';
            $data['header'] = 'Dashboard';
            $data['konten'] = 'main/v_dashboard';
        } 
        $this->load->view('template', $data);
    }

    public function penjual()
    {
        $data['header'] = 'Penjual';
        $data['judul'] = 'Penjual';
        $data['penjual'] = $this->Admin_model->getPenjual();
        $data['konten'] = 'main/v_penjual';
        $this->load->view('template', $data);
    }

    public function pembeli()
    {
        $data['header'] = 'Pembeli';
        $data['judul'] = 'Pembeli';
        $data['pembeli'] = $this->Admin_model->getPembeli();
        $data['konten'] = 'main/v_pembeli';
        $this->load->view('template', $data);
    }

    public function barang()
    {
        $data['header'] = 'Barang';
        $data['judul'] = 'Barang';
        $data['barang'] = $this->Admin_model->getBarang();
        $data['konten'] = 'main/v_barang';
        $this->load->view('template', $data);
    }

    public function pembayaran()
    {
        $data['header'] = 'Pembayaran';
        $data['judul'] = 'Pembayaran';
        $data['pembayaran'] = $this->Admin_model->getPembayaran();
        $data['konten'] = 'main/v_pembayaran';
        $this->load->view('template', $data);
    }
    
    public function transaksi()
    {
        $data['header'] = 'Transaksi';
        $data['judul'] = 'Transaksi';
        $data['transaksi'] = $this->Admin_model->getTransaksi();
        $data['konten'] = 'main/v_transaksi';
        $this->load->view('template', $data);
        
    }

    public function kurir()
    {
        $data['header'] = 'Kurir';
        $data['judul'] = 'Kurir';
        $data['kurir'] = $this->Admin_model->getKurir();
        $data['konten'] = 'main/v_kurir';
        $this->load->view('template', $data);
    }

    // Function Tambah
    public function addPembeli()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('add', 'Berhasil Tambah Data');
            $this->Admin_model->tambahPembeli();
            
            redirect('admin/pembeli','refresh');
        } else {
            $this->session->set_flashdata('add', 'Gagal Tambah Data');
            
            redirect('admin/pembeli','refresh');
        }
        
    }

    public function addPenjual()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('add', 'Berhasil Tambah Data');
            $this->Admin_model->tambahPenjual();
            
            redirect('admin/penjual','refresh');
        } else {
            $this->session->set_flashdata('add', 'Gagal Tambah Data');
            
            redirect('admin/penjual','refresh');
        }
        
    }


    
    public function editPembeli($id)
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('update', 'Berhasil Edit Data');
            $this->Admin_model->ubahPembeli($id);
            
            redirect('admin/pembeli','refresh');
        } else {
            $this->session->set_flashdata('update', 'Gagal Edit Data');
            
            redirect('admin/pembeli','refresh');
        }
        
    }


    // Function Delete

    public function hapusPembeli($id)
    {
        $this->db->where('id_pembeli', $id);
        $this->db->delete('pembeli');
    }

    public function hapusPenjual($id)
    {
        $this->db->where('id_penjual', $id);
        $this->db->delete('penjual');
        
    }

    
}

/* End of file Admin.php */
