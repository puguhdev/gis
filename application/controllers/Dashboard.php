<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->vars['title']   = 'Dashboard';
        $this->vars['content'] = 'backend/dashboard';
        $this->load->view('tmp/index', $this->vars);
    }

}

/* End of file Dashboard.php */
