<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_location extends CI_Model {

    private $_table = 'lokasi';
    
    function semua(){
        return $this->db->get("lokasi");
    }

    public function get_lokasi(){
        return $this->db->get($this->_table)->result_array();
    }

    function cek($kode){
        $this->db->where("id_lokasi",$kode);
        return $this->db->get("lokasi");
    }
    
    function cekNama($kode){
        $this->db->where("nama_lokasi",$kode);
        return $this->db->get("lokasi");
    }
    
    function update($id,$info){
        $this->db->where("id_lokasi",$id);
        $this->db->update("lokasi",$info);
    }
    
    function insert_data($data){
        $this->db->insert($this->_table,$data);
    }
    
    function hapus($kode){
        $this->db->where("id_lokasi",$kode);
        $this->db->delete("lokasi");
    }

}

/* End of file M_location.php */
