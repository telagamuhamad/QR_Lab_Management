<?php 
 
class m_pelaksprak extends CI_Model{
  function tampil_data(){
    return $this->db->get('pelaks_prak');
  }
}
