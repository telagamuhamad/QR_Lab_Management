<?php

class c_login extends CI_Controller{
    public function __construct() {

        parent::__construct();
        $this->load->library('form_validation','session');
    }
    public function index()
    {
        // Cek apakah sudah login atau belum?
        if ($this->session->userdata('namaloginadm')) {
            redirect('c_homeadmin');
        }
        if ($this->session->userdata('user_login')) {
            redirect('c_homeuser');
        }
            
    
        
        $this->form_validation->set_rules('username','username','trim|required', [

            'required' => 'Username Tidak Boleh Kosong!'
        ]);
        $this->form_validation->set_rules('password','password','trim|required', [

            'required' => 'Password Tidak Boleh Kosong!'
        ]);

        if ($this->form_validation->run() == false){
        $this->load->view('v_login');
    } else{
        $this-> _login();
    }

}
    
    private function _login() 
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['namaloginadm' => $username])->row_array();
        $user = $this->db->get_where('user', ['namalogin_usr' => $username])->row_array();


        if ($admin)
        {
            if ($password == $admin['password_adm'])
            {
                $data = [
                    'namaloginadm' => $admin['namaloginadm'],

                    
                ];
                $this->session->set_userdata($data);
                redirect('c_homeadmin');
            }
            else 
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
            redirect(base_url());
            }
        }

     else if ($user)
        {
            if ($password == $user['password_usr'])
            {
                $data = [
                    'user_login' => $user['namalogin_usr']
                ];
                $this->session->set_userdata($data);
                redirect('c_homeuser');
            }
            else 
            {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Password Salah! </div>');
            redirect(base_url());
            }
        }

        
        else 
        {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Akun tidak terdaftar! </div>');
            redirect(base_url());
        }
    }

    public function logout () 
    {
        $this->session->unset_userdata('namaloginadm');
        $this->session->unset_userdata('user_login');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert"> Berhasil Keluar! </div>');
            redirect(base_url());
    }

}