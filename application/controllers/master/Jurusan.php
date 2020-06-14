<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class Jurusan extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jurusan','jurusan');
    }

    /**
     * Menampilkan semua data jurusan
     */
    public function index()
    {
        $this->vars['jurusan'] = $this->jurusan->get_jurusan();
        $this->vars['title']   = 'Master Jurusan';
        $this->vars['content'] = 'master/jurusan';
        $this->load->view('tmp/index', $this->vars);
    }

    /**
     * Menyimpan data jurusan
     */
    public function created()
    {
        if(isset($_POST['submit'])){
            $nama       = $this->input->post('nama_jurusan', TRUE);
            $title      = $this->input->post('title_jurusan', TRUE);

            $data = [
                'nama_jurusan'  => $nama,
                'title_jurusan' => $title,
                'url_jurusan'   => md5($nama),
                'created_at'    => date('Y-m-d')
            ];
        }
        $notif = $this->jurusan->entry_data($data);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Memperbarui Data Jurusan
     */
    public function updated()
    {
        if(isset($_POST['submit'])){
            $id_jurusan = $this->input->post('id_jurusan', TRUE);
            $nama       = $this->input->post('nama_jurusan', TRUE);
            $title      = $this->input->post('title_jurusan', TRUE);

            $data = [
                'id_jurusan'    => $id_jurusan,
                'nama_jurusan'  => $nama,
                'title_jurusan' => $title,
                'created_at'    => date('Y-m-d')
            ];
        }
        $notif = $this->jurusan->update_data($data, $id_jurusan);
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
        $notif = $this->jurusan->del_jurusan($id_jurusan);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Jurusan.php */
