<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahdaftarpengguna extends CI_Controller {
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_daftarpengguna');
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
			// $data['user'] = $this->m_daftarpengguna->tampil_data()->result();
			$this->load->view('admin/v_tambahdaftarpengguna', $data);
		}	

		else 
		{
			redirect('c_block');
		}	
		
	}

	public function tambah(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$namalogin_usr = $this->input->post('namalogin_usr');
		$password_usr = $this->input->post('password_usr');						
		$role = $this->input->post('role');


		$data = array(
			'id_user' => $id_user,
			'nama_user' => $nama_user,
			'namalogin_usr' => $namalogin_usr,
			'password_usr' => $password_usr,
			'role' => $role
		);
		$this->m_daftarpengguna->input_data($data,'user');
		redirect('c_daftarpengguna/index');		
	}

	function hapus($id_user){
		$where = array('id_user' => $id_user);
		$this->m_daftarpengguna->hapus_data($where,'user');
		redirect('c_daftarpengguna/index');
	}

	function edit($id_user){
		$data['admin'] = $this->db->get_where('admin',['namaloginadm'=>$this->session->userdata('namaloginadm')])->row_array();	
		$where = array('id_user' => $id_user);
		$data['user'] = $this->m_daftarpengguna->edit_data($where,'user')->result();
		$this->load->view('admin/v_editdaftarpengguna',$data);
	}

	function update(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$namalogin_usr = $this->input->post('namalogin_usr');
		$password_usr = $this->input->post('password_usr');						
		$role = $this->input->post('role');

		$data = array(
			'id_user' => $id_user,
			'nama_user' => $nama_user,
			'namalogin_usr' => $namalogin_usr,
			'password_usr' => $password_usr,
			'role' => $role
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->m_daftarpengguna->update_data($where,$data,'user');
		redirect('c_daftarpengguna/index');
	}	

}
