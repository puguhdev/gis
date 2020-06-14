<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class M_kelas extends CI_Model {

    /**
     * Memanggil Tabel Dari Database
     */
    private $_table = 'master_kelas';

    /**
     * Menambah Kelas Baru
     */
    public function entry_data($data)
    {
        return $this->db->insert($this->_table, $data);
    }

     /**
     * Merubah Data Kelas
     */
    public function update_data($data, $id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->update($this->_table, $data);
    }

    /**
     * Menampilkan Semua Data Kelas
     */
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->join('master_jurusan', 'master_kelas.jurusan_id = master_jurusan.id_jurusan');
        return $this->db->get($this->_table)->result_array();
    }

    /**
     * Menghapus Data Kelas
     */
    public function del_kelas()
    {
        $id = $this->uri->segment(4);
        return $this->db->delete($this->_table, ['id_kelas' => $id]);
    }

}

/* End of file M_kelas.php */
