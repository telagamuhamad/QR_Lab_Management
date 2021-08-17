<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dataaset extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_dataaset');
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
			$this->load->view('admin/v_dataaset', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

	public function tambah(){
		$kode_aset = $this->input->post('kode_aset');
		$foto_aset = $this->input->post('foto_aset');
		$spesifikasi = $this->input->post('spesifikasi');
		$klasifikasi = $this->input->post('klasifikasi');
		$lokasi_aset = $this->input->post('lokasi_aset');						
		$nama_aset = $this->input->post('nama_aset');
						
 
		$data = array(
			'kode_aset' => $kode_aset,
			'foto_aset' => $foto_aset,
			'spesifikasi' => $spesifikasi,
			'klasifikasi' => $klasifikasi,
			'lokasi_aset' => $lokasi_aset,
			'nama_aset' => $nama_aset
			);
		$this->m_dataaset->input_data($data,'aset');
		redirect('c_dataaset/index');		
	}
}
