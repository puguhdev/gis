<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends Admin_Controller {

	public function index()
	{
		$this->vars['title']   = 'Peta';
        $this->vars['content'] = 'maps/peta';
        $this->load->view('tmp/index', $this->vars);
	}

}

/* End of file Peta.php */
/* Location: ./application/controllers/maps/Peta.php */