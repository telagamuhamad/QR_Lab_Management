<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_laporanpelaksanaan extends CI_Controller {

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

    $this->load->library('mypdf');
    $data['hasil'] = $this->m_pelaksprak->distribusi();
    $this->mypdf->generate('user/v_laporanpelaksanaan', $data, 'laporan-mahasiswa', 'A4', 'landscape');
    
  }

  public function cetak(){

    
      
  }


}