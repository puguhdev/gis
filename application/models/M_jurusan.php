<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class M_jurusan extends CI_Model {

    /**
     * Memanggil Tabel Dari Database
     */
    private $_table = 'master_jurusan';

    /**
     * Menambah Jurusan Baru
     */
    public function entry_data($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    /**
     * Merubah Data Jurusan
     */
    public function update_data($data, $id_jurusan)
    {
        $this->db->where('id_jurusan', $id_jurusan);
        return $this->db->update($this->_table, $data);
    }

    /**
     * Menampilkan Semua Data Jurusan
     */
    public function get_jurusan()
    {
        return $this->db->get($this->_table)->result_array();
    }

    /**
     * Menghapus Data Jurusan
     */
    public function del_jurusan()
    {
        $id = $this->uri->segment(4);
        return $this->db->delete($this->_table, ['id_jurusan' => $id]);
    }

}

/* End of file M_jurusan.php */
