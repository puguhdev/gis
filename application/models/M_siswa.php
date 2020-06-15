<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class M_siswa extends CI_Model {

     /**
     * Memanggil Tabel Dari Database
     */
    private $_table = 'tbl_siswa';

    /**
     * Menampilkan Semua Data Siswa
     */
    public function get_siswa()
    {
        $this->db->select('*');
        $this->db->join('Master_kelas', 'tbl_siswa.kelas_id = master_kelas.id_kelas');
        $this->db->join('master_jurusan', 'master_kelas.jurusan_id = master_jurusan.id_jurusan');
        return $this->db->get($this->_table)->result_array();
    }

    /**
     * Menampilkan data siswa berdasarkan URI
     */
    public function view_siswa()
    {
        $id = $this->uri->segment(4);
        $this->db->select('*');
        $this->db->join('Master_kelas', 'tbl_siswa.kelas_id = master_kelas.id_kelas');
        $this->db->join('master_jurusan', 'master_kelas.jurusan_id = master_jurusan.id_jurusan');
        return $this->db->get_where($this->_table, ['url_siswa' => $id])->row_array();
    }

    /**
     * menghapus Data Peserta Didik
     */
    public function del_siswa()
    {
        $id = $this->uri->segment(4);
        return $this->db->delete($this->_table, ['id_siswa' => $id]);
    }

}

/* End of file M_siswa.php */
