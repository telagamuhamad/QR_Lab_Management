<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_daftarpengguna extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_daftarpengguna');
		$this->load->helper('url');

        //  if (!$this->session->userdata('namaloginadm')) 
        // {
        //     redirect('c_login');
        // }
       
    }
	public function index()
	{
		
		$data['admin'] = $this->db->get_where('admin',['namaloginadm'=>$this->session->userdata('namaloginadm')])->row_array();
		

		if ($data['admin']) 
		{
			$data['user'] = $this->m_daftarpengguna->tampil_data()->result();
			$this->load->view('admin/v_daftarpengguna', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}
}	