<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_location','location');
    }

    public function index()
    {
        $this->vars['lokasi']=$this->location->get_lokasi();
        $this->vars['title']   = 'Lokasi';
        $this->vars['content'] = 'maps/read_location';
        $this->load->view('tmp/index', $this->vars);
    }

    public function view_maps()
    {
        $this->vars['q']=$this->location->semua()->result();
        $this->vars['title']   = 'Lihat Lokasi';
        $this->vars['content'] = 'maps/lihat_lokasi';
        $this->load->view('tmp/index', $this->vars);
    }

    public function created()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->vars['title']   = 'Lokasi';
            $this->vars['content'] = 'maps/create_location';
            $this->load->view('tmp/index', $this->vars);
        } else {
            $this->_save_location();
        }
    }

    private function _save_location()
    {
        if(isset($_POST['submit'])){
            $nama       = $this->input->post('nama', TRUE);
            $alamat     = $this->input->post('alamat', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
            $lat        = $this->input->post('lat', TRUE);
            $lng        = $this->input->post('lng', TRUE);

            $data = [
                'nama_lokasi'   => $nama,
                'alamat'        => $alamat,
                'keterangan'    => $keterangan,
                'lat'           => $lat,
                'long'          => $lng,
            ];
        }
        $this->location->insert_data($data);
        redirect('maps/locations','refresh');
        
    }

}

/* End of file Locations.php */
