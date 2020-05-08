<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');

    }

    public function index()
    {
        $this->load->view('v_signup'); 
    }

    public function registerUser()
    {
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('telepon','telepon','required');
        $this->form_validation->set_rules('username','username','required|is_unique[pembeli.username]');
        $this->form_validation->set_rules('password','password','required');
        
        if ($this->form_validation->run() == TRUE) 
        {
            //load model to connect to the db
            $this->Model_user->insertUser();
            
            $this->session->set_flashdata('success', 'you are registered');
            redirect('Login');
        } 
        else 
        {
            $this->load->view('v_signup');
            
        }
        
        //harus diisi, gak ada yang sama, tabel.nama kolom
    }

}

        
   

/* End of file Register.php */