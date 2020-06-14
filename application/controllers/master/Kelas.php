<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class Kelas extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jurusan','jurusan');
        $this->load->model('m_kelas','kelas');
    }

    /**
     * Menampilkan Semua Data Kelas
     */
    public function index()
    {
        $this->vars['jurusan'] = $this->jurusan->get_jurusan();
        $this->vars['kelas']   = $this->kelas->get_kelas();
        $this->vars['title']   = 'Master Kelas';
        $this->vars['content'] = 'master/kelas';
        $this->load->view('tmp/index', $this->vars);
    }

     /**
     * Menyimpan data Kelas
     */
    public function created()
    {
        if(isset($_POST['submit'])){
            $jurusan_id      = $this->input->post('jurusan_id', TRUE);
            $nama_kelas      = $this->input->post('nama_kelas', TRUE);

            $data = [
                'jurusan_id'    => $jurusan_id,
                'nama_kelas'    => $nama_kelas,
                'url_kelas'     => md5($nama_kelas),
                'created_at'    => date('Y-m-d')
            ];
        }
        $notif = $this->kelas->entry_data($data);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    /**
     * Memberbarui data kelas
     */
    public function updated()
    {
        if(isset($_POST['submit'])){
            $id_kelas        = $this->input->post('id_kelas', TRUE);
            $jurusan_id      = $this->input->post('jurusan_id', TRUE);
            $nama_kelas      = $this->input->post('nama_kelas', TRUE);

            $data = [
                'id_kelas'      => $id_kelas,
                'jurusan_id'    => $jurusan_id,
                'nama_kelas'    => $nama_kelas,
                'created_at'    => date('Y-m-d')
            ];
        }
        $notif = $this->kelas->update_data($data, $id_kelas);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Diperbarui.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Diperbarui.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


     /**
     * Menghapus Data Jurusan
     */
    public function deleted()
    {
        $notif = $this->kelas->del_kelas($id_kelas);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Kelas.php */
