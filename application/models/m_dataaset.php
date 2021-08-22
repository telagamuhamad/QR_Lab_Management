<?php 
 
class m_dataaset extends CI_Model{
  function tampil_data(){
    return $this->db->get('aset');
  }
}
