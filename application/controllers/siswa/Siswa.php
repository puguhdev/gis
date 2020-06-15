<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  SISTEM INFORMAS SEKOLAH TERINTEGRASI (SISTER)
 *  @author         Puguh Sulistyo Pambudi | puguh.wdev@gmail.com | 081265683277
 *  @copyright      (c) 2020
 *  @version        Version 2.0
 *  @link           www.mende.tech
 */

class Siswa extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas','kelas');
        $this->load->model('m_siswa','siswa');
    }

    /**
     * Menampilkan Semua Data Peserta Didik
     */
    public function index()
    {
        $this->vars['siswa']   = $this->siswa->get_siswa();
        $this->vars['kelas']   = $this->kelas->get_kelas();
        $this->vars['title']   = 'Data Peserta Didik';
        $this->vars['content'] = 'siswa/peserta_didik';
        $this->load->view('tmp/index', $this->vars);
    }

    /**
     * Preview Data Peserta Didik
     */
    public function view()
    {
        $this->vars['siswa']   = $this->siswa->view_siswa();
        $this->vars['title']   = 'Data Peserta Didik';
        $this->vars['content'] = 'siswa/view_peserta_didik';
        $this->load->view('tmp/index', $this->vars);
    }

    /**
     * Perbarui Data Peserta Didik
     */
    public function updated()
    {
        $this->vars['siswa']   = $this->siswa->view_siswa();
        $this->vars['title']   = 'Perbarui Data Peserta Didik';
        $this->vars['content'] = 'siswa/update_peserta_didik';
        $this->load->view('tmp/index', $this->vars);
    }

    /**
     * Import Data Siswa Menggunakan Excel
     */
    public function import_excel()
    {
        $kelas_id   = $this->input->post('id_kelas', TRUE);
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] 		= realpath('assets/doc');
        $config['allowed_types'] 	= 'xlsx|xls|csv';
        $config['max_size'] 		= 0;
        $config['encrypt_name'] 	= true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif_false', 'Gagal Import Data'.$this->upload->display_errors());
            //redirect halaman
            redirect($_SERVER['HTTP_REFERER']);

        } else {

            $data_upload = $this->upload->data();

            $excelreader       = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('assets/doc/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true);

            $data = array();
            $login = array();

            $numrow = 1;
            $numrows = 1;
            foreach($sheet as $row){
                if($numrow > 1){
                    array_push($data, array(
                        'kelas_id'                      => $kelas_id,
                        'nama_lengkap'                  => $row['A'],
                        'jenis_kelamin'                 => $row['B'],
                        'nisn'                          => $row['C'],
                        'nik'                           => $row['D'],
                        'tmp_lahir'                     => $row['E'],
                        'tgl_lahir'                     => $row['F'],
                        'regis_akta_lahir'              => $row['G'],
                        'agama'                         => $row['H'],
                        'kwarganegaraan '               => $row['I'],
                        'berkebutuhan_khusus '          => $row['J'],
                        'alamat_jalan  '                => $row['K'],
                        'rt '                           => $row['L'],
                        'rw '                           => $row['M'],
                        'nama_dusun  '                  => $row['N'],
                        'nama_desa '                    => $row['O'],
                        'kecamatan '                    => $row['P'],
                        'kode_pos '                     => $row['Q'],
                        'tempat_tinggal '               => $row['R'],
                        'moda_transportasi '            => $row['S'],
                        'no_kks '                       => $row['T'],
                        'anak_ke '                      => $row['U'],
                        'penerima_pkh '                 => $row['V'],
                        'no_pkh '                       => $row['W'],
                        'usulan_kip '                   => $row['X'],
                        'penerima_kip '                 => $row['Y'],
                        'nomor_kip '                    => $row['Z'],
                        'nama_di_kip '                  => $row['AA'],
                        'kartu_fisik_kip '              => $row['AB'],
                        'alasan_layak_kip '             => $row['AC'],
                        'nama_ayah_kandung '            => $row['AD'],
                        'nik_ayah '                     => $row['AE'],
                        'tahun_lahir_ayah '             => $row['AF'],
                        'pendidikan_ayah '              => $row['AG'],
                        'pekerjaan_ayah '               => $row['AH'],
                        'penghasilan_bulanan_ayah '     => $row['AI'],
                        'ayah_berkebutuhan_khusus '     => $row['AJ'],
                        'nama_ibu_kandung '             => $row['AK'],
                        'nik_ibu '                      => $row['AL'],
                        'tahun_lahir_ibu '              => $row['AM'],
                        'pendidikan_ibu '               => $row['AN'],
                        'pekerjaan_ibu '                => $row['AO'],
                        'penghasilan_bulanan_ibu '      => $row['AP'],
                        'ibu_berkebutuhan_khusus '      => $row['AQ'],
                        'nama_wali '                    => $row['AR'],
                        'nik_wali '                     => $row['AS'],
                        'tahun_lahir_wali '             => $row['AT'],
                        'pendidikan_wali '              => $row['AU'],
                        'pekerjaan_wali '               => $row['AV'],
                        'penghasilan_bulanan_wali '     => $row['AW'],
                        'no_telp_rumah '                => $row['AX'],
                        'no_hp '                        => $row['AY'],
                        'email '                        => $row['AZ'],
                        'jenis_kurikuler '              => $row['BA'],
                        'password '                     => password_hash($row['C'], PASSWORD_DEFAULT),
                        'qrcode_siswa '                 => 'QR'.$row['C'].'.png',
                        'url_siswa '                    => md5($row['A']),
                        'created_at'                    => date('Y-m-d')
                    ));
                    $config['cacheable']	= true;
                    $config['cachedir']		= './assets/';
                    $config['errorlog']		= './assets/';
                    $config['imagedir']		= './assets/qrcode/';
                    $config['quality']		= true;
                    $config['size']			= '1024';
                    $config['black']		= array(224,255,255);
                    $config['white']		= array(70,130,180);
                    $this->ciqrcode->initialize($config);
                    
                    $image_name='QR'.$row['C'].'.png';

                    $params['data'] = $row['C'];
                    $params['level'] = 'H';
                    $params['size'] = 10;
                    $params['savename'] = FCPATH.$config['imagedir'].$image_name;
                    $this->ciqrcode->generate($params);
                   
                }
                $numrow++;
            }
    
            $notif = $this->db->insert_batch('tbl_siswa', $data);

            
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            /**
             * Buat Akun Login Siswa
             */
            
            
            if($notif){
                $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
            }else{
                $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
            }
            redirect($_SERVER['HTTP_REFERER']);

        }
    }

    /**
     * Menghapus data peserta didik
     */
    public function deleted()
    {
        $notif = $this->siswa->del_siswa($id_siswa);
        if($notif){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Dihapus.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Dihapus.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Siswa.php */
