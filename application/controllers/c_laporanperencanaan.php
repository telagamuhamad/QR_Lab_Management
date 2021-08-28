<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_laporanperencanaan extends CI_Controller {

  public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_perencanaan');
		$this->load->helper('url');

        //  if (!$this->session->userdata('namaloginadm')) 
        // {
        //     redirect('c_login');
        // }
       
    }

  
  public function index()
  {

    $this->load->library('mypdf');
    $data['hasil'] = $this->m_perencanaan->tampil_data()->result();
    $this->mypdf->generate('user/v_laporanrencana', $data, 'laporan-mahasiswa', 'A4', 'landscape');
    
  }

  public function cetak(){

    
      
  }


}