<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahrencana extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_tambahrencana');
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
			$data['aset'] = $this->m_tambahrencana->tampil_data()->result();			
			$this->load->view('admin/v_tambahrencana', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

	public function tambah(){
		$kode_belajar = $this->input->post('kode_belajar');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$lokasi = $this->input->post('lokasi');
		$judul = $this->input->post('judul');
						
 
		$data = array(
			'kode_belajar' => $kode_belajar,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'lokasi' => $lokasi,
			'judul' => $judul
			);
		$this->db->insert('perencanaanprak',$data);
		redirect('c_perencanaan/index');		
	}

	function hapus($kode_belajar){
		$where = array('kode_belajar' => $kode_belajar);
		$this->db->delete('perencanaanprak', $where);
		redirect('c_perencanaan/index');
	}	

		function edit($kode_belajar){
				$data['admin'] = $this->db->get_where('admin',['namaloginadm'=>$this->session->userdata('namaloginadm')])->row_array();	
		$where = array('kode_belajar' => $kode_belajar);
		$data['aset'] = $this->m_tambahrencana->edit_data( $where, 'perencanaanprak')->result();
		$this->load->view('admin/v_editrencana',$data);
	}

	function update(){
		$kode_belajar = $this->input->post('kode_belajar');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$lokasi = $this->input->post('lokasi');
		$judul = $this->input->post('judul');
 
	$data = array(
			'kode_belajar' => $kode_belajar,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'lokasi' => $lokasi,
			'judul' => $judul
		);
 
	$where = array(
		'kode_belajar' => $kode_belajar
	);
 
	$this->m_tambahrencana->update_data($where,$data, 'perencanaanprak');
	redirect('c_perencanaan/index');
}
}
