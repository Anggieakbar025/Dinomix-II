<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username','username','trim|required');
        $this->form_validation->set_rules('password','password','trim|required');

        if($this->form_validation->run() == TRUE){
            $this->model_user->cek_login();
        } else {
            $this->load->view('v_login');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }
}