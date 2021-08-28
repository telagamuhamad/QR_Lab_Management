<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pelaksprak extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_pelaksprak');
		$this->load->helper('url');
		$this->load->helper('date');

         if (!$this->session->userdata('user_login')) 
        {
            redirect('c_login');
        }
       
    }
	public function index()
	{
		
		$data['user'] = $this->db->get_where('user',['namalogin_usr'=>$this->session->userdata('user_login')])->row_array();
		

		if ($data['user']) 
		{
			// $data['total_berkas']= $this->m_dashboard->hitungberkas();
			// $data['total_bulan']= $this->m_dashboard->hitungbulansebelumnya();
			// $data['total_hotel']= $this->m_dashboard->hitunghotel();
			// $data['total_pengguna']= $this->m_dashboard->hitungpengguna();
			// $data['konten'] = "admin/isidashboard";
			$data['perencanaanprak'] = $this->m_pelaksprak->tampil_data()->result();
			$this->load->view('user/v_pelaksprak', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

	public function detail($kode_belajar){
	$data['user'] = $this->db->get_where('user',['namalogin_usr'=>$this->session->userdata('user_login')])->row_array();		
		$kode_belajar = $this->uri->segment(3);
		$data['perencanaanprak'] = $this->m_pelaksprak->tampil_detail($kode_belajar);
		$this->load->view('user/v_lihatprak', $data);		
	}

	public function distribusi(){
	$data['user'] = $this->db->get_where('user',['namalogin_usr'=>$this->session->userdata('user_login')])->row_array();		
		$data['hasil']=$this->m_pelaksprak->distribusi();
		$this->load->view('user/v_distribusi',$data);
	}

	public function tambah(){
		$format = "%Y-%m-%d %h:%i %A";		
		$kode = $this->input->post('kode');
		$time = mdate($format);				
 
		$data = array(
			'kode' => $kode,
			'tgl_mulai' => $time
			);
		$this->db->insert('pelaks_prak',$data);
		redirect('c_pelaksprak/distribusi');		
	}

	public function kembali(){
				$data['user'] = $this->db->get_where('user',['namalogin_usr'=>$this->session->userdata('namalogin_usr')])->row_array();	
		$data['hasil'] = $this->m_pelaksprak->kembali();
		$this->load->view('user/v_kembali',$data);	
	}	

	public function updatekembali(){
		$format = "%Y-%m-%d %h:%i %A";		
		$kode = $this->input->post('kode');
		$time = mdate($format);
		$where = array('kode' => $kode);						
 
		$data = array(
			'kode' => $kode,
			'tgl_selesai' => $time
			);
	$this->m_pelaksprak->update_data($where,$data, 'pelaks_prak');
	redirect('c_pelaksprak/distribusi');		
	}
}
