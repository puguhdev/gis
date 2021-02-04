<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kecamatan','kec');
	}

	public function index()
	{
		$this->vars['kecamatan']    = $this->kec->get_kecamatan();
		$this->vars['title']   = 'Data Kecamatan';
        $this->vars['content'] = 'maps/kecamatan';
        $this->load->view('tmp/index', $this->vars);
	}

	public function created()
	{
		if(isset($_POST['submit'])){
			$kecamatan 	= $this->input->post('nama_kecamatan', TRUE);
			$lat 		= $this->input->post('latitude', TRUE);
			$long 		= $this->input->post('longitude', TRUE);

			$data = [
				'nama_kecamatan'	=> $kecamatan,
				'latitude'			=> $lat,
				'longitude'			=> $long
			];
		}
		$this->kec->entry_data($data);
        redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Kecamatan.php */
/* Location: ./application/controllers/maps/Kecamatan.php */