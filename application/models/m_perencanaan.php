<?php 
 
class m_perencanaan extends CI_Model{
  function tampil_data(){
    return $this->db->get('perencanaanprak');
  }

  function tampil_detail($kode_belajar){
    $query = $this->db->query("SELECT * FROM perencanaanprak WHERE kode_belajar = '$kode_belajar'");
    return $query->result();
  }  

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }  
}
