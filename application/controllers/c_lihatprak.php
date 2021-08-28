<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_lihatprak extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_lihatprak");
        $this->load->helper('url');

         if (!$this->session->userdata('user_login')) 
        {
            redirect('c_login');
        }
       
    }
	public function index($kode_belajar)
	{
		
		$data['user'] = $this->db->get_where('user',['namalogin_usr'=>$this->session->userdata('user_login')])->row_array();
		

		if ($data['user']) 
		{
			// $data['total_berkas']= $this->m_dashboard->hitungberkas();
			// $data['total_bulan']= $this->m_dashboard->hitungbulansebelumnya();
			// $data['total_hotel']= $this->m_dashboard->hitunghotel();
			// $data['total_pengguna']= $this->m_dashboard->hitungpengguna();
			// $data['konten'] = "admin/isidashboard";
			$where = array('kode_belajar' => $kode_belajar);
			$this->m_tambahdataaset->hapus_data($where,'perencanaanprak');
  			$this->load->view('user/v_lihatprak', $data);
		}	

		else 
		{
			redirect('c_block');
		}	

	}
}
