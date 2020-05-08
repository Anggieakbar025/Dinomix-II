<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Shop extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_barang');
        
        }
    
        public function index()
        {
            $data['konten']='v_shop';
            $data['barang']=$this->m_barang->getbarang();
            $this->load->view('template',$data);
            
        }
    
    }
    
    /* End of file Sho[p].php */
    

?>