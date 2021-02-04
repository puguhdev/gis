<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kecamatan extends CI_Model {

	private $_table = 'tbl_kecamatan';

	public function entry_data($data){
        return $this->db->insert($this->_table, $data);
    }

    public function get_kecamatan(){
    	$this->db->select('*');
    	$this->db->from('tbl_kecamatan');
    	return $this->db->get()->result();
    }


}

/* End of file M_kecamatan.php */
/* Location: ./application/models/M_kecamatan.php */