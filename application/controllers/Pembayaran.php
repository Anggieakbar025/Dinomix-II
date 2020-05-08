<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pembayaran extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_barang');
        }
    
        public function index()
        {
            if ($this->session->userdata('logged_in') == TRUE) {
                $data['konten']='v_checkout';
                $data['kurir'] = $this->m_barang->getKurir();
                $data['pembayaran'] = $this->m_barang->getPembayaran();
                $this->load->view('template', $data);
            } else {
                redirect('login','refresh');
            }
            
        }

        public function insertTransaksi()
        {

            $this->form_validation->set_rules('id_pembeli', 'id_pembeli', 'trim|required');
            $this->form_validation->set_rules('id_kurir', 'id_kurir', 'trim|required');
            $this->form_validation->set_rules('id_pembayaran', 'id_pembayaran', 'trim|required');
            $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
            $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
            
            
            if ($this->form_validation->run() == TRUE) {
                $this->m_barang->tambahTransaksi();
                $this->session->set_flashdata('hijau', 'Pesanan Dibuat');
                redirect('home/history','refresh');
            } else {
                $this->session->set_flashdata('merah', 'Gagal membuat pesanan');
                redirect('home/history','refresh');
            }
            

            
            

            // if($this->db->affected_rows() > 0){
            //     $i = 0;
            //     foreach ($data_cart as $cart) {
            //         $datas = array(
            //             'id_transaksi' => $last_insert_id,
            //             'id_produk' => $data_cart[$i]->id_produk,
            //             'qty'		=> $data_cart[$i]->qty
            //             );

            //         $this->db->insert('detail_transaksi', $datas);

            //         $i++;
            //     }
            // } 
        }
    }
    
    /* End of file Pembayaran.php */
    

?>