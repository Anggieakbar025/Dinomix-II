<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        
    }
    

    public function index()
    {
        $data['konten']='v_home';
        $data['barang']=$this->m_barang->getbarang();
        $this->load->view('template',$data);
    }
    
    public function history()
    {
        $data['konten']='v_history';
        $data['history']=$this->m_barang->getTransaksi();
        $this->load->view('template',$data);
        
    }

    public function editStatus($id)
     {
         $this->form_validation->set_rules('status', 'status', 'trim|required');
         
         if ($this->form_validation->run() == TRUE) {
             $this->m_barang->updateStatus($id);
             $this->session->set_flashdata('update', 'Berhasil edit data');
             redirect('home/history','refresh');
         } else {
             $this->session->set_flashdata('update', 'Gagal edit data');
             redirect('home/history','refresh');
         }
         
     }

}

/* End of file Home.php */


?>