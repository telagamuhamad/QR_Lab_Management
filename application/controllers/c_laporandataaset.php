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

  
  public function index()
  {

    $this->load->library('mypdf');
    $data['aset'] = $this->m_tambahdataaset->tampil_data()->result();
    $this->mypdf->generate('user/v_laporan', $data, 'laporan-mahasiswa', 'A4', 'landscape');
    
  }

  public function cetak(){

    
      
  }


}