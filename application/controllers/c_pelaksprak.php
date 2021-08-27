<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dataaset extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_pelaksprak');
		$this->load->helper('url');

        //  if (!$this->session->userdata('namaloginadm')) 
        // {
        //     redirect('c_login');
        // }
       
    }
	public function index()
	{
		
		$data['user'] = $this->db->get_where('admin',['namalogin_usr'=>$this->session->userdata('namalogin_usr')])->row_array();
		

		if ($data['admin']) 
		{
			// $data['total_berkas']= $this->m_dashboard->hitungberkas();
			// $data['total_bulan']= $this->m_dashboard->hitungbulansebelumnya();
			// $data['total_hotel']= $this->m_dashboard->hitunghotel();
			// $data['total_pengguna']= $this->m_dashboard->hitungpengguna();
			// $data['konten'] = "admin/isidashboard";
			$data['pelaks_prak'] = $this->m_pelaksprak->tampil_data()->result();
			$this->load->view('user/v_pelaksprak', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

}
