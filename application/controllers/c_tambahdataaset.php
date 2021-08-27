<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahdataaset extends CI_Controller {
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
			$this->load->view('admin/v_tambahdataaset', $data);
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
		$jumlah_aset = $this->input->post('jumlah_aset');
		$lokasi_aset = $this->input->post('lokasi_aset');
		$status = $this->input->post('status');						
		$nama_aset = $this->input->post('nama_aset');
						
 
		$data = array(
			'kode_aset' => $kode_aset,
			'foto_aset' => $foto_aset,
			'spesifikasi' => $spesifikasi,
			'klasifikasi' => $klasifikasi,
			'jumlah_aset' => $jumlah_aset,
			'lokasi_aset' => $lokasi_aset,
			'status' => $status,
			'nama_aset' => $nama_aset
			);
		$this->m_tambahdataaset->input_data($data,'aset');
		redirect('c_dataaset/index');		
	}

	function hapus($kode_aset){
		$where = array('kode_aset' => $kode_aset);
		$this->m_tambahdataaset->hapus_data($where,'aset');
		redirect('c_dataaset/index');
	}	

		function edit($kode_aset){
				$data['admin'] = $this->db->get_where('admin',['namaloginadm'=>$this->session->userdata('namaloginadm')])->row_array();	
		$where = array('kode_aset' => $kode_aset);
		$data['aset'] = $this->m_tambahdataaset->edit_data($where,'aset')->result();
		$this->load->view('admin/v_editdataaset',$data);
	}

	function update(){
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
 
	$where = array(
		'kode_aset' => $kode_aset
	);
 
	$this->m_tambahdataaset->update_data($where,$data,'aset');
	redirect('c_dataaset/index');
}
}
