<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog extends CI_Controller {
    
        public function index()
        {
           $data['konten']='v_blog'; 
           $this->load->view('template', $data);
            
        }
    
    }
    
    /* End of file About.php */
    
?>