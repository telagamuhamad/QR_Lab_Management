<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dataaset extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_tambahdataaset');
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
			// $data['total_berkas']= $this->m_dashboard->hitungberkas();
			// $data['total_bulan']= $this->m_dashboard->hitungbulansebelumnya();
			// $data['total_hotel']= $this->m_dashboard->hitunghotel();
			// $data['total_pengguna']= $this->m_dashboard->hitungpengguna();
			// $data['konten'] = "admin/isidashboard";
			$data['aset'] = $this->m_tambahdataaset->tampil_data()->result();
			$this->load->view('admin/v_dataaset', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

}
