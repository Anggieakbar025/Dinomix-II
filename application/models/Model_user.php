<?php
class Model_user extends CI_Model{

    public function cek_login()
    {
        $datapembeli = $this->db->get_where('pembeli', array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));
        
        if($datapembeli->num_rows() != null){
            if($datapembeli->num_rows() > 0)
            {
                $data = array(
                    'logged_in' => TRUE,
                    'id_pembeli' => $datapembeli->result()[0]->id_pembeli,
                    'username' => $datapembeli->result()[0]->username,
                    'password' => $datapembeli->result()[0]->password,
                    'nama' => $datapembeli->result()[0]->nama,
                    'email' => $datapembeli->result()[0]->email,
                    'telepon' => $datapembeli->result()[0]->telepon,
                    'alamat' => $datapembeli->result()[0]->alamat,
                );
                
                $this->session->set_userdata( $data );
                redirect('home','refresh');
            } else{
                
                $this->session->set_flashdata('notif', 'Data Salah');
                redirect('login','refresh');
            }
        } else {
            $this->session->set_flashdata('notif', 'Data Salah');
                redirect('login','refresh');
        }
    }

    public function insertUser()
    {
        //insert data
        $data= array(
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'alamat' => $this->input->post('alamat'),
        'telepon' => $this->input->post('telepon'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
    );
        //insert data to the database
        $this->db->insert('pembeli', $data);
        
    }
}