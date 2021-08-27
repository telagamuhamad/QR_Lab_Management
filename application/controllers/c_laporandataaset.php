<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_laporandataaset extends CI_Controller {

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
	public function index(){
		$this->load->view('user/v_laporandataaset');
	}

	function cetak(){
	$data['aset'] = $this->m_tambahdataaset->tampil_data()->result();

    $this->load->library('Pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan.pdf";
    $this->pdf->load_view('user/v_laporan', $data);
	}

}
