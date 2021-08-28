<?php 
 
class m_pelaksprak extends CI_Model{
  function tampil_data(){
    return $this->db->get('perencanaanprak');
  }

  function tampil_detail($kode_belajar){
    $query = $this->db->query("SELECT * FROM perencanaanprak WHERE kode_belajar = '$kode_belajar'");
    return $query->result();
  }

  function distribusi(){
    $this->db->order_by('kode_aset', 'ASC');
    return $this->db->from('aset')
      ->join('pelaks_prak', 'pelaks_prak.kode=aset.kode_aset', 'left')
      ->get()
      ->result();    
  }

   function kembali(){
    $this->db->order_by('kode_aset', 'ASC');
    return $this->db->from('aset')
      ->join('pelaks_prak', 'pelaks_prak.kode=aset.kode_aset', 'left')
      ->get()
      ->result();    
  } 

  function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

}
